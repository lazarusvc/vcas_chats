<?php
/* Smarty version 5.1.0, created on 2024-07-22 06:52:23
  from 'file:dashboard/widgets/modals/add.role.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_669df3979fde25_28942284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5740611ea73c5e5ae2733600516d53a1094e4955' => 
    array (
      0 => 'dashboard/widgets/modals/add.role.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669df3979fde25_28942284 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-shield la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_role_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_role_line19");?>
">
                </div>
                
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_permissions");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_role_line24");?>
"></i>
                    </label>
                    <select name="permissions[]" class="form-control" data-live-search="true" multiple>
                                                <option value="manage_users" selected>manage_users</option>
                        <option value="manage_roles" selected>manage_roles</option>
                        <option value="manage_packages">manage_packages</option>
                        <option value="manage_vouchers">manage_vouchers</option>
                        <option value="manage_subscriptions">manage_subscriptions</option>
                        <option value="manage_transactions">manage_transactions</option>
                        <option value="manage_payouts">manage_payouts</option>
                        <option value="manage_widgets">manage_widgets</option>
                        <option value="manage_pages">manage_pages</option>
                        <option value="manage_marketing">manage_marketing</option>
                        <option value="manage_languages">manage_languages</option>
                        <option value="manage_gateways">manage_gateways</option>
                        <option value="manage_shorteners">manage_shorteners</option>
                        <option value="manage_plugins">manage_plugins</option>
                        <option value="manage_templates">manage_templates</option>
                        <option value="manage_api">manage_api</option>
                    </select>
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
