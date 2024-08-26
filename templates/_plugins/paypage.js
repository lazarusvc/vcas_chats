/**
 * Zender - Multiple Payment Gateway Plugin
 * @author Titan Systems <mail@titansystems.ph>
 **/

(function($) {
    "use strict";
    $(function() {
        $(document).on("click", "[zender-pay]", function(e) {
            e.preventDefault();

            var provider = $(this).attr("zender-pay");

            if (provider == "stripe") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    var stripe = Stripe(response.stripe_key);
                    stripe.redirectToCheckout({
                        sessionId: response.id,
                    }).then(function(result) {
                        alert.danger(result.error.message);
                    });
                });
            } else if (provider == "paytm") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));
                    $("body").html(response.merchantForm);
                });
            } else if (provider == "mercadopago") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    if (response.status == "success") {
                        console.log(response.redirect_url);
                    } else {
                        alert.danger(response.message);
                    }
                });
            } else if (provider == "bitpay") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    if (response == null) {
                        alert.danger(lang_response_went_wrong);
                        return false;
                    }

                    if (response.status == "success") {
                        window.location.href = response.invoiceUrl;
                    } else {
                        alert.danger(lang_response_went_wrong);
                    }
                });
            } else if (provider == "instamojo") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    if (response.message == "success") {
                        window.location.href = response.longurl;
                    } else {
                        alert.danger(lang_response_went_wrong);
                    }
                });
            } else if (provider == "payumoney") {
                $.get(site_url + "/paypage/process/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    try {
                        bolt.launch(response, {
                            responseHandler: function(BOLT) {},
                            catchException: function(BOLT) {
                                alert.danger(BOLT.message);
                            }
                        });
                    } catch (e) {
                        alert.danger(lang_response_went_wrong);
                    }
                });
            } else if (provider == "razorpay") {
                $.get(site_url + "/paypage/info/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    var options = {
                        "key": response.data.razorpay_key,
                        "amount": response.data.amounts.INR.toFixed(2) * 100,
                        "currency": "INR",
                        "name": response.data.razorpay_merchant,
                        "handler": function(razorpay) {
                            var razorpayData = {
                                "razorpayPaymentId": razorpay.razorpay_payment_id,
                                "razorpayAmount": window.btoa(response.data.amounts.INR.toFixed(2) * 100)
                            };

                            $.post(site_url + "/paypage/process/" + provider, razorpayData, function(http) {
                                var result = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                                if (result.status == "captured") {
                                    var razorpayCallbackUrl = site_url + "/system/plugins/paypage/response.php?uhash=" + response.data.zender_hash + "&orderId=" + response.data.order_id;
                                    $("body").html("<form action='" + razorpayCallbackUrl + "' method='post'><input type='hidden' name='response' value='" + JSON.stringify(result) + "'><input type='hidden' name='paymentOption' value='razorpay'></form>");
                                    $("body form").submit();
                                }
                            });
                        },
                        "prefill": {
                            "name": response.data.payer_name,
                            "email": response.data.payer_email,
                        },
                        "theme": {
                            "color": "#4CAF50",
                        }
                    };

                    try {
                        var razor = new Razorpay(options);
                        razor.open();
                    } catch (e) {
                        alert.danger(lang_response_went_wrong);
                    }
                });
            } else if (provider == "paystack") {
                $.get(site_url + "/paypage/info/" + provider, function(http) {
                    var response = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                    var handler = PaystackPop.setup({
                        key: response.data.paystack_key,
                        email: response.data.payer_email,
                        amount: response.data.amounts.NGN.toFixed(2) * 100,
                        currency: "NGN",
                        callback: function(paystack) {
                            var paystackData = {
                                "paystackReferenceId": paystack.reference,
                                "paystackAmount": response.data.amounts.NGN.toFixed(2) * 100
                            };

                            $.post(site_url + "/paypage/process/" + provider, paystackData, function(http) {
                                var result = (typeof http === "string") ? JSON.parse(http) : JSON.parse(JSON.stringify(http));

                                if (result.status) {
                                    $("body").html("<form action='" + site_url + "/system/plugins/paypage/response.php?uhash=" + response.data.zender_hash + "' method='post'><input type='hidden' name='response' value='" + JSON.stringify(result) + "'><input type='hidden' name='paymentOption' value='paystack'></form>");
                                    $("body form").submit();
                                }
                            });
                        },
                        onClose: function() {}
                    });

                    handler.openIframe();
                });
            }
        });
    });
})(jQuery);