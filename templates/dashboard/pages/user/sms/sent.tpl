<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            {__("lang_dashpages_sms_headertitle")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-telegram la-lg"></i> {__("lang_and_droid_sent_3")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="{__("lang_table_btn_refresh")}" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift" title="{__("lang_and_droid_sent_6")}" zender-trash="sms.sent">
                            <i class="la la-stream la-lg"></i>
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
                    <table class="table" zender-table="sms.sent"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>