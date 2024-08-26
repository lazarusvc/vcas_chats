<?php
/* Smarty version 5.1.0, created on 2024-06-03 08:54:04
  from 'file:dashboard/pages/auth/forgot.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665d142c5a52a1_09373684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1f4b53e52c18a2a48f96d6a3864750267ac647c' => 
    array (
      0 => 'dashboard/pages/auth/forgot.tpl',
      1 => 1717159113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665d142c5a52a1_09373684 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/pages/auth';
?><div class="container-fluid" zender-wrapper>
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 align-self-center px-lg-6 my-5">
            <div class="display-4 text-center mb-3">
                <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" zender-nav>
                    <img src="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')(logged_theme_color == "dark" ? "logo_light" : "logo_dark");?>
">
                </a>
            </div>

            <p class="text-muted text-center mb-4">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_authenticate_forgotpagetagline");?>

            </p>

            <form zender-authenticate-forgot>
                <div class="form-group">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_emailaddress");?>
</label>
                    <input type="email" name="email" class="form-control" placeholder="name@domain.com">
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
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_retrieve");?>

                </button>

                <p class="text-center">
                    <small class="text-muted text-center">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_authenticate_loginpagedonthave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth/register");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> zender-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_pg_log_line54");?>
</a>
                    </small>
                </p>
            </form>
        </div>

        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
            <div class="bg-cover h-100 min-vh-100 mt-n1 mr-n3 position-relative" style="background-image: url(<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('get_image')("bg");?>
);">
                <div class="position-absolute w-100 h-100 bg-cover-layer"></div>
            </div>
        </div>
    </div>
</div><?php }
}
