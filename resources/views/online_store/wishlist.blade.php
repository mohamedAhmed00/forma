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
        .shop_table,shop_table td,.woocommerce table.wishlist_table thead th, .woocommerce table.wishlist_table tbody td,.product-remove div
        {
            text-align: center !important;
        }
    </style>
</head>
<body class="page-template-default page page-id-5 cookies-not-set woocommerce-no-js ywcas-sports-store yith-wcan-free woocommerce-wishlist woocommerce woocommerce-page">

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
                        <div class="headline_text"><h1 class="entry-title">Wishlist</h1></div>
                        <div class="cmsmasters_breadcrumbs">
                            <div class="cmsmasters_breadcrumbs_aligner"></div>
                            <div class="cmsmasters_breadcrumbs_inner"><a href="{{ url('onlinestore') }}"
                                                                         class="cms_home">Home</a>
                                <span class="breadcrumbs_sep"> / </span>
                                <span>Wishlist</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle_inner">
                <div class="content_wrap fullwidth">

                    <!--  Start Content  -->
                    <div class="middle_content entry"></div>
                </div>
                <div id="cmsmasters_row_f72efca599"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_da48d8a575" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div class="cmsmasters_text">
                                                <div id="yith-wcwl-messages"></div>


                                                    <input type="hidden" id="yith_wcwl_form_nonce"
                                                           name="yith_wcwl_form_nonce" value="bbfff6238d"/><input
                                                            type="hidden" name="_wp_https_referer" value="/wishlist/"/>
                                                    <!-- TITLE -->

                                                    <!-- WISHLIST TABLE -->
                                                    <table class="shop_table cart wishlist_table" data-pagination="no"
                                                           data-per-page="5" data-page="1" data-id="" data-token="">


                                                        <thead>
                                                        <tr>

                                                            <th class="product-remove">#</th>

                                                            <th class="product-thumbnail">Image</th>

                                                            <th class="product-name">
                                                                <span class="nobr">Name</span>
                                                            </th>


                                                            <th class="product-price">
                    <span class="nobr">
                         Price                    </span>
                                                            </th>



                                                            <th class="product-add-to-cart">Add To Cart</th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                        @foreach(Cart::instance('wishlist')->content() as $wishlist)
                                                            <tr id="yith-wcwl-row-13641" data-row-id="13641">

                                                                <td class="product-remove">
                                                                    <div>
                                                                        <a href="/wishlist/remove/{{ $wishlist->rowId }}"
                                                                           class="remove "
                                                                           title="Remove this product">&times;</a>
                                                                    </div>
                                                                </td>
                                                                <td class="product-thumbnail">
                                                                    <a href="{{ url('product/'.$wishlist->id) }}">
                                                                        <img src="https://storeback.forma-eg.com/images/product/{{ $wishlist->options->image }}"
                                                                             class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                             sizes="(max-width: 540px) 100vw, 540px" width="540"
                                                                             height="540"> </a>
                                                                </td>

                                                                <td class="product-name">
                                                                    <a href="https://sports-store.cmsmasters.net/product/mens-long-sleeve-t-shirt/">{{ $wishlist->name }}</a>
                                                                </td>

                                                                <td class="product-price">
                                                                <span class="woocommerce-Price-amount amount"><span><span
                                                                                class="woocommerce-Price-currencySymbol">L.E </span></span>{{ $wishlist->price }}</span>
                                                                </td>

                                                                <td class="product-add-to-cart">
                                                                    <!-- Date added -->

                                                                    <!-- Add to cart button -->
                                                                    <a rel="nofollow"
                                                                       data-quantity="1"
                                                                       style="cursor: pointer"
                                                                       data-product_id="{{ $wishlist->id }}"
                                                                       data-quantity="1"
                                                                       class="addToCarts button product_type_variable add_to_cart_button cmsmasters_add_to_cart_button">Add To Cart</a>

                                                                    <!-- Remove from wishlist -->
                                                                </td>
                                                            </tr>

                                                        @endforeach
                                                        </tbody>
                                                    </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cmsmasters_row_wzn4xmnvps"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_22196f6445"
                                         class="cmsmasters_column one_first aligncenter">
                                        <div class="cmsmasters_column_inner">
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><img
                                                            src="https://sports-store.cmsmasters.net/wp-content/uploads/2015/11/logo-for-home.png"
                                                            alt="logo-for-home"/></div>
                                            </div>
                                            <div id="cmsmasters_divider_0tgor2j0y3" class="cl"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cmsmasters_row_d50d01c004"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_04a9fd1c32" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_divider_8e3b886d92"
                                                 class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cl"></div>
                <div class="content_wrap fullwidth">

                    <div class="middle_content entry"></div>
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

    <footer id="footer" class="cmsmasters_color_scheme_footer cmsmasters_footer_small">
        <div class="footer_inner">
            <div class="footer_in_inner footer_ctr_align">
				<span class="footer_copyright copyright">
			© 2019 {{ $setting->title }}		</span>
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
