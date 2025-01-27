<?php
/* Smarty version 5.1.0, created on 2024-08-10 15:12:10
  from 'file:dashboard/widgets/modals/add.webhook.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66b7bb8a658f56_58444735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '699a3e50285cbcab2e176d576d58b2899a986bed' => 
    array (
      0 => 'dashboard/widgets/modals/add.webhook.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66b7bb8a658f56_58444735 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-key la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_webhookname_placeholder");?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line24_1");?>
"></i>
                    </label>
                    <select name="events[]" class="form-control" multiple>
                        <option value="sms" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line27");?>
</option>
                        <option value="whatsapp"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line28");?>
</option>
                        <option value="ussd"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line29");?>
</option>
                        <option value="notifications"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line30");?>
</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_webhookurl");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line36");?>
"></i>
                    </label>
                    <input type="text" name="url" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_web_line38");?>
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
