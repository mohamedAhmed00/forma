<!DOCTYPE html>
<html lang="en-US" class="cmsmasters_html">
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="{{ $setting->meta_description }}"/>
    <meta name="keywords" content="{{ $setting->meta_keyword }}"/>
    <meta name="author" content="{{ $setting->meta_auther }}"/>
    <title>{{ $setting->title }}</title>
    <script src="{{ asset('latest_news/js/jquery.min.js') }}"></script>
    @include('online_store/template/head')
    <link rel="icon" type="image/png"
          href="{{asset('http://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}" sizes="16x16">
    <link rel="icon" type="image/png"
          href="{{asset('Forma'.$setting->favicon)}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{asset('http://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{asset('http://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}">
    <style>
        @media only screen and (min-width: 767px) {
            .headline_aligner,
            .cmsmasters_breadcrumbs_aligner {
                min-height: 80px;
            }
        }
        .cmsmasters_color_scheme_default
        {
            margin-bottom: 25px;
        }
    </style>
</head>
<body class="page-template-default page page-id-3840 cookies-not-set woocommerce-cart woocommerce-page woocommerce-no-js ywcas-sports-store yith-wcan-free">

<div class="cmsmasters_header_search_form">
    <span class="cmsmasters_header_search_form_close cmsmasters_theme_icon_cancel"></span>	<div class="yith-ajaxsearchform-container cmsmasters_ajax_search_premium">
        <form method="get" id="yith-ajaxsearchform" action="http://sports-store.cmsmasters.net/">
            <div class="yith-ajaxsearchform-container">
                <div class="yith-ajaxsearchform-select">
                    <input type="hidden" name="post_type" class="yit_wcas_post_type" id="yit_wcas_post_type" value="product" />

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
                               data-loader-icon="http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/images/preloader.gif"
                               data-min-chars="3" />

                    </div>
                    <button type="submit" id="yith-searchsubmit"></button>
                </div>

            </div>
        </form>
    </div>
</div>
<!--  Start Page  -->
<div id="page" class="csstransition cmsmasters_liquid fixed_header cmsmasters_heading_after_header hfeed site">
@php
    $carts = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content();
    $carttotal = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total();
