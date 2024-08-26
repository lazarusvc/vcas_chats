<div class="main-content" zender-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_and_dashboard_modules_header_line45")}
                        </h6>

                        <h1 class="header-title">
                            <i class="la la-chart-bar la-lg me-1"></i> {__("lang_dashboard_overall_overview")}
                        </h1>
                    </div>

                    <div class="col-auto">
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_admin_btncron_tooltip")}" zender-toggle="zender.setup.cron">
                            <i class="la la-broom la-lg"></i> {__("lang_admin_btncron_btn")}
                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_pages_admin_cachehelp")}" zender-action="clear">
                            <i class="la la-trash la-lg"></i> {__("lang_administration_landing_btncache")}
                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_pages_admin_tokenrefreshbutthelp")}" zender-action="token">
                            <i class="la la-refresh la-lg"></i> {__("lang_pages_admin_tokenrefreshbutt")}
                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_pages_admin_themehelp")}" zender-toggle="zender.admin.theme">
                            <i class="la la-palette la-lg"></i> {__("lang_dashboard_btn_theme")}
                        </button>

                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_pages_admin_systemsettingshelp")}" zender-toggle="zender.admin.settings">
                            <i class="la la-cog la-lg"></i> {__("lang_dashboard_btn_settings")}
                        </button>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <h4 class="card-header">
                        {__("lang_admin_gateway_title")}
                    </h4>

                    <div class="card-body">
                        <h4 class="text-uppercase">
                            {__("lang_admin_gateway_status")}: {if $data.gateway}<span class="badge badge-success">{__("lang_admin_gateway_uploaded")}</span>{else}<span class="badge badge-danger">{__("lang_admin_gateway_notuploaded")}</span>{/if}
                        </h4>

                        <h4 class="text-uppercase">
                            {__("lang_administration_landing_build")}: <span class="badge badge-success text-lowercase">v{system_apk_version}</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" zender-build>
                            <i class="la la-hammer la-lg"></i> {__("lang_dashboard_btn_build")}
                        </button>

                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" zender-toggle="zender.admin.builder">
                            <i class="la la-tools la-lg"></i> {__("lang_dashboard_btn_buildsettings")}
                        </button>
                    </div>
                </div>

                <div class="card">
                    <h4 class="card-header">
                        {__("lang_administration_landing_system")}
                    </h4>

                    <div class="card-body">
                        <h4 class="text-uppercase">
                            {__("lang_admin_update_installed")}: <span class="badge badge-success text-lowercase">v{version}</span>
                        </h4>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" zender-toggle="zender.system.update">
                            <i class="la la-terminal la-lg"></i> {__("lang_admin_update_btn")}
                        </button>

                        <button class="btn btn-primary btn-sm lift mb-2 mb-lg-0" zender-support>
                            <i class="la la-headset la-lg"></i>
                            <span class="d-none d-sm-inline">{__("lang_dashboard_btn_support")}</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_dashboard_adminoverview_topcountries5")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.countries"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_dashboard_adminoverview_browsers")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.browsers"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_dashboard_adminoverview_os")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.os"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_administration_default_messages")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.messages"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_administration_default_utilities")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.utilities"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_administration_default_subscriptions")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.subscriptions"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_administration_default_credits")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.credits"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">
                            {__("lang_pages_administration_commissionstitle")}
                        </h4>

                        <span class="text-muted me-3">
                            {__("lang_dashboard_admin_tabdefaultmessageslast")}
                        </span>
                    </div>

                    <div class="card-body">
                        <iframe class="w-100 border-0" zender-iframe="{site_url}/widget/chart/admin.commissions"></iframe>
                    </div>
                </div>
            </div>
        </div> 

        {include "../../modules/footer.block.tpl"}
    </div>
</div>