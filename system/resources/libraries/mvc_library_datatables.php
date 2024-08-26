<?php

/*
 * Helper functions for building a DataTables server-side processing SQL query
 *
 * The static functions in this class are just helper functions to help build
 * the SQL used in the DataTables demo server-side processing scripts. These
 * functions obviously do not represent all that can be done with server-side
 * processing, they are intentionally simple to show how it works. More complex
 * server-side processing operations will likely require a custom script.
 *
 * See http://datatables.net/usage/server-side for full details on the server-
 * side processing requirements of DataTables.
 *
 * @license MIT - http://datatables.net/license_mit
 *
 * @modified Titan Systems
 */

class MVC_Library_Datatables
{
    /**
     * Create the data output array for the DataTables rows
     *
     *  @param  array $columns Column information array
     *  @param  array $data    Data from the SQL get
     *  @return array          Formatted data in a row based format
     */
    static function data_output($columns, $data)
    {
        $out = [];

        for ($i = 0, $ien = count($data); $i < $ien; $i++) {
            $row = [];

            for ($j = 0, $jen = count($columns); $j < $jen; $j++) {
                $column = $columns[$j];

                // Is there a formatter?
                if (isset($column["formatter"])) {
                    if (empty($column["db"])) {
                        $row[$column["dt"]] = $column["formatter"]($data[$i]);
                    } else {
                        $row[$column["dt"]] = $column["formatter"](
                            $data[$i][$column["db"]],
                            $data[$i]
                        );
                    }
                } else {
                    if (!empty($column["db"])) {
                        $row[$column["dt"]] = $data[$i][$columns[$j]["db"]];
                    } else {
                        $row[$column["dt"]] = "";
                    }
                }
            }

            $out[] = $row;
        }

        return $out;
    }

    /**
     * Database connection
     *
     * Obtain an PHP PDO connection from a connection details array
     *
     *  @param  array $conn SQL connection details. The array should have
     *    the following properties
     *     * host - host name
     *     * db   - database name
     *     * user - user name
     *     * pass - user password
     *  @return resource PDO connection
     */
    static function db()
    {
        return self::sql_connect([
            "user" => env["dbuser"],
            "pass" => env["dbpass"],
            "db" => env["dbname"],
            "host" => env["dbhost"],
            "port" => env["dbport"],
        ]);
    }

    /**
     * Paging
     *
     * Construct the LIMIT clause for server-side processing SQL query
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array $columns Column information array
     *  @return string SQL limit clause
     */
    static function limit($request, $columns)
    {
        $limit = "";

        if (isset($request["start"]) && $request["length"] != -1) {
            $limit =
                "LIMIT " .
                intval($request["start"]) .
                ", " .
                intval($request["length"]);
        }

        return $limit;
    }

    /**
     * Ordering
     *
     * Construct the ORDER BY clause for server-side processing SQL query
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array $columns Column information array
     *  @return string SQL order by clause
     */
    static function order($request, $columns)
    {
        $order = "";

        if (isset($request["order"]) && count($request["order"])) {
            $orderBy = [];
            $dtColumns = self::pluck($columns, "dt");

            for ($i = 0, $ien = count($request["order"]); $i < $ien; $i++) {
                // Convert the column index into the column data property
                $columnIdx = intval($request["order"][$i]["column"]);
                $requestColumn = $request["columns"][$columnIdx];

                $columnIdx = array_search($requestColumn["data"], $dtColumns);
                $column = $columns[$columnIdx];

                if ($requestColumn["orderable"] == "true") {
                    $dir =
                        $request["order"][$i]["dir"] === "asc" ? "ASC" : "DESC";

                    $orderBy[] = "`" . $column["db"] . "` " . $dir;
                }
            }

            if (count($orderBy)) {
                $order = "ORDER BY " . implode(", ", $orderBy);
            }
        }

        return $order;
    }

