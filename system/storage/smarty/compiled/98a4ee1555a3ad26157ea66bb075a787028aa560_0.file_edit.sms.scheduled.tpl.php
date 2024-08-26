<?php
/* Smarty version 5.1.0, created on 2024-07-23 18:12:04
  from 'file:dashboard/widgets/modals/edit.sms.scheduled.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_669fa51c45f887_34354851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98a4ee1555a3ad26157ea66bb075a787028aa560' => 
    array (
      0 => 'dashboard/widgets/modals/edit.sms.scheduled.tpl',
      1 => 1717159114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_669fa51c45f887_34354851 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-calendar la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_name");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line17");?>
"></i>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line19");?>
" value="<?php echo $_smarty_tpl->getValue('data')['scheduled']['name'];?>
">
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_schedule_schedule");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line24");?>
"></i>
                    </label>
                    <input type="text" name="schedule" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line26");?>
" value="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date')("m/d/Y h:i A",$_smarty_tpl->getValue('data')['scheduled']['send_date']);?>
" zender-datepicker-schedule>
                </div>

                <div class="form-group col-md-4">
                    <div zender-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_device");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line88");?>
"></i>
                        </label>
                        <select name="device" class="form-control" data-live-search="true">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devices'], 'device');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach0DoElse = false;
$foreach0Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" data-content="<?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span>" <?php if ($_smarty_tpl->getVariable('device')->key == $_smarty_tpl->getValue('data')['scheduled']['did']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach0Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>

                    <div zender-credits-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line99");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line99_1");?>
"></i>
                        </label>
                        <select name="gateway" class="form-control" data-live-search="true">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['gateways'], 'gateway');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('gateway')->key => $_smarty_tpl->getVariable('gateway')->value) {
$foreach1DoElse = false;
$foreach1Backup = clone $_smarty_tpl->getVariable('gateway');
?>
                            <option value="<?php echo $_smarty_tpl->getValue('gateway')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('gateway')['name'];?>
" <?php if ($_smarty_tpl->getVariable('gateway')->key == $_smarty_tpl->getValue('data')['scheduled']['gateway']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('gateway')['name'];?>
</option>
                            <?php
$_smarty_tpl->setVariable('gateway', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['devicesGlobal'])) {?>
                            <?php if (!empty($_smarty_tpl->getValue('data')['gateways'])) {?>
                            <option data-divider="true"></option>
                            <?php }?>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['devicesGlobal'], 'device');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('device')->key => $_smarty_tpl->getVariable('device')->value) {
$foreach2DoElse = false;
$foreach2Backup = clone $_smarty_tpl->getVariable('device');
?>
                            <option value="<?php echo $_smarty_tpl->getVariable('device')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('device')['token'];?>
" data-content="<i class='flag-icon flag-icon flag-icon-<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('strtolower')($_smarty_tpl->getValue('device')['country']);?>
'></i> <?php echo $_smarty_tpl->getValue('device')['name'];?>
 <span class='badge badge-<?php if ($_smarty_tpl->getValue('device')['status'] < 2) {?>success<?php } else { ?>danger<?php }?> device-status-<?php echo $_smarty_tpl->getValue('device')['id'];?>
'><?php if ($_smarty_tpl->getValue('device')['status'] < 2) {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_online");
} else {
echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_status_offline");
}?></span> <span class='badge badge-primary'><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
</span> (<?php echo $_smarty_tpl->getValue('device')['rate'];?>
 PHP)" <?php if ($_smarty_tpl->getVariable('device')->key == $_smarty_tpl->getValue('data')['scheduled']['did']) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('device')['name'];?>
 (<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsall_globalstatus");?>
)</option>
                            <?php
$_smarty_tpl->setVariable('device', $foreach2Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="form-group">
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_schedule_numbers");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line42");?>
"></i>
                        </label>
                        <textarea name="numbers" class="form-control" rows="3" placeholder="<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

<?php echo $_smarty_tpl->getValue('data')['number'];?>

"><?php echo $_smarty_tpl->getValue('data')['scheduled']['numbers'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_groups");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line55");?>
"></i>
                    </label>
                    <select name="groups[]" class="form-control" data-live-search="true" zender-select-groups multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')(0,$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['scheduled']['groups'],","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['groups'], 'group');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('group')->key => $_smarty_tpl->getVariable('group')->value) {
$foreach3DoElse = false;
$foreach3Backup = clone $_smarty_tpl->getVariable('group');
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('group')->key;?>
" data-tokens="<?php echo $_smarty_tpl->getValue('group')['token'];?>
" <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('in_array')($_smarty_tpl->getVariable('group')->key,$_smarty_tpl->getSmarty()->getModifierCallback('split')($_smarty_tpl->getValue('data')['scheduled']['groups'],","))) {?>selected<?php }?>><?php echo $_smarty_tpl->getValue('group')['name'];?>
</option>
                        <?php
$_smarty_tpl->setVariable('group', $foreach3Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_repeatdays_title");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_forms_repeatdays_tagline");?>
"></i>
                    </label>
                    <input type="number" name="repeat" class="form-control" placeholder="eg. 7" value="<?php echo $_smarty_tpl->getValue('data')['scheduled']['repeat'];?>
">

                    <label class="mt-3">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line67");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line67_1");?>
"></i>
                    </label>
                    <select name="mode" class="form-control" zender-select-mode>
                        <option value="1" <?php if ($_smarty_tpl->getValue('data')['scheduled']['mode'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line70");?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->getValue('data')['scheduled']['mode'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line71");?>
</option>
                    </select>

                    <div zender-device-mode>
                        <label>
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_sim");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line76");?>
"></i>
                        </label>
                        <select name="sim" class="form-control">
                            <option value="1" <?php if ($_smarty_tpl->getValue('data')['scheduled']['sim'] < 2) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line79");?>
</option>
                            <option value="2" <?php if ($_smarty_tpl->getValue('data')['scheduled']['sim'] > 1) {?>selected<?php }?>><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_edit_sms_line80");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-8">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message");?>
 <span class="badge text-white bg-primary" zender-counter-view></span>
                    </label>

                    <button class="btn btn-primary btn-sm" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_whatquick_50");?>
" zender-action="translate">
                        <i class="la la-language"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_sms_btnevent_formcontent_btntranslate");?>

                    </button>
                    
                    <textarea name="message" class="form-control mb-3" rows="7" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message_placeholder");?>
" zender-counter><?php echo $_smarty_tpl->getValue('data')['scheduled']['message'];?>
</textarea>

                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_131");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_131_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_sms_bulk_135");?>
</small> <code>Tom is a <strong>{good|bad}</strong> cat</code>
                    </p>
                    <p>
                        <small><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_literal_spintaxdesc2"),array("<strong>good</strong>","<strong>bad</strong>"));?>
</small>
                    </p>

                    <label><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_shortcodes");?>
</label>
                    
                    <p>
                        <code><strong>{{contact.name}}</strong>, <strong>{{contact.number}}</strong>, <strong>{{group.name}}</strong>, <strong>{{date.now}}</strong>, <strong>{{date.time}}</strong></code>
                    </p>
                    
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-clock la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_smsschedule_submit");?>

            </button>
        </div>
    </div>
</form><?php }
}
