<div class="main-content" zender-wrapper>
    {include "../../modules/header.block.tpl"}

    <div class="header">
        <div class="container">
            <div class="header-body">
                <div class="row align-items-end">
                    <div class="col">
                        <h6 class="header-pretitle">
                            {__("lang_and_dash_pg_doc_line10")}
                        </h6>
                        <h1 class="header-title">
                            <i class="la la-code-branch la-lg"></i> {__("lang_and_doc_webhook_3")}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <iframe class="pb-3 w-100 border-0" zender-iframe="{site_url}/templates/_mkdocs/webhooks/index.html"></iframe>
            </div>
        </div>

        {include "../../modules/footer.block.tpl"}
    </div>
</div>