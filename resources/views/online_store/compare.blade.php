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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @include('online_store/template/head')
    <link rel="icon" type="image/png"
          href="{{asset('Forma'.$setting->favicon)}}" sizes="16x16">
    <link rel="icon" type="image/png"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
    <style>
        .content
        {
            width: 100%;
        }
        @media only screen and (min-width: 767px) {
            .headline_aligner,
            .cmsmasters_breadcrumbs_aligner {
                min-height: 80px;
            }
        }

        .cmsmasters_color_scheme_default {
            margin-bottom: 25px;
        }

        .mid_nav_wrap {
            margin-top: 20px;
        }

        .shop_table, shop_table td, .woocommerce table.wishlist_table thead th, .woocommerce table.wishlist_table tbody td, .product-remove div {
            text-align: center !important;
        }
    </style>
</head>
<body class="page-template-default page page-id-14360 cookies-not-set woocommerce-no-js ywcas-sports-store yith-wcan-free">

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
<div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_under_header hfeed site">

    <!--  Start Main  -->
    <div id="main">

        <!--  Start Header  -->
    @include('online_store.template.header')
    <!--  Finish Header  -->


        <!--  Start Middle  -->
        <div id="middle">
            <div class="headline cmsmasters_color_scheme_default">
                <div class="headline_outer">
                    <div class="headline_color"></div>
                    <div class="headline_inner align_left">
                        <div class="headline_aligner"></div>
                        <div class="headline_text"><h1 class="entry-title">Compare</h1></div>
                        <div class="cmsmasters_breadcrumbs">
                            <div class="cmsmasters_breadcrumbs_aligner"></div>
                            <div class="cmsmasters_breadcrumbs_inner"><a href="{{ url('onlinestore') }}"
                                                                         class="cms_home">Home</a>
                                <span class="breadcrumbs_sep"> / </span>
                                <span>Compare</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle_inner">
                <div class="content_wrap l_sidebar">

                    <!--  Start Content  -->
                    <div class="content entry fr">

                        <div id="yith-woocompare" class="woocommerce">
                            @foreach($compares as $compare)
                                <table id="yith-woocompare-table" class="compare-list ">
                                    <tbody>
                                    <tr class="product_info">
                                        @foreach($compare as $item)
                                            <td class="odd product_1664">
                                                <div class="" style="text-align: center">
                                                    <a href="{{ url('/compare/remove/'.$item['rowId']) }}" data-is_page="1" data-product_id="1664"><span class="remove"> x </span> Remove </a>
                                                </div>
                                                <a href="{{ url('product/' . $item['id']) }}">
                                                    <div class="image-wrap">
                                                        <img src="https://storeback.forma-eg.com/images/product/{{ $item['options']['image'] }}"
                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                             sizes="(max-width: 540px) 100vw, 540px" width="540"
                                                             height="540">
                                                    </div>
                                                    <h4 class="product_title">{{ $item['name'] }}</h4>
                                                </a>
                                                <div class="single_variation_wrap">
                                                    <div class="woocommerce-variation single_variation"></div>
                                                    <div class="woocommerce-variation-add-to-cart variations_button" style="text-align: center">

                                                        <a
                                                                rel="nofollow"
                                                                data-quantity="1"
                                                                style="cursor: pointer"
                                                                data-product_id="{{ $item['id'] }}"
                                                                data-product_sku=""
                                                                class="addToCarts button product_type_variable add_to_cart_button cmsmasters_add_to_cart_button">Add
                                                            To Cart</a>


                                                        <input type="hidden" name="add-to-cart" value="13743"/>
                                                        <input type="hidden" name="product_id" value="13743"/>
                                                        <input type="hidden" name="variation_id" class="variation_id"
                                                               value="0"/>
                                                    </div>
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="price">
                                        @foreach($compare as $item)
                                            <td class="odd product_1664"><span
                                                        class="woocommerce-Price-amount amount"><span><span
                                                                class="woocommerce-Price-currencySymbol">L.E</span></span> {{ $item['price']}}</span>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="description">
                                        @foreach($compare as $item)
                                            <td class="odd product_1664">
                                                {!!  $item['options']['product']['description'] !!}
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="pa_colors">
                                        @foreach($compare as $item)
                                            @php
                                                $color =  $item['options']['color'];
                                                $string = '';
                                            foreach($color as $col)
                                            {
                                                $string .= $col['color'] .' , ';
                                            }
                                            @endphp
                                            <td class="odd product_1664">
                                                {{ trim($string,',') }}
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="rating">
                                        @foreach($compare as $item)
                                            <td class="odd product_1664">
                                                <div class="cmsmasters_star_rating" itemscope
                                                     itemtype="https://schema.org/AggregateRating" style="margin-left: 35%;width: 50%;" title="Rated 5.00 out of 5">
                                                    <div class="cmsmasters_star_trans_wrap">
                                                        @for($i=0;$i < 5;$i++)
                                                            @if($i > $item['options']['product']['rating'])
                                                                <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"
                                                                      style="color:#ff8f00"></span>
                                                            @else
                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"
                                                                      style="color:#ff8f00"></span>

                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <span class="rating dn"><strong itemprop="ratingValue">5.00</strong> out of 5</span>
                                                </div>
                                            </td>
                                        @endforeach
                                    </tr>
                                    <tr class="price repeated">
                                        @foreach($compare as $item)
                                            <td class="odd product_1664">
                                                {!!  $item['options']['product']['size']; !!}
                                            </td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            @endforeach
                        </div>
                        <div class="cl"></div>
                    </div>
                    <!--  Finish Content  -->

                </div>
            </div>
        </div>
        <!--  Finish Middle  -->
        <!--  Start Bottom  -->
        <div id="bottom" class="cmsmasters_color_scheme_footer">
            <div class="bottom_bg">
                <div class="bottom_outer">
                    <div class="bottom_inner sidebar_layout_14141414">
                        <aside id="text-3" class="widget widget_text"><h3 class="widgettitle">Help</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li><a href="https://sports-store.cmsmasters.net/how-to-make-an-order/">How to Make
                                            an Order?</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/delivery-terms/">Delivery Terms</a>
                                    </li>
                                    <li><a href="https://sports-store.cmsmasters.net/my-account/">My Orders</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/return/">Returns</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/terms-and-conditions/">Terms and
                                            Conditions</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="text-5" class="widget widget_text"><h3 class="widgettitle">Customer Service</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li>
                                        <a href="https://sports-store.cmsmasters.net/product/different-tools-for-fitness/">Product
                                            Simple</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/product/classic-sports-bra/">Product
                                            Extended</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/cart/">Your Cart</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/wishlist/">Wishlist</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/shop/">Shop</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="text-4" class="widget widget_text"><h3 class="widgettitle">Sport Store</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li><a href="https://sports-store.cmsmasters.net/new-collection/">New Collection </a>
                                    </li>
                                    <li><a href="https://sports-store.cmsmasters.net/women/">Women</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/men/">Men</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/blog/">Our Blog</a></li>
                                    <li><a href="https://sports-store.cmsmasters.net/contacts/">Contacts</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="text-6" class="widget widget_text"><h3 class="widgettitle">Quick Links</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">YouTube</a></li>
                                    <li><a href="#">Pinterest</a></li>
                                    <li><a href="#">Twitter</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!--  Finish Bottom  -->
        <a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
    </div>
    <!--  Finish Main  -->

    <!--  Start Footer  -->
    <footer id="footer" class="cmsmasters_color_scheme_footer cmsmasters_footer_small">
        <div class="footer_inner">
            <div class="footer_in_inner footer_ctr_align">
				<span class="footer_copyright copyright">
			© 2018 {{ $setting->title }}		</span>
            </div>
        </div>
    </footer>
    <!--  Finish Footer  -->

</div>
<span class="cmsmasters_responsive_width"></span>

@include('online_store/template/endPage')


</body>

<!-- Mirrored from sports-store.cmsmasters.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Jul 2018 12:39:17 GMT -->
</html>
