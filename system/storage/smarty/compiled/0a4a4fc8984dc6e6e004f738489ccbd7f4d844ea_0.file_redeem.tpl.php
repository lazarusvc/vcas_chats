<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:34:51
  from 'file:dashboard/widgets/modals/redeem.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fb8b530ee4_35298921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a4a4fc8984dc6e6e004f738489ccbd7f4d844ea' => 
    array (
      0 => 'dashboard/widgets/modals/redeem.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6663fb8b530ee4_35298921 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-ticket la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body pb-0">
            <div class="p-3">
                <div class="form-row">
                    <div class="form-group col-12">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_voucher");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_redeem_line18");?>
"></i>
                        </label>
                        <input type="text" name="code" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_redeem_line20");?>
">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_redeem");?>

            </button>
        </div>
    </div>
</form><?php }
}