    /**
     * Searching / Filtering
     *
     * Construct the WHERE clause for server-side processing SQL query.
     *
     * NOTE this does not match the built-in DataTables filtering which does it
     * word by word on any field. It's possible to do here performance on large
     * databases would be very poor
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array $columns Column information array
     *  @param  array $bindings Array of values for PDO bindings, used in the
     *    sql_exec() function
     *  @return string SQL where clause
     */
    static function filter($request, $columns, &$bindings)
    {
        $globalSearch = [];
        $columnSearch = [];
        $dtColumns = self::pluck($columns, "dt");

        if (isset($request["search"]) && $request["search"]["value"] != "") {
            $str = $request["search"]["value"];

            if (
                mb_strlen($str) >=
                (defined("system_dtminsearch") ? system_dtminsearch : 3)
            ) {
                for (
                    $i = 0, $ien = count($request["columns"]);
                    $i < $ien;
                    $i++
                ) {
                    $requestColumn = $request["columns"][$i];
                    $columnIdx = array_search(
                        $requestColumn["data"],
                        $dtColumns
                    );
                    $column = $columns[$columnIdx];

                    if ($requestColumn["searchable"] == "true") {
                        if (!empty($column["db"])) {
                            $binding = self::bind(
                                $bindings,
                                "%" . $str . "%",
                                PDO::PARAM_STR
                            );
                            $globalSearch[] =
                                "`" . $column["db"] . "` LIKE " . $binding;
                        }
                    }
                }
            }
        }

        // Individual column filtering
        if (isset($request["columns"])) {
            for ($i = 0, $ien = count($request["columns"]); $i < $ien; $i++) {
                $requestColumn = $request["columns"][$i];
                $columnIdx = array_search($requestColumn["data"], $dtColumns);
                $column = $columns[$columnIdx];

                $str = $requestColumn["search"]["value"];

                if ($requestColumn["searchable"] == "true" && $str != "") {
                    if (!empty($column["db"])) {
                        $binding = self::bind(
                            $bindings,
                            "%" . $str . "%",
                            PDO::PARAM_STR
                        );
                        $columnSearch[] =
                            "`" . $column["db"] . "` LIKE " . $binding;
                    }
                }
            }
        }

        // Combine the filters into a single string
        $where = "";

        if (count($globalSearch)) {
            $where = "(" . implode(" OR ", $globalSearch) . ")";
        }

        if (count($columnSearch)) {
            $where =
                $where === ""
                    ? implode(" AND ", $columnSearch)
                    : $where . " AND " . implode(" AND ", $columnSearch);
        }

        if ($where !== "") {
            $where = "WHERE " . $where;
        }

        return $where;
    }

