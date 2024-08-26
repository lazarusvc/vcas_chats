<?php
/* Smarty version 5.1.0, created on 2024-08-17 17:51:17
  from 'file:dashboard/widgets/modals/import.contacts.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66c11b5530bb43_29801615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce35b7072241122f74cda34955855c927f6a54fc' => 
    array (
      0 => 'dashboard/widgets/modals/import.contacts.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66c11b5530bb43_29801615 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-file-excel la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_excelfile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_import_line17");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_import_line20");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("uploads/system/contacts_sample.xlsx");?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_import_line20_1");?>
</a>
                    </small>
                    <input type="file" name="excel" class="form-control pb-5">
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
