<!DOCTYPE html>
<html lang="zxx" style="background: #FFF;">
<head>
    <title>Forma : Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Fitness Freak website"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom Theme files -->
    <link href="{{ asset('css/test.css') }}" type="text/css" rel="stylesheet" media="all">
    <style>

        .spot h6
        {
            padding: 10px;
            margin-bottom: 0 !important;
        }
        .spot .owl-item
        {
            padding-bottom: 0 !important;
        }
        .banner-right-text
        {
            border-left:solid 3px #33ff00
        }
        .spot .grey
        {
            background: grey !important;
        }
        .spot .grey:hover
        {
            background: #33ff00 !important;
            color: #000;
        }
#hr {
    margin: 0;
    margin-top: 0px;
    padding: 0;
    margin-top: 70px;
    border-top:solid 2px #33ff00;
    color:#33ff00;
    background:#33ff00
}

.top-news h1
{
    margin-top: 0px;
}

.top-text img {
    height: 330px !important;
    width: 100%
}
        .b-bottom p {
            color: #000
        }
        .general-text p, .top-text p
        {
            height: 60px;
overflow: hidden;
        }
        .callbacks_tabs a::after {
            content: "\f111";
            font-size: 0;
            font-family: FontAwesome;
            visibility: visible;
            display: block;
            width: 14px;
            height: 14px;
            display: block;
            background: #000;
            display: inline-block;
            border: none;
            border-radius: 50%;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
        }

        .callbacks_tabs {
            list-style: none;
            position: absolute;
            top: -10%;
            right: 15%;
            padding: 0;
            margin: 0;
            display: block;
        }

        .callbacks_tabs li {
            display: inline-block;
            margin: 0 .3em;
        }

        .callbacks_tabs a {
            visibility: hidden;
        }

        .callbacks_here a:after {
            background: #33ff00;
        }
        @media only screen and (min-width: 220px) {
            #page.fixed_header #header {
                height: 110px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: 15px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }
            ul.navigation > li > a
            {
                color:#fff !important;
            }
            #header .header_mid_inner img
            {
                display: none;
            }
            .tp-caption img
            {
                width: 180.656px !important;
                height: 100.531px !important;
                left: 92px !important;
                top: 327px !important;
            }
            h3.tittle
            {
                margin-bottom: 45px;
                font-size: 2.6em;
            }
            .banner-right-text {
                border-left: none;
            }
            #header
            {
                background:url("{{ asset('images/facebookcover2.png') }}");
                background-size: 100% 100%;
            }
            #header .header_top, .header_mid
            {
                background: none;
            }
            #header .header_mid .resp_mid_nav_wrap
            {
                left: initial !important;
                right: 20px !important;
                position: absolute;
            }
            #header .header_mid .header_mid_inner
            {
                position: relative;
            }
            .rslides img
            {
                width:100%
            }
        }
        @media only screen and (min-width: 320px) {
            #page.fixed_header #header {
                height: 110px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: 15px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }
            ul.navigation > li > a
            {
                color:#fff !important;
            }
            .tp-caption img
            {
                width: 180.656px !important;
                height: 100.531px !important;
                left: 92px !important;
                top: 327px !important;
            }
            h3.tittle
            {
                margin-bottom: 45px;
                font-size: 2.6em;
            }
            .banner-right-text {
                border-left: none;
            }
            #header
            {
                background:url("{{ asset('images/facebookcover2.png') }}");
                background-size: 100% 100%;
            }
            #header .header_top, .header_mid
            {
                background: none;
            }
            #header .header_mid .resp_mid_nav_wrap
            {
                left: initial !important;
                right: 20px !important;
                position: absolute;
            }
            #header .header_mid .header_mid_inner
            {
                position: relative;
            }
        }

        @media only screen and (min-width: 480px) {
            #page.fixed_header #header {
                height: 120px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: -50px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }
            ul.navigation > li > a
            {
                color:#fff !important;
            }
            .tp-caption img
            {
                width: 180.656px !important;
                height: 100.531px !important;
                left: 92px !important;
                top: 327px !important;
            }
            h3.tittle
            {
                margin-bottom: 45px;
                font-size: 2.6em;
            }
            .banner-right-text {
                border-left: none;
            }
            #header
            {
                background:url("{{ asset('images/facebookcover2.png') }}");
                background-size: 100% 100%;
            }
            #header .header_top, .header_mid
            {
                background: none;
            }
            #header .header_mid .resp_mid_nav_wrap
            {
                left: initial !important;
                right: 20px !important;
                position: absolute;
            }
            #header .header_mid .header_mid_inner
            {
                position: relative;
            }
        }

        @media only screen and (min-width: 768px) {
            #page.fixed_header #header {
                height: 110px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: -50px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }
            ul.navigation > li > a
            {
                color:#fff !important;
            }
            .tp-caption img
            {
                width: 347.656px !important;
                height: 194.531px !important;
                left: 92px !important;
                top: 327px !important;
            }
            h3.tittle
            {
                margin-bottom: 45px;
                font-size: 2.6em;
            }
            .banner-right-text {
                border-left: none;
            }
            #header
            {
                background:none;
                background-size: 100% 100%;
            }
            #header .header_top, .header_mid
            {
                background: none;
            }
            #header .header_mid .resp_mid_nav_wrap
            {
                left: initial !important;
                right: 40px !important;
                position: absolute;
                top: 10px;
            }
            #header .header_mid
            {
                height: 100%;
            }
            #header .header_mid .header_mid_inner
            {
                position: relative;
            }
            .header_mid
            {
                height: 100%;
            }
            .header_mid_outer
            {
                height: 100%;
            }
            #header .mid_nav_wrap nav
            {
                display: inline-block;
            }
            #header .header_mid_inner img
            {
                display: inline-block;
                width: 100px;
                height: 90px;
                margin-top: 3px;
                float: left;
                margin-left: 40px;
            }


        }

        @media only screen and (min-width: 992px) {
            #page.fixed_header #header {
                height: 130px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: -50px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }
            ul.navigation > li > a
            {
                color:#000 !important;
            }
            .banner-right-text {
                border-left: solid 3px #33ff00;
            }
            #header .mid_nav_wrap nav
            {
                display: inline-block;
            }
            #header .header_mid_inner img
            {
                display: inline-block;
                width: 210px;
                height: 130px;
                margin-top: 3px;
                float: left;
                margin-left: 40px;
            }
        }

        @media only screen and (min-width: 1200px) {
            #page.fixed_header #header {
                height: 130px !important;
            }
            .cmsmasters_product .button_to_cart_wrap
            {
                bottom: -63px;
            }
            .cmsmasters_product:hover .button_to_cart_wrap
            {
                bottom: 0px !important;
            }

            .button_to_cart_wrap, .button_to_cart_wrap a
            {
                margin-top: 0 !important;
            }
            .cmsmasters_product .button_to_cart_wrap:hover
            {
                bottom: 0px !important;

            }
            ul.navigation > li > a
            {
                color:#000 !important;
            }
            .header_mid
            {
                height: 90px;background: none
            }
            #header .mid_nav_wrap nav
            {
                display: inline-block;
            }
            #header .header_mid_inner img
            {
                display: inline-block;
                width: 350px;
                height: 130px;
                margin-top: 3px;
                float: left;
                margin-left: 40px
            }
        }
        .cmsmasters_product .cmsmasters_product_title a:hover
        {
            color:#33ff00;
        }
        .cmsmasters_product_cat a
        {
            color:#000;
        }
        .cmsmasters_product_cat a:hover
        {
            color:#33ff00;
        }
        .cmsmasters_star_rating
        {
            height:25px
        }
        .cmsmasters_star_rating .cmsmasters_star_trans_wrap
        {
            height: 25px;
        }
        .owl-page.active
        {
            background-color:#33ff00 !important;
        }
        .read_more:hover
        {
            background-color:#33ff00 !important;
            color:#FFF !important;
            border-color: #5fd447 !important;
        }
        .text-left a
        {
            border: solid 2px #000;
        }
        .text-left
        {
            margin-top: 20px;
        }
        .text-left a:hover
        {
            background-color:#33ff00 !important;
            color:#FFF !important;
        }
        .cmsmasters_product .button_to_cart_wrap .added_to_cart, .cmsmasters_product .button_to_cart_wrap .button, .woocommerce-store-notice, .woocommerce-store-notice p a, .woocommerce-store-notice p a:hover
        {
            color:#000 !important;
        }
        .owl-carousel2 .owl-pagination
        {
            display: none;
        }
        body,.owl-carousel2
        {
            overflow-x: hidden !important;
        }
        .owl-carousel2 .owl-next
        {
            float: right;
            width: 50%;
            margin: 20px auto;

        }
        .owl-carousel2 .owl-prev
        {
            float: left;
            width: 50%;
            margin: 20px auto;
            text-align: right;
        }
        .owl-carousel2 .owl-buttons
        {
            display: block;
        }
        .owl-carousel2 button
        {
            background: #65d54e;
            margin: 10px;
        }
        .owl-carousel2 button:hover
        {
            background: #000;
        }
      *  ::-moz-selection {
            color: #000 !important;
        }

       * ::-o-selection {
            color: #000 !important;
        }
       * ::-webkit-selection{
            color: #000 !important;
        }
        *::selection{
            color: #000 !important;
        }
    </style>
    <script src="{{ asset('latest_news/js/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var LS_Meta = {"v": "6.7.6"};
        /* ]]> */
    </script>

    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/LayerSlider/static/layerslider/js/greensockb3a6.js?ver=1.19.0') }}'></script>


    <script type='text/javascript'
            src='{{ asset('online_store/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery7a2d.js?ver=6.7.6') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions7a2d.js?ver=6.7.6') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cnArgs = {
            "ajaxurl": "http:\/\/sports-store.cmsmasters.net\/wp-admin\/admin-ajax.php",
            "hideEffect": "fade",
            "onScroll": "",
            "onScrollOffset": "100",
            "cookieName": "cookie_notice_accepted",
            "cookieValue": "true",
            "cookieTime": "2592000",
            "cookiePath": "\/",
            "cookieDomain": ".sports-store.cmsmasters.net",
            "redirection": "",
            "cache": "",
            "refuse": "no",
            "revoke_cookies": "0",
            "revoke_cookies_opt": "automatic",
            "secure": "0"
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/cookie-notice/js/front.minfe9e.js?ver=1.2.44') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min26ce.js?ver=5.4.7.4') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min26ce.js?ver=5.4.7.4') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/themes/sports-store/js/debounced-resize.min8a54.js?ver=1.0.0') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/themes/sports-store/js/modernizr.min8a54.js?ver=1.0.0') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/themes/sports-store/js/respond.min8a54.js?ver=1.0.0') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/themes/sports-store/js/jquery.iLightBox.min3601.js?ver=2.2.0') }}'></script>
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <script type="text/javascript" src="{{ asset('online_store/wp-content/js1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('online_store/wp-content/js2.js') }}"></script>
    <script type="text/javascript" src="{{ asset('online_store/wp-content/js3.js') }}"></script>
    <script src="{{ asset('online_store/wp-content/js1.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
