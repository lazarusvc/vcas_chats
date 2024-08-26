<div class="container-fluid" zender-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="{site_url("dashboard/auth")}" zender-nav>
                    <img src="{get_image(logged_theme_color eq "dark" ? "logo_light" : "logo_dark")}">
                </a>
            </div>

            <p class="text-muted text-center mb-3">
                {__("lang_dashboard_authenticate_regpagetagline")}
            </p>

            {if !$data.confirm}
            <div zender-register-confirm>
                <form zender-authenticate-register>
                    <div class="form-group">

                        <label>{__("lang_form_fullname")}</label>

                        <input type="text" name="name" class="form-control" placeholder="{__("lang_form_fullname")}">
                    </div>

                    <div class="form-group">

                        <label>{__("lang_form_emailaddress")}</label>

                        <input type="text" name="email" class="form-control" placeholder="name@domain.com">
                    </div>

                    <div class="form-group">
                        <label>{__("lang_form_password")}</label>

                        <input type="password" name="password" class="form-control" placeholder="{__("lang_form_password")}">
                    </div>

                    <div class="form-group">
                        <label>{__("lang_form_cpassword")}</label>

                        <input type="password" name="cpassword" class="form-control" placeholder="{__("lang_form_cpassword")}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{__("lang_form_usertimezone")}</label>
                                <select name="timezone" class="form-control" data-live-search="true">
                                    {foreach $data.timezones as $timezone}
                                    <option value="{strtolower($timezone)}" {if strtolower($timezone) eq system_default_timezone}selected{/if}>{strtoupper($timezone)}</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{__("lang_form_countrycode")}</label>
                                <select name="country" class="form-control" data-live-search="true">
                                    {foreach $data.countries as $country}
                                    <option value="{$country@key}" data-tokens="{strtolower($country)}" {if $country@key eq system_default_country}selected{/if}>{$country} ({$country@key})</option>
                                    {/foreach}
                                </select>
                            </div>
                        </div>
                    </div>

                    {if system_recaptcha < 2}
                    {if !empty(system_recaptcha_key) || !empty(system_recaptcha_secret)}
                    <div class="form-group text-center">
                        <div class="g-recaptcha w-100" data-sitekey="{system_recaptcha_key}"></div>
                        <script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
                    </div>
                    {/if}
                    {/if}

                    <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                        {__("lang_btn_signup")}
                    </button>

                    <p class="text-center">
                        <small class="text-muted text-center">
                            {__("lang_dashboard_authenticate_regpagehave")} <a href="{site_url("dashboard/auth")}" {if logged_theme_color eq "dark"}class="text-white"{/if} zender-nav>{__("lang_btn_signin")}</a>
                        </small>
                    </p>
                </form>
            </div>
            {else}
            <div class="alert alert-success text-justify mb-3 pb-0">
                <p>{__("lang_form_registerconfirm_desc")}</p>
            </div>

            <p class="text-center">
                <small class="text-muted text-center">
                    {__("lang_dashboard_authenticate_regpagehave")} <a href="{site_url("dashboard/auth")}" {if logged_theme_color eq "dark"}class="text-white"{/if} zender-nav>{__("lang_btn_signin")}</a>
                </small>
            </p>
            {/if}
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url({get_image("bg")});">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div>