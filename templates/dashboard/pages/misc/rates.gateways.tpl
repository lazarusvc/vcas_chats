<div class="main-content" zender-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            {__("lang_dashboard_title_default")}
                        </h6>

                        <h1 class="header-title">
                            <i class="la la-comments-dollar la-lg"></i> {__("lang_and_dash_pg_rates_line10")}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="dt-responsive table-responsive">
                    <table class="table" zender-table="rates.gateways"></table>
                </div>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>