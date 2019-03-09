!function (e) {
    function t(a) {
        if (n[a]) return n[a].exports;
        var i = n[a] = {i: a, l: !1, exports: {}};
        return e[a].call(i.exports, i, i.exports, t), i.l = !0, i.exports
    }

    var n = {};
    t.m = e, t.c = n, t.d = function (e, n, a) {
        t.o(e, n) || Object.defineProperty(e, n, {configurable: !1, enumerable: !0, get: a})
    }, t.n = function (e) {
        var n = e && e.__esModule ? function () {
            return e.default
        } : function () {
            return e
        };
        return t.d(n, "a", n), n
    }, t.o = function (e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "", t(t.s = 0)
}({
    0: function (e, t, n) {
        n("sV/x"), n("M7S7"), n("N2uV"), n("JvBp"), n("aCWX"), n("gkhq"), e.exports = n("xxDh")
    }, "4RbL": function (e, t) {
        window.braintreeLoaded = !1, window.loadBraintree = function () {
            if (!window.braintreeLoaded) {
                var e = document.querySelector("#braintree-card-details"),
                    t = $(".a-input__icon.a-icon").eq(0).is(":visible"), n = !1;
                if ("undefined" != typeof braintree && void 0 !== braintree.client && void 0 !== braintree.hostedFields) return window.braintreeLoaded = !0, braintree.client.create({authorization: $("#braintree-token").text()}, function (a, i) {
                    if (a) return window.failedPayments("braintree", $("#braintree-payment-failed").text()), void(window.location.href = window.getHost() + "/" + $(".final .finalPage-slug").text() + "#get-plan");
                    braintree.hostedFields.create({
                        client: i,
                        styles: {
                            input: {
                                padding: "0 30px",
                                height: "60px",
                                outline: "none",
                                "background-color": "white",
                                "font-size": "1.5em",
                                color: "#040813",
                                border: "2px solid #606469",
                                "border-radius": "0 !important",
                                width: "100%",
                                "font-family": "Arial",
                                "-webkit-transition": "background 0.35s, border 0.35s",
                                transition: "background 0.35s, border 0.35s"
                            }, "@media screen and (max-width: 768px)": {input: {"font-size": "1.125em"}}
                        },
                        fields: {
                            number: {selector: "#card-number", placeholder: $("#card-number").data("placeholder")},
                            cvv: {selector: "#cvv", placeholder: $("#cvv").data("placeholder")},
                            expirationDate: {
                                selector: "#expiration-date",
                                placeholder: $("#expiration-date").data("placeholder")
                            }
                        }
                    }, function (a, i) {
                        if (a) return window.failedPayments("braintree", $("#braintree-payment-failed").text()), void(window.location.href = window.getHost() + "/" + $(".final .finalPage-slug").text() + "#get-plan");
                        i.on("validityChange", function (e) {
                            Object.keys(e.fields).every(function (t) {
                                return e.fields[t].isValid
                            }) ? $("#button-pay").addClass("show-button") : $("#button-pay").removeClass("show-button")
                        }), i.on("empty", function (t) {
                            $("header").removeClass("header-slide"), $("#card-image").removeClass(), $(e).removeClass()
                        }), i.on("cardTypeChange", function (e) {
                            $(".js-credit-card").toggleClass("m-credit-card--active", 1 === e.cards.length);
                            var n = e.cards[0].code.name;
                            i.setAttribute({field: "cvv", attribute: "placeholder", value: n});
                            var a = $(".a-input__icon.a-icon").eq(0).is(":visible"),
                                o = $(".m-credit-card__logo.js-card-logo");
                            if (1 === e.cards.length) {
                                var r = o.data(e.cards[0].type.replace(/-/, "") + "-img-url");
                                r ? a ? ($(".a-input__icon.a-icon").eq(0).hide(), $(".a-input__card-logo img").attr("src", r), $(".a-input__card-logo").show()) : $(".js-card-logo img").attr("src", r) : $(".js-card-logo img").attr("src", "")
                            } else t && ($(".js-card-logo img").attr("src", ""), $(".a-input__card-logo").hide(), $(".a-input__icon.a-icon").eq(0).show())
                        }), i.on("focus", function (e) {
                            "cvv" === e.emittedBy && $(".m-credit-card").addClass("m-credit-card--flipped")
                        }), i.on("blur", function (e) {
                            "cvv" === e.emittedBy && $(".m-credit-card").removeClass("m-credit-card--flipped")
                        }), document.querySelector('#card-details input[type="submit"]').addEventListener("click", function (e) {
                            e.preventDefault(), n || (n = !0, i.tokenize(function (e, t) {
                                if (e) return $(".a-input__input").addClass("braintree-hosted-fields-invalid"), void(n = !1);
                                t.uuid = getAnswersData("uuid"), $(".js-paypal-loader").show(), $.ajax({
                                    type: "post",
                                    url: "/payments/braintree/request",
                                    data: t,
                                    success: function (e) {
                                        e && e.ok ? window.location.href = getHost() + "/diets/" + getAnswersData("uuid") : window.location.href = window.getHost() + "/155"
                                    },
                                    error: function () {
                                        window.failedPayments($("#payment-method-selected").text()), window.location.href = window.getHost() + "/" + $(".final .finalPage-slug").text() + "#get-plan"
                                    }
                                })
                            }))
                        }, !1)
                    })
                }), !0
            }
        }, $(document).ready(function (e) {
            if ("card-details" === e("body").data("page") && !e(".experiment-braintree-hosted-fields-card-form").length) var t = setInterval(function () {
                window.loadBraintree() && clearInterval(t)
            }, 1e3)
        })
    }, JvBp: function (e, t) {
    }, M7S7: function (e, t) {
    }, N2uV: function (e, t) {
    }, NhfK: function (e, t) {
        $(document).ready(function (e) {
            e("#download-meal-plan").submit(function (t) {
                t.preventDefault();
                var n, a = e(".loader"), i = e(".download-plan-button"), o = e("#error_generate_pdf"),
                    r = e("#download-meal-plan").serializeArray(), s = 0;
                a.css("display", "inline-flex"), i.attr("disabled", !0), o.hide(), e.ajax({
                    type: "post",
                    url: getHost() + "/diets/generate-pdf-meal-plan",
                    data: r,
                    headers: {"X-CSRF-TOKEN": e('meta[name="csrf-token"]').attr("content")},
                    success: function (e) {
                        r.push({name: "fileName", value: e}), n = setInterval(function () {
                            ++s <= 20 ? d() : (i.attr("disabled", !1), a.css("display", "none"), clearInterval(n), o.show())
                        }, 1e3)
                    }
                });
                var d = function () {
                    e.ajax({
                        type: "get", url: getHost() + "/diets/pdf-is-generated/", data: r, success: function (e) {
                            e.fileLink && (i.attr("disabled", !1), a.css("display", "none"), clearInterval(n), window.location = getHost() + "/diets/download-plan/?url=" + encodeURIComponent(e.fileLink))
                        }
                    })
                }
            })
        })
    }, OQde: function (e, t) {
        window.performance && 2 === window.performance.navigation.type && window.location.reload(), navigator.onLine && setTimeout(function () {
            window.location.reload()
        }, 864e5), window.getAnswers = function () {
            return store.get("answers") || {}
        }, window.setAnswer = function (e, t) {
            var n = getAnswers();
            n[e] = t, store.set("answers", n)
        }, window.removeAnswer = function (e) {
            var t = getAnswers();
            delete t[e], store.set("answers", t)
        }, window.getAnswersData = function (e) {
            return getAnswers().data ? getAnswers().data[e] : ""
        }, window.removeAnswersData = function () {
            var e = getAnswers();
            delete e.data, store.set("answers", e)
        }, window.setUUID = function (e) {
            if (e) {
                var t = getAnswers();
                t.data || (t.data = {}), t.data.uuid = e, store.set("answers", t)
            }
        }, window.getHost = function () {
            var e = window.location;
            return e.protocol + "//" + e.hostname + (e.port ? ":" + e.port : "")
        }, window.failedPayments = function (e, t) {
            var n = getAnswers().failedPayments || [];
            n.push(e), window.setAnswer("failedPayments", n), window.setAnswer("showPaymentError", t || !0)
        }, window.toDecimal = function (e) {
            return parseFloat(e).toFixed(1)
        };
        var n = navigator.userAgent.toLowerCase();
        window.isAndroidMobile = n.indexOf("android") > -1 && (n.indexOf("mobile") > -1 || -1 === n.indexOf("chrome")), String.prototype.insertBeforeLastOccurrence = function (e, t) {
            var n = this.lastIndexOf(e);
            if (n > -1) return this.substring(0, n) + t + this.substring(n)
        }, $(document).ready(function (e) {
            e.ajaxSetup({
                beforeSend: function (t) {
                    t.setRequestHeader("X-CSRF-TOKEN", e('meta[name="csrf-token"]').attr("content"))
                }
            })
        })
    }, aCWX: function (e, t) {
    }, g6DD: function (e, t) {
        window.checkWomanChangeColors = function () {
            var e = $(".o-section-content--meal").data("check-sex");
            if (window.ketoChangeGenderImages(), "man" === e) $("body").removeClass("woman-theme"), $("body").addClass("men-theme"), ketoChangeGenderImages("men-theme"); else if ("woman" === e) $("body").removeClass("men-theme"), $("body").addClass("woman-theme"), ketoChangeGenderImages("woman-theme"); else {
                var t = window.getAnswers().bodyClass;
                if (!t) return;
                $.each(t, function (e, t) {
                    "/" !== window.location.pathname ? ($("body").addClass(t), window.ketoChangeGenderImages(t), "men-theme" === t ? ($("#b-steps-back-button").attr("src", "/img/biliana/icons/back-men.svg"), $("#b-steps-help-button").attr("src", "/img/biliana/icons/help-men.svg"), $(".highlighted--woman").removeClass("highlighted--woman"), $(".m-credit-card__background").attr("src", "http://storage.googleapis.com/appsforfit-sandbox/files/TkWYp2AXL5hclIcYdiKupFrHj8jO0LtdoZJbt8to.svg"), $(".m-credit-card__back img").attr("src", "http://storage.googleapis.com/appsforfit-sandbox/files/3n8BdIQAo8djt4pu4obmS95147foLy44jzKCJU50.svg")) : "woman-theme" === t && ($("#b-steps-back-button").attr("src", "/img/biliana/icons/back.svg"), $("#b-steps-help-button").attr("src", "/img/biliana/icons/help.svg"), $(".m-credit-card__background").attr("src", "/img/card-2.svg"), $(".m-credit-card__back img").attr("src", "/img/card-back-2.svg"))) : $("body").removeClass(t)
                })
            }
        }, window.checkWomanChangeHeaderImage = function (e) {
            if (e) {
                var t = window.getAnswers().bodyClass;
                t && $.each(t, function (t, n) {
                    "woman-theme" === n && $("#header-image").css("background-image", "url(" + e + ")")
                })
            }
        }, window.ketoChangeGenderImages = function (e) {
            for (var t = [".a-input__icon--good", ".a-button--with-gradient", ".m-item-reason__icon", ".m-item-condition__number", ".o-meal-modal__detail-icon", ".o-meal-modal__timer-icon", ".m-block-contacts__icon", ".m-meal-item__icon", ".m-meal-item__timer-icon", ".m-meal-item__detail-icon", ".m-meal-item__detail-icon--preparation", ".o-section-benefits__image", ".a-icon m-item-reason__icon"], n = 0; n < t.length; n++) $(t[n]).each(function () {
                var t = $(this), n = t.data("src");
                n && ("men-theme" === e ? (t.attr("src", n.insertBeforeLastOccurrence(".svg", "-men")), t.attr("src", n.insertBeforeLastOccurrence(".png", "-men"))) : t.attr("src", n)), t.css("visibility", "visible"), $(".o-meal-modal__detail-icon, .o-meal-modal__timer-icon").css("visibility", "inherit")
            })
        }
    }, gkhq: function (e, t) {
    }, nHbD: function (e, t) {
        $(document).ready(function (e) {
            function t(e) {
                for (var t = window.location.search.substring(1).split("&"), n = 0; n < t.length; n++) {
                    var a = t[n].split("=");
                    if (a[0] == e) return a[1]
                }
                return !1
            }

            function n(t) {
                var n = e(".clearAll input");
                if (e(n).length && window.setAnswer(e(n).data("key"), ""), e(t).hasClass("measurements")) {
                    var a = {};
                    e('input[type="number"]:visible').each(function (t, n) {
                        if (!t) {
                            var i = parseInt(e(n).data("key").toString().split(".")[0]), o = Object.keys(getAnswers());
                            for (var r in o) {
                                var s = o[r], d = s.split(".");
                                parseInt(d[0]) === i && window.removeAnswer(s)
                            }
                        }
                        var c = {};
                        c.name = e(n).data("measurement"), c.type = e(n).attr("name"), c.measuring_in = e(n).data("measuring_in"), c.value = e(n).val(), a[e(n).data("key")] = c, window.setAnswer("measurements", a), window.setAnswer(e(n).data("key"), e(n).val())
                    })
                } else e('input[type="checkbox"]', e(t)).each(function (t, n) {
                    window.setAnswer(e(n).data("key"), e(n).is(":checked") ? e(n).data("value") : 0)
                })
            }

            function a(t) {
                e.get({url: t}).done(function (t) {
                    e(".js-meal-body").fadeOut("fast", function () {
                        e(this).html(t.view), e.each(window.getAnswers().bodyClass, function (e, t) {
                            window.ketoChangeGenderImages(t)
                        }), e(this).fadeIn("fast")
                    })
                })
            }

            function i() {
                var t = e('select[name="week"]').find("option:selected").text();
                e(".a-meal-week__text").length ? e(".a-meal-week__text").text(t) : e(".a-meal-week").text(t)
            }

            t("trid") && setAnswer("transaction_id", t("trid"));
            var o = !1;
            window.redirectUnfilledPage = function () {
                var t = [], n = [], a = window.location.pathname.substr(1);
                e.each(e(".page .page-id"), function (t, a) {
                    n.push(parseInt(e(a).text()))
                }), e.each(Object.keys(getAnswers()), function (e, n) {
                    var a = n.split("."), i = parseInt(a[0]);
                    isNaN(i) || -1 !== t.indexOf(i) || t.push(i)
                });
                for (var i in n) {
                    var o = n[i], r = e(".page .page-slug").eq(i).text();
                    if (r === a) break;
                    if (-1 === t.indexOf(o)) return window.location.href = window.getHost() + "/" + r, !0
                }
            };
            var r = function () {
                var t = e(e(".js-paypal-loader").is(":visible") ? ".js-paypal-loader" : ".js-secured-parent:visible"),
                    n = e(t).is(":visible") ? e(t).offset().top + (e(t).height() - e(window).height()) / 2 : 0;
                e("html, body").animate({scrollTop: n})
            };
            if (e(".diet-refresh").length && setTimeout(function () {
                window.location.reload(!0)
            }, 3e3), e("#payment-method-selected").length) {
                if (-1 === document.referrer.indexOf(document.location.hostname) && redirectUnfilledPage()) return;
                e.ajax({
                    type: "post",
                    url: getHost() + "/contact-info/" + e("#payment-method-selected").text(),
                    data: {_method: "patch", uuid: getAnswersData("uuid")},
                    success: function (t) {
                        t.error ? window.location.href = window.getHost() + "/159" : (window.setUUID(t.uuid), o = !0, e("#card-payment-form").html(t.view))
                    },
                    error: function (t) {
                        window.failedPayments(e("#payment-method-selected").text(), t.responseJSON.error), window.location.href = window.getHost() + "/" + e(".final .finalPage-slug").text() + "#get-plan"
                    }
                }), e("body").delegate(".js-card-focus", "click", function () {
                    r()
                })
            }
            if (e("#page-type").length && -1 === document.referrer.indexOf(document.location.hostname) && redirectUnfilledPage(), e(".clearAll").on("click", function () {
                var t = e(this).find("input"), n = e(t).prop("checked");
                e('input[type="checkbox"]:not("#' + e(t).attr("id") + '")').prop("checked", !n)
            }), e('input[type="checkbox"]').on("click", function () {
                if (e(".clearAll").length && !e(this).closest(".clearAll").length) {
                    var t = e(".clearAll").find("input"),
                        n = e('input[type="checkbox"]:not("#' + e(t).attr("id") + '"):checked').length > 0;
                    e(t).prop("checked", !n)
                }
            }), e(".dietAnswer").on("click", function () {
                e(this).hasClass("bodyClass") && function (t) {
                    var n = getAnswers().bodyClass;
                    n || (n = {}), n[e(t).data("key")] = e(t).data("body-class-value"), window.setAnswer("bodyClass", n)
                }(e(this)), window.setAnswer(e(this).data("key"), e(this).data("value")), window.location.href = window.getHost() + e(this).data("href")
            }), e("body").hasClass("pb") && e("input").each(function (t, n) {
                var a = getAnswers();
                if (void 0 !== a[e(n).data("key")]) switch (e(n).attr("type")) {
                    case"checkbox":
                        var i = e(n).data("value") === a[e(n).data("key")];
                        e(n).attr("checked", i);
                        break;
                    case"number":
                        e(n).val(a[e(n).data("key")]).focus().blur()
                }
            }), e("#generateDiet").length) {
                var s = Math.floor(500 * Math.random()) + 500;
                setTimeout(function () {
                    e.ajax({
                        type: "post", url: "/diets", data: {data: getAnswers()}, success: function (t) {
                            t.error ? window.location.href = window.getHost() + "/161" : t.user_diet ? (window.setAnswer(e("#processing").data("key"), e("#processing").data("value")), window.removeAnswersData(), window.setAnswer("data", t.user_diet), window.generateDietSuccess = !0) : window.location.href = window.getHost() + "/162"
                        }, error: function (t, n, a) {
                            if (400 === t.status) {
                                TweenMax.killAll();
                                var i = e("#processing .m-progress__circle-wrap").data("text-error");
                                e(".m-progress__text").text(i)
                            }
                            window.generateDietSuccess = !0
                        }
                    })
                }, s)
            }
            if (e("body").delegate("form.patch", "submit", function (t) {
                window.cookiePolicyAnswer("persistent") && window.setAnswer("saved-email", e("#js-save-email").val());
                var n = this, a = setInterval(function () {
                    o && (clearInterval(a), e.ajax({
                        type: "post",
                        url: getHost() + "/diets",
                        data: {
                            _method: "patch",
                            email: e(n).find('input[name="email"]').val(),
                            uuid: getAnswersData("uuid")
                        },
                        success: function (t) {
                            if (t) if (t.error) window.location.href = window.getHost() + "/158"; else if (getAnswersData("can_generate")) if (window.setUUID(t.uuid), e(".js-paypal-loader").show(), e("#card-payment-form").show(), e("#email-form").hide(), r(), e(".wpwl-button-pay").text(e("#submit-button-text").text()), e(".wpwl-control-expiry").attr("placeholder", e("#expiry-placeholder").text()), e(".wpwl-control-cardHolder").attr("required", !0), e("#payment-form-external-redirect").length) setTimeout(function () {
                                e("#email-form").show(), e(".js-paypal-loader").fadeOut()
                            }, 4e3), e("#payment-form-external-redirect").submit(); else {
                                if (window.fbq) {
                                    var n = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
                                    window.fbq("track", "InitiateCheckout", {content_name: n})
                                }
                                setTimeout(function () {
                                    e(".js-paypal-loader").fadeOut()
                                }, 1500)
                            } else window.location.href = window.getHost() + "/meal-plan-error"; else window.location.href = window.getHost() + "/157"
                        },
                        error: function () {
                            window.failedPayments(e("#payment-method-selected").text()), window.location.href = window.getHost() + "/" + e(".final .finalPage-slug").text() + "#get-plan"
                        }
                    }))
                }, 60);
                t.preventDefault()
            }), e("div.o-profile-summary").length || e("div.o-section-summary")) {
                var d = getAnswersData("bmi"), c = d.toString().split("."), l = "";
                e("#bmi").text(c[0] + ","), l = c[1] < 10 ? 10 * c[1] : c[1] || 0, d < 16.5 ? e("#bmi-text-1").removeClass("hidden-bmi") : d < 18.5 ? e("#bmi-text-2").removeClass("hidden-bmi") : d < 25 ? e("#bmi-text-3").removeClass("hidden-bmi") : d < 30 ? e("#bmi-text-4").removeClass("hidden-bmi") : d < 35 ? e("#bmi-text-5").removeClass("hidden-bmi") : d < 40 ? e("#bmi-text-6").removeClass("hidden-bmi") : d > 40 && e("#bmi-text-7").removeClass("hidden-bmi"), e("#bmi-sup").text(0 !== l ? l : "00"), e.each(getAnswers().measurements, function (t, n) {
                    getAnswersData("measurement") === n.name && ("age" === n.type ? (e("#metabolic-age").text(getAnswersData("metabolic_age") + " " + n.measuring_in), e("#years").text(n.value), e("#years-text").text(n.measuring_in)) : -1 !== n.type.indexOf("height") ? "height_inch" === n.type ? n.value ? e("#fp-height").text(e("#fp-height").text() + "." + n.value) : e("#fp-height").text(toDecimal(e("#fp-height").text())) : (e("#fp-height").text(n.value), e("#fp-height-text").text(n.measuring_in)) : -1 !== n.type.indexOf("weight") && -1 === n.type.indexOf("target") && (e("#u-weight").text(n.value), e("#u-weight-text").text(n.measuring_in)))
                }), e(".m-profile-card__content").length && (e("body").hasClass("men-theme") ? (e(".m-profile-card__content img").attr("src", "/img/biliana/icons/man.svg"), e(".m-profile-card__content #men").show()) : (e(".m-profile-card__content img").attr("src", "/img/biliana/icons/woman.svg"), e(".m-profile-card__content #women").show()))
            }
            e(".button-weeks-right").on("click", function () {
                e('select[name="week"] option:selected').next().prop("selected", !0).trigger("change")
            }), e(".button-weeks-left").on("click", function () {
                e('select[name="week"] option:selected').prev().prop("selected", !0).trigger("change")
            }), e('select[name="week"]').on("change", function () {
                i();
                var t = e(this).find("option:selected").val(),
                    n = e(".o-section-content--meal").data("lds-loader-color") || "",
                    o = location.href.replace(/week\/.+$/, ""), r = o + "week-view/" + t;
                e(".js-meal-body").fadeOut("fast", function () {
                    e(this).html('<div class="lds-container"><div class="lds-default ' + n + '"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div></div>').fadeIn("fast")
                }), history.pushState(null, null, o + "week/" + t), a(r)
            }), e("#diet-cache-exists").length && "0" === e("#diet-cache-exists").text() && e('select[name="week"]').trigger("change"), e('select[name="week"]').length && (window.onpopstate = function (t) {
                var n = location.pathname.replace(/^.+\/week\//, ""),
                    o = location.href.replace(/week\/.+$/, "") + "week-view/" + n;
                e('select[name="week"]').val(n), i(), a(o)
            }), e("#emailmeal").submit(function (t) {
                if (t.preventDefault(), e(this).valid()) {
                    var n = e("input[name=uuid]").val(), a = e("input[name=email]").val();
                    e.ajax({
                        type: "post",
                        url: getHost() + "/diets/resend",
                        data: {uuid: n, email: a},
                        success: function (t) {
                            t ? t.error ? window.location.href = window.getHost() + "/165" : t.success && (e("#resend-email-block").hide(), e(".m-email-sent-notification").removeAttr("style")) : window.location.href = window.getHost() + "/164"
                        }
                    })
                }
            }), function () {
                var t = !1, n = !1;
                if (e.each(e(".paymentType:visible"), function (a, i) {
                    "braintree" === e(i).data("special") ? t = a : "allterpay" === e(i).data("special") && (n = a)
                }), !1 !== t && !1 !== n) {
                    var a;
                    a = window.isAndroidMobile ? "braintree" : t > n ? "braintree" : "allterpay", e('.paymentType[data-special="' + a + '"]').hide()
                }
            }(), getAnswers().showPaymentError && (!0 !== getAnswers().showPaymentError && e("#error_payment").text(getAnswers().showPaymentError), e("#error_payment").show(), removeAnswer("showPaymentError")), e("#measurements-button").on("click", function () {
                e("#metric-form").valid() && e(".measurement-age").each(function (t, n) {
                    e(n).attr("name", "age")
                })
            });
            e(".m-block-contacts").length && e(".o-footer").addClass("o-footer--shadow")
        })
    }, oCYw: function (e, t, n) {
        $(document).ready(function () {
            var e = $("#paypal-button");
            $(e).length && ($("form").on("submit", function () {
                return !1
            }), paypal.Button.render({
                env: "production",
                locale: $(e).find(".locale").text(),
                style: {size: "responsive", color: "gold", shape: "rect", label: "pay", tagline: !1},
                client: {sandbox: $("#paypal-client-id").text(), production: $("#paypal-client-id").text()},
                commit: !0,
                payment: function (t, n) {
                    window.ga && window.ga("send", "event", "Payment", "Click", window.location.hostname), $.ajax({
                        type: "post",
                        url: getHost() + "/contact-info/paypal",
                        data: {_method: "patch", uuid: getAnswersData("uuid")},
                        success: function (e) {
                            getAnswersData("can_generate") || (window.location.href = window.getHost() + "/meal-plan-error"), window.setUUID(e.uuid)
                        },
                        error: function () {
                            window.failedPayments($("#paypal-button").data("special")), window.location.reload()
                        }
                    });
                    var a = $(e).find(".total").text(), i = $(e).find(".currency").text(),
                        o = $(e).find(".descriptor").text();
                    return n.payment.create({
                        payment: {
                            intent: "sale",
                            transactions: [{
                                amount: {total: a, currency: i, details: {subtotal: a}},
                                custom: getAnswersData("uuid"),
                                description: o,
                                soft_descriptor: o,
                                item_list: {items: [{name: o, description: o, price: a, quantity: 1, currency: i}]}
                            }]
                        }, experience: {input_fields: {no_shipping: 1}}
                    })
                },
                onAuthorize: function (e, t) {
                    return t.payment.execute().then(function () {
                        e._method = "patch", e.uuid = getAnswersData("uuid"), $.ajax({
                            type: "post",
                            url: "/payments/paypal/request",
                            data: e,
                            success: function (e) {
                                e && e.uuid ? e.error ? window.location.href = window.getHost() + "/168" : t.redirect(window, getHost() + "/diets/" + e.uuid) : window.location.href = window.getHost() + "/167"
                            },
                            error: function () {
                                window.failedPayments($("#paypal-button").data("special")), window.location.reload()
                            }
                        })
                    })
                },
                onError: function (e) {
                    window.failedPayments($("#paypal-button").data("special"), $("#paypal-button-error").text()), window.location.reload()
                }
            }, "#paypal-button"))
        })
    }, "sV/x": function (e, t, n) {
        n("t8Kf"), n("OQde"), n("g6DD"), n("nHbD"), n("oCYw"), n("4RbL"), n("NhfK")
    }, t8Kf: function (e, t) {
        var n = store.get("cookie-policy") || {}, a = function (e, t) {
            n[e] = t, store.set("cookie-policy", n)
        };
        window.cookiePolicyAnswer = function (e) {
            return function (e) {
                return !1 !== n[e]
            }(e)
        }, $(document).ready(function () {
            $(".js-cookies-accept").on("click", function (e) {
                return e.preventDefault(), n = {}, store.remove("cookie-policy"), a("cookie-notification", !1), $("#cookies-popup-div").remove(), !1
            }), "cookie-policy-disagree" === $("body").data("page") && ($("input").on("change", function () {
                !function (e) {
                    a($(e).attr("name"), "1" === $(e).val())
                }($(this))
            }), $.each(n, function (e, t) {
                $("body").find('input[name="' + e + '"][value="' + (0 | t) + '"]').click()
            }))
        })
    }, xxDh: function (e, t) {
    }
});
