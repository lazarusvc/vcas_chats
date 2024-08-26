<?php
/* Smarty version 5.1.0, created on 2024-08-01 22:15:34
  from 'file:dashboard/widgets/modals/edit.whatsapp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ac414669c648_83172558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a25ab55c7716fada0a84ae778c1d5f40bbb94106' => 
    array (
      0 => 'dashboard/widgets/modals/edit.whatsapp.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ac414669c648_83172558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_receiveoptiontitle");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_receiveoptiondesc");?>
"></i>
                    </label>
                    <select name="receive_chats" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['account']['receive_chats'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['account']['receive_chats'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randominterval");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randomintervalhelp");?>
"></i>
                    </label>
                    <select name="random_send" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['account']['random_send'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['account']['random_send'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randommin");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randomminhelp");?>
"></i>
                    </label>

                    <input type="number" name="random_min" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_dev_line41");?>
" value="<?php echo $_smarty_tpl->getValue('data')['account']['random_min'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randommax");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_editwhatsapp_randommaxhelp");?>
"></i>
                    </label>

                    <input type="number" name="random_max" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_dev_line49");?>
" value="<?php echo $_smarty_tpl->getValue('data')['account']['random_max'];?>
">
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
