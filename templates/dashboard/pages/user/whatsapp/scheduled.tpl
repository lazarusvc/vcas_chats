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
                            <i class="la la-clock la-lg"></i> {__("lang_messages_scheduled_title")}
                        </h1>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary lift" title="{__("lang_modals_addnewwasched_tooltip")}" zender-toggle="zender.add.whatsapp.scheduled">
                            <i class="la la-calendar la-lg"></i> {__("lang_and_what_sched_12")}
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
                    <table class="table table-striped" zender-table="whatsapp.scheduled"></table>
                </div>
            </div>
        </div>
        {include "../../../modules/footer.block.tpl"}
    </div>
</div>