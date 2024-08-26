<?php
/* Smarty version 4.4.1, created on 2024-05-31 11:27:34
  from '/home/eazysms1/public_html/templates/dashboard/widgets/modals/add.waserver.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a616aef677_86704576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fb3e317129070312327531c077e3fc42be09581' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/widgets/modals/add.waserver.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659a616aef677_86704576 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>
                        <?php echo __("lang_form_waserver_addeditserver_name");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_form_waserver_addeditserver_nametagline");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. Free Server">
                </div>

                <div class="form-group col-md-3">
                    <label>
                        <?php echo __("lang_form_waserver_addeditserver_accounts");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_form_waserver_addeditserver_accountstagline");?>
"></i>
                    </label>
                    <input type="number" name="accounts" class="form-control" placeholder="50">
                </div>
                
                <div class="form-group col-md-4">
                    <label>
                        <?php echo __("lang_form_waserver_addeditserver_packages");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_form_waserver_addeditserver_packagestagline");?>
"></i>
                    </label>
                    <select name="packages[]" class="form-control" data-live-search="true" multiple>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['packages'], 'package');
$_smarty_tpl->tpl_vars['package']->index = -1;
$_smarty_tpl->tpl_vars['package']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
$_smarty_tpl->tpl_vars['package']->do_else = false;
$_smarty_tpl->tpl_vars['package']->index++;
$__foreach_package_0_saved = $_smarty_tpl->tpl_vars['package'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['package']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['package']->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['package'] = $__foreach_package_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <label>
                        <?php echo __("lang_form_waserver_addeditserver_serverurl");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_forms_systemsettings_waserverhelp");?>
"></i>
                    </label>
                    <input type="text" name="url" class="form-control" placeholder="eg. http://127.0.0.1">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo __("lang_form_waserver_addeditserver_serverport");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_forms_systemsettings_waporthelp");?>
"></i>
                    </label>
                    <input type="text" name="port" class="form-control" placeholder="eg. 7001">
                </div>

                <div class="form-group col-md-12">
                    <label>
                        <?php echo __("lang_form_waserver_secretkey");?>
 <i class="la la-info-circle la-lg" title="<?php echo __("lang_form_waserver_secretkeydesc");?>
"></i>
                    </label>
                    <input type="text" name="secret" class="form-control" placeholder="eg. Xg40V0ynJscNzZywSU8MwpPjaCi2BC">
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo __("lang_btn_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
