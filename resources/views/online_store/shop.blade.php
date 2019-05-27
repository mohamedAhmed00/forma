<!DOCTYPE html>
<html lang="en-US" class="cmsmasters_html">
<meta https-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="{{ $setting->meta_description }}"/>
    <meta name="keywords" content="{{ $setting->meta_keyword }}"/>
    <meta name="author" content="{{ $setting->meta_auther }}"/>
    <title>{{ $setting->title }}</title>
    @include('online_store/template/head')
    <link rel="icon" type="image/png"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}" sizes="16x16">
    <link rel="icon" type="image/png"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
</head>
<body class="home page-template-default page page-id-7366 cookies-not-set woocommerce-no-js ywcas-sports-store yith-wcan-free">

<div class="cmsmasters_header_search_form">
    <span class="cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel"></span>
    <div class="yith-ajaxsearchform-container cmsmasters_ajax_search_premium">
        <form method="get" id="yith-ajaxsearchform" action="https://sports-store.cmsmasters.net/">
            <div class="yith-ajaxsearchform-container">
                <div class="yith-ajaxsearchform-select">
                    <input type="hidden" name="post_type" class="yit_wcas_post_type" id="yit_wcas_post_type"
                           value="product"/>

                </div>
                <div class="search-navigation_wrap">
                    <div class="search-navigation">
                        <label class="screen-reader-text" for="yith-s">Search for:</label>
                        <input type="search"
                               value=""
                               name="s"
                               id="yith-s"
                               class="yith-s empty"
                               placeholder="Search for products"
                               data-append-to=".search-navigation"
                               data-loader-icon="https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/images/preloader.gif"
                               data-min-chars="3"/>

                    </div>
                    <button type="submit" id="yith-searchsubmit"></button>
                </div>

            </div>
        </form>
    </div>
