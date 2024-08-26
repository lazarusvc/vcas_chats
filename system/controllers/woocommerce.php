<?php
/**
 * @item Zender - Wordpress Woocommerce Plugin
 * @author Titan Systems <mail@titansystems.ph>
 */ 

class Woocommerce_Controller extends MVC_Controller
{
    public function index()
    {
        $this->header->allow(site_url);

        if(!$this->session->has("logged"))
            response(401);

        $this->cache->container("system.settings");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getSettings());
        endif;

        set_system($this->cache->getAll());

        $this->cache->container("system.plugins");

        if($this->cache->empty()):
            $this->cache->setArray($this->system->getPlugins());
        endif;

        set_plugins($this->cache->getAll());

        set_logged($this->session->get("logged"));

        set_language(logged_language, logged_rtl);

        if(!is_admin)
            response(500, __("lang_response_invalid"));

        if(!defined("plugin_woocommerce"))
            response(500, __("lang_response_invalid"));

        $files = [
            "_plugins/woocommerce/zender-woocommerce.tpl"
        ];

        $this->smarty->assign([
            "prefix" => plugin_woocommerce["woocommerce_prefix"],
            "name" => plugin_woocommerce["name"],
            "desc" => plugin_woocommerce["desc"],
            "author" => plugin_woocommerce["author"],
            "author_uri" => plugin_woocommerce["author_uri"],
            "site_name" => system_site_name,
            "site_url" => str_replace("//", (system_protocol < 2 ? "http://" : "https://"), site_url),
            "freemius_id" => plugin_woocommerce["freemius_id"],
            "freemius_slug" => plugin_woocommerce["freemius_slug"],
            "freemious_public_key" => plugin_woocommerce["freemious_public_key"]
        ]);

        foreach($files as $file):
            $this->file->put(str_replace(".tpl", ".php", str_replace("zender", plugin_woocommerce["woocommerce_prefix"], str_replace("_plugins/", "system/plugins/", $file))), $this->smarty->fetch($file));
        endforeach;

        try {
            chmod("uploads/plugins/woocommerce.zip", 0755);
        } catch(Exception $e){
            // ignore
        }

        try {
            unlink("uploads/plugins/woocommerce.zip");
        } catch(Exception $e){
            // ignore
        }
            
        $archive = $this->zippy->create("uploads/plugins/woocommerce.zip", plugin_woocommerce["woocommerce_prefix"], "system/plugins/woocommerce");

        foreach($files as $file):
            try {
                unlink(str_replace(".tpl", ".php", str_replace("zender", plugin_woocommerce["woocommerce_prefix"], str_replace("_plugins/", "system/plugins/", $file))));
            } catch(Exception $e){
                // ignore
            }
        endforeach;

        response(201, false, [
            "link" => site_url . "/uploads/plugins/woocommerce.zip?v=" . time()
        ]);
    }

    public function mobile()
    {
        $this->header->allow();

        $request = $this->sanitize->array($_GET);

        if(!isset($request["phone"], $request["country"]))
            response(500);

        try {
            $number = $this->phone->parse($request["phone"], strtoupper($request["country"]));

            if(!$number->isValidNumber() && $number->getRegionCode() != "BR")
                response(500);

            $request["phone"] = $number->format(Brick\PhoneNumber\PhoneNumberFormat::INTERNATIONAL);
        } catch(Brick\PhoneNumber\PhoneNumberParseException $e) {
            response(500);
        }

        response(200, false, [
            "phone" => $request["phone"]
        ]);
    }
}