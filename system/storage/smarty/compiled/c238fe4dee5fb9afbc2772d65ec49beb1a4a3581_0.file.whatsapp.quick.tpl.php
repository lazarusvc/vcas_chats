<?php
/* Smarty version 4.4.1, created on 2024-05-31 12:19:32
  from '/home/eazysms1/public_html/templates/dashboard/widgets/modals/whatsapp.quick.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659b2446d3152_57491894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c238fe4dee5fb9afbc2772d65ec49beb1a4a3581' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/widgets/modals/whatsapp.quick.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659b2446d3152_57491894 (Smarty_Internal_Template $_smarty_tpl) {
?><form zender-form>
    <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title">
                <i class="la la-telegram la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

            </h3>

            <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        
        <div class="modal-body">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>
                        <?php echo __("lang_forms_whatsapp_phonegroupsname");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_whatsapp_phonegroupshelp");?>
"></i>
                    </label>
                    <input type="text" name="phone" class="form-control" placeholder="eg. <?php echo $_smarty_tpl->tpl_vars['data']->value['phone'];?>
" zender-whatsapp-autocomplete>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo __("lang_and_whatquick_36");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_whatquick_36_1");?>
"></i>
                    </label>
                    <select name="account" class="form-control" data-live-search="true" zender-wa-account-select>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['accounts'], 'account');
$_smarty_tpl->tpl_vars['account']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['account']->key => $_smarty_tpl->tpl_vars['account']->value) {
$_smarty_tpl->tpl_vars['account']->do_else = false;
$__foreach_account_0_saved = $_smarty_tpl->tpl_vars['account'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['account']->key;?>
" data-tokens="<?php echo $_smarty_tpl->tpl_vars['account']->value['token'];?>
"><?php echo $_smarty_tpl->tpl_vars['account']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['account'] = $__foreach_account_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>
                        <?php echo __("lang_and_whatquick_24");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_whatquick_24_1");?>
"></i>
                    </label>
                    <select name="shortener" class="form-control">
                        <option value="0" selected><?php echo __("lang_and_whatquick_27");?>
</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['shorteners'], 'shortener');
$_smarty_tpl->tpl_vars['shortener']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shortener']->key => $_smarty_tpl->tpl_vars['shortener']->value) {
$_smarty_tpl->tpl_vars['shortener']->do_else = false;
$__foreach_shortener_1_saved = $_smarty_tpl->tpl_vars['shortener'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['shortener']->key;?>
"><?php echo $_smarty_tpl->tpl_vars['shortener']->value['name'];?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['shortener'] = $__foreach_shortener_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
 
                <div class="form-group col-md-6">
                    <label>
                        <?php echo __("lang_form_message");?>
 <span class="badge text-white bg-primary" zender-counter-view></span>
                    </label>
                    
                    <button class="btn btn-primary btn-sm" title="<?php echo __("lang_and_whatsbulk_79");?>
" zender-action="translate">
                        <i class="la la-language"></i> <?php echo __("lang_sms_btnevent_formcontent_btntranslate");?>

                    </button>
                    
                    <textarea name="message" class="form-control mb-3" rows="5" placeholder="<?php echo __("lang_form_message_placeholder");?>
" zender-counter></textarea>

                    <label>
                        <?php echo __("lang_and_whatquick_55");?>
 <i class="la la-info-circle" title="<?php echo __("lang_and_whatquick_55_1");?>
"></i>
                    </label>
                    <p>
                        <small><?php echo __("lang_and_sms_bulk_135");?>
</small> <code><?php echo $_smarty_tpl->tpl_vars['data']->value['spintax_sample']['main'];?>
</code>
                    </p>
                    <p>
                        <small><?php echo ___(__("lang_form_literal_spintaxdesc2"),array("<strong>".((string)$_smarty_tpl->tpl_vars['data']->value['spintax_sample']['good'])."</strong>","<strong>".((string)$_smarty_tpl->tpl_vars['data']->value['spintax_sample']['bad'])."</strong>"));?>
</small>
                    </p>
                </div>

                <div class="form-group col-md-6">
                    <div class="row">
                        <div class="col-md-5">
                            <label>
                                <?php echo __("lang_form_waquicksend_prioritylabel");?>
 <i class="la la-info-circle" title="<?php echo __("lang_form_waquicksend_priorityhelp");?>
"></i>
                            </label>
                            <select name="priority" class="form-control">
                                <option value="1"><?php echo __("lang_form_yes");?>
</option>
                                <option value="2" selected><?php echo __("lang_form_no");?>
</option>
                            </select>
                        </div>

                        <div class="col-md-7">
                            <label>
                                <?php echo __("lang_forms_whatsapp_messagetype");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_whatsapp_messagetypehelp");?>
"></i>
                            </label>
                            <select name="message_type" class="form-control" zender-wa-type>
                                <option value="text" selected><?php echo __("lang_forms_whatsapp_typetext");?>
</option>
                                <option value="media"><?php echo __("lang_forms_whatsapp_typemedia");?>
</option>
                                <option value="document"><?php echo __("lang_forms_whatsapp_typedoc");?>
</option>
                            </select>
                        </div>
                    </div>

                    <div zender-wa-type-media>
                        <label>
                            <?php echo __("lang_forms_whatsapp_mediafile");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_whatsapp_mediafilehelp38");?>
"></i>
                        </label>
                        <input type="file" name="media_file" class="form-control pb-5">
                    </div>

                    <div zender-wa-type-document>
                        <label>
                            <?php echo __("lang_forms_whatsapp_docfile");?>
 <i class="la la-info-circle" title="<?php echo __("lang_forms_whatsapp_docfilehelp");?>
"></i>
                        </label>
                        <input type="file" name="doc_file" class="form-control pb-5">
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">
                <i class="la la-telegram la-lg"></i> <?php echo __("lang_btn_send");?>

            </button>
        </div>
    </div>
</form><?php }
}
