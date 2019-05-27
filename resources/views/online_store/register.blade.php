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
    <script src="{{ asset('latest_news/js/jquery.min.js') }}"></script>
    @include('online_store/template/head')
    <link rel="icon" type="image/png"
          href="{{asset('https://storeback.forma-eg.com/images/setting/'.$setting->favicon)}}" sizes="16x16">
    <link rel="icon" type="image/png"
          href="{{asset('Forma'.$setting->favicon)}}" sizes="32x32">
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
        .help-block strong
        {
            color: red;
        }
    </style>
</head>
<body class="page-template-default page page-id-3837 cookies-not-set woocommerce-checkout woocommerce-page woocommerce-no-js ywcas-sports-store yith-wcan-free">

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
                        <div class="headline_text"><h1 class="entry-title">Checkout</h1></div>
                        <div class="cmsmasters_breadcrumbs">
                            <div class="cmsmasters_breadcrumbs_aligner"></div>
                            <div class="cmsmasters_breadcrumbs_inner"><a href="https://sports-store.cmsmasters.net/"
                                                                         class="cms_home">Home</a>
                                <span class="breadcrumbs_sep"> / </span>
                                <span>Checkout</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="middle_inner">
                <div class="content_wrap fullwidth">

                    <!--  Start Content  -->
                    <div class="middle_content entry">
                        <div class="woocommerce">
                            <div class="woocommerce-form-login-toggle">
                                <div class="alert-danger">
                                    @if ($errors->has('fullName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('fullName') }}</strong>
                                        </span>
                                    @endif
                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                @if (! is_object(Auth::guard('customer')->user()))
                                    <div class="woocommerce-info">New customer Or <a href="{{ url('customer/login') }}" class="">Click
                                            here to Login</a></div>


                                    <form action="{{ url('customer/register') }}" class=" woocommerce-form-coupon register" method="post">
                                        @csrf
                                        <p class="form-row form-row-first">
                                            <input type="text" name="fullName" class="input-text" value="{{ old('fullName') }}" placeholder="Enter Fullname" value=""/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <input type="text" name="email" class="input-text" value="{{ old('email') }}" placeholder="Enter Email" value=""/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <input type="text" name="mobile" class="input-text" value="{{ old('mobile') }}" placeholder="Enter Mobile" value=""/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <input type="password" name="password" class="input-text" placeholder="Enter password" value=""/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            <input type="password" name="password_confirmation" class="input-text" placeholder="Enter Repassword" value=""/>
                                        </p>
                                        <p class="form-row form-row-first">
                                            Male : <input type="radio"  name="gender" {{ old('gender') == 'Male'? 'checked' : ''  }} value="Male"/>
                                            Female : <input type="radio" name="gender" {{ old('gender') == 'Female'? 'checked' : ''  }} value="Female"/>
                                        </p>

                                        <p class="form-row">
                                            <input type="submit" class="button" name="register" value="register">
                                        </p>
                                    </form>

                                @else

                                @endif
                            </div>
                            {{--<div class="woocommerce-form-coupon-toggle">--}}

                                {{--<div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here--}}
                                        {{--to enter your code</a></div>--}}
                            {{--</div>--}}

                            {{--<form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">--}}

                                {{--<p>If you have a coupon code, please apply it below.</p>--}}

                                {{--<p class="form-row form-row-first">--}}
                                    {{--<input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"--}}
                                           {{--id="coupon_code" value=""/>--}}
                                {{--</p>--}}

                                {{--<p class="form-row form-row-last">--}}
                                    {{--<button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply--}}
                                        {{--coupon--}}
                                    {{--</button>--}}
                                {{--</p>--}}

                                {{--<div class="clear"></div>--}}
                            {{--</form>--}}
                            @if ($errors->has('terms'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('terms') }}</strong>
                                        </span>
                            @endif
                            @if ($errors->has('address'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                            @endif
                            @if ($errors->has('delivaryFees_id'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('delivaryFees_id') }}</strong>
                                        </span>
                            @endif
                        </div>
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
			© 2017 Sports Store		</span>
            </div>
        </div>
    </footer>
    <!--  Finish Footer  -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!--  Finish Page  -->

<!-- Instagram Feed JS -->
<script type="text/javascript">
    var sbiajaxurl = "https://sports-store.cmsmasters.net/wp-admin/admin-ajax.php";
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu.js?ver=1.2.7'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/sports-store.cmsmasters.net\/wp-json\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }, "recaptcha": {"messages": {"empty": "Please verify that you are not a robot."}}
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var sb_instagram_js_options = {
        "sb_instagram_at": "5571653510.M2E4MWE5Zg==.MzFiZmQ2ZmM3ODM3.NDRiOGE5Y2M3MDA0NGZkNGI1ZDI=",
        "font_method": "svg"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/instagram-feed/js/sb-instagram.min.js?ver=1.9.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "View cart",
        "cart_url": "https:\/\/sports-store.cmsmasters.net\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.4'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js?ver=1.0.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var pwsL10n = {
        "unknown": "Password strength unknown",
        "short": "Very weak",
        "bad": "Weak",
        "good": "Medium",
        "strong": "Strong",
        "mismatch": "Mismatch"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-admin/js/password-strength-meter.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_password_strength_meter_params = {
        "min_password_strength": "3",
        "i18n_password_error": "Please enter a stronger password.",
        "i18n_password_hint": "Hint: The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? $ % ^ & )."
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.4.4'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_country_select_params = {
        "countries": "{\"AF\":[],\"AT\":[],\"AX\":[],\"BE\":[],\"BH\":[],\"BI\":[],\"CZ\":[],\"DE\":[],\"DK\":[],\"EE\":[],\"FI\":[],\"FR\":[],\"GP\":[],\"GF\":[],\"IS\":[],\"IL\":[],\"IM\":[],\"KR\":[],\"KW\":[],\"LB\":[],\"LU\":[],\"MQ\":[],\"NL\":[],\"NO\":[],\"PL\":[],\"PT\":[],\"RE\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"LK\":[],\"SE\":[],\"VN\":[],\"YT\":[],\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\u00e9n\",\"R\":\"R\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\u00e1n\"},\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BO\":{\"B\":\"Chuquisaca\",\"H\":\"Beni\",\"C\":\"Cochabamba\",\"L\":\"La Paz\",\"O\":\"Oruro\",\"N\":\"Pando\",\"P\":\"Potos\\u00ed\",\"S\":\"Santa Cruz\",\"T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia\",\"BG-22\":\"Sofia-Grad\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macau \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"GR\":{\"I\":\"\\u0391\\u03c4\\u03c4\\u03b9\\u03ba\\u03ae\",\"A\":\"\\u0391\\u03bd\\u03b1\\u03c4\\u03bf\\u03bb\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1 \\u03ba\\u03b1\\u03b9 \\u0398\\u03c1\\u03ac\\u03ba\\u03b7\",\"B\":\"\\u039a\\u03b5\\u03bd\\u03c4\\u03c1\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"C\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"D\":\"\\u0389\\u03c0\\u03b5\\u03b9\\u03c1\\u03bf\\u03c2\",\"E\":\"\\u0398\\u03b5\\u03c3\\u03c3\\u03b1\\u03bb\\u03af\\u03b1\",\"F\":\"\\u0399\\u03cc\\u03bd\\u03b9\\u03bf\\u03b9 \\u039d\\u03ae\\u03c3\\u03bf\\u03b9\",\"G\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"H\":\"\\u03a3\\u03c4\\u03b5\\u03c1\\u03b5\\u03ac \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"J\":\"\\u03a0\\u03b5\\u03bb\\u03bf\\u03c0\\u03cc\\u03bd\\u03bd\\u03b7\\u03c3\\u03bf\\u03c2\",\"K\":\"\\u0392\\u03cc\\u03c1\\u03b5\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"L\":\"\\u039d\\u03cc\\u03c4\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"M\":\"\\u039a\\u03c1\\u03ae\\u03c4\\u03b7\"},\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IR\":{\"KHZ\":\"Khuzestan  (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran  (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CI\":\"Carbonia-Iglesias\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OT\":\"Olbia-Tempio\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"VS\":\"Medio Campidano\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"OG\":\"Ogliastra\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"MX\":{\"DF\":\"Ciudad de M\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\u00e9xico\",\"MI\":\"Michoac\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\u00e1n\",\"ZA\":\"Zacatecas\"},\"MD\":{\"C\":\"Chi\u0219in\u0103u\",\"BL\":\"B\u0103l\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"C\u0103u\u0219eni\",\"CM\":\"Cimi\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\u0103sari\",\"ED\":\"Edine\u021b\",\"FL\":\"F\u0103le\u0219ti\",\"FR\":\"Flore\u0219ti\",\"GE\":\"UTA G\u0103g\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\u00eence\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\u00ee\u0219cani\",\"SG\":\"S\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\u0103\u0219eni\",\"SD\":\"\u0218old\u0103ne\u0219ti\",\"SV\":\"\u0218tefan Vod\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\u0219ti\",\"UN\":\"Ungheni\"},\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"GI\":\"Gisborne\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\u0219\",\"BC\":\"Bac\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\u021ba-N\u0103s\u0103ud\",\"BT\":\"Boto\u0219ani\",\"BR\":\"Br\u0103ila\",\"BV\":\"Bra\u0219ov\",\"B\":\"Bucure\u0219ti\",\"BZ\":\"Buz\u0103u\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"Cara\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\u00e2mbovi\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\u021ba\",\"IS\":\"Ia\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\u0219\",\"MH\":\"Mehedin\u021bi\",\"MS\":\"Mure\u0219\",\"NT\":\"Neam\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ES\":{\"C\":\"A Coru\u00f1a\",\"VI\":\"Araba\\\/\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\u00eda\",\"O\":\"Asturias\",\"AV\":\"\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\u00e1ceres\",\"CA\":\"C\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Bizkaia\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\u00fcrich\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\u011fr\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\u0131n\",\"TR10\":\"Bal\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\u00c7anakkale\",\"TR18\":\"\u00c7ank\u0131r\u0131\",\"TR19\":\"\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\u0131\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\u00fcm\u00fc\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\u0130\u00e7el\",\"TR34\":\"\u0130stanbul\",\"TR35\":\"\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\u0131rklareli\",\"TR40\":\"K\u0131r\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\u011fla\",\"TR49\":\"Mu\u015f\",\"TR50\":\"Nev\u015fehir\",\"TR51\":\"Ni\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\u015eanl\u0131urfa\",\"TR64\":\"U\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\u0131r\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\u015e\u0131rnak\",\"TR74\":\"Bart\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\u011fd\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\u00fczce\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"}}",
        "i18n_select_state_text": "Select an option\u2026",
        "i18n_no_matches": "No matches found",
        "i18n_ajax_error": "Loading failed",
        "i18n_input_too_short_1": "Please enter 1 or more characters",
        "i18n_input_too_short_n": "Please enter %qty% or more characters",
        "i18n_input_too_long_1": "Please delete 1 character",
        "i18n_input_too_long_n": "Please delete %qty% characters",
        "i18n_selection_too_long_1": "You can only select 1 item",
        "i18n_selection_too_long_n": "You can only select %qty% items",
        "i18n_load_more": "Loading more results\u2026",
        "i18n_searching": "Searching\u2026"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js?ver=3.4.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_address_i18n_params = {
        "locale": "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"BH\":{\"state\":{\"required\":false}},\"BI\":{\"state\":{\"required\":false}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"CA\":{\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"GP\":{\"state\":{\"required\":false}},\"GF\":{\"state\":{\"required\":false}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HU\":{\"state\":{\"label\":\"County\"}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IM\":{\"state\":{\"required\":false}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JP\":{\"state\":{\"label\":\"Prefecture\",\"priority\":66},\"postcode\":{\"priority\":65}},\"KR\":{\"state\":{\"required\":false}},\"KW\":{\"state\":{\"required\":false}},\"LB\":{\"state\":{\"required\":false}},\"MQ\":{\"state\":{\"required\":false}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"PT\":{\"state\":{\"required\":false}},\"RE\":{\"state\":{\"required\":false}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":false}},\"SG\":{\"state\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LK\":{\"state\":{\"required\":false}},\"LU\":{\"state\":{\"required\":false}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"US\":{\"postcode\":{\"label\":\"ZIP\"},\"state\":{\"label\":\"State\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"VN\":{\"state\":{\"required\":false},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":true}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartment, suite, unit etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}",
        "locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}",
        "i18n_required_text": "required",
        "i18n_optional_text": "optional"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js?ver=3.4.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_checkout_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "update_order_review_nonce": "8db8cc5fc2",
        "apply_coupon_nonce": "a471e77daa",
        "remove_coupon_nonce": "ff6f1a29d7",
        "option_guest_checkout": "yes",
        "checkout_url": "\/?wc-ajax=checkout",
        "is_checkout": "1",
        "debug_mode": "",
        "i18n_checkout_error": "Error processing checkout. Please try again."
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='{{ asset('js/checkout.js') }}'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_34efea8cd264b71a65e5d57ca67116b5",
        "fragment_name": "wc_fragments_34efea8cd264b71a65e5d57ca67116b5"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.4'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/yith-autocomplete.min.js?ver=1.2.7'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax": {"url": "\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-includes/js/wp-util.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.4.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wccl_general = {
        "ajaxurl": "\/?wc-ajax=%%endpoint%%",
        "cart_redirect": "",
        "cart_url": "https:\/\/sports-store.cmsmasters.net\/cart\/",
        "view_cart": "View Cart",
        "tooltip": "1",
        "tooltip_pos": "top",
        "tooltip_ani": "fade",
        "description": "1",
        "add_cart": "Add to cart",
        "grey_out": "",
        "image_hover": "",
        "wrapper_container_shop": "li.product"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/js/yith-wccl.min.js?ver=1.4.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_woocompare = {
        "ajaxurl": "\/?wc-ajax=%%endpoint%%",
        "actionadd": "yith-woocompare-add-product",
        "actionremove": "yith-woocompare-remove-product",
        "actionview": "yith-woocompare-view-table",
        "actionreload": "yith-woocompare-reload-product",
        "added_label": "Added",
        "table_title": "Product Comparison",
        "auto_open": "no",
        "loader": "https:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-compare-premium\/assets\/images\/loader.gif",
        "button_text": "Compare",
        "cookie_name": "yith_woocompare_list_1",
        "is_page": "1",
        "page_url": "https:\/\/sports-store.cmsmasters.net\/yith-compare\/",
        "im_in_page": "",
        "view_label": "View Compare",
        "actionfilter": "yith_woocompare_filter_by_cat",
        "num_related": "4",
        "autoplay_related": "",
        "fixedcolumns": "1"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-compare-premium/assets/js/woocompare.min.js?ver=2.1.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-wishlist-premium/assets/js/jquery.selectBox.min.js?ver=1.2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "redirect_to_cart": "no",
        "multi_wishlist": "",
        "hide_add_button": "1",
        "is_user_logged_in": "",
        "ajax_loader_url": "https:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-wishlist-premium\/assets\/images\/ajax-loader.gif",
        "remove_from_wishlist_after_add_to_cart": "yes",
        "labels": {
            "cookie_disabled": "We are sorry, but this feature is available only if cookies are enabled on your browser.",
            "added_to_cart_message": "<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"
        },
        "actions": {
            "add_to_wishlist_action": "add_to_wishlist",
            "remove_from_wishlist_action": "remove_from_wishlist",
            "move_to_another_wishlist_action": "move_to_another_wishlsit",
            "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-wishlist-premium/assets/js/jquery.yith-wcwl.js?ver=2.1.2'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/cmsmasters-hover-slider.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/easing.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/easy-pie-chart.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/mousewheel.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/owlcarousel.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-includes/js/imagesloaded.min.js?ver=3.2.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/request-animation-frame.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/scrollspy.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/scroll-to.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/stellar.min.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/waypoints.min.js?ver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_script = {
        "theme_url": "https:\/\/sports-store.cmsmasters.net\/wp-content\/themes\/sports-store",
        "site_url": "https:\/\/sports-store.cmsmasters.net\/",
        "ajaxurl": "https:\/\/sports-store.cmsmasters.net\/wp-admin\/admin-ajax.php",
        "nonce_ajax_like": "2fd11316cd",
        "nonce_ajax_view": "3c8fe6ef2c",
        "project_puzzle_proportion": "1",
        "gmap_api_key": "AIzaSyDtfUlgzSb3LShTSAju_3gMO00kM_iXGxs",
        "gmap_api_key_notice": "Please add your Google Maps API key",
        "gmap_api_key_notice_link": "read more how",
        "primary_color": "#fa5400",
        "ilightbox_skin": "dark",
        "ilightbox_path": "vertical",
        "ilightbox_infinite": "0",
        "ilightbox_aspect_ratio": "1",
        "ilightbox_mobile_optimizer": "1",
        "ilightbox_max_scale": "1",
        "ilightbox_min_scale": "0.2",
        "ilightbox_inner_toolbar": "0",
        "ilightbox_smart_recognition": "0",
        "ilightbox_fullscreen_one_slide": "0",
        "ilightbox_fullscreen_viewport": "center",
        "ilightbox_controls_toolbar": "1",
        "ilightbox_controls_arrows": "0",
        "ilightbox_controls_fullscreen": "1",
        "ilightbox_controls_thumbnail": "1",
        "ilightbox_controls_keyboard": "1",
        "ilightbox_controls_mousewheel": "1",
        "ilightbox_controls_swipe": "1",
        "ilightbox_controls_slideshow": "0",
        "ilightbox_close_text": "Close",
        "ilightbox_enter_fullscreen_text": "Enter Fullscreen (Shift+Enter)",
        "ilightbox_exit_fullscreen_text": "Exit Fullscreen (Shift+Enter)",
        "ilightbox_slideshow_text": "Slideshow",
        "ilightbox_next_text": "Next",
        "ilightbox_previous_text": "Previous",
        "ilightbox_load_image_error": "An error occurred when trying to load photo.",
        "ilightbox_load_contents_error": "An error occurred when trying to load contents.",
        "ilightbox_missing_plugin_error": "The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/jquery.script.js?ver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_theme_script = {"primary_color": "#fa5400"};
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/theme-framework/theme-style/js/jquery.theme-script.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/jquery.tweet.min.js?ver=1.3.1'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/js/smooth-sticky.min.js?ver=1.0.2'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmsmasters_woo_script = {
        "currency_symbol": "\u00a3",
        "thumbnail_image_width": "70",
        "thumbnail_image_height": "70"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/woocommerce/cmsmasters-framework/theme-style/js/jquery.plugin-script.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/themes/sports-store/woocommerce/cmsmasters-framework/theme-style/yith-woocommerce-wishlist/js/jquery.plugin-script.js?ver=1.0.0'></script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcas_params = {
        "loading": "https:\/\/sports-store.cmsmasters.net\/wp-content\/plugins\/yith-woocommerce-ajax-search-premium\/assets\/images\/ajax-loader.gif",
        "show_all": "false",
        "price_label": "Price:",
        "show_all_text": "View all",
        "ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript'
        src='https://sports-store.cmsmasters.net/wp-content/plugins/yith-woocommerce-ajax-search-premium/assets/js/frontend.min.js?ver=1.0'></script>

<div id="cookie-notice" role="banner" class="cn-bottom bootstrap" style="color: #fff; background-color: #000;">
    <div class="cookie-notice-container"><span id="cn-notice-text">We use cookies to ensure that we give you the best experience on our website. If you continue to use this site we will assume that you are happy with it.</span><a
                href="#" id="cn-accept-cookie" data-cookie-set="accept"
                class="cn-set-cookie cn-button bootstrap button">Ok</a>
    </div>
    <script>
        $("#delivaryFees_id").change(function(){
            $.ajax({
                type: "get",
                url: '{{ url('getFee') }}'+ '/' + $("#delivaryFees_id").val(),
                data: {},
                success: function( data ) {
                    $("#total_ajax").html(data.total);
                }
            });
        });
    </script>
</div>
</body>
</html>