</head>
<body style="background: #FFF !important;">
{{--<div id="cont">--}}
{{--<h1 class="loading">Forma...</h1>--}}
{{--</div>--}}
{{--<script>--}}
{{--$(".loading").lettering();--}}
{{--window.onload=function() {--}}
{{--$("#cont").fadeOut(1000);--}}
{{--}--}}
{{--</script>--}}

<div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_after_header hfeed site">

    <!--  Start Main  -->
    <div id="main">
        @include('templates.header')
        <div id="middle">
            <div class="headline cmsmasters_color_scheme_default">
                <div class="headline_outer cmsmasters_headline_disabled">
                    <div class="headline_color"></div>
                </div>
            </div>
            <div class="middle_inner" style="width: 100%;overflow-x: hidden">
                <div class="content_wrap fullwidth">

                    <!--  Start Content  -->
                    <div class="middle_content entry"></div>
                </div>
                @include('online_store.template.slider')
                <div id="cmsmasters_row_0e87e24473"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner" style="width:100%">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_85b764ab5e" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_084db936ef"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h3 class="cmsmasters_heading"
                                                    style="font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif !important;font-size: 45px;">
                                                    Activities</h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c">
                                                    <hr style="background:#33ff00;height: 5px;width:55px;margin: 16px 0;">
                                                </div>
                                            </div>
                                            <div id="cmsmasters_divider_3e5628a53d" class="cl"></div>
                                            <div class="cmsmasters_selected_products_shortcode">
                                                <div class="woocommerce columns-4 ">
                                                    <div class="cmsmasters_products_wrap">
                                                        <ul class="products columns-4 cmsmasters_products">
                                                            @foreach($activities as $activity)
                                                                <li class="post-13499 product type-product status-publish has-post-thumbnail product_cat-for-men product_cat-t-shirts product_tag-clothing product_tag-men product_tag-sports product_tag-t-shirts instock shipping-taxable purchasable product-type-variable">
                                                                    <article class="cmsmasters_product">
                                                                        <figure class="cmsmasters_product_img">
                                                                            <a href="{{ url('activity/'.$activity->id) }}">
                                                                                <img width="540" height="540"
                                                                                     style="height: 300px"
                                                                                     src="https://adminhome.forma-eg.com/{{$activity->img_main }}"
                                                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                                     sizes="(max-width: 540px) 100vw, 540px"/>
                                                                            </a>
                                                                            <div class="button_to_cart_wrap">
                                                                                <a rel="nofollow"
                                                                                   href="{{ url('activity/'.$activity->id) }}"
                                                                                   data-quantity="1"
                                                                                   data-product_id="13499"
                                                                                   data-product_sku=""
                                                                                   class="button product_type_variable add_to_cart_button cmsmasters_add_to_cart_button"
                                                                                   style="background: #33ff00;font-size: 26px;line-height: 35px;">{{ $activity->activites_type }}</a>
                                                                            </div>
                                                                        </figure>
                                                                    </article>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="box" style="padding-top: 10px ">
    <a href="{{ url('onlinestore') }}">
        <div class="text-center">
            <h3 class="cmsmasters_heading"
                style="font-style:italic;font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif !important;font-size: 50px;">
                Sport Store</h3>
            <a href="{{ url('onlinestore') }}">
                <button type="button" style="background: #000;color:#FFF;margin:0;font-weight: bold;padding-top: 8px;"
                        class="btn btn-default get">
                    Shop Now
                </button>
            </a>
            <p style="font-family: Calibri;font-size: 24px;color:#54524f;font-weight: bold ;margin-bottom: -15px;">you
                order, we deliver!</p></div>
        <h2 class="text-capitalize text-center"
            style="margin-top:0;color: #000;font-weight: bold;font-size: 24px;margin-bottom: -35px;font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif;">
            FEATURED PRODUCT</h2>
        <hr class="hr-store" style="margin-top: 40px;">
    </a>
    <div id="online-store" style="padding-top: 5px;background: none;">


        <div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_after_header hfeed site"
             style="background: none;">
            <!--  Start Main  -->
            <div id="main" style="background: none;">
                <!--  Start Middle  -->
                <div id="middle" style="background: none;">
                    <div class="middle_inner" style="background: none;">
                        <div id="cmsmasters_row_533cea71e2" style="background: none;"
                             class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                            <div class="cmsmasters_row_outer_parent" style="background: none;">
                                <div class="cmsmasters_row_outer" style="background: none;">
                                    <div class="cmsmasters_row_inner" style="background: none;">
                                        <div class="cmsmasters_row_margin">
                                            <div id="cmsmasters_column_d5e166fd8a" class="cmsmasters_column one_first">
                                                <div class="cmsmasters_column_inner">
                                                    <div class="cmsmasters_posts_slider cmsmasters_posts_slider_product">
                                                        <div id="cmsmasters_slider_3f171e76ab"
                                                             class="cmsmasters_owl_slider owl-carousel" data-items="4"
                                                             data-pagination="true" data-navigation="false"
                                                             data-single-item="false" data-auto-play="10000">
                                                            @foreach($featuredProducts as $product)
                                                                <div class="cmsmasters_owl_slider_item"
                                                                     style="height: 370px;">
                                                                    <article
                                                                            class="post-13743 product type-product status-publish has-post-thumbnail product_cat-shoes product_cat-sneakers product_cat-unisex product_tag-shoes product_tag-sneakers product_tag-unisex first instock shipping-taxable purchasable product-type-variable">
                                                                        <div class="cmsmasters_product">
                                                                            <figure class="cmsmasters_product_img">
                                                                                <a href="{{ url('product/'.$product->id) }}">
                                                                                    @php
                                                                                        $details = $product->Images;

                                                                                    @endphp
                                                                                    <img width="540" height="540"
                                                                                         style="height: 250px"
                                                                                         src="https://storeback.forma-eg.com/images/product/{{ isset($details[0]->image)? $details[0]->image : '' }}"
                                                                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                                         sizes="(max-width: 540px) 100vw, 540px"/>
                                                                                    <img width="540" height="540"
                                                                                         style="height: 250px"
                                                                                         src="https://storeback.forma-eg.com/images/product/{{ isset($details[1]->image) ? $details[1]->image : isset($details[0]->image)? $details[0]->image : ''  }}"
                                                                                         class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                                         sizes="(max-width: 540px) 100vw, 540px"/>
                                                                                </a>

                                                                            </figure>
                                                                            <div class="cmsmasters_product_inner">
                                                                                <header class="cmsmasters_product_header entry-header">
                                                                                    <h5 class="cmsmasters_product_title entry-title">
                                                                                        <a href="{{ url('product/'.$product->id) }}">{{ substr($product->title,0,23) }}</a>
                                                                                    </h5>
                                                                                </header>
                                                                                <div class="cmsmasters_product_cat entry-meta">
                                                                                    <a href="{{url('shop/cate/'.$product->category_id)}}"
                                                                                       class="cmsmasters_cat_color cmsmasters_cat_73"
                                                                                       rel="category tag">{{ substr($product->Category->title,0,12) }}</a>,
                                                                                    <a href="{{url('shop/subcate/'.$product->subcategory_id)}}"
                                                                                       class="cmsmasters_cat_color cmsmasters_cat_74"
                                                                                       rel="category tag">{{ substr($product->SubCategory->title,0,12) }}</a>
                                                                                </div>
                                                                                <div class="cmsmasters_product_info">
                                                                            <span class="price"><span
                                                                                        class="woocommerce-Price-amount amount"><span><span
                                                                                                class="woocommerce-Price-currencySymbol">L.E </span></span>{{ $product->price }}</span></span>
                                                                                    <div class="cmsmasters_star_rating"
                                                                                         itemscope
                                                                                         itemtype="https://schema.org/AggregateRating"
                                                                                         title="Rated 5.00 out of 5">
                                                                                        <div class="cmsmasters_star_trans_wrap">
                                                                                            @for($i=0;$i < 5;$i++)
                                                                                                @if($i > $product->rating)

                                                                                                    <i class="fa fa-star-o" style="font-size: 10px;color: #ff8f00;" aria-hidden="true"></i>

                                                                                                @else
                                                                                                    <i class="fa fa-star" aria-hidden="true" style="font-size: 10px;color: #ff8f00;"></i>


                                                                                                @endif
                                                                                            @endfor

                                                                                        </div>
                                                                                        <span class="rating dn" ><strong
                                                                                                    itemprop="ratingValue">5.00</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

