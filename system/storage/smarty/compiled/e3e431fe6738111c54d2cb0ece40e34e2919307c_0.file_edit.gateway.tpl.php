<?php
/* Smarty version 5.1.0, created on 2024-08-01 10:55:49
  from 'file:dashboard/widgets/modals/edit.gateway.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ab5ba51adde2_30551262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3e431fe6738111c54d2cb0ece40e34e2919307c' => 
    array (
      0 => 'dashboard/widgets/modals/edit.gateway.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ab5ba51adde2_30551262 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-code la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['gateway']['name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line24_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_gate_line27");?>
 <a href="https://github.com/titansys/zender-gateways" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_btnall_visitlink");?>
</a> 
                    </small>
                    <input type="file" name="controller" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line31");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line31_1");?>
"></i>
                    </label>
                    <select name="callback" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['gateway']['callback'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line34");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['gateway']['callback'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line35");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line41");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line41_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line44");?>

                    </small>
                    <input type="text" name="callback_id" class="form-control" value="<?php echo $_smarty_tpl->getValue('data')['gateway']['callback_id'];?>
" disabled>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line51");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line51_1");?>
"></i>
                    </label>
                    <small class="text-danger">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line54");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("uploads/system/gateway.json");?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_gate_line54_1");?>
</a> 
                    </small>

                    <div zender-codeflask><?php echo $_smarty_tpl->getValue('data')['gateway']['pricing'];?>
</div>
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
