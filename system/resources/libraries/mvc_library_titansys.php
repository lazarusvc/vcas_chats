<?php

class MVC_Library_Titansys
{
    public function getGeoIp($ip, &$guzzle)
    {
        try {
        	$geoip = json_decode($guzzle->get(titansys_api . "/geoip?code=" . system_purchase_code . "&ip={$ip}", [
                "timeout" => 3,
				"connect_timeout" => 3,
				"allow_redirects" => true,
                "http_errors" => false
            ])->getBody()->getContents(), true);
            
			return $geoip["status"] == 200 ? (isset($geoip["data"]["country"]) ? $geoip["data"]["country"] : "Unknown") : "Unknown";
        } catch(Exception $e){
            return false;
        }
    }

    public function calculatePartnerSendPrice($currency, $device_rate, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("exchange", $rates, 43200);
                else:
                    return false;
                endif;
            } catch(Exception $e){
                return false;
            }
        endif;

        $rates = $cache->get("exchange");

        try {
            $base_rate = $rates["data"]["USD"] / $rates["data"][strtoupper($currency)];
            $usd_price = ($base_rate * $device_rate) * $rates["data"]["USD"];
            return (float) abs($usd_price * $rates["data"][strtoupper(system_currency)]);
        } catch (Exception $e) {
            return false;
        }
    }

    public function convertSystemCurrencyToUsd($amount, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("rates", $rates, 43200);
                else:
                    return false;
                endif;
            } catch (Exception $e) {
                return false;
            }
        endif;

        $rates = $cache->get("rates");

        try {
            $base_rate = $rates["data"]["USD"] / $rates["data"][strtoupper(system_currency)];

            $converted_amount = $amount * $base_rate;

            return (float) round($converted_amount, 2);
        } catch (Exception $e) {
            return false;
        }
    }

    public function convertBaseToTarget($amount, $base, $target, &$guzzle, &$cache)
    {
        $cache->container("system.payments", true);

        if(!$cache->has("rates")):
            try {
                $rates = json_decode($guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "timeout" => 3,
				    "connect_timeout" => 3,
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($rates["status"] == 200):
                    $cache->set("rates", $rates, 43200);
                else:
                    return false;
                endif;
            } catch (Exception $e) {
                return false;
            }
        endif;

        $rates = $cache->get("rates");

        try {
            $php_to_usd = $rates["data"][$base];
            $usd_to_brl = $rates["data"][$target];
            $converted_amount = $amount * ($usd_to_brl / $php_to_usd);

            return (float) round($converted_amount, 2); 
        } catch (Exception $e) {
            return false;
        }
    }
}