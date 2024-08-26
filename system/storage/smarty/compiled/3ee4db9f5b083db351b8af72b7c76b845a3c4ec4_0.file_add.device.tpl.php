<?php
/* Smarty version 5.1.0, created on 2024-06-10 16:32:51
  from 'file:dashboard/widgets/modals/add.device.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_66671ca335a2d0_96041643',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ee4db9f5b083db351b8af72b7c76b845a3c4ec4' => 
    array (
      0 => 'dashboard/widgets/modals/add.device.tpl',
      1 => 1717150521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66671ca335a2d0_96041643 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/widgets/modals';
?><div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title">
            <i class="la la-android la-lg"></i> <?php echo $_smarty_tpl->getValue('title');?>

        </h3>

        <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    
    <div class="modal-body">
        <p class="text-justify"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_one");?>
</p>

        <h5 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_two");?>
</h5>
        <p class="pl-3 text-justify"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_three");?>
</p>
        <p class="text-center">
            <a href="#" class="btn btn-primary lift" zender-download-gateway>
                <i class="la la-android la-lg text-success"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_download");?>
<br>
            </a>

            <div class="row">
                <div class="col"><hr></div>
                <div class="col-auto"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevicescandl");?>
</div>
                <div class="col"><hr></div>
            </div>

            <div id="zender-qrcode-download">
                <?php echo '<script'; ?>
>zender.qrcode("<?php echo $_smarty_tpl->getValue('data')['apk_url'];?>
", 150, 150, "zender-qrcode-download");<?php echo '</script'; ?>
>
            </div>
        </p>

        <h5 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_four");?>
</h5>
        <p class="pl-3 text-justify">
            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_five");?>


            <div id="zender-qrcode">
                <?php echo '<script'; ?>
>zender.qrcode("<?php echo $_smarty_tpl->getValue('data')['hash'];?>
", 220, 220);<?php echo '</script'; ?>
>
            </div>
        </p>

        <h5 class="text-uppercase"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_six");?>
</h5>
        <p class="pl-3 text-justify"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_form_adddevice_seven");?>
</p>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">
            <i class="la la-check-circle la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_btn_done");?>

        </button>
    </div>
</div><?php }
}