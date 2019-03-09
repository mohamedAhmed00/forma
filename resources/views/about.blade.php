<!DOCTYPE html>
<html lang="zxx" style="overflow-x: hidden">

<head >
    @php
        $page = "about";
    @endphp
    <title>Forma </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta https-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Forma" />
    <link href="{{ asset('css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style4.css') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/35x35Untitled-1.png') }}">
    <link href="//fonts.googleapis.com/css?family=Jockey+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
          integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Custom Theme files -->
    <link href="{{ asset('css/test.css') }}" type="text/css" rel="stylesheet" media="all">
    <style>

        .banner-right-text
        {
            border-left:solid 3px #33ff00
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
                width:100px;
                height: 100px;
                margin-top: -10px; float: left;margin-left: 40px
            }
            #header .header_mid_inner img
            {
                display: inline-block;
                width: 300px;
                height: 100px;
                margin-top: 3px;
                float: left;
                margin-left: 10px;
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
            #header .header_mid .resp_mid_nav_wrap
            {
                display: inline-block;
                vertical-align: top;
                margin: -10px 8px 20px;
                float: none;
                left:0% !important;
                top: 30px;
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
            #header .header_mid .resp_mid_nav_wrap
            {
                display: inline-block;
                vertical-align: top;
                margin: -10px 8px 20px;
                float: none;
                left: 10% !important;
                top: 30px;
            }
            #header .header_mid_inner img
            {
                display: inline-block;
                width: 300px;
                height: 100px;
                margin-top: 3px;
                float: left;
                margin-left: 10px;
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
            #header .header_mid .resp_mid_nav_wrap
            {
                display: inline-block;
                vertical-align: top;
                margin: -10px 8px 20px;
                float: none;
                left: 10% !important;
                top: 30px;
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
            #header .header_mid_inner img
            {
                width: 120px;
                height: 120px;
                margin-top: 3px;
                float: left;
                margin-left: 40px
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
        *
        {
            font-family: 'Roboto Condensed', Arial, Helvetica, 'Nimbus Sans L', sans-serif !important;
        }
    </style>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
            src='{{ asset('online_store_slider/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4') }}'></script>

    <script type='text/javascript'
            src='{{ asset('online_store_slider/wp-content/themes/sports-store/js/owlcarousel.min8a54.js?ver=1.0.0') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store_slider/wp-content/themes/sports-store/js/jquery.script8a54.js?ver=1.0.0') }}'></script>

    <script type='text/javascript'
            src='{{ asset('online_store/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery7a2d.js?ver=6.7.6') }}'></script>
    <script type='text/javascript'
            src='{{ asset('online_store/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions7a2d.js?ver=6.7.6') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var cnArgs = {
            "ajaxurl": "https:\/\/sports-store.cmsmasters.net\/wp-admin\/admin-ajax.php",
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
    <!-- //web-fonts -->
</head>
<body style="overflow-x: hidden;">
<div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_after_header hfeed site">

    <!--  Start Main  -->
    <div id="main">
        @include('templates.header')
    </div>
</div>
<div class="about-top section" id="about">
    <div class="container">
        <div class="w3l-about-top-head">
            <div class="col-md-12 about-left text-center">
                <h5 class="main-title">introducing</h5>
                <h6 class="txt">Forma</h6>
                <p>we explore your hidden potential</p>
            </div>

            <div class="col-md-12 about-right">
                <h5> Forma is a new booming application that links all gyms and fitness centers all together as well as dietitians,
                    nutritionists, slimming centers, physiotherapists, supplements and anything that has got to do with sports or fitness in one application.</h5>
                <p>You can easily find the closest gym or center to your location and have a brief description for its main facilities, working hours, new offers, classes …etc.
                    In addition to facilitating selling online products/services such as food supplements, sports accessories, gym memberships,
                    booking dietitians’ appointments etc. Also it keeps you updated with the latest fitness events, competitions and any news that an athlete has to know.</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->
<div class="section about-bottomgrid">
    <div class="container">
        <div class="about-bot-grid-sec">
            <div class="about-section" style="margin-bottom:30px">
                <div class="col-md-12 wthree-sec-about">
                    <h4 class="bot-grid1">commit to be fit</h4>
                    <p class="bot-gridtxt">Forma simply connects you 24/7 to all the fitness news, challenging events, various kinds of sports, motivating videos , tempting offers ,  pictures for healthy delicious low fat meals…etc.
                        , playing a main role in maintaining one’s inner-motivation , self-discipline and challenging passion , easily pushing you back on track whenever you’re in a down phase.</p>
                </div>
                <div class="clearfix"> </div>

            </div>
            <div class="col-md-12 wthree-sec-about about-pos-btm">
                <h4 class="bot-grid-about">focus on being happy</h4>
                <p>Life’s too short to eat food you hate or to live without the Endorphins provided by training,
                    with a quality fitness program and meal plan you’ll feel better, enjoy your life and get real results that will motivate you,
                    encourage you to continue and make you happy.</p>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>


</body>
</html>
