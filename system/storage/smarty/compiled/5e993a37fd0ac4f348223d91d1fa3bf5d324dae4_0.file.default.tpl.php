<?php
/* Smarty version 4.4.1, created on 2024-05-31 18:17:24
  from '/home/eazysms1/public_html/templates/dashboard/pages/auth/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3b48b28e3_11300051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e993a37fd0ac4f348223d91d1fa3bf5d324dae4' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/auth/default.tpl',
      1 => 1717150520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a3b48b28e3_11300051 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container-fluid" zender-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="<?php echo site_url("dashboard/auth");?>
" zender-nav>
                    <img src="<?php echo get_image("logo_dark");?>
">
                </a>
            </div>

            <p class="text-muted text-center mb-4">
                <?php echo __("lang_dashboard_authenticate_loginpagetagline");?>

            </p>

            <?php if (system_social_auth < 2) {?>
            <div class="btn-group d-flex align-items-center social-auth-btn">
                <?php if (in_array("facebook",explode(",",system_social_platforms))) {?>
                <a href="<?php echo site_url;?>
/social/facebook" class="btn btn-primary">
                    <i class="la la-facebook la-lg mr-2"></i><?php echo __("lang_and_dash_pg_log_line14");?>

                </a>
                <?php }?>
                <?php if (in_array("google",explode(",",system_social_platforms))) {?>
                <a href="<?php echo site_url;?>
/social/google" class="btn btn-danger">
                    <i class="la la-google la-lg mr-2"></i><?php echo __("lang_and_dash_pg_log_line17");?>

                </a>
                <?php }?>
            </div>

            <div class="row mt-4">
                <div class="col"><hr></div>
                <div class="col-auto"><?php echo __("lang_form_loginor");?>
</div>
                <div class="col"><hr></div>
            </div>
            <?php }?>

            <form zender-authenticate-login>
                <div class="form-group">
                    <label><?php echo __("lang_form_emailaddress");?>
</label>
                    <input type="email" name="email" class="form-control" placeholder="name@domain.com">
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label><?php echo __("lang_form_password");?>
</label>

                        </div>
                        <div class="col-auto">
                            <a href="<?php echo site_url("dashboard/auth/forgot");?>
" class="form-text small text-muted" zender-nav>
                                <?php echo __("lang_form_forgotpass");?>

                            </a>
                        </div>
                    </div> 

                    <input type="password" name="password" class="form-control" placeholder="<?php echo __("lang_form_password");?>
">
                </div>

                <?php if (system_recaptcha < 2) {?>
                <?php if (!empty(system_recaptcha_key) || !empty(system_recaptcha_secret)) {?>
                <div class="form-group text-center">
                    <div class="g-recaptcha w-100" data-sitekey="<?php echo system_recaptcha_key;?>
"></div>
                    <?php echo '<script'; ?>
 src="https://www.recaptcha.net/recaptcha/api.js" async defer><?php echo '</script'; ?>
>
                </div>
                <?php }?>
                <?php }?>

                <button type="submit" class="btn btn-lg btn-block btn-primary mb-3">
                    <?php echo __("lang_btn_signin");?>

                </button>

                <p class="text-center">
                    <small class="text-muted text-center">
                        <?php echo __("lang_dashboard_authenticate_loginpagedonthave");?>
 <a href="<?php echo site_url("dashboard/auth/register");?>
" zender-nav><?php echo __("lang_and_dash_pg_log_line54");?>
</a>
                    </small>
                </p>
            </form>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url(<?php echo get_image("bg");?>
);">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div><?php }
}
