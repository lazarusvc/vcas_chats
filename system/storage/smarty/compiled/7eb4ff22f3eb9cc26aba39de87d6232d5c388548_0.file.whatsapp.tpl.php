<?php
/* Smarty version 4.4.1, created on 2024-05-31 12:15:17
  from '/home/eazysms1/public_html/templates/dashboard/pages/user/hosts/whatsapp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659b1457b8309_10678776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7eb4ff22f3eb9cc26aba39de87d6232d5c388548' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/user/hosts/whatsapp.tpl',
      1 => 1717150520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../modules/header.block.tpl' => 1,
    'file:../../../modules/footer.block.tpl' => 1,
  ),
),false)) {
function content_6659b1457b8309_10678776 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo __("lang_dashboard_userhosts_hostbreadcrumb");?>

                        </h6>
                        <h1 class="header-title">
                            <i class="la la-whatsapp la-lg"></i> <?php echo __("lang_tabs_whatsappaccounts_titleheader");?>

                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="<?php echo __("lang_table_btn_refresh");?>
" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="<?php echo __("lang_and_what_accnt_6");?>
" relink-unique="none" wa-link-url="link" wa-link-title="<?php echo __("lang_widget_waaddaccount_title");?>
" zender-toggle="zender.add.whatsapp">
                            <i class="la la-whatsapp la-lg"></i> <?php echo __("lang_and_what_accnt_8");?>

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
                    <table class="table" zender-table="whatsapp.accounts"></table>
                </div>
            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
