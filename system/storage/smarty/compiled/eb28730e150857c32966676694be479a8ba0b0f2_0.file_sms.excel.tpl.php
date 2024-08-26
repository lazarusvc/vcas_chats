<?php
/* Smarty version 5.1.0, created on 2024-07-26 09:48:53
  from 'file:dashboard/widgets/modals/sms.excel.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66a362f53dd8d6_65137177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb28730e150857c32966676694be479a8ba0b0f2' => 
    array (
      0 => 'dashboard/widgets/modals/sms.excel.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66a362f53dd8d6_65137177 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
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
                <div class="form-group col-md-4">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campagin_formname");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campagin_formhelp");?>
"></i>
                        </label>
                        <input type="text" name="campaign" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_campaign_formplaceholder");?>
">
                    </div>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_excelfile");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe17");?>
"></i>
                    </label>
                    <small class="text-danger">
                       <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe20");?>
 <a href="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('site_url')("uploads/system/sms_sample.xlsx");?>
" target="_blank"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe20_1");?>
</a>
                    </small>
                    <input type="file" name="excel" class="form-control pb-5">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe27");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe27_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe30");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['shorteners'], 'shortener');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('shortener')->key => $_smarty_tpl->getVariable('shortener')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('shortener');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('shortener')->key;?>
"><?php echo $_smarty_tpl->getValue('shortener')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('shortener', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                       <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe39");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe39_1");?>
"></i>
                    </label>
                    <select name="mode" class="form-control mb-3" zender-select-mode>
                        <option value="1" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe42");?>
</option>
                        <option value="2"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe43");?>
</option>
                    </select>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_template");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe47");?>
"></i>
                    </label>
                    <select class="form-control" data-live-search="true" zender-select-template>
                        <option value="none" data-tokens="no none 0" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_none");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['templates'], 'template');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('template')->key => $_smarty_tpl->getVariable('template')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('template');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('template')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('template')['token'];?>
" data-format="<?php echo $_smarty_tpl->getValue('template')['format'];?>
"><?php echo $_smarty_tpl->getValue('template')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('template', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-8">
                    <div zender-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe60");?>
"></i>
                        </label>
                        <select name="devices[]" class="form-control mb-3" data-live-search="true" zender-device-list multiple>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach2DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach2Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" device-id="<?php echo $_smarty_tpl->getValue('device')['id'];?>
" online-id="<?php echo $_smarty_tpl->getValue('device')['online_id'];?>
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div zender-credits-mode>
                        <label>
                           <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe70");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe70_1");?>
"></i>
                        </label>
                        <select name="gateways[]" class="form-control mb-3" data-live-search="true" zender-device-list multiple>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['gateways'], 'gateway');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gateway')->value) {
$foreach3DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('gateway')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('gateway')['name'];?>
"><?php echo $_smarty_tpl->getValue('gateway')['name'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['devicesGlobal'])) {?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['gateways'])) {?>
                            <option data-divider="true"></option>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devicesGlobal'], 'device');
$_smarty_tpl->getVariable('device')->index = -1;
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach4DoElse = false;
$_smarty_tpl->getVariable('device')->index++;
$foreach4Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" device-id="<?php echo $_smarty_tpl->getValue('device')['id'];?>
" online-id="<?php echo $_smarty_tpl->getValue('device')['online_id'];?>
" data-content="<i class='flag-icon flag-icon flag-icon-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('device')['country']);?>
'></i> <?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<span class='text-lowercase'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('truncate')($_smarty_tpl->getValue('device')['owner'],15,"...");?>
</span>) <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span> <span class='badge badge-primary'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
</span>" <?php if (empty($_smarty_tpl->getValue('data')['gateways']) && $_smarty_tpl->getVariable('device')->index < 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
)</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach4Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message");?>
 <span class="badge text-white bg-primary" zender-counter-view></span>
                    </label>
                    
                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_whatsbulk_79");?>
" zender-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_sms_btnevent_formcontent_btntranslate");?>

                    </button>

                    <textarea name="message" class="form-control mb-3" rows="7" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message_placeholder");?>
" zender-counter></textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe97");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe97_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_135");?>
</small> <code><?php echo $_smarty_tpl->getValue('data')['spintax_sample']['main'];?>
</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_literal_spintaxdesc2"),array("<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['good'])."</strong>","<strong>".((string)$_smarty_tpl->getValue('data')['spintax_sample']['bad'])."</strong>"));?>
</small>
                    </p>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_shortcodes");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_exe109");?>
"></i>
                    </label>
                    
                    <p>
                        <code><strong>{{phone}}</strong>, <strong>{{sim}}</strong>, <strong>{{priority}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong>, <strong>{{unsubscribe.command}}</strong>, <strong>{{unsubscribe.link}}</strong>, <strong>{{custom.YourVariable}}</strong></code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_send");?>

            </button>
        </div>
    </div>
</form><?php }
}
