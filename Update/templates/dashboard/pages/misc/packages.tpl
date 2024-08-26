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
                            <i class="la la-cubes la-lg"></i> {__("lang_modal_packages_title")}
                        </h1>
                    </div>
                </div> 
            </div> 
        </div>
    </div> 

    <div class="container">
        <div class="row">
            {foreach $data.packages as $package}
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h6 class="text-uppercase text-center text-muted my-4">
                            {$package.name}
                        </h6>

                        <div class="row no-gutters align-items-center justify-content-center">
                            {if $package.id < 2}
                            <div class="col-auto">
                                <div class="h1 mb-5 mt-5">{__("lang_form_freefor")}</div>
                            </div>
                            {else}
                            <div class="col-auto">
                                <div class="display-2 mb-0">
                                    {$package.price} <small>{strtoupper(system_currency)}</small>
                                </div>
                            </div>
                            {/if}
                        </div> 

                        {if $package.id > 1}
                        <div class="h6 text-uppercase text-center text-muted mb-5">
                            {__("lang_form_monthly")}
                        </div>
                        {/if}

                        <div class="mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_dashboard_packagesmodal_smssend")}</small> <small>{if $package.send_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.send_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line36")}</small> <small>{if $package.receive_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.receive_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line41")}</small> <small>{if $package.wa_send_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.wa_send_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line46")}</small> <small>{if $package.wa_receive_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.wa_receive_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line51")}</small> <small>{if $package.ussd_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.ussd_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line56")}</small> <small>{if $package.notification_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.notification_limit)} {if system_reset_mode < 2}{__("lang_default_pricecolumns_dailylabel")}{else}{__("lang_default_pricecolumns_monthlylabel")}{/if}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line61")}</small> <small>{if $package.scheduled_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.scheduled_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line66")}</small> <small>{if $package.contact_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.contact_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line71")}</small> <small>{if $package.key_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.key_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line76")}</small> <small>{if $package.webhook_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.webhook_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line81")}</small> <small>{if $package.action_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.action_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line86")}</small> <small>{if $package.device_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.device_limit)}{/if}</small>
                                </li>
                                <li class="list-group-item d-flex align-items-center justify-content-between px-0">
                                    <small>{__("lang_and_package_line91")}</small> <small>{if $package.wa_account_limit < 1}{__("lang_default_pricecolumns_unlimitedlabel")}{else}{number_format($package.wa_account_limit)}{/if}</small>
                                </li>
                            </ul>
                        </div>

                        <button class="btn btn-block btn-primary" {if $package.id > 1}zender-toggle="zender.add.duration/{$package.id}"{/if} {if $package.id < 2}disabled{/if}>
                            {if $package.id < 2}
                                <i class="la la-bolt"></i> {__("lang_btn_free")}
                            {else}
                                <i class="la la-credit-card"></i> {__("lang_btn_purchase")}
                            {/if}
                        </button>

                    </div>
                </div>
            </div>
            {/foreach}
        </div> 

        {include "../../modules/footer.block.tpl"}
    </div>
</div>