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
                            <i class="la la-android la-lg"></i> {__("lang_and_droid_dev_3")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <a href="{site_url("dashboard/docs/android")}" class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_droid_dev_6")}" zender-nav>
                            <i class="la la-book la-lg"></i> {__("lang_and_droid_dev_8")}
                        </a>
                        <a href="{site_url("dashboard/docs/partnership")}" class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_droid_dev_11")}" zender-nav>
                            <i class="la la-handshake la-lg"></i> {__("lang_and_droid_dev_13")}
                        </a>
                        <button class="btn btn-primary lift mb-2 mb-lg-0" title="{__("lang_and_droid_dev_16")}" zender-toggle="zender.add.device">
                            <i class="la la-android la-lg"></i> {__("lang_dashboard_btn_adddevice")}
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
                    <table class="table" zender-table="android.devices"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>