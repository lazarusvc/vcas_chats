<div class="main-content" zender-wrapper>
    {include "../../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col mb-2 mb-lg-0">
                        <h6 class="header-pretitle">
                            {__("lang_dashboard_contacts_title")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-list la-lg"></i> {__("lang_dashboard_contacts_tabgroupstitle")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-danger lift" title="{__("lang_and_con_grp_6")}" zender-trash="contacts.groups">
                            <i class="la la-stream la-lg"></i>
                        </button>
                        <button class="btn btn-primary lift" title="{__("lang_and_con_grp_10")}" zender-toggle="zender.add.group">
                            <i class="la la-list la-lg"></i> {__("lang_dashboard_btn_addgroup")}
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
                    <table class="table" zender-table="contacts.groups"></table>
                </div>
            </div>
        </div>

        {include "../../../modules/footer.block.tpl"}
    </div>
</div>