@endphp
    <!--  Start Main  -->
    <div id="main">

        <!--  Start Header  -->
    @include('online_store.template.header')
        <!--  Finish Header  -->


        <!--  Start Middle  -->
        <div id="middle">
            <div class="headline cmsmasters_color_scheme_default">
                <div class="headline_outer">
                    <div class="headline_color"></div><div class="headline_inner align_left">
                        <div class="headline_aligner"></div><div class="headline_text"><h1 class="entry-title">Cart</h1></div><div class="cmsmasters_breadcrumbs"><div class="cmsmasters_breadcrumbs_aligner"></div><div class="cmsmasters_breadcrumbs_inner"><a href="{{ url('/onlinestore') }}" class="cms_home">Home</a>
                                <span class="breadcrumbs_sep"> / </span>
                                <span>Cart</span></div></div></div></div>
            </div><div class="middle_inner">
                <div class="content_wrap fullwidth">
                    <!--  Start Content  -->
                    <div class="middle_content entry"></div></div><div id="cmsmasters_row_03cc922411" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_0a1a0d6f3a" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner"><div class="cmsmasters_text">
                                                <div class="woocommerce">
                                                    <form class="woocommerce-cart-form" action="{{ url('cart/updates') }}/" method="post">

                                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                                                            <thead>
                                                            <tr>
                                                                <th class="product-remove">&nbsp;</th>
                                                                <th class="product-thumbnail">&nbsp;</th>
                                                                <th class="product-name">Product</th>
                                                                <th class="product-price">Price</th>
                                                                <th class="product-quantity">Quantity</th>
                                                                <th class="product-subtotal">Total</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($carts as $cart)
                                                                <tr class="woocommerce-cart-form__cart-item cart_item">

                                                                    <td class="product-remove">
                                                                        <a href="{{ url('removeItemFromCart/'.$cart->rowId) }}">X</a>
                                                                    </td>

                                                                    <td class="product-thumbnail">
                                                                        <a href="{{ url('product/'.$cart->id) }}">
                                                                            <img width="540" height="540" src="http://storeback.forma-eg.com/images/product/{{ $cart->options->image }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image" alt="" />
                                                                        </a>                                                                    </td>

                                                                    <td class="product-name" data-title="Product">
                                                                        <a href="{{ url('product/'.$cart->id) }}">{{ $cart->title }}</a>

                                                                         </td>

                                                                    <td class="product-price" data-title="Price">
                                                                        <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">L . E </span></span>{{ $cart->price }}</span>						</td>

                                                                    <td class="product-quantity" data-title="Quantity">
                                                                        <div class="quantity">
                                                                            <label class="screen-reader-text" for="quantity_5bbfaf1763aad">Quantity</label>
                                                                            <input type="number"
                                                                                    id="quantity_5bbfaf1763aad"
                                                                                    class="input-text qty text" step="1"
                                                                                    min="0" max="" name="qty[]"
                                                                                    value="{{ $cart->qty }}" title="Qty" size="4" pattern="[0-9]*"
                                                                                    inputmode="numeric" aria-labelledby="Women&#039;s Casual Sneaker quantity" />
                                                                        </div>
                                                                    </td>
                                                                    @csrf
                                                                    <input type="hidden" name="id[]" value="{{ $cart->rowId }}">
                                                                    <td class="product-subtotal" data-title="Total">
                                                                        <span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">L.E </span></span>{{ $cart->price * $cart->qty }}</span>						</td>
                                                                </tr>
                                                            @endforeach
                                                            <tr>
                                                                <td colspan="6" class="actions">

                                                                    <button type="submit" class="button" name="update_cart" value="Update cart">Update cart</button>


                                                                    <input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="1a825d3dc1" /><input type="hidden" name="_wp_http_referer" value="/cart/" />				</td>
                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                    </form>

                                                    <div class="cart-collaterals">
                                                        <div class="cart_totals ">


                                                            <h2>Cart totals</h2>

                                                            <table cellspacing="0" class="shop_table shop_table_responsive">

                                                                <tr class="cart-subtotal">
                                                                    <th>Total Price</th>
                                                                    <td data-title="Subtotal"><span class="woocommerce-Price-amount amount"><span><span class="woocommerce-Price-currencySymbol">L.E </span></span>{{ $carttotal }}</span></td>
                                                                </tr>


                                                            </table>

                                                            <div class="wc-proceed-to-checkout">

                                                                <a href="{{ url('checkout') }}/" class="checkout-button button alt wc-forward">
                                                                    Proceed to checkout</a>
                                                            </div>


                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cl"></div><div class="content_wrap fullwidth">

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
                        <aside id="text-3" class="widget widget_text"><h3 class="widgettitle">Help</h3>			<div class="textwidget"><ul class="styled_list">
                                    <li><a href="http://sports-store.cmsmasters.net/how-to-make-an-order/">How to Make an Order?</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/delivery-terms/">Delivery Terms</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/my-account/">My Orders</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/return/">Returns</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/terms-and-conditions/">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </aside><aside id="text-5" class="widget widget_text"><h3 class="widgettitle">Customer Service</h3>			<div class="textwidget"><ul class="styled_list">
                                    <li><a href="http://sports-store.cmsmasters.net/product/different-tools-for-fitness/">Product Simple</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/product/classic-sports-bra/">Product Extended</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/cart/">Your Cart</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/wishlist/">Wishlist</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/shop/">Shop</a></li>
                                </ul>
                            </div>
                        </aside><aside id="text-4" class="widget widget_text"><h3 class="widgettitle">Sport Store</h3>			<div class="textwidget"><ul class="styled_list">
                                    <li><a href="http://sports-store.cmsmasters.net/new-collection/">New Collection </a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/women/">Women</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/men/">Men</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/blog/">Our Blog</a></li>
                                    <li><a href="http://sports-store.cmsmasters.net/contacts/">Contacts</a></li>
                                </ul>
                            </div>
                        </aside><aside id="text-6" class="widget widget_text"><h3 class="widgettitle">Quick Links</h3>			<div class="textwidget"><ul class="styled_list">
                                    <li><a href="#">Facebook</a></li>
                                    <li><a href="#">Instagram</a></li>
                                    <li><a href="#">YouTube</a></li>
                                    <li><a href="#">Pinterest</a></li>
                                    <li><a href="#">Twitter</a></li>
                                </ul></div>
                        </aside>				</div>
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
			© 2017 Sports Store		</span>
            </div>
        </div></footer>
    <!--  Finish Footer  -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!--  Finish Page  -->


<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu.js?ver=1.2.7'></script>

<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.3'></script>

<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.9.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/sports-store.cmsmasters.net\/cart\/","is_cart":"1","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.4'></script>

