<?php
/**
 * Zender - Multiple Payment Gateway Plugin
 * @author Titan Systems <mail@titansystems.ph>
 **/

class Paypage_Controller extends MVC_Controller
{
    public function index()
    {
        if(!$this->session->has("logged"))
            $this->header->redirect(site_url);
        else
            set_template("dashboard");

        $request = $this->sanitize->array($_GET);

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

        $this->cache->container("system.blocks");

        if($this->cache->empty()):
            $blocks = [];
            
            foreach($this->system->getBlocks() as $key => $value):
                $blocks[$key] = $this->smarty->fetch("string: {$this->sanitize->htmlDecode($value)}");
            endforeach;

            $this->cache->setArray($blocks);
        endif;

        set_blocks($this->cache->getAll());

        if($request["hash"] != logged_hash)
            $this->header->redirect(site_url . "/paypage/failed?hash=" . logged_hash);

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            $this->header->redirect(site_url("dashboard"));

        $vars = [
            "title" => __("lang_title_plugin_paymentpage"),
            "data" => plugin_payment
        ];

        $vars["page"] = "misc";

        $this->smarty->assign($vars);
        $this->smarty->display(template . "/header.tpl");
        $this->smarty->display("_plugins/paypage/body.tpl");
        $this->smarty->display(template . "/footer.tpl");
    }

