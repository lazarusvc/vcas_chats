<?php
/* Smarty version 5.1.0, created on 2024-07-30 12:50:19
  from 'file:dashboard/widgets/modals/add.shortener.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a8d37ba4d6c9_23027870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dae7e27efabd2d4a79232bba2d7bb2515c34f9a1' => 
    array (
      0 => 'dashboard/widgets/modals/add.shortener.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a8d37ba4d6c9_23027870 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-link la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line24_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_short_line27");?>
 <a href="https://github.com/titansys/zender-shorteners" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_btnall_visitlink");?>
</a> 
                    </small>
                    <input type="file" name="controller" class="form-control pb-5">
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
