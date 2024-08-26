<?php
/* Smarty version 4.4.1, created on 2024-05-31 13:24:59
  from '/home/eazysms1/public_html/templates/dashboard/widgets/modals/add.whatsapp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659c19bf1eda9_69363535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca3175c43d8332449c8ec9e0da613a1b125b21a1' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/widgets/modals/add.whatsapp.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6659c19bf1eda9_69363535 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" zender-wa-link-title>
            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        </h3>
    </div>
    
    <div class="modal-body mb-2">
        <div class="text-center">
            <div id="wa_intro">
                <p class="px-5"><?php echo ___(__("lang_widgets_addwhatsapp_newmodal"),array($_smarty_tpl->tpl_vars['data']->value['linkbtn']));?>
</p>
                <div class="row">
                    <div class="col-12">
                        <select class="form-control mb-3 w-50" zender-wa-server>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['wa_servers'], 'wa_server');
$_smarty_tpl->tpl_vars['wa_server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wa_server']->value) {
$_smarty_tpl->tpl_vars['wa_server']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['wa_server']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['wa_server']->value['name'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary mb-3" zender-whatsapp-link>
                            <i class="la la-chain"></i> <?php echo __("lang_and_whatsapp_line16");?>

                        </button>

                        <button class="btn btn-danger mb-3" data-dismiss="modal">
                            <i class="la la-close"></i> <?php echo __("lang_widgets_addwhatsapp_newmodal4");?>

                        </button>
                    </div>
                </div>
            </div>

            <div id="wa_link">
                <div class="mt-2 mb-3" id="wa_qrcode"></div>
                <h1 id="wa_countdown"></h1>
            </div>
        </div>
    </div>
</div><?php }
}
