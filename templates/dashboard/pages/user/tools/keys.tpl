<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_dashboard_tools_title")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-key la-lg"></i> {__("lang_dashboard_tools_tabkeystitle")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="{site_url("dashboard/docs/api")}" class="btn btn-primary lift" title="{__("lang_and_tool_key_6")}" zender-nav>
                            <i class="la la-book la-lg"></i> {__("lang_and_tool_key_8")}
                        </a>
                        <button class="btn btn-primary lift" title="{__("lang_and_tool_key_11")}" zender-toggle="zender.add.apikey">
                            <i class="la la-key la-lg"></i> {__("lang_dashboard_btn_addkey")}
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
                    <table class="table" zender-table="tools.keys"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>