</div>
<!--  Start Page  -->
<div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_after_header hfeed site">

    <!--  Start Main  -->
    <div id="main">

        @include('online_store.template.header')

        <div id="middle">
            <div class="headline cmsmasters_color_scheme_default">
                <div class="headline_outer cmsmasters_headline_disabled">
                    <div class="headline_color"></div>
                </div>
            </div>
            <div class="middle_inner">
                <div class="content_wrap fullwidth">

                    <!--  Start Content  -->
                    <div class="middle_content entry"></div>
                </div>
                @include('online_store.template.slider')
                <div id="cmsmasters_row_0725898f99"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
                                    @foreach($category as $cate)
                                        <div id="cmsmasters_column_f63572ce6a" class="cmsmasters_column one_third">
                                            <div class="cmsmasters_column_inner">


                                                <div id="cmsmasters_fb_1c7766695c"
                                                     class="cmsmasters_featured_block cmsmasters_featured_block_hover"
                                                     style="background-image: url('{{ asset('https://storeback.forma-eg.com/images/Category/'.$cate->image) }}')">
                                                    <a class="cmsmasters_featured_block_link"
                                                       href="{{ url('shop/cate/'.$cate->id) }}"></a>
                                                    <div class="featured_block_inner">
                                                        <div class="featured_block_text">
                                                            <div id="cmsmasters_heading_eebc4bcac2"
                                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h2 class="cmsmasters_heading"><a
                                                                            ++href="{{ url('shop/cate') }}">{{ $cate->title }} </a>
                                                                </h2>
                                                            </div>
                                                            <div id="cmsmasters_heading_0a103986dc"
                                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h3 class="cmsmasters_heading"><?= $cate->description ?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #cmsmasters_fb_016z4vrb3b h3, #cmsmasters_fb_016z4vrb3b h1, #cmsmasters_fb_016z4vrb3b h5, #cmsmasters_fb_016z4vrb3b h2 strong {
                        color: #FFF
                    }

                    #cmsmasters_fb_016z4vrb3b h1 {
                        font-size: 35px
                    }
                </style>
                <div id="cmsmasters_row_dtwcl8ntu"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">

                                    <div id="cmsmasters_column_e0h038wl6" class="cmsmasters_column one_fourth">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_fb_016z4vrb3b"
                                                 class="cmsmasters_featured_block cmsmasters_featured_block_hover"
                                                 style="background-image: url('{{ asset("online_store/wp-content/img/4-2.jpg") }}')">
                                                <a class="cmsmasters_featured_block_link"
                                                   href="https://sports-store.cmsmasters.net/shop"></a>
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div id="cmsmasters_heading_89db67754d42"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h3 class="cmsmasters_heading">2018</h3>
                                                        </div>
                                                        <div id="cmsmasters_heading_ef927527455cb"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h2 class="cmsmasters_heading">BEST SELLING</h2>
                                                        </div>
                                                        <div id="cmsmasters_heading_be46b6r4d74e"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h5 class="cmsmasters_heading"><a
                                                                        href="https://sports-store.cmsmasters.net/new-collection/">Get
                                                                    the discount OF 20%</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cmsmasters_column_e0h038wl6" class="cmsmasters_column one_fourth">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_fb_o5eqkmubb8"
                                                 class="cmsmasters_featured_block cmsmasters_featured_block_hover"
                                                 style="background-image: url('{{ asset("online_store/wp-content/img/6-1.jpg") }}')">
                                                <a class="cmsmasters_featured_block_link"
                                                   href="https://sports-store.cmsmasters.net/new-collection/"></a>
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div id="cmsmasters_heading_89db67754d41"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h3 class="cmsmasters_heading">Summer trends</h3>
                                                        </div>
                                                        <div id="cmsmasters_heading_ef927527454cb"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h2 class="cmsmasters_heading">NEW ARRIVALS</h2>
                                                        </div>
                                                        <div id="cmsmasters_heading_be46b6r4d73e"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h5 class="cmsmasters_heading"><a
                                                                        href="https://sports-store.cmsmasters.net/new-collection/">Shop
                                                                    Now</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cmsmasters_column_e0h038wl6" class="cmsmasters_column one_fourth">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_fb_q0vgmjpmb"
                                                 class="cmsmasters_featured_block cmsmasters_featured_block_hover"
                                                 style="background-image: url('{{ asset("online_store/wp-content/img/7-1.jpg") }}')">
                                                <a class="cmsmasters_featured_block_link"
                                                   href="https://sports-store.cmsmasters.net/shop"></a>
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div id="cmsmasters_heading_892db754d41"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h3 class="cmsmasters_heading">BIG SALE</h3>
                                                        </div>
                                                        <div id="cmsmasters_heading_ef92347527cb"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h2 class="cmsmasters_heading">SUMMER TRENDS</h2>
                                                        </div>
                                                        <div id="cmsmasters_heading_be4678b6d73e"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h5 class="cmsmasters_heading"><a
                                                                        href="https://sports-store.cmsmasters.net/new-collection/">top
                                                                    brands up to 80% off</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cmsmasters_column_e0h038wl6" class="cmsmasters_column one_fourth">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_fb_016z4vrb3b"
                                                 class="cmsmasters_featured_block cmsmasters_featured_block_hover"
                                                 style="background-image: url('{{ asset("online_store/wp-content/img/gina-carano.jpg") }}')">
                                                <a class="cmsmasters_featured_block_link"
                                                   href="https://sports-store.cmsmasters.net/shop"></a>
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div id="cmsmasters_heading_89db67754d42"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h3 class="cmsmasters_heading">2018</h3>
                                                        </div>
                                                        <div id="cmsmasters_heading_ef927527455cb"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h2 class="cmsmasters_heading">Exclusive</h2>
                                                        </div>
                                                        <div id="cmsmasters_heading_be46b6r4d74e"
                                                             class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                            <h5 class="cmsmasters_heading"><a
                                                                        href="https://sports-store.cmsmasters.net/new-collection/">Products</a>
                                                            </h5>
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
                <div id="cmsmasters_row_4cd0a24488"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_5738a51f3b" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_d4373edb33"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h3 class="cmsmasters_heading"></h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"></div>
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
<span class="cmsmasters_responsive_width"></span>
@include('online_store/template/endPage')

</body>

<!-- Mirrored from sports-store.cmsmasters.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jul 2018 12:39:17 GMT -->
</html>
