<?php
/* Smarty version 4.4.1, created on 2024-05-31 13:19:37
  from '/home/eazysms1/public_html/templates/dashboard/widgets/modals/system.update.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659c0599732e5_07044466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f809b2554b83b99191fd3416655e0f4265123d1f' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/widgets/modals/system.update.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659c0599732e5_07044466 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo __("lang_and_sysup17");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_sysup17_1");?>
"></i>
                    </label>
                    <input type="file" name="update" class="form-control pb-5">
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