<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-admin/js/password-strength-meter.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.4'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/yith-autocomplete.min.js?ver=1.2.7'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-includes/js/wp-util.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"Sorry, no products matched your selection. Please choose a different combination.","i18n_make_a_selection_text":"Please select some product options before adding this product to your cart.","i18n_unavailable_text":"Sorry, this product is unavailable. Please choose a different combination."};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.4.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wccl_general = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","cart_redirect":"","cart_url":"http:\/\/sports-store.cmsmasters.net\/cart\/","view_cart":"View Cart","tooltip":"1","tooltip_pos":"top","tooltip_ani":"fade","description":"1","add_cart":"Add to cart","grey_out":"","image_hover":"","wrapper_container_shop":"li.product"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/js/yith-wccl.min.js?ver=1.4.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_woocompare = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionadd":"yith-woocompare-add-product","actionremove":"yith-woocompare-remove-product","actionview":"yith-woocompare-view-table","actionreload":"yith-woocompare-reload-product","added_label":"Added","table_title":"Product Comparison","auto_open":"no","loader":"http:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-compare-premium\/assets\/images\/loader.gif","button_text":"Compare","cookie_name":"yith_woocompare_list_1","is_page":"1","page_url":"http:\/\/sports-store.cmsmasters.net\/yith-compare\/","im_in_page":"","view_label":"View Compare","actionfilter":"yith_woocompare_filter_by_cat","num_related":"4","autoplay_related":"","fixedcolumns":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-compare-premium/assets/js/woocompare.min.js?ver=2.1.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-wishlist-premium/assets/js/jquery.selectBox.min.js?ver=1.2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {"ajax_url":"\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-wishlist-premium\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-wishlist-premium/assets/js/jquery.yith-wcwl.js?ver=2.1.2'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/cmsmasters-hover-slider.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/easing.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/easy-pie-chart.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/mousewheel.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/owlcarousel.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/request-animation-frame.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/scrollspy.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/scroll-to.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/stellar.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/waypoints.min.js?ver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_script = {"theme_url":"http:\/\/sports-store.cmsmasters.net\/wp-content\/themes\/sports-store","site_url":"http:\/\/sports-store.cmsmasters.net\/","ajaxurl":"http:\/\/sports-store.cmsmasters.net\/wp-admin\/admin-ajax.php","nonce_ajax_like":"2fd11316cd","nonce_ajax_view":"3c8fe6ef2c","project_puzzle_proportion":"1","gmap_api_key":"AIzaSyDtfUlgzSb3LShTSAju_3gMO00kM_iXGxs","gmap_api_key_notice":"Please add your Google Maps API key","gmap_api_key_notice_link":"read more how","primary_color":"#fa5400","ilightbox_skin":"dark","ilightbox_path":"vertical","ilightbox_infinite":"0","ilightbox_aspect_ratio":"1","ilightbox_mobile_optimizer":"1","ilightbox_max_scale":"1","ilightbox_min_scale":"0.2","ilightbox_inner_toolbar":"0","ilightbox_smart_recognition":"0","ilightbox_fullscreen_one_slide":"0","ilightbox_fullscreen_viewport":"center","ilightbox_controls_toolbar":"1","ilightbox_controls_arrows":"0","ilightbox_controls_fullscreen":"1","ilightbox_controls_thumbnail":"1","ilightbox_controls_keyboard":"1","ilightbox_controls_mousewheel":"1","ilightbox_controls_swipe":"1","ilightbox_controls_slideshow":"0","ilightbox_close_text":"Close","ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)","ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)","ilightbox_slideshow_text":"Slideshow","ilightbox_next_text":"Next","ilightbox_previous_text":"Previous","ilightbox_load_image_error":"An error occurred when trying to load photo.","ilightbox_load_contents_error":"An error occurred when trying to load contents.","ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/jquery.script.js?ver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_theme_script = {"primary_color":"#fa5400"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/theme-framework/theme-style/js/jquery.theme-script.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/jquery.tweet.min.js?ver=1.3.1'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/smooth-sticky.min.js?ver=1.0.2'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_woo_script = {"currency_symbol":"\u00a3","thumbnail_image_width":"70","thumbnail_image_height":"70"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/woocommerce/cmsmasters-framework/theme-style/js/jquery.plugin-script.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/themes/sports-store/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/js/jquery.plugin-script.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcas_params = {"loading":"http:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-ajax-search-premium\/assets\/images\/ajax-loader.gif","show_all":"false","price_label":"Price:","show_all_text":"View all","ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='http://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/frontend.min.js?ver=1.0'></script>

<div id="cookie-notice" role="banner" class="cn-bottom bootstrap" style="color: #fff; background-color: #000;"><div class="cookie-notice-container"><span id="cn-notice-text">We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.</span><a href="#" id="cn-accept-cookie" data-cookie-set="accept" class="cn-set-cookie cn-button bootstrap button">Ok</a>
    </div>

</div></body>
</html>
