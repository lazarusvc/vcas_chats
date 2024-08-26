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
                            <i class="la la-code la-lg"></i> {__("lang_and_admin_gate_3")}
                        </h1>
                    </div>
                    
                    <div class="col-auto">
                        <button class="btn btn-primary life" zender-toggle="zender.add.gateway">
                            <i class="la la-code la-lg"></i> {__("lang_and_admin_gate_8")}
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
                    <table class="table" zender-table="administration.gateways"></table>
                </div>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>