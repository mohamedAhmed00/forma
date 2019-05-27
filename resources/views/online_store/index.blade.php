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
        .headline_aligner, .cmsmasters_breadcrumbs_aligner {
            min-height: 20px;
        }
    </style>
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
@if(!empty(\request()->session()->get('message')))
    <script>alert('{{ \request()->session()->get('message')}}');</script>;

    @php
        \request()->session()->forget('message');

    @endphp
@endif
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
                                    @foreach($categories as $cate)
                                        <div id="cmsmasters_column_f63572ce6a" class="cmsmasters_column one_fourth">
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
                                                                            href="{{ url('shop/cate') }}">{{ $cate->title }} </a>
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
                                                   href="{{ url('shop/filter/best_selling') }}"></a>
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
                                                                        href="{{ url('shop/filter/best_selling') }}">Get
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
                                                   href="{{ url('shop/filter/new_arrival') }}"></a>
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
                                                                        href="{{ url('shop/filter/new_arrival') }}">Shop
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
                                                   href="{{ url('shop/filter/big_sale') }}"></a>
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
                                                                        href="{{ url('shop/filter/big_sale') }}">top
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
                                                   href="{{ url('shop/filter/exclusive') }}"></a>
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
                                                                        href="{{ url('shop/filter/exclusive') }}">Products</a>
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
                                                <h3 class="cmsmasters_heading">Featured Products</h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><img
                                                            src="{{ asset('online_store/wp-content/uploads/2015/11/line.jpg') }}"
                                                            alt="line"/></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cmsmasters_row_533cea71e2"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_d5e166fd8a" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div class="cmsmasters_posts_slider cmsmasters_posts_slider_product">
                                                <div id="cmsmasters_slider_3f171e76ab"
                                                     class="cmsmasters_owl_slider owl-carousel" data-items="4"
                                                     data-pagination="true" data-navigation="false"
                                                     data-single-item="false" data-auto-play="10000">
                                                    @foreach($featuredProducts as $product)
                                                        <div class="cmsmasters_owl_slider_item">
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
                                                                                 src="https://storeback.forma-eg.com/images/product/{{ isset($details[0]->image)?$details[0]->image:'' }}"
                                                                                 class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                                 sizes="(max-width: 540px) 100vw, 540px"/>
                                                                            <img width="540" height="540"
                                                                                 style="height: 250px"
                                                                                 src="https://storeback.forma-eg.com/images/product/{{ isset($details[1]->image) ? $details[1]->image : isset($details[0]->image)? $details[0]->image : ''  }}"
                                                                                 class="attachment-shop_catalog size-shop_catalog"
                                                                                 sizes="(max-width: 540px) 100vw, 540px"/>
                                                                        </a>
                                                                        @if($product->is_out_stock == 'yes' )
                                                                            <span class="out-of-stock" class="onsale" style="display: block;width: 100%;top:10px"><span style="float: right;margin-right: 20px;">Out of stock</span></span>
                                                                        @else
                                                                            <div class="button_to_cart_wrap">
                                                                                <a rel="nofollow"
                                                                                   data-quantity="1"
                                                                                   style="cursor: pointer"
                                                                                   data-product_id="{{ $product->id }}"                                                                                   data-product_sku=""
                                                                                   class="addToCarts button product_type_variable add_to_cart_button cmsmasters_add_to_cart_button">Add
                                                                                    To Cart</a>
                                                                            </div>
                                                                        @endif
                                                                        @if($product->is_big_sale == 'yes')
                                                                            <span class="onsale" style="display: block;width: 100%;top:50px;float: left"><span style="float: right;margin-right: 20px;">Big Sale!</span></span>
                                                                        @endif
                                                                        @if($product->is_best_selling == 'yes')
                                                                            <span class="onsale" style="display: block;width: 100%;top:90px"><span style="float: right;margin-right: 20px;">Best Sale!</span></span>
                                                                        @endif
                                                                        @if($product->is_new_arrival  == 'yes')
                                                                            <span class="onsale" style="display: block;width: 100%; top:130px"><span style="float: right;margin-right: 20px;">New!</span></span>
                                                                        @endif
                                                                    </figure>                                                                    <div class="cmsmasters_product_inner">

                                                                        <header class="cmsmasters_product_header entry-header">
                                                                            <h5 class="cmsmasters_product_title entry-title" style="height: 45px !important;overflow: hidden !important;">
                                                                                <a  href="{{ url('product/'.$product->id) }}">{{ $product->title }}</a>
                                                                            </h5>
                                                                        </header>
                                                                        <div class="cmsmasters_product_cat entry-meta">
                                                                            <a href="{{url('shop/cate/'.$product->category_id)}}"
                                                                               class="cmsmasters_cat_color cmsmasters_cat_73"
                                                                               rel="category tag">{{ $product->Category->title }}</a>
                                                                            @if(isset($product->subcategory_id))
                                                                                ,
                                                                                <a href="{{url('shop/subcate/'.$product->subcategory_id)}}"
                                                                                   class="cmsmasters_cat_color cmsmasters_cat_91"
                                                                                   rel="category tag">{{ isset($product->SubCategory->title)? $product->SubCategory->title : '' }}</a>
                                                                            @endif
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
                                                                                            <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"
                                                                                                  style="color:#ff8f00"></span>
                                                                                        @else
                                                                                            <span class="cmsmasters_theme_icon_star_full cmsmasters_star"
                                                                                                  style="color:#ff8f00"></span>

                                                                                        @endif
                                                                                    @endfor

                                                                                </div>
                                                                                <span class="rating dn"><strong
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
                <style>
                    #cmsmasters_heading_yfuldl1f1s h1
                    {
                        color:#FFF;
                    }
                </style>
                <div id="cmsmasters_row_76522c001f"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_e33c9de989" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_64e7aa0d48"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                            </div>
                                            <div id="cmsmasters_heading_yfuldl1f1s"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h6 class="cmsmasters_heading"><?= $setting->crossfit_description ?></h6>
                                            </div>
                                            <div id="cmsmasters_divider_c6e561e1fd" class="cl"></div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><a
                                                            href="https://vimeo.com/95380310"
                                                            rel="ilightbox[img_5b5c62efbfccf]"><img
                                                                src="{{ asset('online_store/wp-content/uploads/2015/11/play.png') }}"
                                                                alt="play"/></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .cmsmasters-icon-paper-plane-4::before
                    {
                        content:''
                    }
                </style>


                <div id="cmsmasters_row_1afdde1114"
                     class="cmsmasters_row cmsmasters_color_scheme_second cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    @foreach($features as $feature)
                                        <div id="cmsmasters_column_c70f4a0614" class="cmsmasters_column one_third">
                                            <div class="cmsmasters_column_inner">
                                                <div id="cmsmasters_icon_box_c897fc4de8"
                                                     class="cmsmasters_icon_box cmsmasters_icon_box_left_top box_icon_type_icon cmsmasters-icon-paper-plane-4 shortcode_animated">
                                                    <i style="color: #fa5400;font-size: 33px;position: absolute;left: -8px;top: 3px;"
                                                       class="{{ $feature->icon }}"></i>
                                                    <div class="icon_box_inner">
                                                        <h4 class="icon_box_heading">{{ $feature->title }}</h4>
                                                        <div class="icon_box_text">
                                                            <p><?= $feature->description ?></p>
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

                <div id="cmsmasters_row_0e87e24473"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_85b764ab5e" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_084db936ef"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h3 class="cmsmasters_heading">New Products</h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><img
                                                            src="{{ asset('online_store/wp-content/uploads/2015/11/line.jpg') }}"
                                                            alt="line"/></div>
                                            </div>
                                            <div id="cmsmasters_divider_3e5628a53d" class="cl"></div>
                                            <div class="cmsmasters_selected_products_shortcode">
                                                <div class="woocommerce columns-4 ">
                                                    <div class="cmsmasters_products_wrap">
                                                        <ul class="products columns-4 cmsmasters_products">
                                                            @foreach($newProducts as $product)
                                                                <li class="post-13499 product type-product status-publish has-post-thumbnail product_cat-for-men product_cat-t-shirts product_tag-clothing product_tag-men product_tag-sports product_tag-t-shirts instock shipping-taxable purchasable product-type-variable">
                                                                    <article class="cmsmasters_product">
                                                                        <figure class="cmsmasters_product_img">
                                                                            <a href="{{ url('product/'.$product->id) }}">
                                                                                @php
                                                                                    $details = $product->Images;
                                                                                @endphp
                                                                                <img width="540" height="540"
                                                                                     style="height: 250px"
                                                                                     src="https://storeback.forma-eg.com/images/product/{{ isset($details[0]->image)?$details[0]->image:'' }}"
                                                                                     class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail wp-post-image"
                                                                                     sizes="(max-width: 540px) 100vw, 540px"/>
                                                                                <img width="540" height="540"
                                                                                     style="height: 250px"
                                                                                     src="https://storeback.forma-eg.com/images/product/{{ isset($details[1]->image) ? $details[1]->image : isset($details[0]->image)? $details[0]->image : ''  }}"
                                                                                     class="attachment-shop_catalog size-shop_catalog"
                                                                                     sizes="(max-width: 540px) 100vw, 540px"/>
                                                                            </a>
                                                                            @if($product->is_out_stock == 'yes' )
                                                                            <span class="out-of-stock" class="onsale" style="display: block;width: 100%;top:10px"><span style="float: right;margin-right: 20px;">Out of stock</span></span>
                                                                            @else
                                                                                <div class="button_to_cart_wrap">
                                                                                    <a rel="nofollow"
                                                                                       data-quantity="1"
                                                                                       style="cursor: pointer"
                                                                                       data-product_id="{{ $product->id }}"                                                                                   data-product_sku=""
                                                                                       class="addToCarts button product_type_variable add_to_cart_button cmsmasters_add_to_cart_button">Add
                                                                                        To Cart</a>
                                                                                </div>
                                                                                @endif
                                                                            @if($product->is_big_sale == 'yes')
                                                                                <span class="onsale" style="display: block;width: 100%;top:50px;float: left"><span style="float: right;margin-right: 20px;">Big Sale!</span></span>
                                                                            @endif
                                                                            @if($product->is_best_selling == 'yes')
                                                                                <span class="onsale" style="display: block;width: 100%;top:90px"><span style="float: right;margin-right: 20px;">Best Sale!</span></span>
                                                                            @endif
                                                                            @if($product->is_new_arrival  == 'yes')
                                                                                <span class="onsale" style="display: block;width: 100%; top:130px"><span style="float: right;margin-right: 20px;">New!</span></span>
                                                                            @endif
                                                                        </figure>
                                                                        <div class="cmsmasters_product_inner">
                                                                            <div class="cmsmasters_product_features">
                                                                                <a href="{{ url('product/'.$product->id) }}"
                                                                                   class="cmsmasters_quick_view_button empty cmsmasters_theme_icon_quick_view button"
                                                                                   data-product_id="13499"
                                                                                   title="Quick View"></a>
                                                                                <div class="cmsmasters_add_wishlist_button add-to-wishlist-1655">
                                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                                        <a rel="nofollow" data-product_id="{{ $product->id }}" style="cursor: pointer" data-product-type="variable" class="addToWishlist button cmsmasters_theme_icon_wishlist" title="Wishlist"></a>
                                                                                    </div>
                                                                                    {{--<div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">--}}
                                                                                        {{--<a href="{{ url('wishlist/'.$product->id) }}" class="addToWishlist button browse_wishlist cmsmasters_theme_icon_wishlist" rel="nofollow" title="Wishlist"></a>--}}
                                                                                    {{--</div>--}}
                                                                                    {{--<div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">--}}
                                                                                        {{--<a href="{{ url('wishlist/'.$product->id) }}" class="addToWishlist button browse_wishlist cmsmasters_theme_icon_wishlist" rel="nofollow" title="Wishlist"></a>--}}
                                                                                    {{--</div>--}}
                                                                                </div>
                                                                                <a data-product_id="{{ $product->id }}" class=" button cmsmasters_compare_btn addTocompare" data-product_id="1666" rel="nofollow" title="Compare">Compare</a>
                                                                            </div>

                                                                            <header class="cmsmasters_product_header entry-header">
                                                                                <h5 class="cmsmasters_product_title entry-title">
                                                                                    <a href="{{ url('product/'.$product->id) }}">{{ $product->title }}</a>
                                                                                </h5>
                                                                            </header>
                                                                            <div class="cmsmasters_product_cat entry-meta">
                                                                                <a href="{{url('shop/cate/'.$product->category_id)}}"
                                                                                   class="cmsmasters_cat_color cmsmasters_cat_81"
                                                                                   rel="category tag">{{ $product->Category->title }}</a>
                                                                                @if(isset($product->subcategory_id))
                                                                                ,
                                                                                <a href="{{url('shop/subcate/'.$product->subcategory_id)}}"
                                                                                   class="cmsmasters_cat_color cmsmasters_cat_91"
                                                                                   rel="category tag">{{ isset($product->SubCategory->title)? $product->SubCategory->title : '' }}</a>
                                                                                    @endif
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
                                                                                                <span class="cmsmasters_theme_icon_star_empty cmsmasters_star"
                                                                                                      style="color:#ff8f00"></span>
                                                                                            @else
                                                                                                <span class="cmsmasters_theme_icon_star_full cmsmasters_star"
                                                                                                      style="color:#ff8f00"></span>

                                                                                            @endif
                                                                                        @endfor

                                                                                    </div>
                                                                                    <span class="rating dn"><strong
                                                                                                itemprop="ratingValue">5.00</strong> out of 5</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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

                <style>
                    .cmsmasters_heading h2, .cmsmasters_heading p, #cmsmasters_heading_82a4a2415c h2 strong, #cmsmasters_heading_82a4a2415c p, #cmsmasters_heading_82a4a2415c h3, #cmsmasters_heading_82a4a2415c h1 strong {
                        color: #FFF
                    }

                    #cmsmasters_heading_82a4a2415c p {
                        font-size: 24px;
                    }

                    .cmsmasters_heading p {
                        font-size: 22px;
                    }

                    #cmsmasters_heading_82a4a2415c h2 strong {
                        font-size: 30px;
                    }

                    #item-h2 h2 {
                        color: #FFF
                    }
                </style>
                <div id="cmsmasters_row_a4975e20b2" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
                                <div class="cmsmasters_row_margin cmsmasters_row_columns_behavior cmsmasters_131313">
                                    <div id="cmsmasters_column_9d7b062762" class="cmsmasters_column one_third">
                                        <div class="cmsmasters_column_inner"><div id="cmsmasters_fb_1808b1029c" class="cmsmasters_featured_block">
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div style="text-align: center;"><div id="cmsmasters_heading_82a4a2415c" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h2 class="cmsmasters_heading"><a href="{{ url('shop/filter/high_performance') }}">High Performence</a>. High Style </h2>
                                                            </div><br>
                                                            <span style="color: #ffffff; font-size: 22px;">Get the discount OF 20%</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div id="cmsmasters_column_550e82dfec" class="cmsmasters_column one_third">
                                        <div class="cmsmasters_column_inner"><div id="cmsmasters_fb_4371fcc3a9" class="cmsmasters_featured_block">
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div style="text-align: center;">
                                                            <div id="cmsmasters_heading_89c8274fdd" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h2 class="cmsmasters_heading">FIND MORE INFORMATION</h2>
                                                            </div>
                                                            <div style="color: #ffffff; font-size: 22px; display: inline; line-height: 50px;">Download Mobile Apps<div id="cmsmasters_divider_b89abcef3b" class="cl"></div></div>
                                                        </div>
                                                        <div style="text-align: center;">&nbsp;<div class="aligncenter"><div class="cmsmasters_img  cmsmasters_image_c"><a href="#"><img src="https://sports-store.cmsmasters.net/wp-content/uploads/2015/11/app-store.png" alt="app-store"></a></div></div></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                    <div id="cmsmasters_column_3b774dbc35" class="cmsmasters_column one_third">
                                        <div class="cmsmasters_column_inner"><div id="cmsmasters_fb_e83e0f6a41" class="cmsmasters_featured_block">
                                                <div class="featured_block_inner">
                                                    <div class="featured_block_text">
                                                        <div style="text-align: center;"><div id="cmsmasters_heading_a9cf50b7e9" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h3 class="cmsmasters_heading">special offer</h3>
                                                            </div><div id="cmsmasters_heading_99415f176f" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                                <h2 class="cmsmasters_heading"><a href="{{ url('shop/filter/special_offer') }}">Save 25%</a></h2>
                                                            </div><br>
                                                            <span style="color: #ffffff; font-size: 22px;">Home Gym Equipment</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                <div id="cmsmasters_row_559a2035f4"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_dbdeac3041" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_27d88fc97f"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h3 class="cmsmasters_heading">Latest News</h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><img
                                                            src="{{ asset('online_store/wp-content/uploads/2015/11/line.jpg') }}"
                                                            alt="line"/></div>
                                            </div>
                                            <div id="cmsmasters_divider_51d59e7a5c" class="cl"></div>
                                            <div class="cmsmasters_posts_slider cmsmasters_posts_slider_post">
                                                <div id="cmsmasters_slider_13a3838eba"
                                                     class="cmsmasters_owl_slider owl-carousel" data-items="3"
                                                     data-pagination="true" data-navigation="false"
                                                     data-single-item="false" data-auto-play="5000">
                                                    @foreach($news as $new)
                                                        <div class="cmsmasters_owl_slider_item">
                                                            <article id="post-10736"
                                                                     class="cmsmasters_slider_post post-10736 post type-post status-publish format-image has-post-thumbnail hentry category-perfect-body post_format-post-format-image">
                                                                <div class="cmsmasters_slider_post_outer">
                                                                    <figure class="cmsmasters_img_rollover_wrap preloader">
                                                                        <img width="580" height="420"
                                                                             src="{{ asset('https://storeback.forma-eg.com/images/news/'.$new->image) }}"
                                                                             class="full-width wp-post-image"
                                                                             alt="6 Ways to Get the Perfect Beach Body"
                                                                             title="6 Ways to Get the Perfect Beach Body"/><a
                                                                                href="2017/05/06/6-ways-to-get-the-perfect-beach-body/index.html"
                                                                                title="6 Ways to Get the Perfect Beach Body"
                                                                                class="cmsmasters_open_link"></a>
                                                                    </figure>
                                                                    <div class="cmsmasters_slider_post_info entry-meta">
                                                                    <span class="cmsmasters_slider_post_date"><abbr
                                                                                class="published"
                                                                                title="May 6, 2017">{{ $new->created_at->format('j M Y , g:ia') }}</abbr><abbr
                                                                                class="dn date updated"
                                                                                title="July 25, 2017">July 25, 2017</abbr></span>
                                                                    </div>
                                                                    <header class="cmsmasters_slider_post_header entry-header">
                                                                        <h5 class="cmsmasters_slider_post_title entry-title">
                                                                            <a href="2017/05/06/6-ways-to-get-the-perfect-beach-body/index.html">{{ $new->title }}</a>
                                                                        </h5>
                                                                    </header>
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

                <div id="cmsmasters_row_9c623c566c"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_e90deefcb1" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_divider_f38bb0ff2a"
                                                 class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cmsmasters_row_a846abd6d8"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin cmsmasters_11">
                                    <div id="cmsmasters_column_30435947be" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_bb7364e9ee"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
                                                <h3 class="cmsmasters_heading">follow Us Instagram</h3>
                                            </div>
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"><img
                                                            src="https://forma-eg.com/online_store/wp-content/uploads/2015/11/line.jpg"
                                                            alt="line"></div>
                                            </div>
                                            <div id="cmsmasters_divider_8822985bfb" class="cl"></div>
                                            <div id="sb_instagram" class="sbi sbi_mob_col_auto sbi_col_8 sbi_medium"
                                                 style="width:100%; " data-id="5571653510" data-num="8"
                                                 data-res="medium" data-cols="8"
                                                 data-options="{&quot;sortby&quot;: &quot;none&quot;, &quot;showbio&quot;: &quot;false&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;&quot;, &quot;disablecache&quot;: &quot;false&quot;, &quot;sbiCacheExists&quot;: &quot;false&quot;, &quot;sbiHeaderCache&quot;: &quot;false&quot;}"
                                                 data-sbi-index="1">
                                                <div id="sbi_images">@foreach($instgramChannles as $instgramChannle)<div class="sbi_item sbi_type_image"
                                                             id="sbi_1532537915572633695_5571653510"
                                                             data-date="1496912777">
                                                            <div class="sbi_photo_wrap">
                                                                <a class="sbi_photo sbi_imgLiquid_bgSize sbi_imgLiquid_ready"
                                                                   href="{{ $instgramChannle->url }}" target="_blank"
                                                                   style="background-image: url({{ asset('https://storeback.forma-eg.com/images/instgramchannle/'.$instgramChannle->image) }}); background-size: cover; background-position: center center; background-repeat: no-repeat; height: 238px;">
                                                                    <img src="{{ asset('https://storeback.forma-eg.com/images/instgramchannle/'.$instgramChannle->image) }}"
                                                                         alt="" style="display: none;" width="200"
                                                                         height="200">
                                                                </a>
                                                            </div>
                                                        </div>@endforeach
                                                </div>
                                                <div id="sbi_load"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cmsmasters_row_2fe5a1a896"
                     class="cmsmasters_row cmsmasters_color_scheme_third cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_e3b7db0b74" class="cmsmasters_column one_half">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_heading_70003886d4"
                                                 class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
                                                <h3 class="cmsmasters_heading">{{ $setting->subscript_title }}</h3>
                                            </div>
                                            <div class="cmsmasters_text">
                                                <p><?= $setting->subscript_description ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="cmsmasters_column_5c7ff89dd4" class="cmsmasters_column one_half">
                                        <div class="cmsmasters_column_inner">
                                            <div class="cmsmasters_mailpoet">
                                                <div class="cmsmasters_mailpoet_form">
                                                    <div class="widget_wysija_cont shortcode_wysija">
                                                        <div id="msg-form-wysija-shortcode5b5c62eff35ab-1"
                                                             class="wysija-msg ajax"></div>
                                                        <form id="form-wysija-shortcode5b5c62eff35ab-1" method="post"
                                                              action="#wysija" class="widget_wysija shortcode_wysija">
                                                            <p class="wysija-paragraph">


                                                                <input type="text" name="wysija[user][email]"
                                                                       class="wysija-input validate[required,custom[email]]"
                                                                       title="Your Email" placeholder="Your Email"
                                                                       value=""/>


                                                                <span class="abs-req">
        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value=""/>
    </span>

                                                            </p>

                                                            <input class="wysija-submit wysija-submit-field"
                                                                   type="submit" value="Subscribe!"/>

                                                            <input type="hidden" name="form_id" value="1"/>
                                                            <input type="hidden" name="action" value="save"/>
                                                            <input type="hidden" name="controller" value="subscribers"/>
                                                            <input type="hidden" value="1" name="wysija-page"/>


                                                            <input type="hidden" name="wysija[user_list][list_ids]"
                                                                   value="1"/>

                                                        </form>
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
                <div id="cmsmasters_row_36bd8f0820"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_fc0289142d" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div class="cmsmasters_quotes_slider_wrap">
                                                <div id="cmsmasters_quotes_slider_a61782924e"
                                                     class="cmsmasters_quotes cmsmasters_quotes_slider cmsmasters_quotes_slider_type_center cmsmasters_owl_slider owl-carousel"
                                                     data-auto-play="10000" data-pagination="true"
                                                     data-navigation="true">
                                                    @foreach($sliderSays as $sliderSay)
                                                        <div class="cmsmasters_quote cmsmasters_owl_slider_item">
                                                            <!--  Start Quote Slider Article  -->
                                                            <article class="cmsmasters_quote_inner">
                                                                <div class="cmsmasters_quote_placeholder"></div>
                                                                <div class="cmsmasters_quote_content">
                                                                    <p>{{ $sliderSay->description }}</p></div>
                                                                <header class="cmsmasters_quote_header"><h5
                                                                            class="cmsmasters_quote_title"><?= $sliderSay->title ?></h5>
                                                                </header>
                                                            </article>
                                                            <!--  Finish Quote Slider Article  -->

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

                <div id="cmsmasters_row_6512aee328"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_a8d9e3fe74" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_divider_c9eb99aeec"
                                                 class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_center"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="cmsmasters_row_3535cbb6b6"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_f81fe74d87" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div class="cmsmasters_clients_slider_wrap">
                                                <div id="cmsmasters_clients_28872e2dd6"
                                                     class="cmsmasters_owl_slider owl-carousel cmsmasters_clients_slider"
                                                     data-items="4" data-single-item="false" data-auto-play="5000"
                                                     data-slide-speed="1000" data-pagination-speed="1000"
                                                     data-pagination="false" data-navigation="false">
                                                    @foreach($clients as $client)
                                                        <div class="cmsmasters_clients_item item cmsmasters_owl_slider_item">
                                                            <img src="{{ asset('https://storeback.forma-eg.com/images/client/'.$client->logo) }}"
                                                                 alt="{{ $client->title }}"
                                                                 title="{{ $client->title }}"/>
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

                <div id="cmsmasters_row_17df6bfba6"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_22196f6445"
                                         class="cmsmasters_column one_first aligncenter">
                                        <div class="cmsmasters_column_inner">
                                            <div class="aligncenter">
                                                <div class="cmsmasters_img  cmsmasters_image_c"
                                                     style="color: #FFF; font-size: 30px;font-weight: bold">{{ $setting->footer_title }}</div>
                                            </div>
                                            <div id="cmsmasters_divider_cde41b6d0a" class="cl"></div>
                                            <div id="cmsmasters_icon_2683c7ef3f" class="cmsmasters_icon_wrap">
                                                <a href="{{ $setting->linkedin }}">
                                                    <span class="cmsmasters_simple_icon cmsmasters-icon-custom-linkedin-5"></span>
                                                    <span class="cmsmasters_simple_icon_title"></span>
                                                </a>
                                            </div>

                                            <div id="cmsmasters_icon_a328ff1d1c" class="cmsmasters_icon_wrap">
                                                <a href="{{ $setting->twitter }}">
                                                    <span class="cmsmasters_simple_icon cmsmasters-icon-custom-twitter-bird-1"></span>
                                                    <span class="cmsmasters_simple_icon_title"></span>
                                                </a>
                                            </div>
                                            <div id="cmsmasters_icon_f72a4e0dc7" class="cmsmasters_icon_wrap">
                                                <a href="{{ $setting->facebook }}">
                                                    <span class="cmsmasters_simple_icon cmsmasters-icon-custom-facebook-6"></span>
                                                    <span class="cmsmasters_simple_icon_title"></span>
                                                </a>
                                            </div>
                                            <div id="cmsmasters_icon_22e7dea37e" class="cmsmasters_icon_wrap">
                                                <a href="{{ $setting->instgram }}">
                                                    <span class="cmsmasters_simple_icon cmsmasters-icon-custom-instagram-filled"></span>
                                                    <span class="cmsmasters_simple_icon_title"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cmsmasters_row_c330242be0"
                     class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
                    <div class="cmsmasters_row_outer_parent">
                        <div class="cmsmasters_row_outer">
                            <div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
                                <div class="cmsmasters_row_margin">
                                    <div id="cmsmasters_column_dfdb6f0206" class="cmsmasters_column one_first">
                                        <div class="cmsmasters_column_inner">
                                            <div id="cmsmasters_divider_66c36b1b5c"
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
                                    <li><a href="how-to-make-an-order/index.html">How to Make an Order?</a></li>
                                    <li><a href="delivery-terms/index.html">Delivery Terms</a></li>
                                    <li><a href="my-account/index.html">My Orders</a></li>
                                    <li><a href="return/index.html">Returns</a></li>
                                    <li><a href="terms-and-conditions/index.html">Terms and Conditions</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="text-5" class="widget widget_text"><h3 class="widgettitle">Customer Service</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li><a href="product/different-tools-for-fitness/index.html">Product Simple</a></li>
                                    <li><a href="product/classic-sports-bra/index.html">Product Extended</a></li>
                                    <li><a href="cart/index.html">Your Cart</a></li>
                                    <li><a href="wishlist/index.html">Wishlist</a></li>
                                    <li><a href="shop/index.html">Shop</a></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="text-4" class="widget widget_text"><h3 class="widgettitle">Sport Store</h3>
                            <div class="textwidget">
                                <ul class="styled_list">
                                    <li><a href="new-collection/index.html">New Collection </a></li>
                                    <li><a href="women/index.html">Women</a></li>
                                    <li><a href="men/index.html">Men</a></li>
                                    <li><a href="blog/index.html">Our Blog</a></li>
                                    <li><a href="contacts/index.html">Contacts</a></li>
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
