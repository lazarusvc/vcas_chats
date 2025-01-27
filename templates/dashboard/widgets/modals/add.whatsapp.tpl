<div class="modal-content">
    <div class="modal-header">
        <h3 class="modal-title" zender-wa-link-title>
            <i class="la la-whatsapp la-lg"></i> {$title}
        </h3>
    </div>
    
    <div class="modal-body mb-2">
        <div class="text-center">
            <div id="wa_intro">
                <p class="px-5">{___(__("lang_widgets_addwhatsapp_newmodal"), [$data.linkbtn])}</p>
                <div class="row">
                    <div class="col-12">
                        <select class="form-control mb-3 w-50" zender-wa-server>
                            {foreach $data.wa_servers as $wa_server}
                            <option value="{$wa_server.id}">{$wa_server.name}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary mb-3" zender-whatsapp-link>
                            <i class="la la-chain"></i> {__("lang_and_whatsapp_line16")}
                        </button>

                        <button class="btn btn-danger mb-3" data-dismiss="modal">
                            <i class="la la-close"></i> {__("lang_widgets_addwhatsapp_newmodal4")}
                        </button>
                    </div>
                </div>
            </div>

            <div id="wa_link">
                <div class="mt-2 mb-3" id="wa_qrcode"></div>
                <h1 id="wa_countdown"></h1>
            </div>
        </div>
    </div>
</div>