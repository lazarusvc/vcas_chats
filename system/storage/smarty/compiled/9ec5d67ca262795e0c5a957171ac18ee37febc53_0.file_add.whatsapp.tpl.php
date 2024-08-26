<?php
/* Smarty version 5.1.0, created on 2024-08-01 22:15:52
  from 'file:dashboard/widgets/modals/add.whatsapp.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66ac4158c328c7_02891096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ec5d67ca262795e0c5a957171ac18ee37febc53' => 
    array (
      0 => 'dashboard/widgets/modals/add.whatsapp.tpl',
      1 => 1722202016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66ac4158c328c7_02891096 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/u481720228/domains/vouchcast.com/public_html/chats/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" zender-wa-link-title>
            <i class="la la-whatsapp la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>
    </div>
    
    <div class="modal-body mb-2">
        <div class="text-center">
            <div id="wa_intro">
                <p class="px-5"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('___')($_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_widgets_addwhatsapp_newmodal"),array($_smarty_tpl->getValue('data')['linkbtn']));?>
</p>
                <div class="row">
                    <div class="col-12">
                        <select class="form-control mb-3 w-50" zender-wa-server>
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('data')['wa_servers'], 'wa_server');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('wa_server')->value) {
$foreach0DoElse = false;
?>
                            <option value="<?php echo $_smarty_tpl->getValue('wa_server')['id'];?>
"><?php echo $_smarty_tpl->getValue('wa_server')['name'];?>
</option>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary mb-3" zender-whatsapp-link>
                            <i class="la la-chain"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_and_whatsapp_line16");?>

                        </button>

                        <button class="btn btn-danger mb-3" data-dismiss="modal">
                            <i class="la la-close"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_widgets_addwhatsapp_newmodal4");?>

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
