<div class="container-fluid" zender-wrapper zender-authenticate-page zender-wrapper-authenticate>
    <div class="row justify-content-center align-items-center" zender-authenticate-form>
        <div class="col-md-4">
            <div class="mb-4 text-center" zender-authenticate-logo>
                <a href="{site_url}"><img src="{get_image("logo_light")}"></a>
            </div>

            <div class="auth-form card">
                <div class="card-header justify-content-center">
                    <h4 class="card-title">{__("lang_plugin_header_selectmethod")}</h4>
                </div>

                <div class="card-body">
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-center">
                                    {if $data.stripe_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="stripe">
                                        <img src="{_assets("images/payment/stripe.png")}">
                                    </a>
                                    {/if}

                                    {if $data.instamojo_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="instamojo">
                                        <img src="{_assets("images/payment/instamojo.png")}">
                                    </a>
                                    {/if}

                                    {if $data.payumoney_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="payumoney">
                                        <img src="{_assets("images/payment/payumoney.png")}">
                                    </a>
                                    {/if}

                                    {if $data.bitpay_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="bitpay">
                                        <img src="{_assets("images/payment/bitpay.png")}">
                                    </a>
                                    {/if}
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="text-center">
                                    {if $data.paytm_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="paytm">
                                        <img src="{_assets("images/payment/paytm.png")}">
                                    </a>
                                    {/if}

                                    {if $data.paystack_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="paystack">
                                        <img src="{_assets("images/payment/paystack.png")}">
                                    </a>
                                    {/if}

                                    {if $data.razorpay_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="razorpay">
                                        <img src="{_assets("images/payment/razorpay.png")}">
                                    </a>
                                    {/if}

                                    {if $data.mercadopago_enable eq "true"}
                                    <a href="#" class="pay-btn btn-block" zender-pay="mercadopago">
                                        <img src="{_assets("images/payment/mercadopago.png")}">
                                    </a>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <a href="{site_url}/paypage/cancel?hash={logged_hash}" class="btn btn-danger p-3" zender-nav>
                            <i class="la la-times-circle la-lg"></i> {__("lang_btn_plugin_cancelorderpayment")}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://js.paystack.co/v1/inline.js"></script>
{if $data.payumoney_test eq "true"}
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="{get_image("logo_light")}"></script>
{else}
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="{get_image("logo_light")}"></script>
{/if}