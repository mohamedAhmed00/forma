<style>
    .notifyjs-corner
    {
        top: 100px !important;
    }
    .wishlistcolor
    {
        color: #FF4500 !important;
    }
    .cmsmasters_wishlist_wrap .cmsmasters_compare_button {
        font-size: 16px;
        display: inline-block;
        vertical-align: middle;
        position: relative;
    }
    .cmsmasters_wishlist_wrap .cmsmasters_compare_button:before {
        display: inline-block;
        vertical-align: middle;
        content: '\e897';
        font-family: 'fontello';
    }
    .cmsmasters_dynamic_cart .widget_shopping_cart_content .cart_list li    {
        min-height: 34px;
        margin: 3px 0 0;
    }
</style>
<header id="header" class="header_fullwidth">
    <div class="header_mid" >
        <div class="header_mid_outer" style="border:none">
            <div class="header_mid_inner">
                <div class="logo_wrap">
                    <a href="{{ url('onlinestore') }}" title="Sports Store" class="logo">
                        <img src="https://sports-store.cmsmasters.net/wp-content/themes/sports-store/theme-vars/theme-style/img/logo.png"
                             alt="Sports Store">
                        <img class="logo_retina"
                             src="https://sports-store.cmsmasters.net/wp-content/themes/sports-store/theme-vars/theme-style/img/logo_retina.png"
                             alt="Sports Store" width="177" height="28">
                    </a>
                </div>

                <div class="resp_mid_nav_wrap">
                    <div class="resp_mid_nav_outer"><a class="responsive_nav resp_mid_nav"
                                                       href="javascript:void(0)"><span></span></a></div>
                </div>
                <div class="cmsmasters_dynamic_cart" id="cart_con">
                    <a href="{{ url('cart') }}"
                                                        class="cmsmasters_dynamic_cart_button"><span
                                class="cmsmasters_theme_icon_basket">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() }}</span></a><span
                            class="cmsmasters_dynamic_cart_button_hide"></span>
                    <div class="widget_shopping_cart_content">
                        <?php
                        $items = \Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content();
                        if(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() === 0)
                        {
                            echo "no Product to View";
                        }
                        else
                        {
                        ?>
                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                            @foreach($items as $item)
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                        <button data-title="{{$item->rowId}}"  class="remove remove_from_cart_button">×</button>
                                    <a href="{{ url('product/'.$item->id) }}">
                                        <img src="https://storeback.forma-eg.com/images/product/{{ $item->options->image }}"
                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                     sizes="(max-width: 540px) 100vw, 540px" width="540"
                                                     height="540">{{ $item->name }} </a>
                                <span class="quantity">{{ $item->qty }} × <span
                                            class="woocommerce-Price-amount amount"><span><span
                                                    class="woocommerce-Price-currencySymbol">L.E</span></span>{{ $item->price }}</span></span>
                                </li>
                            @endforeach

                        </ul>

                        <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong>
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">L.E {{ Cart::instance('cart')->subtotal()}}</span>
                            </span>
                        </p>


                        <p class="woocommerce-mini-cart__buttons buttons"><a
                                    href="{{ url('cart') }}"
                                    class="button wc-forward">View cart</a><a
                                    href="{{ url('checkout') }}"
                                    class="button checkout wc-forward">Checkout</a></p>

                        <?php
                        }
                        ?>
                    </div>
                </div>


                <div class="cmsmasters_dynamic_cart" id="">
                    <a href=""
                       class="cmsmasters_dynamic_cart_button"><span
                                class="cmsmasters_theme_icon_person"></span></a><span
                            class="cmsmasters_dynamic_cart_button_hide"></span>
                    <div class="widget_shopping_cart_content">
                        <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                            @if (! is_object(Auth::guard('customer')->user()))
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{ url('customer/login') }}">Login</a>
                                </li>
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{ url('customer/register') }}">Register</a>
                                </li>
                            @else
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{ url('customer/account') }}">My Account</a>
                                </li>
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{ url('customer/orders') }}">My Orders</a>
                                </li>
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="{{ url('customer/logout') }}">Logout</a>
                                </li>
                            @endif
                        </ul>

                    </div>
                </div>


                <div class="cmsmasters_wishlist_wrap">
                    <a href="{{ url('wishlist') }}" class="cmsmasters_theme_icon_like cmsmasters_wishlist_button" rel="nofollow">
                        <span style="font-size: 12px;font-weight: bold;" id="wishlistCount">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() }}</span>
                    </a></div>
                <div class="cmsmasters_wishlist_wrap">
                    <a href="{{ url('compare') }}" class="cmsmasters_theme_icon_like cmsmasters_compare_button" rel="nofollow">
                        <span style="font-size: 12px;font-weight: bold;" id="compareCount">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('compare')->count() }}</span>
                    </a>
                </div>

                <div class="mid_nav_wrap" style="margin-top: 16px">
                    <nav>
                        <div class="menu-main-menu-container">
                            <ul id="navigation" class="mid_nav navigation">
                                <li id="menu-item-14037"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 ">
                                    <a href="{{ url('/') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Forma</span></span></a></li>
                                <li id="menu-item-14037"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 {{ ($page == "home"? 'current-menu-ancestor' : '') }}">
                                    <a href="{{ url('onlinestore') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Home</span></span></a></li>
                                @foreach($categories as $cate)
                                    <li id="menu-item-12979" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 {{ ($page == $cate->title? 'current-menu-ancestor' : '') }}">
                                        <a href="{{url('/shop/cate/'.$cate->id) }}"><span class="nav_item_wrap"><span class="nav_title">{{ $cate->title }}</span></span></a>
                                        @if(isset($cate->SubCategory) AND count($cate->SubCategory) > 0)
                                        <ul class="sub-menu">

                                            @foreach($cate->SubCategory as $sub)
                                                <li id="menu-item-{{ $sub->id }}"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13040 menu-item-depth-1">
                                                    <a href="{{ url('/shop/subcategory/'. $sub->id) }}"><span
                                                                class="nav_item_wrap"><span
                                                                    class="nav_title">{{ $sub->title }}</span></span></a>
                                                </li>
                                            @endforeach
                                        </ul>
                                            @endif
                                    </li>
                                @endforeach


                            </ul>
                        </div>
                    </nav>
                </div><!--  Finish Navigation  --></div>
        </div>
    </div>
</header>
