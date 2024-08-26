<?php
/* Smarty version 5.1.0, created on 2024-07-31 14:42:38
  from 'file:dashboard/widgets/modals/add.mailer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66aa3f4ef40943_14066773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7db235f944a7c566994bf2d6d7c76a45383be15' => 
    array (
      0 => 'dashboard/widgets/modals/add.mailer.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66aa3f4ef40943_14066773 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-chrome la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line19");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line24_1");?>
"></i>
                    </label>
                    <select name="users[]" class="form-control" data-live-search="true" zender-select-users multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['users'], 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('user')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('user')['name'];?>
 <?php echo $_smarty_tpl->getValue('user')['email'];?>
"><?php echo $_smarty_tpl->getValue('user')['name'];?>
 (<?php echo $_smarty_tpl->getValue('user')['email'];?>
)</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line36");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line36_1");?>
"></i>
                    </label>
                    <select name="roles[]" class="form-control" data-live-search="true" zender-select-roles multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['roles'], 'role');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('role')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('role')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('role')['name'];?>
"><?php echo $_smarty_tpl->getValue('role')['name'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line48");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line48_1");?>
"></i>
                    </label>
                    <div zender-codeflask><p><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_mail_line50");?>
</p></div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
