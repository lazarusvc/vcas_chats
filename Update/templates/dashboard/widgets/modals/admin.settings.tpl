<form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-cog la-lg"></i> {$title}
            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingsite")}</h2>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingssitename")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line21")}"></i>
                    </label>
                    <input type="text" name="site_name" class="form-control" placeholder="{__("lang_and_settings_line23")}" value="{$data.system.site_name}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingssitedesc")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line28")}"></i>
                    </label>
                    <input type="text" name="site_desc" class="form-control" placeholder="{__("lang_and_settings_line30")}"  value="{$data.system.site_desc}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingspcode")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line35")}"></i>
                    </label>
                    <input type="text" name="purchase_code" class="form-control" placeholder="{__("lang_and_settings_line37")}" value="{$data.system.purchase_code}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingsanalytics")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line42")}"></i>
                    </label>
                    <input type="text" name="analytics_key" class="form-control" placeholder="{__("lang_and_settings_line44")}" value="{system_analytics_key}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingsprotocol")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line49")}"></i>
                    </label>
                    <select name="protocol" class="form-control">
                        <option value="1" {if $data.system.protocol < 2}selected{/if}>HTTP</option>
                        <option value="2" {if $data.system.protocol > 1}selected{/if}>HTTPS</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingsdeflang")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line59")}"></i>
                    </label>
                    <select name="default_lang" class="form-control" data-live-search="true">
                        {foreach $data.languages as $language}
                        <option value="{$language@key}" data-tokens="{$language.token}" {if $data.system.default_lang eq $language@key}selected{/if}>{$language.name}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_and_settings_line80")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line80_1")}"></i>
                    </label>
                    <select name="reset_mode" class="form-control">
                        <option value="1" {if $data.system.reset_mode < 2}selected{/if}>{__("lang_and_settings_line83")}</option>
                        <option value="2" {if $data.system.reset_mode > 1}selected{/if}>{__("lang_and_settings_line84")}</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_and_settings_line90")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line90_1")}"></i>
                    </label>
                    <select name="freemodel" class="form-control">
                        <option value="1" {if $data.system.freemodel < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.freemodel > 1}selected{/if}>{__("lang_form_disable")}</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_and_settings_line127")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line127_1")}"></i>
                    </label>
                    <select name="admin_api[]" class="form-control" data-live-search="true" zender-select-adminapi multiple>
                        <option value="0" {if in_array("0", split(system_admin_api, ","))}selected{/if}>{__("lang_form_disable")}</option>
                        <option value="get_users" {if in_array("get_users", split(system_admin_api, ","))}selected{/if}>get_users</option>
                        <option value="get_roles" {if in_array("get_roles", split(system_admin_api, ","))}selected{/if}>get_roles</option>
                        <option value="get_packages" {if in_array("get_packages", split(system_admin_api, ","))}selected{/if}>get_packages</option>
                        <option value="get_vouchers" {if in_array("get_vouchers", split(system_admin_api, ","))}selected{/if}>get_vouchers</option>
                        <option value="get_subscriptions" {if in_array("get_subscriptions", split(system_admin_api, ","))}selected{/if}>get_subscriptions</option>
                        <option value="get_transactions" {if in_array("get_transactions", split(system_admin_api, ","))}selected{/if}>get_transactions</option>
                        <option value="get_languages" {if in_array("get_languages", split(system_admin_api, ","))}selected{/if}>get_languages</option>
                        <option value="create_user" {if in_array("create_user", split(system_admin_api, ","))}selected{/if}>create_user</option>
                        <option value="create_role" {if in_array("create_role", split(system_admin_api, ","))}selected{/if}>create_role</option>
                        <option value="create_package" {if in_array("create_package", split(system_admin_api, ","))}selected{/if}>create_package</option>
                        <option value="create_voucher" {if in_array("create_voucher", split(system_admin_api, ","))}selected{/if}>create_voucher</option>
                        <option value="create_subscription" {if in_array("create_subscription", split(system_admin_api, ","))}selected{/if}>create_subscription</option>
                        <option value="edit_user" {if in_array("edit_user", split(system_admin_api, ","))}selected{/if}>edit_user</option>
                        <option value="edit_role" {if in_array("edit_role", split(system_admin_api, ","))}selected{/if}>edit_role</option>
                        <option value="edit_package" {if in_array("edit_package", split(system_admin_api, ","))}selected{/if}>edit_package</option>
                        <option value="delete_user" {if in_array("delete_user", split(system_admin_api, ","))}selected{/if}>delete_user</option>
                        <option value="delete_role" {if in_array("delete_role", split(system_admin_api, ","))}selected{/if}>delete_role</option>
                        <option value="delete_package" {if in_array("delete_package", split(system_admin_api, ","))}selected{/if}>delete_package</option>
                        <option value="delete_voucher" {if in_array("delete_voucher", split(system_admin_api, ","))}selected{/if}>delete_voucher</option>
                        <option value="delete_subscription" {if in_array("delete_subscription", split(system_admin_api, ","))}selected{/if}>delete_subscription</option>
                        <option value="delete_transaction" {if in_array("delete_transaction", split(system_admin_api, ","))}selected{/if}>delete_transaction</option>
                        <option value="redeem_voucher" {if in_array("redeem_voucher", split(system_admin_api, ","))}selected{/if}>redeem_voucher</option>
                        <option value="clear_cache" {if in_array("clear_cache", split(system_admin_api, ","))}selected{/if}>clear_cache</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_and_settings_line110")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line110_1")}"></i>
                    </label>
                    <select name="livechat" class="form-control">
                        <option value="1" {if $data.system.livechat < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.livechat > 1}selected{/if}>{__("lang_form_disable")}</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_form_settings_tawkchatlink")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line120")}"></i>
                    </label>
                    <input type="text" name="tawk_id" class="form-control" placeholder="eg. https://tawk.to/chat/5ead66fc10362a7578be7856/1f7tsdspq" value="{$data.system.tawk_id}">
                </div>

                <div class="form-group col-md-9">
                    <h4 class="text-uppercase">
                        {__("lang_form_adminsettings_token")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line159new")}"></i>
                        <button type="button" class="btn btn-danger btn-sm" zender-action="regenerate">{__("lang_and_settings_line160")}</button>
                    </h4>
                    <code>
                        <p zender-token>{system_token}</p>
                    </code>
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingsmailing")}</h2>
                </div>

                <div class="form-group col-md-2">
                    <label>
                        {__("lang_form_settingsmailfunc")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line173")}"></i>
                    </label>
                    <select name="mail_function" class="form-control">
                        <option value="1" {if $data.system.mail_function < 2}selected{/if}>{__("lang_form_native")}</option>
                        <option value="2" {if $data.system.mail_function > 1}selected{/if}>{__("lang_form_remotesmtp")}</option> 
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label>
                        {__("lang_form_settingssmtpsecure")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line183")}"></i>
                    </label>
                    <select name="smtp_secure" class="form-control">
                        <option value="1" {if $data.system.smtp_secure < 2}selected{/if}>TLS</option>
                        <option value="2" {if $data.system.smtp_secure > 1}selected{/if}>SSL</option> 
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingssitemail")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line193")}"></i>
                    </label>
                    <input type="text" name="site_mail" class="form-control" placeholder="{__("lang_and_settings_line195")}" value="{$data.system.site_mail}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingssmtphost")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line200")}"></i>
                    </label>
                    <small class="text-muted">
                        {__("lang_form_settingssmtp_small")}
                    </small>
                    <input type="text" name="smtp_host" class="form-control" placeholder="{__("lang_and_settings_line205")}" value="{$data.system.smtp_host}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingssmtpport")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line210")}"></i>
                    </label>
                    <small class="text-muted">
                        {__("lang_form_settingssmtp_small")}
                    </small>
                    <input type="text" name="smtp_port" class="form-control" placeholder="{__("lang_and_settings_line215")}" value="{$data.system.smtp_port}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingssmtpusername")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line220")}"></i>
                    </label>
                    <small class="text-muted">
                        {__("lang_form_settingssmtp_small")}
                    </small>
                    <input type="text" name="smtp_username" class="form-control" placeholder="{__("lang_and_settings_line225")}" value="{$data.system.smtp_username}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingssmtppassword")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line230")}"></i>
                    </label>
                    <small class="text-muted">
                        {__("lang_form_settingssmtp_small")}
                    </small>
                    <input type="password" name="smtp_password" class="form-control" placeholder="{__("lang_and_settings_line235")}" value="{$data.system.smtp_password}">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingspayments")}</h2>
                </div>

                <div class="form-group col-md-6 mb-0">
                    <label>
                        {__("lang_widgets_viewbank_titlenew")} <i class="la la-info-circle la-lg" title="{__("lang_modal_adminsettings_offlinepaymenttooltipnew")}"></i>
                    </label>
                    <select name="offline_payment" class="form-control mb-4">
                        <option value="1" {if $data.system.offline_payment < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.offline_payment > 1}selected{/if}>{__("lang_form_disable")}</option> 
                    </select>

                    <label>
                        {__("lang_modal_adminsettings_systemcurrencynew")} <i class="la la-info-circle la-lg" title="{__("lang_modal_adminsettings_systemcurrencytooltipnew")}"></i>
                    </label>
                    <select name="currency" class="form-control" data-live-search="true">
                        {foreach $data.currencies as $currency}
                        <option value="{$currency}" data-tokens="{$currency}" {if $data.system.currency eq $currency}selected{/if}>{$currency}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-group col-md-6 mb-0">
                    <label>
                        {__("lang_modal_adminsettings_banktransfer1new")} <i class="la la-info-circle la-lg" title="{__("lang_modal_adminsettings_banktransfer2new")}"></i>
                    </label>
                    <textarea name="bank_template" class="form-control mb-3" rows="10">{system_bank_template}</textarea>

                    <label>
                        {__("lang_form_shortcodes")} <i class="la la-info-circle" title="{__("lang_modal_adminsettings_banktransfer3new")}"></i>
                    </label>
                    {literal}
                    <p>
                        <code><strong>{{user.name}}</strong>, <strong>{{user.email}}</strong>, <strong>{{user.country}}</strong>, <strong>{{order.price}}</strong></code>
                    </p>
                    {/literal}
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingssocialtitle")}</h2>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_form_settingssocial")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line336")}"></i>
                    </label>
                    <select name="social_auth" class="form-control">
                        <option value="1" {if system_social_auth < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if system_social_auth > 1}selected{/if}>{__("lang_form_disable")}</option> 
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_form_settingssocialplatforms")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line346")}"></i>
                    </label>
                    <select name="social_platforms[]" class="form-control" multiple>
                        <option value="facebook" {if $data.platforms.facebook}selected{/if}>{__("lang_and_settings_line349")}</option>
                        <option value="google" {if $data.platforms.google}selected{/if}>{__("lang_and_settings_line350")}</option> 
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_and_settings_line357")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line357_1")}"></i>
                    </label>
                    <input type="text" name="facebook_id" class="form-control" placeholder="{__("lang_and_settings_line359")}" value="{$data.system.facebook_id}">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_and_settings_line364")} <i class="la la-info-circle la-lg" title="{__("lang-and_settings_line364_1")}"></i>
                    </label>
                    <input type="text" name="facebook_secret" class="form-control" placeholder="{__("lang_and_settings_line366")}" value="{$data.system.facebook_secret}">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_and_settings_line371")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line371_1")}"></i>
                    </label>
                    <input type="text" name="google_id" class="form-control" placeholder="{__("lang_and_settings_line373")}" value="{$data.system.google_id}">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_and_settings_line378")} <i class="la la-info-circle la-lg" title="{__("lang-and_settings_line378_1")}"></i>
                    </label>
                    <input type="text" name="google_secret" class="form-control" placeholder="{__("lang_and_settings_line380")}" value="{$data.system.google_secret}">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingssecurity")}</h2>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_adminsettings_authredi")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_authredidesc")}"></i>
                    </label>
                    <select name="auth_redirect" class="form-control">
                        <option value="1" {if $data.system.auth_redirect < 2}selected{/if}>{__("lang_form_adminsettings_authredihomepage")}</option>
                        <option value="2" {if $data.system.auth_redirect > 1}selected{/if}>{__("lang_form_adminsettings_authredidashboard")}</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_systemsettingshomepage")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line100")}"></i>
                    </label>
                    <select name="homepage" class="form-control">
                        <option value="1" {if $data.system.homepage < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.homepage > 1}selected{/if}>{__("lang_form_disable")}</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingsreg")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line70")}"></i>
                    </label>
                    <select name="registrations" class="form-control">
                        <option value="1" {if $data.system.registrations < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.registrations > 1}selected{/if}>{__("lang_form_disable")}</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_adminsettings_defaultcoun")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_defaultcoundesc")}"></i>
                    </label>
                    <select name="default_country" class="form-control" data-live-search="true">
                        {foreach $data.countries as $country}
                        <option value="{$country@key}" data-tokens="{strtolower($country)}" {if $country@key eq system_default_country}selected{/if}>{$country} ({$country@key})</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_adminsettings_defaulttimezo")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_defaulttimezodesc")}"></i>
                    </label>
                    <select name="default_timezone" class="form-control" data-live-search="true">
                        {foreach $data.timezones as $timezone}
                        <option value="{strtolower($timezone)}" {if strtolower($timezone) eq system_default_timezone}selected{/if}>{strtoupper($timezone)}</option>
                        {/foreach}
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_adminsettings_mailingtrig")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_mailingtrigdesc")}"></i>
                    </label>
                    <select name="mailing_triggers[]" class="form-control" data-live-search="true" zender-select-mailing multiple>
                        <option value="0" {if in_array("0", split(system_mailing_triggers, ","))}selected{/if}>{__("lang_form_disable")}</option>
                        <option value="register_confirm" {if in_array("register_confirm", split(system_mailing_triggers, ","))}selected{/if}>register_confirm</option>
                        <option value="admin_new_user" {if in_array("admin_new_user", split(system_mailing_triggers, ","))}selected{/if}>admin_new_user</option>  
                        <option value="admin_new_device" {if in_array("admin_new_device", split(system_mailing_triggers, ","))}selected{/if}>admin_new_device</option>  
                        <option value="admin_new_whatsapp" {if in_array("admin_new_whatsapp", split(system_mailing_triggers, ","))}selected{/if}>admin_new_whatsapp</option>  
                        <option value="admin_package_buy" {if in_array("admin_package_buy", split(system_mailing_triggers, ","))}selected{/if}>admin_package_buy</option>  
                        <option value="admin_credits_buy" {if in_array("admin_credits_buy", split(system_mailing_triggers, ","))}selected{/if}>admin_credits_buy</option>  
                        <option value="admin_voucher_redeem" {if in_array("admin_voucher_redeem", split(system_mailing_triggers, ","))}selected{/if}>admin_voucher_redeem</option>  
                        <option value="admin_payout_request" {if in_array("admin_payout_request", split(system_mailing_triggers, ","))}selected{/if}>admin_payout_request</option>  
                        <option value="admin_build_gateway" {if in_array("admin_build_gateway", split(system_mailing_triggers, ","))}selected{/if}>admin_build_gateway</option>  
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_adminsettings_adminemail")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_adminemaildesc")}"></i>
                    </label>
                    <input type="text" name="mailing_address" class="form-control" placeholder="admin@email.com" value="{$data.system.mailing_address}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_adminsettings_recaptchatitle")} <i class="la la-info-circle la-lg" title="{__("lang_form_adminsettings_recaptchadesc")}"></i>
                    </label>
                    <select name="recaptcha" class="form-control">
                        <option value="1" {if $data.system.recaptcha < 2}selected{/if}>{__("lang_form_enable")}</option>
                        <option value="2" {if $data.system.recaptcha > 1}selected{/if}>{__("lang_form_disable")}</option>  
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingsrecaptchakey")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line413")}"></i>
                    </label>
                    <input type="text" name="recaptcha_key" class="form-control" placeholder="{__("lang_and_settings_line415")}" value="{$data.system.recaptcha_key}">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        {__("lang_form_settingsrecaptchasecret")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line420")}"></i>
                    </label>
                    <input type="text" name="recaptcha_secret" class="form-control" placeholder="{__("lang_and_settings_line422")}" value="{$data.system.recaptcha_secret}">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_form_settingspagination")}</h2>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_form_settingssentpage")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line318")}"></i>
                    </label>
                    <input type="number" name="sent_limit" class="form-control" placeholder="{__("lang_and_settings_line320")}" value="{$data.system.sent_limit}">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        {__("lang_form_settingsreceivedpage")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line325")}"></i>
                    </label>
                    <input type="number" name="received_limit" class="form-control" placeholder="{__("lang_and_settings_line327")}" value="{$data.system.received_limit}">
                </div>

                <div class="form-group mb-0 col-12">
                    <h2 class="text-uppercase">{__("lang_forms_systemsettings_messagestitle")}</h2>
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingsmessagemin")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line293")}"></i>
                    </label>
                    <input type="number" name="message_min" class="form-control" placeholder="{__("lang_and_settings_line295")}" value="{$data.system.message_min}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_form_settingsmessagemax")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line300")}"></i>
                    </label>
                    <input type="number" name="message_max" class="form-control" placeholder="{__("lang_and_settings_line302")}" value="{$data.system.message_max}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_forms_systemsettings_partnercommission")} <i class="la la-info-circle la-lg" title="{__("lang_forms_systemsettings_partnercommissionhelp")}"></i>
                    </label>
                    <input type="number" name="partner_commission" class="form-control" placeholder="eg. 3" value="{$data.system.partner_commission}">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        {__("lang_forms_systemsettings_partnerminimum")} <i class="la la-info-circle la-lg" title="{__("lang_forms_systemsettings_partnerminimumhelp")}"></i>
                    </label>
                    <input type="number" name="partner_minimum" class="form-control" placeholder="eg. 100" value="{$data.system.partner_minimum}">
                </div>

                <div class="form-group col-md-12">
                    <label>
                        {__("lang_form_settingsmessagemark")} <i class="la la-info-circle la-lg" title="{__("lang_and_settings_line307")}"></i>
                    </label>
                    <input type="text" name="message_mark" class="form-control" placeholder="{__("lang_and_settings_line309")}" value="{$data.system.message_mark}">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> {__("lang_btn_save")}
            </button>
        </div>
    </div>
</form>