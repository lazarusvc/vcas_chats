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
                            <i class="la la-users la-lg"></i> {__("lang_pages_wagroups_header")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift" title="{__("lang_and_what_rev_6")}" zender-trash="whatsapp.groups">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="{__("lang_and_what_sent_10")}" zender-toggle="zender.whatsapp.groups">
                            <i class="la la-layer-group la-lg"></i> {__("lang_pages_wagroups_fetchbtn")}
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
                    <table class="table table-striped" zender-table="whatsapp.groups"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>