<?php
/* Smarty version 5.1.0, created on 2024-07-22 06:54:40
  from 'file:dashboard/widgets/modals/edit.package.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_669df420eeb3a4_98410026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e14f451f66379a586bacc3b8488c57472390b85c' => 
    array (
      0 => 'dashboard/widgets/modals/edit.package.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669df420eeb3a4_98410026 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-cube la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

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
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['name'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packageprice");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line24");?>
"></i>
                    </label>
                    <small class="text-muted">
                        (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtoupper')(system_currency);?>
)
                    </small>
                    <input type="number" name="price" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line29");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['price'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagefootermark");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line34");?>
"></i>
                    </label>
                    <select name="footermark" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['package']['footermark'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['package']['footermark'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_hiddenselect");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line44");?>
"></i>
                    </label>
                    <select name="hidden" class="form-control">
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['package']['hidden'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_enable");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['package']['hidden'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_disable");?>
</option>
                    </select>
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line53");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line58");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line58_1");?>
"></i>
                    </label>
                    <input type="number" name="send_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line60");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['send_limit'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line65");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line65_1");?>
"></i>
                    </label>
                    <input type="number" name="receive_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line67");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['receive_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line72");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line72_1");?>
"></i>
                    </label>
                    <input type="number" name="ussd_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line74");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['ussd_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line79");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line79_1");?>
"></i>
                    </label>
                    <input type="number" name="notification_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line81");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['notification_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagedevice");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line86");?>
"></i>
                    </label>
                    <input type="number" name="device_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line88");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['device_limit'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line92");?>
</h4>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagesend");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line97");?>
"></i>
                    </label>
                    <input type="number" name="wa_send_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line99");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['wa_send_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagereceive");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line104");?>
"></i>
                    </label>
                    <input type="number" name="wa_receive_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line106");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['wa_receive_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line111");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line111_1");?>
"></i>
                    </label>
                    <input type="number" name="wa_account_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line113");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['wa_account_limit'];?>
">
                </div>

                <div class="form-group mb-0 col-12">
                    <h4 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line117");?>
</h4>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_package_contactslimit");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line122");?>
"></i>
                    </label>
                    <input type="number" name="contact_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line124");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['contact_limit'];?>
">
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line129");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line129_1");?>
"></i>
                    </label>
                    <input type="number" name="scheduled_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line131");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['scheduled_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagekey");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line136");?>
"></i>
                    </label>
                    <input type="number" name="key_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line138");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['key_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_packagehook");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line143");?>
"></i>
                    </label>
                    <input type="number" name="webhook_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line145");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['webhook_limit'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line150");?>
 <i class="la la-info-circle la-lg" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line150_1");?>
"></i>
                    </label>
                    <input type="number" name="action_limit" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_pack_line152");?>
" value="<?php echo $_smarty_tpl->getValue('data')['package']['action_limit'];?>
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
