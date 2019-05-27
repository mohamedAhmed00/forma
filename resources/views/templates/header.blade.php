<header id="header" class="header_fullwidth">
    <div class="header_mid" data-height="90">
        <div class="header_mid_outer" style="border:none">
            <div class="header_mid_inner">
                <img src="{{ asset('images/facebookcover2.png') }}" alt="">

                <div class="resp_mid_nav_wrap">
                    <div class="resp_mid_nav_outer"><a class="responsive_nav resp_mid_nav"
                                                       href="javascript:void(0)"><span></span></a></div>
                </div>
                <div class="mid_nav_wrap" style="margin-top: 40px">
                    <nav>
                        <div class="menu-main-menu-container">
                            <ul id="navigation" class="mid_nav navigation">
                                <li id="menu-item-14037"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 @if($page == 'home') current-menu-ancestor  @endif">
                                    <a href="{{ url('/') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Home</span></span></a></li>
                                <li id="menu-item-14032"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 @if($page == 'about') current-menu-ancestor  @endif">
                                    <a href="{{ url('/about') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">About</span></span></a></li>
                                <li id="menu-item-14032"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 @if($page == 'store') current-menu-ancestor  @endif">
                                    <a href="{{ url('/onlinestore') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Store</span></span></a></li>
                                <li id="menu-item-14032"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 @if($page == 'membership') current-menu-ancestor  @endif">
                                    <a href="{{ url('/membership') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">membership</span></span></a></li>
                                <li id="menu-item-12979"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0 @if($page == 'partner') current-menu-ancestor  @endif">
                                    <a href="{{ url('/') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Our Partners</span></span></a>
                                    <ul class="sub-menu" style="width: 250px">
                                        <li id="menu-item-20"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13040 menu-item-depth-1">
                                            <a href="{{ url('client/login') }}"><span
                                                        class="nav_item_wrap"><span class="nav_title">Fitness Partner</span></span></a>
                                        </li>
                                        <li id="menu-item-21"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13040 menu-item-depth-1">
                                            <a href="{{ url('doctor/login') }}"><span
                                                        class="nav_item_wrap"><span class="nav_title">Health Partner</span></span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-14037"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-12979 menu-item-depth-0">
                                    <a href="{{ url('/diets') }}"><span class="nav_item_wrap"><span
                                                    class="nav_title">Forma Diet</span></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
