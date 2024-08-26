<div class="container-fluid" zender-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="{site_url("dashboard/auth")}" zender-nav>
                    <img src="{get_image(logged_theme_color eq "dark" ? "logo_light" : "logo_dark")}">
                </a>
            </div>

            <p class="text-muted text-center mb-4">
                {__("lang_dashboard_authenticate_forgotpagetagline")}
            </p>

            <form zender-authenticate-forgot>
                <div class="form-group">
                    <label>{__("lang_form_emailaddress")}</label>
                    <input type="email" name="email" class="form-control" placeholder="name@domain.com">
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
                    {__("lang_btn_retrieve")}
                </button>

                <p class="text-center">
                    <small class="text-muted text-center">
                        {__("lang_dashboard_authenticate_loginpagedonthave")} <a href="{site_url("dashboard/auth/register")}" {if logged_theme_color eq "dark"}class="text-white"{/if} zender-nav>{__("lang_and_dash_pg_log_line54")}</a>
                    </small>
                </p>
            </form>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url({get_image("bg")});">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div>