<?php
/* Smarty version 5.1.0, created on 2024-07-29 10:00:12
  from 'file:dashboard/widgets/modals/user.settings.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a7a06c2b43b1_39111158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e34c3d84d09cce117f1023b9fcffadfc76e90a57' => 
    array (
      0 => 'dashboard/widgets/modals/user.settings.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a7a06c2b43b1_39111158 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-user-cog la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_avatar");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset17");?>
"></i>
                    </label>
                    <input type="file" name="avatar" class="form-control pb-5">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset24");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset26");?>
" value="<?php echo $_smarty_tpl->getValue('data')['user']['name'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_emailaddress");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset31");?>
"></i>
                    </label>
                    <input type="text" name="email" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset33");?>
" value="<?php echo $_smarty_tpl->getValue('data')['user']['email'];?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_user_settings_defthemecolortitle");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_user_settings_defthemecolortooltip");?>
"></i>
                    </label>
                    <select name="theme_color" class="form-control">
                        <option value="light" <?php if ($_smarty_tpl->getValue('data')['user']['theme_color'] == "light") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_theme_settings_defthemecolorlight");?>
</option>
                        <option value="dark" <?php if ($_smarty_tpl->getValue('data')['user']['theme_color'] == "dark") {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_theme_settings_defthemecolordark");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_usertimezone");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset38");?>
"></i>
                    </label>
                    <select name="timezone" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['timezones'], 'timezone');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('timezone')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone'));?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('timezone')) == $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')(logged_timezone)) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')($_smarty_tpl->getValue('timezone'));?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_clockformat");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_clockformathelp");?>
"></i>
                    </label>
                    <select name="clock_format" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['clock_format'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_clockformatselect1");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['clock_format'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_clockformatselect2");?>
</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_dateformat");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_dateformathelp");?>
"></i>
                    </label>
                    <select name="date_format" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] < 2) {?>selected<?php }?>>MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] == 2) {?>selected<?php }?>>DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] == 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD</option>
                        <option value="4" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_format'] > 3) {?>selected<?php }?>>YYYY<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
DD<?php echo $_smarty_tpl->getValue('data')['formatting']['container']['separator_selected'];?>
MM</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_dateseparator");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_edituser_dateseparatorhelp");?>
"></i>
                    </label>
                    <select name="date_separator" class="form-control" data-live-search="true">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] < 2) {?>selected<?php }?>>MM-DD-YYYY</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] == 2) {?>selected<?php }?>>MM/DD/YYYY</option>
                        <option value="3" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] == 3) {?>selected<?php }?>>MM.DD.YYYY</option>
                        <option value="4" <?php if ($_smarty_tpl->getValue('data')['formatting']['container']['date_separator'] > 3) {?>selected<?php }?>>MM DD YYYY</option>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset49");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset49_1");?>
"></i>
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
" <?php if ($_smarty_tpl->getVariable('country')->key == logged_country) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('country');?>
 (<?php echo $_smarty_tpl->getVariable('country')->key;?>
)</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset60");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset60_1");?>
"></i>
                    </label>
                    <select name="alertsound" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['user']['alertsound'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['user']['alertsound'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_changepass");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_uset70");?>
"></i>
                    </label>
                    <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_password_leave");?>
">
                </div>

                <input type="hidden" name="current_email" value="<?php echo $_smarty_tpl->getValue('data')['user']['email'];?>
">
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_save");?>

            </button>
        </div>
    </div>
</form><?php }
}
