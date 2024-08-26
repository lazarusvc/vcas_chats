<?php
/* Smarty version 5.1.0, created on 2024-07-30 12:52:20
  from 'file:dashboard/widgets/modals/edit.language.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a8d3f4b04804_84672151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8b5bfbd486c6f9412fad3ce3a47047b04b1e47b' => 
    array (
      0 => 'dashboard/widgets/modals/edit.language.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a8d3f4b04804_84672151 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-address-book la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-4">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
</label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_lang_line17");?>
" value="<?php echo $_smarty_tpl->getValue('data')['language']['name'];?>
">
                </div>

                <div class="form-group col-4">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_countrycode");?>
</label>
                    <select name="iso" class="form-control" data-live-search="true">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['countries'], 'country');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('country')->key => $_smarty_tpl->getVariable('country')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('country');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('country')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('country'));?>
" <?php if ($_smarty_tpl->getVariable('country')->key == $_smarty_tpl->getValue('data')['language']['iso']) {?>selected<?php }?>><?php echo $_smarty_tpl->getVariable('country')->key;?>
</option>
                        <?php
$_smarty_tpl->setVariable('country', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-4">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_lang_line30");?>
</label>
                    <select name="rtl" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['language']['rtl'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_lang_line32");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['language']['rtl'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_lang_line33");?>
</option>
                    </select>
                </div>
                
                <div class="form-group col-12">
                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_translations");?>
</label>
                    <textarea name="translations" class="form-control" cols="100" rows="10" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_translations_placeholder");?>
"><?php echo $_smarty_tpl->getValue('data')['strings'];?>
</textarea>
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
