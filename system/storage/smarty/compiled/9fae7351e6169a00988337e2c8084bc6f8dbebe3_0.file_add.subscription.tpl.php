<?php
/* Smarty version 5.1.0, created on 2024-07-04 16:33:15
  from 'file:dashboard/widgets/modals/add.subscription.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6686c0bb8ae6e1_12580000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fae7351e6169a00988337e2c8084bc6f8dbebe3' => 
    array (
      0 => 'dashboard/widgets/modals/add.subscription.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6686c0bb8ae6e1_12580000 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-crown la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_addsubscriptionuser");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_subs_line17");?>
"></i>
                    </label>
                    <select name="user" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['users'], 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->key => $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('user');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('user')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('user')['token'];?>
" data-subtext="<?php echo $_smarty_tpl->getValue('user')['email'];?>
"><?php echo $_smarty_tpl->getValue('user')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('user', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_addsubscriptionpackage");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_subs_line28");?>
"></i>
                    </label>
                    <select name="package" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['packages'], 'package');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('package')->key => $_smarty_tpl->getVariable('package')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('package');
?>
                        <?php if ($_smarty_tpl->getValue('package')['id'] > 1) {?>
                        <option value="<?php echo $_smarty_tpl->getVariable('package')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('package')['name']);?>
"><?php echo $_smarty_tpl->getValue('package')['name'];?>
</option>
                        <?php }?>
                        <?php
$_smarty_tpl->setVariable('package', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_subscriptionmonth");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_subs_line41");?>
"></i>
                    </label>
                    <input type="number" name="duration" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_subs_line43");?>
" min="1" value="1">
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
