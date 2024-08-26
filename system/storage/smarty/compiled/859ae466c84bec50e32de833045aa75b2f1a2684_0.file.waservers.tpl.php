<?php
/* Smarty version 4.4.1, created on 2024-05-31 11:27:25
  from '/home/eazysms1/public_html/templates/dashboard/pages/admin/waservers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a60db84fb5_50214724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '859ae466c84bec50e32de833045aa75b2f1a2684' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/admin/waservers.tpl',
      1 => 1717150520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../modules/header.block.tpl' => 1,
    'file:../../modules/footer.block.tpl' => 1,
  ),
),false)) {
function content_6659a60db84fb5_50214724 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo __("lang_and_dashboard_modules_header_line45");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-whatsapp la-lg"></i> <?php echo __("lang_dashboard_admin_waserverstitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" zender-toggle="zender.add.waserver">
                            <i class="la la-cog la-lg"></i> <?php echo __("lang_dashboard_admin_waserversbtn_addserver");?>

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
                    <table class="table" zender-table="administration.waservers"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