    public function config()
    {
        $this->header->allow(site_url);

        $request = $this->sanitize->array($_GET);

        if(!isset($request["token"]))
            response(500);

        if($request["token"] != system_token)
            response(500);

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

        $config = [
            "zender_url" => str_replace("//", (system_protocol < 2 ? "http://" : "https://"), site_url),
            "base_url" =>  str_replace("//", (system_protocol < 2 ? "http://" : "https://"), site_url . "/system/plugins/paypage/"),
            "payments" => [
                "gateway_configuration" => [
                    "paytm" => [
                        "enable" => plugin_payment["paytm_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["paytm_test"] == "true" ? true : false,
                        "gateway" => "Paytm",
                        "currency" => strtoupper(plugin_payment["paytm_currency"]),
                        "currencySymbol" => "₹",
                        "paytmMerchantTestingMidKey" => plugin_payment["paytm_key"],
                        "paytmMerchantTestingSecretKey" => plugin_payment["paytm_secret"],
                        "paytmMerchantLiveMidKey" => plugin_payment["paytm_key"],
                        "paytmMerchantLiveSecretKey" => plugin_payment["paytm_secret"],
                        "industryTypeID" => "Retail", 
                        "channelID" => "WEB",
                        "website" => "WEBSTAGING",
                        "paytmTxnUrl" => "https://securegw-stage.paytm.in/theia/processTransaction",
                        "callbackUrl" => "response.php",
                        "privateItems" => ["paytmMerchantTestingSecretKey", "paytmMerchantLiveSecretKey"]
                    ],
                    "instamojo" => [
                        "enable" => plugin_payment["instamojo_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["instamojo_test"] == "true" ? true : false,
                        "gateway" => "Instamojo",
                        "currency" => strtoupper(plugin_payment["instamojo_currency"]),
                        "currencySymbol" => "₹",
                        "sendEmail" => false,
                        "instamojoTestingApiKey" => plugin_payment["instamojo_key"],
                        "instamojoTestingAuthTokenKey" => plugin_payment["instamojo_token"],
                        "instamojoLiveApiKey" => plugin_payment["instamojo_key"],
                        "instamojoLiveAuthTokenKey" => plugin_payment["instamojo_token"],
                        "instamojoSandboxRedirectUrl" => "https://test.instamojo.com/api/1.1/",
                        "instamojoProdRedirectUrl" => "https://www.instamojo.com/api/1.1/",
                        "webhook" => "http://instamojo.com/webhook/",
                        "callbackUrl" => "response.php",
                        "privateItems" => ["instamojoTestingApiKey", "instamojoTestingAuthTokenKey", "instamojoLiveApiKey", "instamojoLiveAuthTokenKey", "instamojoSandboxRedirectUrl", "instamojoProdRedirectUrl"]
                    ],
                    "paystack" => [
                        "enable" => plugin_payment["paystack_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["paystack_test"] == "true" ? true : false,
                        "gateway" => "Paystack",
                        "currency" => strtoupper(plugin_payment["paystack_currency"]),
                        "currencySymbol" => "₦",
                        "paystackTestingSecretKey" => plugin_payment["paystack_secret"],
                        "paystackTestingPublicKey" => plugin_payment["paystack_key"],
                        "paystackLiveSecretKey" => plugin_payment["paystack_secret"],
                        "paystackLivePublicKey" => plugin_payment["paystack_key"],
                        "callbackUrl" => "response.php",
                        "privateItems" => ["paystackTestingSecretKey","paystackLiveSecretKey"]
                    ],
                    "stripe" => [
                        "enable" => plugin_payment["stripe_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["stripe_test"] == "true" ? true : false,
                        "gateway" => "Stripe",
                        "locale" => "auto",
                        "allowRememberMe" => false,
                        "currency" => strtoupper(plugin_payment["stripe_currency"]),
                        "currencySymbol" => "$",
                        "paymentMethodTypes" => [
                            "card",
                        ],
                        "stripeTestingSecretKey" => plugin_payment["stripe_secret"],
                        "stripeTestingPublishKey" => plugin_payment["stripe_key"],
                        "stripeLiveSecretKey" => plugin_payment["stripe_secret"],
                        "stripeLivePublishKey" => plugin_payment["stripe_key"],
                        "callbackUrl" => "response.php",
                        "privateItems" => ["stripeTestingSecretKey", "stripeLiveSecretKey"]
                    ],
                    "razorpay" => [
                        "enable" => plugin_payment["razorpay_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["razorpay_test"] == "true" ? true : false,
                        "gateway" => "Razorpay",
                        "merchantname" => system_site_name,
                        "themeColor" => "#4CAF50",
                        "currency" => strtoupper(plugin_payment["razorpay_currency"]),
                        "currencySymbol" => "₹",
                        "razorpayTestingkeyId" => plugin_payment["razorpay_key"],
                        "razorpayTestingSecretkey" => plugin_payment["razorpay_secret"],
                        "razorpayLivekeyId" => plugin_payment["razorpay_key"],
                        "razorpayLiveSecretkey" => plugin_payment["razorpay_secret"],
                        "callbackUrl" => "response.php",
                        "privateItems" => ["razorpayTestingSecretkey", "razorpayLiveSecretkey"]
                    ],
                    "bitpay" => [
                        "enable" => plugin_payment["bitpay_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["bitpay_test"] == "true" ? true : false,
                        "notificationEmail" => plugin_payment["bitpay_email"],
                        "gateway" => "BitPay", 
                        "currency" => "BTC", 
                        "currencySymbol" => "₿", 
                        "password" => plugin_payment["bitpay_password"],
                        "pairingCode" => plugin_payment["bitpay_paircode"],
                        "pairinglabel" => plugin_payment["bitpay_pairlabel"],
                        "callbackUrl" => "response.php", 
                        "privateItems" => ["pairingCode", "pairinglabel", "password"]
                    ],
                    "mercadopago" => [
                        "enable" => plugin_payment["mercadopago_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["mercadopago_test"] == "true" ? true : false,
                        "gateway" => "Mercado Pago", 
                        "currency" => strtoupper(plugin_payment["mercadopago_currency"]),
                        "currencySymbol" => "$",
                        "testAccessToken" => plugin_payment["mercadopago_token"],
                        "liveAccessToken" => plugin_payment["mercadopago_token"],
                        "callbackUrl" => "response.php",
                        "privateItems" => ["testAccessToken", "liveAccessToken"]
                    ],
                    "payumoney" => [
                        "enable" => plugin_payment["payumoney_enable"] == "true" ? true : false,
                        "testMode" => plugin_payment["payumoney_test"] == "true" ? true : false,
                        "gateway" => "PayUmoney",
                        "currency" => strtoupper(plugin_payment["payumoney_currency"]),
                        "currencySymbol" => "₹",
                        "txnId" => "Txn" . rand(10000, 99999999),
                        "merchantTestKey" => plugin_payment["payumoney_key"],
                        "merchantTestSalt" => plugin_payment["payumoney_secret"],
                        "merchantLiveKey" => plugin_payment["payumoney_key"],
                        "merchantLiveSalt" => plugin_payment["payumoney_secret"],
                        "callbackUrl" => "response.php",
                        "checkoutColor" => "e34524",
                        "checkoutLogo" => get_image("logo_light"),
                        "privateItems" => ["merchantTestKey", "merchantTestSalt", "merchantLiveKey", "merchantLiveSalt"]
                    ]
                ],
            ],

        ];

        response(200, false, $config);
    }

    public function info()
    {
        if(!$this->session->has("logged"))
            response(500);

        $provider = $this->sanitize->string($this->url->segment(4));

        if(!in_array($provider, [
            "stripe",
            "instamojo",
            "paytm",
            "payumoney",
            "bitpay",
            "paystack",
            "razorpay",
            "mercadopago"
        ])):
            response(500);
        endif;

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

        $this->cache->container("system.payments");

        if(!$this->cache->has("order." . logged_hash))
            response(500);

        $order = $this->cache->get("order." . logged_hash);

        if(!$this->cache->has("rates")):
            try {
                $rates = json_decode($this->guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                $this->cache->set("rates", $rates, 21600);
            } catch(Exception $e){
                response(500);
            }
        endif;

        $rates = $this->cache->get("rates");

        $base_rate = $rates["data"]["USD"] / $rates["data"][$order["data"]["base_currency"]];

        if(!isset($order["data"]["duration"]))
            $order["data"]["duration"] = 1;

        if(!isset($order["data"]["package"])):
            $order["data"]["package"] = [
                "id" => uniqid($order["data"]["price"] . time(), true),
                "name" => "Credits"
            ];
        endif;

        $info = [
            "paymentOption" => $provider,
            "amounts" => [
                "AED" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AED"]),
                "AFN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AFN"]),
                "ALL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ALL"]),
                "AMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AMD"]),
                "ANG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ANG"]),
                "AOA" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AOA"]),
                "ARS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ARS"]),
                "AUD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AUD"]),
                "AWG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AWG"]),
                "AZN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AZN"]),
                "BAM" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BAM"]),
                "BBD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BBD"]),
                "BDT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BDT"]),
                "BGN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BGN"]),
                "BHD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BHD"]),
                "BIF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BIF"]),
                "BMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BMD"]),
                "BND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BND"]),
                "BOB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BOB"]),
                "BRL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BRL"]),
                "BSD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BSD"]),
                "BTC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BTC"]),
                "BTN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BTN"]),
                "BWP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BWP"]),
                "BYN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BYN"]),
                "BZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BZD"]),
                "CAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CAD"]),
                "CDF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CDF"]),
                "CHF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CHF"]),
                "CLF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CLF"]),
                "CLP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CLP"]),
                "CNH" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CNH"]),
                "CNY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CNY"]),
                "COP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["COP"]),
                "CRC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CRC"]),
                "CUC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CUC"]),
                "CUP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CUP"]),
                "CVE" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CVE"]),
                "CZK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CZK"]),
                "DJF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DJF"]),
                "DKK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DKK"]),
                "DOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DOP"]),
                "DZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DZD"]),
                "EGP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["EGP"]),
                "ERN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ERN"]),
                "ETB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ETB"]),
                "EUR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["EUR"]),
                "FJD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["FJD"]),
                "FKP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["FKP"]),
                "GBP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GBP"]),
                "GEL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GEL"]),
                "GGP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GGP"]),
                "GHS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GHS"]),
                "GIP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GIP"]),
                "GMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GMD"]),
                "GNF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GNF"]),
                "GTQ" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GTQ"]),
                "GYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GYD"]),
                "HKD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HKD"]),
                "HNL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HNL"]),
                "HRK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HRK"]),
                "HTG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HTG"]),
                "HUF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HUF"]),
                "IDR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IDR"]),
                "ILS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ILS"]),
                "IMP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IMP"]),
                "INR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["INR"]),
                "IQD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IQD"]),
                "IRR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IRR"]),
                "ISK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ISK"]),
                "JEP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JEP"]),
                "JMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JMD"]),
                "JOD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JOD"]),
                "JPY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JPY"]),
                "KES" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KES"]),
                "KGS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KGS"]),
                "KHR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KHR"]),
                "KMF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KMF"]),
                "KPW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KPW"]),
                "KRW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KRW"]),
                "KWD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KWD"]),
                "KYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KYD"]),
                "KZT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KZT"]),
                "LAK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LAK"]),
                "LBP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LBP"]),
                "LKR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LKR"]),
                "LRD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LRD"]),
                "LSL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LSL"]),
                "LYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LYD"]),
                "MAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MAD"]),
                "MDL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MDL"]),
                "MGA" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MGA"]),
                "MKD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MKD"]),
                "MMK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MMK"]),
                "MNT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MNT"]),
                "MOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MOP"]),
                "MRU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MRU"]),
                "MUR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MUR"]),
                "MVR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MVR"]),
                "MWK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MWK"]),
                "MXN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MXN"]),
                "MYR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MYR"]),
                "MZN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MZN"]),
                "NAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NAD"]),
                "NGN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NGN"]),
                "NIO" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NIO"]),
                "NOK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NOK"]),
                "NPR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NPR"]),
                "NZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NZD"]),
                "OMR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["OMR"]),
                "PAB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PAB"]),
                "PEN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PEN"]),
                "PGK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PGK"]),
                "PHP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PHP"]),
                "PKR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PKR"]),
                "PLN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PLN"]),
                "PYG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PYG"]),
                "QAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["QAR"]),
                "RON" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RON"]),
                "RSD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RSD"]),
                "RUB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RUB"]),
                "RWF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RWF"]),
                "SAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SAR"]),
                "SBD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SBD"]),
                "SCR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SCR"]),
                "SDG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SDG"]),
                "SEK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SEK"]),
                "SGD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SGD"]),
                "SHP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SHP"]),
                "SLL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SLL"]),
                "SOS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SOS"]),
                "SRD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SRD"]),
                "SSP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SSP"]),
                "STD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["STD"]),
                "STN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["STN"]),
                "SVC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SVC"]),
                "SYP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SYP"]),
                "SZL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SZL"]),
                "THB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["THB"]),
                "TJS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TJS"]),
                "TMT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TMT"]),
                "TND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TND"]),
                "TOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TOP"]),
                "TRY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TRY"]),
                "TTD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TTD"]),
                "TWD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TWD"]),
                "TZS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TZS"]),
                "UAH" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UAH"]),
                "UGX" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UGX"]),
                "USD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["USD"]),
                "UYU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UYU"]),
                "UZS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UZS"]),
                "VES" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VES"]),
                "VND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VND"]),
                "VUV" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VUV"]),
                "WST" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["WST"]),
                "XAF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAF"]),
                "XAG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAG"]),
                "XAU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAU"]),
                "XCD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XCD"]),
                "XDR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XDR"]),
                "XOF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XOF"]),
                "XPD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPD"]),
                "XPF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPF"]),
                "XPT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPT"]),
                "YER" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["YER"]),
                "ZAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZAR"]),
                "ZMW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZMW"]),
                "ZWL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZWL"])
            ],
            "customer_id" => $order["data"]["user"]["id"],
            "description" => $order["data"]["package"]["name"],
            "item_id" => $order["data"]["package"]["id"],
            "item_name" => $order["data"]["package"]["name"],
            "item_qty" => 1,
            "order_id" => "ORDER_" . uniqid($order["data"]["user"]["id"]),
            "payer_email" => $order["data"]["user"]["email"],
            "payer_name" => $order["data"]["user"]["name"],
            "zender_hash" => $order["data"]["user"]["hash"]
        ];

        if($provider == "paystack")
            $info["paystack_key"] = plugin_payment["paystack_key"];

        if($provider == "razorpay"):
            $info["razorpay_key"] = plugin_payment["razorpay_key"];
            $info["razorpay_merchant"] = system_site_name;
        endif;

        response(200, false, $info);
    }

    public function verify()
    {
        $this->header->allow(site_url);

        $request = $this->sanitize->array($_POST);

        if(!isset($request["token"], $request["hash"], $request["gateway"]))
            response(500);

        if($request["token"] != system_token)
            response(500);

        if(!in_array($request["gateway"], [
            "stripe",
            "instamojo",
            "paytm",
            "payumoney",
            "bitpay",
            "paystack",
            "razorpay",
            "mercadopago"
        ])):
            response(500);
        endif;

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

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order.{$request["hash"]}"))
            response(404);

        $item = $this->cache->get("order.{$request["hash"]}");
        $user = $this->system->getUserByHash($request["hash"]);

        set_language($user["language"]);

        if($item["type"] < 2):
            if($this->system->checkSubscription($user["id"]) > 0):
                $transaction = $this->system->create("transactions", [
                    "uid" => $user["id"],
                    "pid" => $item["data"]["package"]["id"],
                    "type" => 1,
                    "price" => $item["data"]["package"]["price"],
                    "currency" => system_currency,
                    "duration" => $item["data"]["duration"],
                    "provider" => $request["gateway"]
                ]);

                $filtered = [
                    "pid" => $item["data"]["package"]["id"],
                    "tid" => $transaction
                ];

                $subscription = $this->system->getSubscription(false, $user["id"]);

                $this->system->update($subscription["sid"], $user["id"], "subscriptions", $filtered);
            else:
                $transaction = $this->system->create("transactions", [
                    "uid" => $user["id"],
                    "pid" => $item["data"]["package"]["id"],
                    "type" => 1,
                    "price" => $item["data"]["package"]["price"],
                    "currency" => system_currency,
                    "duration" => $item["data"]["duration"],
                    "provider" => $request["gateway"]
                ]);

                $filtered = [
                    "uid" => $user["id"],
                    "pid" => $item["data"]["package"]["id"],
                    "tid" => $transaction
                ];

                $this->system->create("subscriptions", $filtered);
            endif;

            $this->mail->send([
                "title" => system_site_name,
                "data" => [
                    "subject" => mail_title(__("lang_response_package_purchasedtitle")),
                    "package" => $this->system->getPackage($item["data"]["package"]["id"]),
                    "subscription" => $this->system->getSubscription(false, $user["id"])
                ]
            ], $user["email"], "_mail/subscribe.tpl", $this->smarty);

            if(!empty(system_mailing_address) && in_array("admin_package_buy", explode(",", system_mailing_triggers))):
                $packageWorth = "{$item["data"]["package"]["price"]} " . system_currency;

                $mailingContent = <<<HTML
                <p>Hi there!</p>
                <p>This is to inform you that <strong>{$user["email"]}</strong> has bought <strong>{$item["data"]["package"]["name"]}</strong> package worth <strong>{$packageWorth}</strong> via <strong>{$request["gateway"]}</strong>.</p> 
                HTML;

                $this->mail->send([
                    "title" => system_site_name,
                    "data" => [
                        "subject" => mail_title("Admin Alert Message from " . system_site_name . "!"),
                        "content" => $mailingContent
                    ]
                ], system_mailing_address, "_mail/default.tpl", $this->smarty);
            endif;
        else:
            $transaction = $this->system->create("transactions", [
                "uid" => $user["id"],
                "pid" => 0,
                "type" => 2,
                "price" => $item["data"]["credits"],
                "currency" => system_currency,
                "duration" => 0,
                "provider" => $request["gateway"]
            ]);

            $this->system->credits($user["id"], "increase", $item["data"]["credits"]);

            $this->mail->send([
                "title" => system_site_name,
                "data" => [
                    "subject" => mail_title(__("lang_payment_webhook_molliecreditsadded")),
                    "credits" => $item["data"]["credits"]
                ]
            ], $user["email"], "_mail/credits.tpl", $this->smarty);

            if(!empty(system_mailing_address) && in_array("admin_credits_buy", explode(",", system_mailing_triggers))):
                $mailingContent = <<<HTML
                <p>Hi there!</p>
                <p>This is to inform you that <strong>{$user["email"]}</strong> has bought <strong>{$item["data"]["credits"]}</strong> credits via <strong>{$request["gateway"]}</strong>.</p> 
                HTML;

                $this->mail->send([
                    "title" => system_site_name,
                    "data" => [
                        "subject" => mail_title("Admin Alert Message from " . system_site_name . "!"),
                        "content" => $mailingContent
                    ]
                ], system_mailing_address, "_mail/default.tpl", $this->smarty);
            endif;
        endif;

        response(200);
    }

    public function process()
    {
        if(!$this->session->has("logged"))
            response(500);

        $request = $this->sanitize->array($_POST);
        $provider = $this->sanitize->string($this->url->segment(4));

        if(!in_array($provider, [
            "stripe",
            "instamojo",
            "paytm",
            "payumoney",
            "bitpay",
            "paystack",
            "razorpay",
            "mercadopago"
        ])):
            $this->header->redirect(site_url("dashboard"));
        endif;

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

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            response(500);

        $order = $this->cache->get("order." . logged_hash);

        if(!$this->cache->has("exchange")):
            try {
                $exchange = json_decode($this->guzzle->get(titansys_api . "/currency?code=" . system_purchase_code, [
                    "allow_redirects" => true,
                    "http_errors" => false
                ])->getBody()->getContents(), true);

                if($exchange["status"] == 200):
                    $this->cache->set("exchange", $exchange, 43200);
                else:
                    response(500);
                endif;
            } catch(Exception $e){
                response(500);
            }
        endif;

        $rates = $this->cache->get("exchange");

        $base_rate = $rates["data"]["USD"] / $rates["data"][$order["data"]["base_currency"]];

        if(!isset($order["data"]["duration"]))
            $order["data"]["duration"] = 1;

        if(!isset($order["data"]["package"])):
            $order["data"]["package"] = [
                "id" => uniqid($order["data"]["price"] . time(), true),
                "name" => "Credits"
            ];
        endif;

        $process = json_decode($this->guzzle->post(site_url . "/system/plugins/paypage/process.php", [
            "form_params" => [
                "paystackReferenceId" => isset($request["paystackReferenceId"]) ? $request["paystackReferenceId"] : false,
                "paystackAmount" => isset($request["paystackAmount"]) ? $request["paystackAmount"] : false,
                "razorpayPaymentId" => isset($request["razorpayPaymentId"]) ? $request["razorpayPaymentId"] : false,
                "razorpayAmount" => isset($request["razorpayAmount"]) ? $request["razorpayAmount"] : false,
                "paymentOption" => $provider,
                "amounts" => [
                    "AED" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AED"]),
                    "AFN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AFN"]),
                    "ALL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ALL"]),
                    "AMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AMD"]),
                    "ANG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ANG"]),
                    "AOA" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AOA"]),
                    "ARS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ARS"]),
                    "AUD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AUD"]),
                    "AWG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AWG"]),
                    "AZN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["AZN"]),
                    "BAM" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BAM"]),
                    "BBD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BBD"]),
                    "BDT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BDT"]),
                    "BGN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BGN"]),
                    "BHD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BHD"]),
                    "BIF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BIF"]),
                    "BMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BMD"]),
                    "BND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BND"]),
                    "BOB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BOB"]),
                    "BRL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BRL"]),
                    "BSD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BSD"]),
                    "BTC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BTC"]),
                    "BTN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BTN"]),
                    "BWP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BWP"]),
                    "BYN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BYN"]),
                    "BZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["BZD"]),
                    "CAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CAD"]),
                    "CDF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CDF"]),
                    "CHF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CHF"]),
                    "CLF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CLF"]),
                    "CLP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CLP"]),
                    "CNH" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CNH"]),
                    "CNY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CNY"]),
                    "COP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["COP"]),
                    "CRC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CRC"]),
                    "CUC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CUC"]),
                    "CUP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CUP"]),
                    "CVE" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CVE"]),
                    "CZK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["CZK"]),
                    "DJF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DJF"]),
                    "DKK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DKK"]),
                    "DOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DOP"]),
                    "DZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["DZD"]),
                    "EGP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["EGP"]),
                    "ERN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ERN"]),
                    "ETB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ETB"]),
                    "EUR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["EUR"]),
                    "FJD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["FJD"]),
                    "FKP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["FKP"]),
                    "GBP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GBP"]),
                    "GEL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GEL"]),
                    "GGP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GGP"]),
                    "GHS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GHS"]),
                    "GIP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GIP"]),
                    "GMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GMD"]),
                    "GNF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GNF"]),
                    "GTQ" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GTQ"]),
                    "GYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["GYD"]),
                    "HKD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HKD"]),
                    "HNL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HNL"]),
                    "HRK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HRK"]),
                    "HTG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HTG"]),
                    "HUF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["HUF"]),
                    "IDR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IDR"]),
                    "ILS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ILS"]),
                    "IMP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IMP"]),
                    "INR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["INR"]),
                    "IQD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IQD"]),
                    "IRR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["IRR"]),
                    "ISK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ISK"]),
                    "JEP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JEP"]),
                    "JMD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JMD"]),
                    "JOD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JOD"]),
                    "JPY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["JPY"]),
                    "KES" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KES"]),
                    "KGS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KGS"]),
                    "KHR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KHR"]),
                    "KMF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KMF"]),
                    "KPW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KPW"]),
                    "KRW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KRW"]),
                    "KWD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KWD"]),
                    "KYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KYD"]),
                    "KZT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["KZT"]),
                    "LAK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LAK"]),
                    "LBP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LBP"]),
                    "LKR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LKR"]),
                    "LRD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LRD"]),
                    "LSL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LSL"]),
                    "LYD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["LYD"]),
                    "MAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MAD"]),
                    "MDL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MDL"]),
                    "MGA" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MGA"]),
                    "MKD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MKD"]),
                    "MMK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MMK"]),
                    "MNT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MNT"]),
                    "MOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MOP"]),
                    "MRU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MRU"]),
                    "MUR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MUR"]),
                    "MVR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MVR"]),
                    "MWK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MWK"]),
                    "MXN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MXN"]),
                    "MYR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MYR"]),
                    "MZN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["MZN"]),
                    "NAD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NAD"]),
                    "NGN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NGN"]),
                    "NIO" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NIO"]),
                    "NOK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NOK"]),
                    "NPR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NPR"]),
                    "NZD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["NZD"]),
                    "OMR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["OMR"]),
                    "PAB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PAB"]),
                    "PEN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PEN"]),
                    "PGK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PGK"]),
                    "PHP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PHP"]),
                    "PKR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PKR"]),
                    "PLN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PLN"]),
                    "PYG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["PYG"]),
                    "QAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["QAR"]),
                    "RON" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RON"]),
                    "RSD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RSD"]),
                    "RUB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RUB"]),
                    "RWF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["RWF"]),
                    "SAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SAR"]),
                    "SBD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SBD"]),
                    "SCR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SCR"]),
                    "SDG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SDG"]),
                    "SEK" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SEK"]),
                    "SGD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SGD"]),
                    "SHP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SHP"]),
                    "SLL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SLL"]),
                    "SOS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SOS"]),
                    "SRD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SRD"]),
                    "SSP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SSP"]),
                    "STD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["STD"]),
                    "STN" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["STN"]),
                    "SVC" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SVC"]),
                    "SYP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SYP"]),
                    "SZL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["SZL"]),
                    "THB" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["THB"]),
                    "TJS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TJS"]),
                    "TMT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TMT"]),
                    "TND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TND"]),
                    "TOP" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TOP"]),
                    "TRY" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TRY"]),
                    "TTD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TTD"]),
                    "TWD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TWD"]),
                    "TZS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["TZS"]),
                    "UAH" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UAH"]),
                    "UGX" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UGX"]),
                    "USD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["USD"]),
                    "UYU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UYU"]),
                    "UZS" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["UZS"]),
                    "VES" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VES"]),
                    "VND" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VND"]),
                    "VUV" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["VUV"]),
                    "WST" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["WST"]),
                    "XAF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAF"]),
                    "XAG" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAG"]),
                    "XAU" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XAU"]),
                    "XCD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XCD"]),
                    "XDR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XDR"]),
                    "XOF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XOF"]),
                    "XPD" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPD"]),
                    "XPF" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPF"]),
                    "XPT" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["XPT"]),
                    "YER" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["YER"]),
                    "ZAR" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZAR"]),
                    "ZMW" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZMW"]),
                    "ZWL" => round(($base_rate * ($order["data"]["price"] * $order["data"]["duration"])) * $rates["data"]["ZWL"])
                ],
                "customer_id" => $order["data"]["user"]["id"],
                "description" => $order["data"]["package"]["name"],
                "item_id" => $order["data"]["package"]["id"],
                "item_name" => $order["data"]["package"]["name"],
                "item_qty" => 1,
                "order_id" => "ORDER_" . uniqid($order["data"]["user"]["id"]),
                "payer_email" => $order["data"]["user"]["email"],
                "payer_name" => $order["data"]["user"]["name"],
                "zender_hash" => $order["data"]["user"]["hash"]
            ],
            "allow_redirects" => true,
            "http_errors" => false
        ])->getBody()->getContents(), true);

        switch($provider):
            case "stripe":
                $process["stripe_key"] = plugin_payment["stripe_key"];

                die(json_encode($process));
            default:
                die(json_encode($process));
        endswitch;
    }

    public function pending()
    {
        if(!$this->session->has("logged"))
            $this->header->redirect(site_url);
        else
            set_template("dashboard");

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

        $this->cache->container("system.blocks");

        if($this->cache->empty()):
            $blocks = [];
            
            foreach($this->system->getBlocks() as $key => $value):
                $blocks[$key] = $this->smarty->fetch("string: {$this->sanitize->htmlDecode($value)}");
            endforeach;

            $this->cache->setArray($blocks);
        endif;

        set_blocks($this->cache->getAll());

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            $this->header->redirect(site_url("dashboard"));

        $dashboardUrl = site_url("dashboard");

        $vars = [
            "title" => __("lang_payment_title_pending"),
            "page" => "misc",
            "data" => [
                "title" => __("lang_payment_title_pending"),
                "content" => <<<HTML
<p>{$GLOBALS["__"]("lang_and_dash_pg_pay_line45")}</p>

<p class="mb-0">
    <a href="{$dashboardUrl}" class="btn btn-primary">{$GLOBALS["__"]("lang_back_payment_page")}</a>
</p>
HTML
            ]
        ];

        if($this->cache->has("order." . logged_hash))
            $this->cache->delete("order." . logged_hash);

        $this->smarty->assign($vars);
        $this->smarty->display(template . "/header.tpl");
        $this->smarty->display(template . "/pages/misc.tpl");
        $this->smarty->display(template . "/footer.tpl");
    }

    public function success()
    {
        if(!$this->session->has("logged"))
            $this->header->redirect(site_url);
        else
            set_template("dashboard");

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

        $this->cache->container("system.blocks");

        if($this->cache->empty()):
            $blocks = [];
            
            foreach($this->system->getBlocks() as $key => $value):
                $blocks[$key] = $this->smarty->fetch("string: {$this->sanitize->htmlDecode($value)}");
            endforeach;

            $this->cache->setArray($blocks);
        endif;

        set_blocks($this->cache->getAll());

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            $this->header->redirect(site_url("dashboard"));

        $dashboardUrl = site_url("dashboard");

        $vars = [
            "title" => __("lang_title_payment_success"),
            "page" => "misc",
            "data" => [
                "title" => __("lang_header_payment_success"),
                "content" => <<<HTML
<p>{$GLOBALS["__"]("lang_and_dash_pg_pay_line45")}</p>

<p class="mb-0">
    <a href="{$dashboardUrl}" class="btn btn-primary">{$GLOBALS["__"]("lang_back_payment_page")}</a>
</p>
HTML
            ]
        ];

        if($this->cache->has("order." . logged_hash))
            $this->cache->delete("order." . logged_hash);

        $this->smarty->assign($vars);
        $this->smarty->display(template . "/header.tpl");
        $this->smarty->display(template . "/pages/misc.tpl");
        $this->smarty->display(template . "/footer.tpl");
    }

    public function failed()
    {
        if(!$this->session->has("logged"))
            $this->header->redirect(site_url);
        else
            set_template("dashboard");

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

        $this->cache->container("system.blocks");

        if($this->cache->empty()):
            $blocks = [];
            
            foreach($this->system->getBlocks() as $key => $value):
                $blocks[$key] = $this->smarty->fetch("string: {$this->sanitize->htmlDecode($value)}");
            endforeach;

            $this->cache->setArray($blocks);
        endif;

        set_blocks($this->cache->getAll());

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            $this->header->redirect(site_url("dashboard"));

        $dashboardUrl = site_url("dashboard");

        $vars = [
            "title" => __("lang_payment_title_orderfailed"),
            "page" => "misc",
            "data" => [
                "title" => __("lang_payment_title_orderfailed"),
                "content" => <<<HTML
<p>{$GLOBALS["__"]("lang_payment_page_orderfailed")}</p>

<p class="mb-0">
  <a href="{$dashboardUrl}" class="btn btn-primary">{$GLOBALS["__"]("lang_back_payment_page")}</a>
</p>
HTML
            ]
        ];

        if($this->cache->has("order." . logged_hash))
            $this->cache->delete("order." . logged_hash);

        $this->smarty->assign($vars);
        $this->smarty->display(template . "/header.tpl");
        $this->smarty->display(template . "/pages/misc.tpl");
        $this->smarty->display(template . "/footer.tpl");
    }

    public function cancel()
    {
        if(!$this->session->has("logged"))
            $this->header->redirect(site_url);
        else
            set_template("dashboard");

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

        $this->cache->container("system.blocks");

        if($this->cache->empty()):
            $blocks = [];
            
            foreach($this->system->getBlocks() as $key => $value):
                $blocks[$key] = $this->smarty->fetch("string: {$this->sanitize->htmlDecode($value)}");
            endforeach;

            $this->cache->setArray($blocks);
        endif;

        set_blocks($this->cache->getAll());

        $this->cache->container("system.payments", true);

        if(!$this->cache->has("order." . logged_hash))
            $this->header->redirect(site_url("dashboard"));

        $dashboardUrl = site_url("dashboard");

        $vars = [
            "title" => __("lang_title_payment_cancel"),
            "page" => "misc",
            "data" => [
                "title" => __("lang_header_payment_cancel"),
                "content" => <<<HTML
<p>{$GLOBALS["__"]("lang_body_payment_cancel")}</p>

<p class="mb-0">
  <a href="{$dashboardUrl}" class="btn btn-primary">{$GLOBALS["__"]("lang_back_payment_page")}</a>
</p>
HTML
            ]
        ];

        if($this->cache->has("order." . logged_hash))
            $this->cache->delete("order." . logged_hash);

        $this->smarty->assign($vars);
        $this->smarty->display(template . "/header.tpl");
        $this->smarty->display(template . "/pages/misc.tpl");
        $this->smarty->display(template . "/footer.tpl");
    }
}