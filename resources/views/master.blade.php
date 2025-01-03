<!doctype html>
<html prefix="og: http://ogp.me/ns#" class="w-100" lang="en">
<head>
    <script>
        // Define dataLayer and the gtag function.
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}

        // Set default consent to 'denied' as a placeholder
        // Determine actual values based on your own requirements
        gtag('consent', 'default', {
            'ad_storage': 'denied',
            'ad_user_data': 'denied',
            'ad_personalization': 'denied',
            'analytics_storage': 'denied'
        });

        // let button = document.querySelector("button.js-cookie-consent-agree");
        // laravel_cookie_consent
        console.log(document.cookie);
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-T276DWG');</script>
    <!-- End Google Tag Manager -->

{{--    <button class="js-cookie-consent-agree cookie-consent__agree btn btn-primary btn shadow-none border-0 mx-2 rounded-4" style="background-color: #43aeb6">--}}
{{--        Allow cookies--}}
{{--    </button>--}}

    <!-- Required meta tags -->
    @yield('meta')
    @yield('canonical')
    @yield('turnstile')
    @yield('og')
    @yield('schema')
    @yield('shareon')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    @seo

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{--  splide  --}}
    <link rel="stylesheet" href="/images/css/splide.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
        }

        .cards-wrapper {
            display: flex;
        }

        .small-text {
            font-size: 0.72em;
        }

        .page-link:hover {
            background-color: #ffffff;
        }

        .my-ul {
            list-style-type: none;
        }

        /*form.footer-form input {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*    background-color: transparent !important;*/
        /*}*/

        /*form.footer-form input[type='checkbox']:checked:after {*/
        /*    !*content: '✔';*!*/
        /*    color: red;*/
        /*    font-weight: bold;*/
        /*    content: 'x';*/
        /*    display: block;*/
        /*    text-align: center;*/
        /*}*/
        /*form.footer-form input::placeholder {*/
        /*    !*opacity: 1 !important; !* Firefox *!*!*/
        /*    color: white !important;*/
        /*    font-size: 1.5rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/

        /*form.footer-form input[placeholder] {*/
        /*    !*opacity: 1 !important; !* Firefox *!*!*/
        /*    color: white !important;*/
        /*    font-size: 1.5rem !important;*/
        /*    padding-left: 0 !important;*/
        /*    !*padding-bottom: 0 !important;*!*/
        /*}*/

        /*form.footer-form textarea::placeholder {*/
        /*    color: white !important;*/
        /*    font-size: 1.5rem !important;*/
        /*}*/

        /*form.footer-form textarea[placeholder] {*/
        /*    color: white !important;*/
        /*    font-size: 1.5rem !important;*/
        /*}*/

        /*form.footer-form input[type=file]::file-selector-button {*/
        /*    color: #9a9a9a;*/
        /*    padding-left: 1.5rem;*/
        /*    !*background-color: transparent;*!*/
        /*}*/

        /*form.footer-form input[type=file]::file-selector-button:hover {*/
        /*    color: #9a9a9a;*/
        /*    padding-left: 1.5rem;*/
        /*    !*background-color: transparent;*!*/
        /*}*/

        .portfolio-container {
            position: relative;
            width: 100%;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(107, 221, 219, 0.4);
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .portfolio-container:hover .overlay {
            bottom: 0;
            height: 100%;
        }

        .service-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #6de1df;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
        }

        .service-container:hover .service-overlay {
            bottom: 0;
            height: 50%;
        }

        .service-container {
            position: relative;
        }

        .main-video {
            width: 100vw;
            height: 100vh;
            max-width: 100%;
            max-height: 100vh;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -100;
        }

        .video {
            aspect-ratio: 16 / 9;
            width: 100%;
        }

        #video {
            width: 100%;
            /*height: 100%;*/
            min-height: 100vh;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -100;
        }

        html {
            font-size: 1rem !important;
        }

        @media (max-width: 991px) {
            .offcanvas {
                background-color: rgba(255, 255, 255, 0.87);
                backdrop-filter: blur(10px);
            }
        }

        @media (min-width: 1920px) {
            .main-width {
                padding-left: 20vw;
                padding-right: 20vw;
            }
            .main-container {
                min-width: 100%;
            }
        }

        @media (max-width: 1200px) {
            .logo {
                width: 65px;
            }
        }

        @media (max-width: 991px) {
            .service-card-footer {
                min-height: 90px;
            }
        }

        @media (min-width: 992px) {
            .service-card {
                height: 50%;
            }
        }

        @media (min-width: 992px) {
            .service-card-footer {
                height: 50%;
            }
        }

        @media (max-width: 768px) {
            .video-container {
                background: url('/images/main_page/home_page_first_screen.webp') no-repeat center center local; background-size: cover;
            }
        }

        .horizontal-gradient {
            background: linear-gradient(to right, #b2f3ee, #eaefee);
        }

        .horizontal-gradient-docs {
            background: linear-gradient(to right, #eaefee, #5cd8d4);
        }

        .horizontal-gradient-calendar {
            background: linear-gradient(to right, #aabcbf, #c4d8db);
        }

        .dropdown:hover > .dropdown-menu {
            display: block;
        }

        .dropend:hover > .dropdown-menu {
            display: block;
            top: 0;
            right: auto;
            left: 100%;
            margin-top: 0;
        }

        .dropdown .dropdown-menu .dropdown-item:active {
            background-color: #6bdcdb;
        }

        a.back-to-top{
            margin: 0 !important;
            padding: 0 !important;
            background: #fff;
            height: 0px;
            width: 0px;
            overflow: hidden;
            border-radius: 50px;
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            color: transparent;
            clear: both;
            visibility: hidden;
            position: fixed;
            cursor: pointer;
            display: block;
            border: none;
            right: 50px;
            bottom: 75px;
            font-size: 0px;
            outline: 0 !important;
            z-index: 99;
            -webkit-transition: all .3s ease-in-out;
            transition: all .3s ease-in-out;
        }
        a.back-to-top:hover,
        a.back-to-top:active,
        a.back-to-top:focus {
            outline: 0 !important;
        }
        a.back-to-top::before,
        a.back-to-top::after {
            content: "";
            display: block;
            vertical-align: middle;
            border-bottom: solid 10px #6bdcdb;
            border-left: solid 10px transparent;
            line-height: 0;
            border-right: solid 10px transparent;
            height: 0;
            margin: 18px auto 0;
            width: 0;
            border-radius:20px;
            visibility: hidden;
        }
        a.back-to-top.show::after,
        a.back-to-top.show::before{
            visibility: visible;
        }
        a.back-to-top::after {
            border-bottom-color: #fff;
            position: relative;
            top:-24px;
        }
        a.back-to-top.show {
            display: block;
            background: #fff;
            color: #fff;
            font-size: 25px;
            right: 25px;
            bottom: 50px;
            height: 50px;
            width: 50px;
            visibility: visible;
            box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 2px 4px 1px rgba(0, 0, 0, 0.25);
        }
        a.back-to-top.show:active {
            box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
            -webkit-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0px 4px 8px 2px rgba(0, 0, 0, 0.25);
        }
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T276DWG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<nav id="nav" class="navbar navbar-expand-lg shadow-lg bg-white fixed-top py-1 main-width">
    <div class="container main-container py-lg-2 py-xl-0 px-lg-0">
        <a class="navbar-brand p-0 m-0" href="{{ route('main') }}">
            <img id="primaryimage" src="/images/bim_logo.png" class="img-fluid logo" alt="logo">
        </a>
        <div class="d-flex justify-content-end align-items-center">
            <a href="{{ route('contact') }}" role="button"
               class="btn btn-primary btn-lg shadow-none border-0 rounded-4 d-lg-none"
               style="background-color: #43aeb6">
                <span class="fw-bold h6 d-block m-0">CONTACT&nbsp;US</span>
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar"
                    aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header justify-content-end">
                <button type="button" class="btn-close shadow-none border-0" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column flex-lg-row">
                <ul class="navbar-nav justify-content-center align-items-center flex-grow-1">
                    @foreach($menuItems as $menuItem)
                        @if($menuItem->show_status === '1')
                            @switch($menuItem->item_name)
                                @case('Home')
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('main') }}">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            HOME
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('Services')
                                <li class="nav-item mx-2 dropdown d-none d-lg-block">
                                    <a class="nav-link text-dark dropdown-toggle" href="{{ route('services') }}" role="button">
                                        <p class="h6 d-inline m-0 fw-bold text-dark">
                                            SERVICES
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($service_menu_items as $menu_item)
                                            @if($menu_item->services->count() == 1)
                                                @foreach($menu_item->services as $service)
                                                    <li>
                                                        <a class="dropdown-item fw-semibold text-uppercase"
                                                           @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif>
                                                            {{ $service->title_en }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            @elseif($menu_item->services->count() > 1)
                                                <li class="dropend">
                                                    <a class="dropdown-item fw-semibold text-uppercase dropdown-toggle" role="button">
                                                        {{$menu_item->title_en}}
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        @foreach($menu_item->services as $service)
                                                            <li>
                                                                <a class="dropdown-item fw-semibold text-uppercase"
                                                                   @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif>
                                                                    {{ $service->title_en }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @else
                                                {{--TODO--}}
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                                @foreach($services as $service)
                                    <li class="nav-item mx-2 d-lg-none" data-bs-dismiss="offcanvas">
                                        <a @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif class="nav-link">
                                            <p class="h6 m-0 fw-bold text-dark text-uppercase text-center">
                                                {{ $service->title_en }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                                @break

                                @case('Portfolio')
                                <li class="nav-item mx-2" data-bs-dismiss="offcanvas">
                                    <a class="nav-link" href="{{ route('portfolio.index') }}">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            PORTFOLIO
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('About')
                                <li class="nav-item mx-2" data-bs-dismiss="offcanvas">
                                    <a class="nav-link"
                                       @if(request()->route()->getName() == 'main') href="#about"
                                       @else href="{{ route('main') }}#about" @endif >
                                        <p class="h6 m-0 fw-bold text-dark">
                                            ABOUT
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('Blog')
                                <li class="nav-item mx-2" data-bs-dismiss="offcanvas">
                                    <a class="nav-link" href="{{ route('blog') }}">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            BLOG
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('Products')
                                <li class="nav-item mx-2 dropdown d-none d-lg-block">
                                    <a class="nav-link text-dark dropdown-toggle" href="{{ route('products') }}" role="button">
                                        <p class="h6 d-inline m-0 fw-bold text-dark">
                                            PRODUCTS
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-main">
                                        <li>
                                            <a class="dropdown-item fw-semibold"
                                               href="{{ route('products') }}">
                                                PLUGINS
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item fw-semibold"
                                               href="{{ route('families') }}">
                                                FAMILIES
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item fw-semibold"
                                               href="{{ route('docs') }}">
                                                CHECKLISTS
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item fw-semibold"
                                               href="{{ route('bimprove_add_in') }}">
                                                BIMPROVE ADD-IN
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item mx-2 d-lg-none" data-bs-dismiss="offcanvas">
                                    <a href="{{ route('products') }}" class="nav-link">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            PLUGINS
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item mx-2 d-lg-none" data-bs-dismiss="offcanvas">
                                    <a href="{{ route('families') }}" class="nav-link">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            FAMILIES
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item mx-2 d-lg-none" data-bs-dismiss="offcanvas">
                                    <a href="{{ route('docs') }}" class="nav-link">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            CHECKLISTS
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('Team')
                                <li class="nav-item mx-2" data-bs-dismiss="offcanvas">
                                    <a class="nav-link"
                                       @if(request()->route()->getName() == 'main') href="#team"
                                       @else href="{{ route('main') }}#team" @endif >
                                        <p class="h6 m-0 fw-bold text-dark">
                                            TEAM
                                        </p>
                                    </a>
                                </li>
                                @break

                                @case('Career')
                                <li class="nav-item" data-bs-dismiss="offcanvas">
                                    <a class="nav-link text-dark" href="#">
                                        <p class="h6 m-0 fw-bold text-dark">CAREER</p>
                                    </a>
                                </li>
                                @break
                            @endswitch

                        @endif
                    @endforeach
                </ul>
                <div
                    class="d-none d-lg-flex flex-column flex-lg-row justify-content-center justify-content-lg-end align-items-center">
                    <a href="{{ route('contact') }}" role="button"
                       class="btn btn-primary btn-lg shadow-none border-0 rounded-4"
                       style="background-color: #43aeb6">
                        <p class="fw-bold h6 m-0">CONTACT&nbsp;US</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>

{{--<div class="container-fluid bg-dark">--}}
{{--    <div class="container main-container bg-light" style="min-height: 50vh;">--}}

{{--    </div>--}}
{{--</div>--}}


<main id="content" role="main">
    @yield('main')

    <div class="container-fluid main-width py-3" style="background-color: #9a9a9a">
        <div class="container main-container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="text-white h2 fw-bold mt-5">SOCIAL MEDIA</h2>

                    <div class="row mt-4">
                        <div class="col-9 col-sm-6 col-lg-12 px-0">
                            <div class="row">
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_1')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/min/LinkedIn.webp"
                                             alt="linkedin">
                                    </a>
                                </div>
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_2')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/min/Instagram.webp"
                                             alt="instagram">
                                    </a>
                                </div>
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_3')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/min/Facebook.webp"
                                             alt="facebook">
                                    </a>
                                </div>
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_4')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/min/YouTube.webp"
                                             alt="youtube">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">

                    <h2 class="text-white h2 fw-bold mt-5">CONTACTS</h2>

                    <div class="row mt-4">
                        <div class="col-9 col-sm-6 col-lg-12 px-0">
                            <div class="row">
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="https://t.me/bimprovebest" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/social/Telegram.png"
                                             alt="Telegram">
                                    </a>
                                </div>
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="viber://add?number=447490493720" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/social/Viber.png"
                                             alt="Viber">
                                    </a>
                                </div>
                                <div class="col-3 col-sm-6 col-lg-2 p-4 pt-0">
                                    <a href="https://wa.me/qr/W6RUGTUI6E5FD1" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/social/Whatsapp.png"
                                             alt="Whatsapp">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-5 col-xl-4 mt-3">
                            <a href="tel:{{ $contacts->where('name', 'phone')->first()->info }}"
                               class="text-white text-decoration-none">
                                <p class="h5">
                                    {{ $contacts->where('name', 'phone')->first()->info }}
                                </p>
                            </a>
                        </div>
                        <div class="col-12 col-lg-7 mt-3">
                            <a href="mailto:{{ $contacts->where('name', 'email')->first()->info }}"
                               class="text-white text-decoration-none">
                                <p class="h5">
                                    {{ $contacts->where('name', 'email')->first()->info }}
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-6 col-md-2">
                    <a class="text-decoration-none p-0 m-0"
                       @if(request()->route()->getName() == 'main') href="#services"
                       @else href="{{ route('main') }}#services" @endif >
                        <p class="h5 fw-semibold text-white mb-4">Services</p>
                    </a>
                    <div class="d-none d-md-block">
                        @foreach($services as $service)
                            <a class="text-decoration-none p-0 m-0"
                               @if($service->show_page === 1) href="{{ route('showService', $service->slug) }}"
                               @else href="{{ route('downloadService', $service->slug) }}" @endif >
                                <p class="h6 text-white border-bottom-2 border-white small">{{ $service->title_en }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <a class="text-decoration-none p-0 m-0" href="{{ route('portfolio.index') }}">
                        <p class="h5 fw-semibold text-white mb-4">Portfolio</p>
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <a class="text-decoration-none p-0 m-0" @if(request()->route()->getName() == 'main') href="#about"
                       @else href="{{ route('main') }}#about" @endif >
                        <p class="h5 fw-semibold text-white mb-4">About</p>
                    </a>
                    <div class="d-none d-md-block">
                        <a class="text-decoration-none p-0 m-0" @if(request()->route()->getName() == 'main') href="#team"
                           @else href="{{ route('main') }}#team" @endif >
                            <p class="h6 text-white border-bottom-2 border-white small">Team</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <a class="text-decoration-none p-0 m-0" href="{{ route('blog') }}">
                        <p class="h5 fw-semibold text-white mb-4">Blog</p>
                    </a>
                    <div class="d-none d-md-block">
                        @foreach($posts as $post)
                            <a class="text-decoration-none p-0 m-0" href="{{ route('post', $post->slug) }}">
                                <p class="h6 text-white border-bottom-2 border-white small">{{ $post->title_en }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-6 col-md-2 d-flex justify-content-md-end">
                    <div>
                        <a class="text-decoration-none p-0 m-0" href="{{ route('products') }}">
                            <p class="h5 fw-semibold text-white mb-4">Products</p>
                        </a>
                        <div class="d-none d-md-block">
                            <a class="text-decoration-none p-0 m-0" href="{{ route('products') }}">
                                <p class="h6 text-white border-bottom-2 border-white small">Plugins</p>
                            </a>
                            <a class="text-decoration-none p-0 m-0" href="{{ route('families') }}">
                                <p class="h6 text-white border-bottom-2 border-white small">Families</p>
                            </a>
                            <a class="text-decoration-none p-0 m-0" href="{{ route('docs') }}">
                                <p class="h6 text-white border-bottom-2 border-white small">Checklists</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 px-4">
                    <div class="row pb-3 border-bottom border-white border-2">

                    </div>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 text-center">
                    <p class="card-text text-white fw-bold h6">
                        &copy; Copyright BIMPROVE company LLC. All rights reserved {{ date("Y") }}. <a
                            class="text-white" href="{{ route('policy') }}">Privacy Policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    let prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("nav").style.display = "block";
        } else {
            document.getElementById("nav").style.display = "none";
        }
        prevScrollpos = currentScrollPos;
    }
</script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/images/js/splide.min.js"></script>
<script>
    // Back to top
    var amountScrolled = 200;
    var amountScrolledNav = 25;

    $(window).scroll(function() {
        if ( $(window).scrollTop() > amountScrolled ) {
            $('a.back-to-top').addClass('show');
        } else {
            $('a.back-to-top').removeClass('show');
        }
    });
</script>

@yield('modals')

@include('cookie-consent::index')

<a href="#content" class="back-to-top" type="button"></a>

</body>
</html>
