<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_dashboard_userhosts_hostbreadcrumb")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-whatsapp la-lg"></i> {__("lang_tabs_whatsappaccounts_titleheader")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="{__("lang_table_btn_refresh")}" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="{__("lang_and_what_accnt_6")}" relink-unique="none" wa-link-url="link" wa-link-title="{__("lang_widget_waaddaccount_title")}" zender-toggle="zender.add.whatsapp">
                            <i class="la la-whatsapp la-lg"></i> {__("lang_and_what_accnt_8")}
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

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>