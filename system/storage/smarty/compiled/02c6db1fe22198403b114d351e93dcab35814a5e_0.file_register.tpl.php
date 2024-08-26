<?php
/* Smarty version 5.1.0, created on 2024-06-02 11:52:52
  from 'file:dashboard/pages/auth/register.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665bec94b45e90_08797459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02c6db1fe22198403b114d351e93dcab35814a5e' => 
    array (
      0 => 'dashboard/pages/auth/register.tpl',
      1 => 1717159113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665bec94b45e90_08797459 (\Smarty\Template $_smarty_tpl) {
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

            <p class="text-muted text-center mb-3">
                <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_authenticate_regpagetagline");?>

            </p>

            <?php if (!$_smarty_tpl->getValue('data')['confirm']) {?>
            <div zender-register-confirm>
                <form zender-authenticate-register>
                    <div class="form-group">

                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_fullname");?>
</label>

                        <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_fullname");?>
">
                    </div>

                    <div class="form-group">

                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_emailaddress");?>
</label>

                        <input type="text" name="email" class="form-control" placeholder="name@domain.com">
                    </div>

                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_password");?>
</label>

                        <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_password");?>
">
                    </div>

                    <div class="form-group">
                        <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_cpassword");?>
</label>

                        <input type="password" name="cpassword" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_cpassword");?>
">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_usertimezone");?>
</label>
                                <select name="timezone" class="form-control" data-live-search="true">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
                                    <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == system_default_timezone) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_countrycode");?>
</label>
                                <select name="country" class="form-control" data-live-search="true">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('country');
?>
                                    <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
" <?php if ($_smarty_tpl->getVariable('country')->key == system_default_country) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
                                    <?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </select>
                            </div>
                        </div>
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
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_signup");?>

                    </button>

                    <p class="text-center">
                        <small class="text-muted text-center">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_authenticate_regpagehave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> zender-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_signin");?>
</a>
                        </small>
                    </p>
                </form>
            </div>
            <?php } else { ?>
            <div class="alert alert-success text-justify mb-3 pb-0">
                <p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_registerconfirm_desc");?>
</p>
            </div>

            <p class="text-center">
                <small class="text-muted text-center">
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashboard_authenticate_regpagehave");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("dashboard/auth");?>
" <?php if (logged_theme_color == "dark") {?>class="text-white"<?php }?> zender-nav><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_signin");?>
</a>
                </small>
            </p>
            <?php }?>
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
