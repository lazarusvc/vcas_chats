<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_and_dash_pg_whats_line10")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-coffee la-lg"></i> {__("lang_pages_wacampaigns_header")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="{__("lang_table_btn_refresh")}" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="{__("lang_and_what_sent_15")}" zender-toggle="zender.whatsapp.bulk">
                            <i class="la la-mail-bulk la-lg"></i> {__("lang_and_what_sent_17")}
                        </button>
                        <button class="btn btn-primary lift" title="{__("lang_and_what_sent_20")}" zender-toggle="zender.whatsapp.excel">
                            <i class="la la-file-excel la-lg"></i> {__("lang_btn_bulkexcel")}
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
                    <table class="table table-striped" zender-table="whatsapp.campaigns"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>