<div class="container-fluidr spot">
    <h1 class="text-center">Spots</h1>
    <div class="owl-carousel owl-theme owl-carousel2">
        @foreach($newsCategory as $category)
            <div class="item">
                <a href="{{ url('subcategory/'.$category->id) }}">
                    <img src="{{ url('https://adminhome.forma-eg.com/'.$category->newscmsimage)  }}" alt="">
                    <h6>{{ substr($category->newscmscategoy,0,50) }}</h6>
                </a>
            </div>
        @endforeach
    </div>
</div>



<div class="clearfix"></div>
<div id="app" style="width: 100%;overflow-x:hidden ">
    <h1>forma app</h1>
    <div class="container" style="background: none">
        <div class="row">
            <div class="col-md-12">
                <div class="col-sm-3 hidden-xs"></div>
                <div class="col-sm-3 col-xs-6">
                    <img class="img-responsive" src="{{ asset('images/mobile.png') }}" alt="">
                </div>
                <div class="col-sm-3 col-xs-6">
                    <h2 style="color:#000">available on</h2>
                    <img class=" img-responsive" src="{{ asset('images/footer_bg.png') }}" alt="">
                    <a href="https://play.google.com/store/apps/details?id=com.nevdia.forma"><img class=" img-responsive" src="{{ asset('images/googleplay.png') }}" alt=""></a>
                    <a href="https://itunes.apple.com/eg/app/forma-app/id1446006836?mt=8"><img class=" img-responsive" src="{{ asset('images/appstore.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer"
     style="">
    <div class="container" style="background: none">
        <div style="margin-bottom: 20px;" id="sub">
            <div class="row">

                <div class="col-sm-6" id="join-forma">
                    <h2 class="text-capitalize text-center">sing up to Forma</h2>
                    <h1 class="text-capitalize text-center">Join Our Forma</h1>
                </div>
                <div class="col-sm-6">
                    <a href="https://docs.google.com/forms/d/1MFOe3srrW6J6P7bG5PKiia0TBev0srHYmlG3a_NSyN0/prefill"
                       class="join-forma-btn" type="button">Join Forma</a>
                </div>
            </div>
        </div>
        <div id="footer_data">
            <div class="col-md-5">
                <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt=""
                     style="width: 80%;height: 272px;margin-left: 10%;">
                <p>
                    Forma is a new booming application that links all gyms and fitness centers all together as well as
                    dietitians,
                    nutritionists, slimming centers, physiotherapists, supplements and anything that has got to do with
                    sports or fitness in one application.
                </p>
            </div>
            <div class="col-md-7" style="margin-top: 250px" id="contact">
                <div class="col-md-3 col-xs-6">
                    <ul>
                        <li>Contacts</li>
                        <li><a href="">Facebook</a></li>
                        <li><a href="">twitter</a></li>
                        <li><a href="">google+</a></li>
                        <li><a href="">pinterest</a></li>
                        <li><a href="">linked in</a></li>
                    </ul>
                </div>
                <div class="col-md-9 col-xs-6">
                    <ul>
                        <li><span>Forma Info </span></li>
                        <li><a href=""> <i class="fa fa-location-arrow"></i>
                                52 El-Hussein, First Floor
                                Ad Doqi, Giza Governorate.
                            </a></li>
                        <li><a href=""> <i class="fa fa-phone"></i> 01555550889</a></li>
                        <li><a href=""> <i class="fa fa-mail-forward"></i> info@nevdia.com</a></li>
                        <li><a href=""> <i class="fa fa-calendar"></i> Saturday-Wednesday : 10:00 AM-6:00 PM</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@include('online_store/template/endPage')
<script>
    $(document).ready(function() {
        $('.owl-carousel2').owlCarousel({
            autoPlay : true,
            navigation : true,
            navigationText : ["<i class='fas fa-arrow-left' style='color: #000;font-size:30px;margin:10px'></i>","<i class='fas fa-arrow-right' style='color:#000;font-size:30px;margin:10px'></i>"],
            rewindNav : true,
            items : 5,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [980,3],
            itemsTablet: [768,2],
            itemsTabletSmall: false,
            itemsMobile : [479,2],
        });
    })
</script>
</body>
</html>



