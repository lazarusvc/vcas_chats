<div class="container-fluid" zender-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="{site_url("dashboard/auth")}" zender-nav>
                    <img src="{get_image(logged_theme_color eq "dark" ? "logo_light" : "logo_dark")}">
                </a>
            </div>

            <p class="text-muted text-center mb-4">
                {__("lang_dashboard_authenticate_loginpagetagline")}
            </p>

            <div zender-login-confirm>
                {if system_social_auth < 2}
                <div class="btn-group d-flex align-items-center social-auth-btn">
                    {if in_array("facebook", split(system_social_platforms, ","))}
                    <a href="{site_url}/social/facebook" class="btn btn-primary">
                        <i class="la la-facebook la-lg mr-2"></i>{__("lang_and_dash_pg_log_line14")}
                    </a>
                    {/if}
                    {if in_array("google", split(system_social_platforms, ","))}
                    <a href="{site_url}/social/google" class="btn btn-danger">
                        <i class="la la-google la-lg mr-2"></i>{__("lang_and_dash_pg_log_line17")}
                    </a>
                    {/if}
                </div>

                <div class="row mt-4">
                    <div class="col"><hr></div>
                    <div class="col-auto">{__("lang_form_loginor")}</div>
                    <div class="col"><hr></div>
                </div>
                {/if}

                <form zender-authenticate-login>
                    <div class="form-group">
                        <label>{__("lang_form_emailaddress")}</label>
                        <input type="email" name="email" class="form-control" placeholder="name@domain.com">
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label>{__("lang_form_password")}</label>

                            </div>
                            <div class="col-auto">
                                <a href="{site_url("dashboard/auth/forgot")}" class="form-text small text-muted" zender-nav>
                                    {__("lang_form_forgotpass")}
                                </a>
                            </div>
                        </div> 

                        <input type="password" name="password" class="form-control" placeholder="{__("lang_form_password")}">
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
                        {__("lang_btn_signin")}
                    </button>

                    <p class="text-center">
                        <small class="text-muted text-center">
                            {__("lang_dashboard_authenticate_loginpagedonthave")} <a href="{site_url("dashboard/auth/register")}" {if logged_theme_color eq "dark"}class="text-white"{/if} zender-nav>{__("lang_and_dash_pg_log_line54")}</a>
                        </small>
                    </p>
                </form>
            </div>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url({get_image("bg")});">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div>