<?php
/* Smarty version 5.1.0, created on 2024-07-31 14:43:53
  from 'file:dashboard/widgets/modals/add.notify.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66aa3f99b82fc8_32391482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ed25c8bbb2b15219f82ea574ac13e3db45b7814' => 
    array (
      0 => 'dashboard/widgets/modals/add.notify.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66aa3f99b82fc8_32391482 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-chrome la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line17");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line17_1");?>
"></i>
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line19");?>
">
                </div>

                <div class="form-group col-12">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line24");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line24_1");?>
"></i>
                    </label>
                    <textarea name="message" class="form-control" rows="5" placeholder="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_message_placeholder");?>
"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line31");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line31_1");?>
"></i>
                    </label>
                    <select name="color" class="form-control">
                        <option value="1" data-content="Primary <span class='badge badge-primary'>color</span>" selected>Primary</option>
                        <option value="2" data-content="Success <span class='badge badge-success'>color</span>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line35");?>
</option>
                        <option value="3" data-content="Warning <span class='badge badge-warning'>color</span>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line36");?>
</option>
                        <option value="4" data-content="Danger <span class='badge badge-danger'>color</span>"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line37");?>
</option>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line43");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line43_1");?>
"></i>
                    </label>
                    <small class="text-mute">
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line46");?>

                    </small>
                    <input type="file" name="image" class="form-control pb-5">
                </div>

                <div class="form-group col-md-6">
                    <label>
                    <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line53");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line53_1");?>
"></i>
                    </label>
                    <select name="users[]" class="form-control" data-live-search="true" zender-select-users multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['users'], 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('user')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('user')['name'];?>
 <?php echo $_smarty_tpl->getValue('user')['email'];?>
"><?php echo $_smarty_tpl->getValue('user')['name'];?>
 (<?php echo $_smarty_tpl->getValue('user')['email'];?>
)</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>
                        <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line65");?>
 <i class="la la-info-circle" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_dash_not_line65_1");?>
"></i>
                    </label>
                    <select name="roles[]" class="form-control" data-live-search="true" zender-select-roles multiple>
                        <option value="0" data-tokens="None <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
" selected><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_select_multinone");?>
</option>
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['roles'], 'role');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('role')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('role')['id'];?>
" data-tokens="<?php echo $_smarty_tpl->getValue('role')['name'];?>
"><?php echo $_smarty_tpl->getValue('role')['name'];?>
</option>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                    </select>
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
