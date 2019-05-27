/**
 * frontend.min.js
 *
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Quick View
 * @version 1.0.0
 */
jQuery(document).ready(function(t){"use strict";var i="",e="yith-inline"!=yith_qv.type?t(document).find(".yith-quick-view"):t(document).find(".yith-quick-view").clone(),a=e.find(".yith-quick-view-content"),n=e.find(".yith-quick-view-close"),o=e.find(".yith-quick-view-nav"),r=[],c=null,s=function(){if("yith-inline"!=yith_qv.type){var i=t(document).find(".yith-quick-view .yith-wcqv-wrapper"),e=t(window).width(),a=t(window).height(),n=e-60>yith_qv.popup_size_width?yith_qv.popup_size_width:e-60,o=a-120>yith_qv.popup_size_height?yith_qv.popup_size_height:a-120;i.css({left:e/2-n/2,top:a/2-o/2,width:n+"px",height:o+"px"})}};if("undefined"!=typeof yith_qv){t.fn.yith_wcqv_init=function(){i=t(document).find(".yith-wcqv-button"),t.each(i,function(){var i=t(this).data("product_id");-1==t.inArray(i,r)&&r.push(i)}),o.length&&h(o),m(n),s(),i.off("click"),imagesLoaded(a,function(){_(i)}),t(document).on("click",".yith-wcqv-button",function(i){var n=t(this),o=(n.data("type"),n.data("product_id"));if(o){if(i.preventDefault(),i.stopPropagation(),yith_qv.enable_loading||d(n),"yith-inline"==yith_qv.type){var r=n.parents(yith_qv.main_product),c=r.hasClass("last")?r:r.nextUntil(".first",".last");if(r.closest(".yith-quick-view").length||c.next(".yith-quick-view").length)d(a);else{if(e.hasClass("open"))return e.removeClass("open").removeClass("loading"),void e.slideUp("slow",function(){c.after(e),l(n,o)});c.after(e)}}else t(document).trigger("qv_loading");l(n,o)}})};var _=function(i){i.length&&!i.hasClass("inside-thumb")||t.each(i,function(){var i=t(this),e=i.closest(yith_qv.main_product).find(yith_qv.main_image_class);i.css({top:(e.height()-i.height())/2+"px",right:(e.width()-i.width())/2+"px",display:"inline-block"})})},d=function(i){void 0!==yith_qv.loader&&(i.block({message:null,overlayCSS:{background:"#fff url("+yith_qv.loader+") no-repeat center",opacity:.5,cursor:"none"}}),t(document).on("qv_loader_stop",function(){i.unblock()}))},h=function(i){var e=i.find("> a");e.off("click"),e.on("click",function(i){i.preventDefault();var e=t(this),n=e.data("product_id");d(a),l(e,n)})},l=function(i,n){var s=t.inArray(n,r),_={action:"yith_load_product_quick_view",product_id:n,prev_product_id:r[s-1],next_product_id:r[s+1],context:"frontend"};null!=c&&c.abort(),c=t.ajax({url:yith_qv.ajaxurl.toString().replace("%%endpoint%%","yith_load_product_quick_view"),data:_,dataType:"json",type:"GET",success:function(i){a.html(i.html),"slider"==i.images_type?imagesLoaded(a,function(){f()}):v(),t(window).width()>480&&a.find("div.summary").perfectScrollbar({suppressScrollX:!0}),(yith_qv.is2_2||yith_qv.increment_plugin)&&a.find("div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)").addClass("buttons_added").append('<input type="button" value="+" class="plus" />').prepend('<input type="button" value="-" class="minus" />');var n=a.find(".variations_form");n.wc_variation_form(),n.trigger("check_variations"),n.trigger("reset_image"),void 0!==t.fn.yith_wccl?n.yith_wccl():void 0!==t.yith_wccl&&i.prod_attr&&t.yith_wccl(i.prod_attr),void 0!==t.fn.yith_ywraq_variations&&(t.fn.yith_ywraq_variations(),a.find('[name|="variation_id"]').trigger("change"));var r=a.find(".yith-wocc-wrapper");r.length&&void 0!==t.fn.yith_wocc_init&&r.yith_wocc_init(),void 0!==t.fn.prettyPhoto&&a.find("a[data-rel^='prettyPhoto']").prettyPhoto({hook:"data-rel",social_tools:!1,theme:"pp_woocommerce",horizontal_padding:20,opacity:.8,deeplinking:!1}),yith_qv.ajaxcart&&u(i.product_link,a);var s=n.find(".single_variation_wrap");if(g(s),void 0!==t.fn.ajaxForm&&void 0!==t.fn.wpcf7InitForm&&(t.fn.ajaxForm({delegation:!0,target:"#output"}),a.find("div.wpcf7 > form").wpcf7InitForm()),o.length){var _=o.find(".yith-wcqv-next"),d=o.find(".yith-wcqv-prev");i.prev_product?(d.find("div").html(i.prev_product_preview),d.data("product_id",i.prev_product).css({display:"block"})):d.css({display:"none"}),i.next_product?(_.find("div").html(i.next_product_preview),_.data("product_id",i.next_product).css({display:"block"})):_.css({display:"none"})}e.hasClass("open")||(e.removeClass("loading").addClass("open"),"yith-inline"==yith_qv.type?e.slideDown("slow"):t("html").addClass("yith-quick-view-is-open")),c=null,t(document).trigger("qv_loader_stop")}})},f=function(){var i=a.find(".yith-quick-view-images-slider");i.length&&void 0!==t.fn.bxSlider&&i.bxSlider({pager:!1,prevText:"",nextText:""})},v=function(){t(".yith-quick-view-single-thumb").on("click",function(){t(this).siblings().removeClass("active");var i=t(this).parents(".images"),e=i.find(".woocommerce-main-image"),a=i.find("img.wp-post-image"),n=t(this).data("img"),o=t(this).data("href");a.length||(e=(a=i.find("img.attachment-quick_view_image_size")).closest("a")),a.attr("src",n).attr("srcset",n).attr("src-orig",n),e.attr("href",o),t(this).addClass("active"),t(document).trigger("yith_wcqv_change_thumb")})},m=function(i){i.off("click"),i.on("click",function(t){t.preventDefault(),n()}),"yith-inline"!=yith_qv.type&&(t(document).keyup(function(t){27===t.keyCode&&n()}),t(".yith-quick-view-overlay").on("click",function(t){e.hasClass("loading")||n()}));var n=function(){e.removeClass("open").removeClass("loading"),"yith-inline"!=yith_qv.type?(t("html").removeClass("yith-quick-view-is-open"),setTimeout(function(){o()},1e3)):e.slideUp("slow",function(){o()})},o=function(){a.html(""),t(document).trigger("qv_is_closed")}};t(document).on("yith_infs_adding_elem yith-wcan-ajax-filtered",function(){t.fn.yith_wcqv_init()});var u=function(i,e){e.find("form.cart").on("submit",function(a){var n,o=t(this),r=o.find("button");"is_one_click"==o.find('input[name="_yith_wocc_one_click"]').val()||(a.preventDefault(),-1==(n=o.serialize()).indexOf("add-to-cart")&&(n+="&add-to-cart="+r.val()),n+="&_wp_https_referer="+i,void 0!==yith_qv.loader&&r.block({message:null,overlayCSS:{background:"#fff url("+yith_qv.loader+") no-repeat center",opacity:.5,cursor:"none"}}),t.post(i,n,function(i){if(yith_qv.redirect_checkout)window.location.href=yith_qv.checkout_url;else{var a=t(i).find("div.woocommerce-message, ul.woocommerce-error"),n=t(i).find("#header .yit_cart_widget"),o=e.find("div.summary");if(a.length||(a=t(i).filter("div.woocommerce-message, ul.woocommerce-error")),t("#header").find(".yit_cart_widget").replaceWith(n),"undefined"!=typeof wc_cart_fragments_params){var c;try{c="sessionStorage"in window&&null!==window.sessionStorage,window.sessionStorage.setItem("wc","test"),window.sessionStorage.removeItem("wc")}catch(t){c=!1}t.ajax({url:wc_cart_fragments_params.wc_ajax_url.toString().replace("%%endpoint%%","get_refreshed_fragments"),type:"POST",success:function(i){i&&i.fragments&&(t.each(i.fragments,function(i,e){t(i).replaceWith(e)}),c&&(sessionStorage.setItem(wc_cart_fragments_params.fragment_name,JSON.stringify(i.fragments)),sessionStorage.setItem("wc_cart_hash",i.cart_hash)),t(document.body).trigger("wc_fragments_refreshed"))}})}o.find(".woocommerce-message, .woocommerce-error").remove(),o.prepend(a),void 0!==yith_qv.loader&&r.unblock(),o.scrollTop(0),t("body").trigger("added_to_cart")}}))})},g=function(i){var e=t(".yith-quick-view-thumbs"),a=t("div.images .attachment-quick_view_image_size"),n=t("div.images a.woocommerce-main-image");i.on("show_variation",function(t,i){if(void 0!==i.attachment_id){var o=e.find('.yith-quick-view-single-thumb[data-attachment_id="'+i.attachment_id+'"]');o.length?o.click():i.image&&i.image.src&&i.image.src.length>1&&(a.wc_set_variation_attr("src",i.image.src),a.wc_set_variation_attr("height",i.image.src_h),a.wc_set_variation_attr("width",i.image.src_w),a.wc_set_variation_attr("srcset",i.image.srcset),a.wc_set_variation_attr("sizes",i.image.sizes),a.wc_set_variation_attr("title",i.image.title),a.wc_set_variation_attr("alt",i.image.alt),a.wc_set_variation_attr("data-src",i.image.full_src),a.wc_set_variation_attr("data-large_image",i.image.full_src),a.wc_set_variation_attr("data-large_image_width",i.image.full_src_w),a.wc_set_variation_attr("data-large_image_height",i.image.full_src_h),n.wc_set_variation_attr("href",i.image.full_src),e.find(".yith-quick-view-single-thumb").removeClass("active"))}}),i.on("hide_variation",function(){a.wc_reset_variation_attr("src"),a.wc_reset_variation_attr("width"),a.wc_reset_variation_attr("height"),a.wc_reset_variation_attr("srcset"),a.wc_reset_variation_attr("sizes"),a.wc_reset_variation_attr("title"),a.wc_reset_variation_attr("alt"),a.wc_reset_variation_attr("data-src"),a.wc_reset_variation_attr("data-large_image"),a.wc_reset_variation_attr("data-large_image_width"),a.wc_reset_variation_attr("data-large_image_height"),n.wc_reset_variation_attr("href"),e.find(".yith-quick-view-single-thumb").first().click()})};t(document).on("qv_loading",function(){if(!yith_qv.enable_loading)return!1;var i=t(document).find(".yith-quick-view"),e=i.find(".yith-quick-view-overlay");if(i.hasClass("loading")||i.addClass("loading"),!e.find("p").length){var a=t("<p />").text(yith_qv.loading_text);e.append(a)}}),yith_qv.enable_zoom&&void 0!==t.fn.yith_magnifier&&t(document).on("qv_loader_stop",function(i){if("undefined"==typeof yith_magnifier_options)return!1;var e=t(".yith-quick-view-content .images"),a=e.find(".yith_magnifier_zoom"),n=e.find(".yith_magnifier_zoom img.attachment-quick_view_image_size"),o=e.find(".yith_magnifier_zoom").attr("href"),r=e.find(".yith_magnifier_zoom img").attr("src");e.data("yith_magnifier")&&e.yith_magnifier("destroy"),a.attr("href",o),n.attr("src",r),n.attr("srcset",r),n.attr("src-orig",r);var c={enableSlider:!1,position:"inside",elements:{zoom:a,zoomImage:n}};c=t.extend(!0,{},yith_magnifier_options,c),e.find("a.pp_expand, a.yith_expand").remove(),e.yith_magnifier(c),t(document).off("yith_wcqv_change_thumb").on("yith_wcqv_change_thumb",function(){e.data("yith_magnifier")&&e.yith_magnifier("destroy"),e.yith_magnifier(c)}),t(document).on("found_variation","form.variations_form",function(t,i){var o=!1;if(i.image_src&&i.image_src.length?o=i.image_src:i.image.src&&(o=i.image.src),!o)return!1;a.attr("href",o),n.attr("src",o),n.attr("srcset",o),n.attr("src-orig",o),e.data("yith_magnifier")&&e.yith_magnifier("destroy"),e.yith_magnifier(c)}).on("reset_image",function(t){a.attr("href",o),n.attr("src",r),n.attr("srcset",r),n.attr("src-orig",r),e.data("yith_magnifier")&&e.yith_magnifier("destroy"),e.yith_magnifier(c)})}),t(document).on("qv_loader_stop",function(){"yith-inline"==yith_qv.type&&t("html, body").animate({scrollTop:t(".yith-quick-view").offset().top-100},1e3)}),t.fn.YitdoubleTapToGo=function(){return this.each(function(){var i=!1,e=t(this).closest(".product");t(document).on("qv_loader_stop",function(){e.removeClass("hover_mobile")}),t(this).on("touchstart",function(t){e.siblings().removeClass("hover_mobile"),i&&e.hasClass("hover_mobile")||(t.preventDefault(),e.addClass("hover_mobile"),i=!0)})}),this},yith_qv.ismobile&&t(yith_qv.main_product_link).YitdoubleTapToGo(),t.fn.yith_wcqv_init(),t(document).on("yith_wcqv_wcajaxnav_update post-load",t.fn.yith_wcqv_init),t(window).on("resize",function(){s(),_(t(document).find(".yith-wcqv-button"))}),t(document).on("qv_loader_stop",function(){void 0!==t.fn.tawcvs_variation_swatches_form&&(t(".variations_form").tawcvs_variation_swatches_form(),t(document.body).trigger("tawcvs_initialized"))})}});