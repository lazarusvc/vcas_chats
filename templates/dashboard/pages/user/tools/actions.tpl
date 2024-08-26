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
                            <i class="la la-robot la-lg"></i> {__("lang_and_tool_act_3")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="{site_url("dashboard/docs/actions")}" class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_tool_act_6")}" zender-nav>
                            <i class="la la-book la-lg"></i> {__("lang_and_tool_act_8")}
                        </a>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_tool_act_11")}" zender-toggle="zender.add.hook">
                            <i class="la la-wave-square la-lg"></i> {__("lang_and_tool_act_13")}
                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_tool_act_16")}" zender-toggle="zender.add.autoreply">
                            <i class="la la-reply la-lg"></i> {__("lang_and_tool_act_18")}
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
                    <table class="table" zender-table="tools.actions"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>