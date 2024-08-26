<?php
/* Smarty version 5.1.0, created on 2024-06-08 09:33:16
  from 'file:dashboard/pages/user/sms/scheduled.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_6663fb2c8020b4_02878744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3257937c5e042a1c38ab066c6cd7c229e16a77fa' => 
    array (
      0 => 'dashboard/pages/user/sms/scheduled.tpl',
      1 => 1717159114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
))) {
function content_6663fb2c8020b4_02878744 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/home/eazysms1/public_html/templates/dashboard/pages/user/sms';
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_dashpages_sms_headertitle");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-clock la-lg"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_messages_scheduled_title");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_modals_addnewsmssched_tooltip");?>
" zender-toggle="zender.add.sms.scheduled">
                            <i class="la la-calendar me-1"></i> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('__')("lang_messages_scheduled_schedule");?>

                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table table-striped" zender-table="sms.scheduled"></table>
                </div>
            </div>
        </div>
        <?php $_smarty_tpl->renderSubTemplate("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </div>
</div><?php }
}