    /**
     * Perform the SQL queries needed for an server-side processing requested,
     * utilising the helper functions of this class, limit(), order() and
     * filter() among others. The returned array is ready to be encoded as JSON
     * in response to an SSP request, or can be modified if needed before
     * sending back to the client.
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array|PDO $conn PDO connection resource or connection parameters array
     *  @param  string $table SQL table to query
     *  @param  array $columns Column information array
     *  @return array          Server-side processing response array
     */
    static function simple($request, $table, $columns)
    {
        $bindings = [];
        $db = self::db();

        // Build the SQL query string from the request
        $limit = self::limit($request, $columns);
        $order = self::order($request, $columns);
        $where = self::filter($request, $columns, $bindings);

        // Main query to actually get the data
        $data = self::sql_exec(
            $db,
            $bindings,
            "SELECT `" .
                implode("`, `", self::pluck($columns, "db")) .
                "`
             FROM `$table`
             $where
             $order
             $limit"
        );

        // Data set length after filtering
        $resFilterLength = self::sql_exec(
            $db,
            $bindings,
            "SELECT COUNT(`id`)
             FROM   `$table`
             $where"
        );
        $recordsFiltered = $resFilterLength[0][0];

        // Total data set length
        $resTotalLength = self::sql_exec(
            $db,
            "SELECT COUNT(`id`)
             FROM   `$table`"
        );
        $recordsTotal = $resTotalLength[0][0];

        /*
         * Output
         */
        return [
            "draw" => isset($request["draw"]) ? intval($request["draw"]) : 0,
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsFiltered),
            "data" => self::data_output($columns, $data),
        ];
    }

    /**
     * The difference between this method and the `simple` one, is that you can
     * apply additional `where` conditions to the SQL queries. These can be in
     * one of two forms:
     *
     * * 'Result condition' - This is applied to the result set, but not the
     *   overall paging information query - i.e. it will not effect the number
     *   of records that a user sees they can have access to. This should be
     *   used when you want apply a filtering condition that the user has sent.
     * * 'All condition' - This is applied to all queries that are made and
     *   reduces the number of records that the user can access. This should be
     *   used in conditions where you don't want the user to ever have access to
     *   particular records (for example, restricting by a login id).
     *
     *  @param  array $request Data sent to server by DataTables
     *  @param  array|PDO $conn PDO connection resource or connection parameters array
     *  @param  string $table SQL table to query
     *  @param  array $columns Column information array
     *  @param  string $whereResult WHERE condition to apply to the result set
     *  @param  string $whereAll WHERE condition to apply to all queries
     *  @return array          Server-side processing response array
     */
    static function complex(
        $request,
        $table,
        $columns,
        $extraColumns = false,
        $whereAll = null,
        $whereResult = null
    ) {
        $bindings = [];
        $db = self::db();
        $localWhereResult = [];
        $localWhereAll = [];
        $whereAllSql = "";

        // Build the SQL query string from the request
        $limit = self::limit($request, $columns);
        $order = self::order($request, $columns);
        $where = self::filter($request, $columns, $bindings);

        $whereResult = self::_flatten($whereResult);
        $whereAll = self::_flatten($whereAll);

        if ($whereResult) {
            $where = $where
                ? $where . " AND " . $whereResult
                : "WHERE " . $whereResult;
        }

        if ($whereAll) {
            $where = $where
                ? $where . " AND " . $whereAll
                : "WHERE " . $whereAll;

            $whereAllSql = "WHERE " . $whereAll;
        }

        if ($extraColumns) {
            foreach ($extraColumns as $xc) {
                $columns[] = [
                    "db" => $xc,
                    "dt" => "{$xc}",
                ];
            }
        }

        try {
            if (isset($request["history_date"]) && !empty($request)) {
                $historyDate = explode("-", $request["history_date"]);
                $historyStart = date("Y-m-d", strtotime(trim($historyDate[0])));
                $historyEnd = date("Y-m-d", strtotime(trim($historyDate[1])));

                if (count($historyDate) > 1) {
                    if(empty($where)){
                        $historyDateQuery = "WHERE DATE({$request["history_column"]}) >= '{$historyStart}' AND DATE({$request["history_column"]}) <= '{$historyEnd}'";
                    } else {
                        $historyDateQuery = " AND DATE({$request["history_column"]}) >= '{$historyStart}' AND DATE({$request["history_column"]}) <= '{$historyEnd}'";
                    }

                    if(empty($whereAllSql)){
                        $historyDateQueryWhereAll = "WHERE DATE({$request["history_column"]}) >= '{$historyStart}' AND DATE({$request["history_column"]}) <= '{$historyEnd}'";
                    } else {
                        $historyDateQueryWhereAll = " AND DATE({$request["history_column"]}) >= '{$historyStart}' AND DATE({$request["history_column"]}) <= '{$historyEnd}'";
                    }
                }
            } else {
                $historyDateQuery = "";
                $historyDateQueryWhereAll = "";
            }
        } catch (Exception $e) {
            $historyDateQuery = "";
            $historyDateQueryWhereAll = "";
        }

        // Main query to actually get the data
        $data = self::sql_exec(
            $db,
            $bindings,
            "SELECT `" .
                implode("`, `", self::pluck($columns, "db")) .
                "` FROM `{$table}` {$where}{$historyDateQuery} {$order} {$limit}"
        );

        // Data set length after filtering
        $resFilterLength = self::sql_exec(
            $db,
            $bindings,
            "SELECT COUNT(`id`) FROM `{$table}` {$where}{$historyDateQuery}"
        );
        $recordsFiltered = $resFilterLength[0][0];

        // Total data set length
        $resTotalLength = self::sql_exec(
            $db,
            $bindings,
            "SELECT COUNT(`id`) FROM `{$table}` {$whereAllSql}{$historyDateQueryWhereAll}"
        );
        $recordsTotal = $resTotalLength[0][0];

        /*
         * Output
         */
        return [
            "draw" => isset($request["draw"]) ? intval($request["draw"]) : 0,
            "recordsTotal" => intval($recordsTotal),
            "recordsFiltered" => intval($recordsFiltered),
            "data" => self::data_output($columns, $data),
        ];
    }

    /**
     * Connect to the database
     *
     * @param  array $sql_details SQL server connection details array, with the
     *   properties:
     *     * host - host name
     *     * db   - database name
     *     * user - user name
     *     * pass - user password
     * @return resource Database connection handle
     */
    static function sql_connect($sql_details)
    {
        try {
            $db = @new PDO(
                "mysql:host={$sql_details["host"]};port={$sql_details["port"]};dbname={$sql_details["db"]};charset=utf8mb4",
                $sql_details["user"],
                $sql_details["pass"],
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
            );
        } catch (PDOException $e) {
            die(
                json_encode([
                    "draw" => 1,
                    "recordsTotal" => 0,
                    "recordsFiltered" => 0,
                    "data" => false,
                ])
            );
        }

        return $db;
    }

    /**
     * Execute an SQL query on the database
     *
     * @param  resource $db  Database handler
     * @param  array    $bindings Array of PDO binding values from bind() to be
     *   used for safely escaping strings. Note that this can be given as the
     *   SQL query string if no bindings are required.
     * @param  string   $sql SQL query to execute.
     * @return array         Result from the query (all rows)
     */
    static function sql_exec($db, $bindings, $sql = null)
    {
        // Character set
        $db->exec("SET NAMES utf8mb4");
        $db->exec("SET CHARACTER SET utf8mb4");

        // Attribute
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Argument shifting
        if ($sql === null) {
            $sql = $bindings;
        }

        $stmt = $db->prepare($sql);

        // Bind parameters
        if (is_array($bindings)) {
            for ($i = 0, $ien = count($bindings); $i < $ien; $i++) {
                $binding = $bindings[$i];
                $stmt->bindValue(
                    $binding["key"],
                    $binding["val"],
                    $binding["type"]
                );
            }
        }

        // Execute
        try {
            $stmt->execute();
        } catch (PDOException $e) {
            if($e->getCode() == 'HY093') {
                // Fall back to manual replacement if there is a parameter mismatch error
                $sql = self::replaceBindings($db, $bindings, $sql);
                $stmt = $db->prepare($sql);
                $stmt->execute();
            } else {
                die(
                    json_encode([
                        "draw" => 1,
                        "recordsTotal" => 0,
                        "recordsFiltered" => 0,
                        "data" => false,
                    ])
                );
            }
        }

        // Return all
        return $stmt->fetchAll(PDO::FETCH_BOTH);
    }

    /**
     * Fallback method for replacing bindings in SQL queries if the PDO driver
     */

    static function replaceBindings($db, $bindings, $sql) {
        if (is_array($bindings)) {
            foreach ($bindings as $binding) {
                // Manually escape the value for SQL
                $val = $binding["val"];

                // Check if the value contains any SQL keywords or placeholders
                if (preg_match('/(SELECT|UPDATE|DELETE|INSERT|--|:|\s|=|<|>|!|")/i', $val)) {
                    throw new Exception('Invalid value: ' . $val);
                }

                // Add quotes around the value and escape special characters
                $val = $db->quote($val);

                // Replace the placeholder with the value in the SQL string
                $sql = str_replace($binding["key"], $val, $sql);
            }
        }
        
        return $sql;
    }

    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Internal methods
     */

    /**
     * Create a PDO binding key which can be used for escaping variables safely
     * when executing a query with sql_exec()
     *
     * @param  array &$a    Array of bindings
     * @param  *      $val  Value to bind
     * @param  int    $type PDO field type
     * @return string       Bound key to be used in the SQL where this parameter
     *   would be used.
     */
    static function bind(&$a, $val, $type)
    {
        $key = ":binding_" . count($a);

        $a[] = [
            "key" => $key,
            "val" => $val,
            "type" => $type,
        ];

        return $key;
    }

    /**
     * Pull a particular property from each assoc. array in a numeric array,
     * returning and array of the property values from each item.
     *
     *  @param  array  $a    Array to get data from
     *  @param  string $prop Property to read
     *  @return array        Array of property values
     */
    static function pluck($a, $prop)
    {
        $out = [];

        for ($i = 0, $len = count($a); $i < $len; $i++) {
            if (empty($a[$i][$prop])) {
                continue;
            }
            //removing the $out array index confuses the filter method in doing proper binding,
            //adding it ensures that the array data are mapped correctly
            $out[$i] = $a[$i][$prop];
        }

        return $out;
    }

    /**
     * Return a string from an array or a string
     *
     * @param  array|string $a Array to join
     * @param  string $join Glue for the concatenation
     * @return string Joined string
     */
    static function _flatten($a, $join = " AND ")
    {
        if (!$a) {
            return "";
        } elseif ($a && is_array($a)) {
            return implode($join, $a);
        }
        return $a;
    }
}