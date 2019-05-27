<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="form ">
    <meta name="keywords" content="form ">
    <meta name="author" content="form ">
    <meta property="og:image" content="{{ asset('imgs/logo.png') }}" data-dynamic="true">
    <meta property="og:image:width" content="300" data-dynamic="true">
    <meta property="og:image:height" content="366" data-dynamic="true">
    <meta name="msapplication-TileImage" content="{{ asset('imgs/logo.png') }}">
    <title>Forma | Home</title>
    <link rel="icon" href="{{ asset('imgs/35x35Untitled-1.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('imgs/35x35Untitled-1.png') }}" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('imgs/35x35Untitled-1.png') }}">
    <link rel="icon" href="{{ asset('imgs/35x35Untitled-1.png') }}" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
</head>
<body>
<header class="py-2 px-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-6">
                <img data-src="{{ asset('imgs/logo.png') }}" class="img-fluid lozad" alt="form logo">
            </div>
            <div class="col-md-8 col-6 d-flex float-right justify-content-md-end justify-content-sm-start">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse float-right" id="navbarTogglerDemo03">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase font-weight-bold {{ ($page == 'home')? 'active' : ''  }}"
                                   href="{{ url('/') }}">home</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase font-weight-bold {{ ($page == 'about')? 'active' : ''  }}"
                                   href="{{ url('/about') }}">about</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase font-weight-bold" href="{{ url('/onlinestore') }}">store</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link text-uppercase font-weight-bold {{ ($page == 'membership')? 'active' : ''  }}"
                                   href="{{ url('/membership') }}">membership</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-uppercase font-weight-bold" href="#"
                                   id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    our partners
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-uppercase font-weight-bold"
                                       href="{{ url('client/login') }}">fitness partner</a>
                                    <a class="dropdown-item text-uppercase font-weight-bold"
                                       href="{{ url('doctor/login') }}">health partner</a>
                                </div>
                            </li>
                            <li class="nav-item mx-2 text-uppercase font-weight-bold">
                                <a class="nav-link" href="{{ url('/diets') }}">form diet</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h1 text-left text-uppercase font-weight-bold text-white">Sing Up To Forma</h1>
                <h1 class="h1 text-left text-uppercase font-weight-bold text-white">Join Our Forma</h1>
            </div>
            <div class="col-md-6">
                <a href="" class="btn btn-block btn-success">Join Forma</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <img data-src="{{ asset('imgs/logo%20(2).png') }}" class="img-fluid lozad" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="lead text-white mt-4 font-weight-bold">
                    Forma Is A New Booming Application That Links All Gyms And Fitness Centers All Together As Well As
                    Dietitians,
                    Nutritionists, Slimming Centers, Physiotherapists, Supplements And Anything That Has Got To Do With
                    Sports Or
                    Fitness In One Application.
                </p>
            </div>
            <div class="col-md-7">
                <div class="row footer-menus">
                    <div class="col-md-3 col-sm-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Contacts</li>
                            <li class="list-group-item">Facebook</li>
                            <li class="list-group-item">twitter</li>
                            <li class="list-group-item">google+</li>
                            <li class="list-group-item">pinterest</li>
                            <li class="list-group-item">linked in</li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Forma Info</li>
                            <li class="list-group-item">52 El-Hussein, First Floor Ad Doqi, Giza Governorate.</li>
                            <li class="list-group-item">01555550889</li>
                            <li class="list-group-item">info@nevdia.com</li>
                            <li class="list-group-item">Saturday-Wednesday : 10:00 AM-6:00 PM</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/script.min.js') }}"></script>
<script>
    const observer = lozad();
    observer.observe();
</script>
</body>
</html>