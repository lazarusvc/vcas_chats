<div class="card">
    <div class="card-header">
        <h4 class="card-title"><i class="la la-tasks"></i> {__("lang_tabs_wapage_queuetitle")}</h4>

        <div class="float-right">
            <button class="btn btn-lg btn-primary" title="{__("lang_table_btn_refresh")}" zender-action="refresh">
                <i class="la la-refresh la-lg"></i>
            </button>

            <button class="btn btn-lg btn-danger" title="{__("lang_and_what_sent_6")}" zender-trash="whatsapp.sent">
                <i class="la la-stream la-lg"></i>
            </button>

            <button class="btn btn-lg btn-primary" title="{__("lang_and_what_sent_10")}" zender-toggle="zender.whatsapp.quick">
                <i class="la la-telegram la-lg"></i>
                <span class="d-none d-sm-inline">{__("lang_and_what_sent_12")}</span>
            </button>
        </div>
    </div>

    <div class="card-body">
        <div class="dt-responsive table-responsive">
            <table class="table table-striped" zender-table></table>
        </div>
    </div>
</div>