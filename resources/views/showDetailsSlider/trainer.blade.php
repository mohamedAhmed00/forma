<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <title>Forma</title>
    <!--meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Forma"/>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--//meta tags ends here-->
    <!--booststrap-->
    <link href="{{ asset('showDetailsSlider/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!--//booststrap end-->
    <!-- font-awesome icons -->
    <link href="{{ asset('showDetailsSlider/css/font-awesome.css') }}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="{{ asset('showDetailsSlider/css/easy-responsive-tabs.css') }}" rel='stylesheet' type='text/css'/>
    <!-- easy-responsive-tabs -->
    <link href="{{ asset('showDetailsSlider/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css"/>
    <!--stylesheets-->
    <link href="{{ asset('showDetailsSlider/css/style.css') }}" rel='stylesheet' type='text/css' media="all">
    <!--//stylesheets-->
    <link href="http://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
</head>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'>

</script>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
        }
    })();
</script>
<script>
    (function () {
        if (typeof _bsa !== 'undefined' && _bsa) {
            // format, zoneKey, segment:value, options
            _bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
        }
    })();
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../../../../../www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
</script>
<style type="text/css">
    .agileits {
        width: 100%;
        height: 400px
    }

    .portfolio-item2 figcaption a {
        padding: 0;
        border: none;
    }
</style>
<body>

<!--portfolio -->
<div class="gallery" id="gallery">
    <div class="container">
        <h3 class="title" style="font-family: 'Adobe Gothic Std';">Forma Personal Trainer</h3>
        <div class="galler-imgs">
            <ul class="portfolio-categ filter">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">Male</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">Female</a>
                </li>
            </ul>
            <ul class="portfolio-area">
                @foreach($trainers as $trainer)
                    @if($trainer->gender == 'male')
                        <li class="portfolio-item2" data-id="id-0" data-type="cat-item-1">
                    @else
                        <li class="portfolio-item2" data-id="id-0" data-type="cat-item-2">
                            @endif
                            <div>
                              <span class="image-block img-hover">
                                  <figure>
                                     <img src="{{ 'Forma'. $trainer->img1  }}"
                                          class="img-responsive w3layouts agileits" alt="">
                                     <a href="{{ url('trainer/profile/'.$trainer->id) }}">
                                      <figcaption>
                                        <h3>{{ $trainer->trainer_name }}</h3>
                                     </figcaption>
                                     </a>
                                  </figure>
                             </span>

                            </div>


                        </li>
                        @endforeach
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--end portfolio-area -->

<!--js working-->
<script src='/showDetailsSlider/js/jquery-2.2.3.min.js'></script>
<!-- //js  working-->
<script src="/showDetailsSlider/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 900,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--// banner-->
<!-- service for responsive tabs -->
<script src="/showDetailsSlider/js/easy-responsive-tabs.js"></script>
<script>
    $(document).ready(function () {
        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true
        });
    });
</script>
<!-- service for responsive tabs -->
<!-- OnScroll-Number-Increase-JavaScript -->
<script src="/showDetailsSlider/js/jquery.waypoints.min.js"></script>
<script src="/showDetailsSlider/js/jquery.countup.js"></script>
<script>
    $('.counter').countUp();
</script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
<script>
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 100,
            easingType: 'linear'
        };
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<a href="#" id="toTop" class="stuoyal3w stieliga" style="display: block;">
    <span id="toTopHover" style="opacity: 0;"> </span>
</a>
<!-- //Slide-To-Top JavaScript -->
<!-- Smooth-Scrolling-JavaScript -->
<script src="/showDetailsSlider/js/move-top.js"></script>
<script src="/showDetailsSlider/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll, .navbar li a, .footer li a").click(function (event) {
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //Smooth-Scrolling-JavaScript -->
<!--bootstrap-->
<script src="/showDetailsSlider/js/bootstrap.js"></script>
<!--// bootstrap-->
<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
<script src="/showDetailsSlider/js/jquery-1.7.2.js"></script>
<script src="/showDetailsSlider/js/jquery.quicksand.js"></script>
<script src="/showDetailsSlider/js/script.js"></script>
<script src="/showDetailsSlider/js/jquery.prettyPhoto.js"></script>
<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->
</body>

<!-- Mirrored from p.w3layouts.com/demos_new/template_demo/15-03-2018/make_over-demo_Free/1456306841/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 03 Jul 2018 15:38:04 GMT -->
</html>
