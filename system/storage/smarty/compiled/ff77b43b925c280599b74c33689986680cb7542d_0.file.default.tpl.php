<?php
/* Smarty version 4.4.1, created on 2024-05-31 11:17:55
  from '/home/eazysms1/public_html/templates/dashboard/pages/user/default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.4.1',
  'unifunc' => 'content_6659a3d3380793_76390672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff77b43b925c280599b74c33689986680cb7542d' => 
    array (
      0 => '/home/eazysms1/public_html/templates/dashboard/pages/user/default.tpl',
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
function content_6659a3d3380793_76390672 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="main-content" zender-wrapper>
    <?php $_smarty_tpl->_subTemplateRender("file:../../modules/header.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            <?php echo __("lang_dashboard_title_default");?>

                        </h6>

                        <h1 class="header-title">
                            <i class="la la-chart-bar la-lg me-1"></i> <?php echo __("lang_dashboard_overall_overview");?>

                        </h1>
                    </div>

                    <div class="col-auto">
                        <a class="btn btn-primary lift mb-2 mb-lg-0" href="<?php echo site_url("dashboard/misc/rates.gateways");?>
" zender-nav>
                            <i class="la la-comments-dollar la-lg me-1"></i> <?php echo __("lang_dashboard_overview_gatewaysbtn");?>

                        </a>

                        <a class="btn btn-primary lift mb-2 mb-lg-0" href="<?php echo site_url("dashboard/misc/rates.partners");?>
" zender-nav>
                            <i class="la la-handshake la-lg me-1"></i> <?php echo __("lang_and_dash_pg_rates_line39");?>

                        </a>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo __("lang_dashboard_overview_user_totalsent");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['total']['sent'];?>

                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 la la-telegram la-lg text-muted mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo __("lang_dashboard_overview_user_totalreceived");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['total']['received'];?>

                                </span>
                            </div>

                            <div class="col-auto">
                                <span class="h2 la la-comment la-lg text-muted mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo __("lang_and_dash_pg_def_line178");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ratio']['success'];?>
%
                                </span>
                            </div>

                            <div class="col-auto">
                                <span class="h2 fe fe-trending-up text-success mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted mb-2">
                                    <?php echo __("lang_and_dash_pg_def_line190");?>

                                </h6>

                                <span class="h2 mb-0">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['ratio']['failed'];?>
%
                                </span>
                            </div>
                            <div class="col-auto">
                                <span class="h2 fe fe-trending-down text-danger mb-0"></span>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
        </div> 
        <div class="row">
            <div class="col-12 col-xl-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo __("lang_and_dashboard_pages_default_line58");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo __("lang_and_dashboard_pages_default_line60");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.messages"></iframe>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo __("lang_and_dashboard_pages_default_line74");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo __("lang_and_dashboard_pages_default_line76");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.events"></iframe>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            <?php echo __("lang_and_dashboard_pages_default_line90");?>

                        </h4>

                        <span class="text-muted me-3">
                            <?php echo __("lang_and_dashboard_pages_default_line92");?>

                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0"
                            zender-iframe="<?php echo site_url;?>
/widget/chart/dashboard.utilities"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-3">
                <div class="card">
                    <h3 class="card-header">
                        <?php echo __("lang_and_dashboard_pages_default_line109");?>

                    </h3>

                    <div class="card-body">
                        <h4 class="card-text">
                            <?php echo number_format($_smarty_tpl->tpl_vars['data']->value['balance']['earnings'],2);?>
 <?php echo strtoupper(system_currency);?>

                            <span class="badge bg-primary-soft"><?php echo __("lang_and_dashboard_pages_default_line117");?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary lift btn-sm" zender-toggle="zender.add.payout">
                            <i class="la la-money-check-alt me-1"></i> <?php echo __("lang_and_dashboard_pages_default_line131");?>

                        </button>
                    </div>
                </div>

                <div class="card">
                    <h3 class="card-header">
                        <?php echo __("lang_and_dashboard_pages_default_line140");?>

                    </h3>

                    <div class="card-body">
                        <h4 class="card-text">
                            <?php echo number_format($_smarty_tpl->tpl_vars['data']->value['balance']['credits'],2);?>
 <?php echo strtoupper(system_currency);?>

                            <span class="badge bg-primary-soft"><?php echo __("lang_and_dashboard_pages_default_line148");?>
</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary lift btn-sm" zender-toggle="zender.add.credits">
                            <i class="la la-coins me-1"></i> <?php echo __("lang_and_dashboard_pages_default_line162");?>

                        </button>
                    </div>
                </div>

                            </div>
        </div>

        <?php $_smarty_tpl->_subTemplateRender("file:../../modules/footer.block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

</div><?php }
}
