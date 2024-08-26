<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_and_dashboard_pages_android_line10")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-satellite-dish la-lg"></i> {__("lang_and_droid_ussd_3")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_table_btn_refresh")}" zender-action="refresh">
                            <i class="la la-refresh la-lg"></i>
                        </button>
                        <button class="btn btn-danger lift mb-2 mb-lg-0" title="{__("lang_and_droid_ussd_6")}" zender-trash="android.ussd">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-warning lift mb-2 mb-lg-0" title="{__("lang_and_droid_ussd_10")}" zender-clear-pending="ussd">
                            <i class="la la-exclamation-triangle la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_droid_ussd_14")}" zender-toggle="zender.add.ussd">
                            <i class="la la-telegram la-lg"></i> {__("lang_and_droid_ussd_16")}
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
                    <table class="table" zender-table="android.ussd"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>