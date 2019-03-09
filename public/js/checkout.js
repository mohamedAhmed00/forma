jQuery(function (g) {
    if ("undefined" == typeof wc_checkout_params) return !1;
    var e = {
        init: function () {
            g(document.body).on("click", "a.showcoupon", this.show_coupon_form), g(document.body).on("click", ".woocommerce-remove-coupon", this.remove_coupon), g("form.checkout_coupon").hide().submit(this.submit)
        }, show_coupon_form: function () {
            return g(".checkout_coupon").slideToggle(400, function () {
                g(".checkout_coupon").find(":input:eq(0)").focus()
            }), !1
        }, submit: function () {
            var t = g(this);
            if (t.is(".processing")) return !1;
            t.addClass("processing").block({message: null, overlayCSS: {background: "#fff", opacity: .6}});
            var e = {
                security: wc_checkout_params.apply_coupon_nonce,
                coupon_code: t.find('input[name="coupon_code"]').val()
            };
            return g.ajax({
                type: "POST",
                url: wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%", "apply_coupon"),
                data: e,
                success: function (e) {
                    g(".woocommerce-error, .woocommerce-message").remove(), t.removeClass("processing").unblock(), e && (t.before(e), t.slideUp(), g(document.body).trigger("update_checkout", {update_shipping_method: !1}))
                },
                dataType: "html"
            }), !1
        }, remove_coupon: function (e) {
            e.preventDefault();
            var t = g(this).parents(".woocommerce-checkout-review-order"), o = g(this).data("coupon");
            t.addClass("processing").block({message: null, overlayCSS: {background: "#fff", opacity: .6}});
            var c = {security: wc_checkout_params.remove_coupon_nonce, coupon: o};
            g.ajax({
                type: "POST",
                url: wc_checkout_params.wc_ajax_url.toString().replace("%%endpoint%%", "remove_coupon"),
                data: c,
                success: function (e) {
                    g(".woocommerce-error, .woocommerce-message").remove(), t.removeClass("processing").unblock(), e && (g("form.woocommerce-checkout").before(e), g(document.body).trigger("update_checkout", {update_shipping_method: !1}), g("form.checkout_coupon").find('input[name="coupon_code"]').val(""))
                },
                error: function (e) {
                    wc_checkout_params.debug_mode && console.log(e.responseText)
                },
                dataType: "html"
            })
        }
    }, t = {
        init: function () {
            g(document.body).on("click", "a.showlogin", this.show_login_form)
        }, show_login_form: function () {
            return g("form.login, form.woocommerce-form--login").slideToggle(), !1
        }
    }, o = {
        init: function () {
            g(document.body).on("click", "a.woocommerce-terms-and-conditions-link", this.toggle_terms)
        }, toggle_terms: function () {
            if (g(".woocommerce-terms-and-conditions").length) return g(".woocommerce-terms-and-conditions").slideToggle(function () {
                var e = g(".woocommerce-terms-and-conditions-link");
                g(".woocommerce-terms-and-conditions").is(":visible") ? (e.addClass("woocommerce-terms-and-conditions-link--open"), e.removeClass("woocommerce-terms-and-conditions-link--closed")) : (e.removeClass("woocommerce-terms-and-conditions-link--open"), e.addClass("woocommerce-terms-and-conditions-link--closed"))
            }), !1
        }
    }, l = {
        init: function () {
            g(document.body).on("click", "a.showregister", this.show_register_form)
        }, show_register_form: function () {
            return g("form.register").slideToggle(), !1
        }
    };
     e.init(), t.init(), o.init(),l.init()
});
