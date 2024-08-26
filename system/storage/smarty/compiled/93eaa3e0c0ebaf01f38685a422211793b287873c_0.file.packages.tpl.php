<?php
/* Smarty version 4.4.1, created on 2024-05-31 12:29:52
  from '/home/eazysms1/public_html/templates/dashboard/pages/admin/packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659b4b0335b79_82031847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93eaa3e0c0ebaf01f38685a422211793b287873c' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/admin/packages.tpl',
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
function content_6659b4b0335b79_82031847 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <i class="la la-cubes la-lg"></i> <?php echo __("lang_dashboard_admin_tabpackagestitle");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" zender-toggle="zender.add.package">
                            <i class="la la-cube la-lg"></i> <?php echo __("lang_dashboard_btn_addpackage");?>

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
                    <table class="table" zender-table="administration.packages"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
