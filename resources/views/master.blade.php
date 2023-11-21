<!doctype html>
<html class="w-100" lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-T276DWG');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Optimize -->
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-WL7D2N2"></script>
    <!-- End Google Optimize -->

    <!-- Required meta tags -->
    @yield('meta')
    @yield('canonical')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <meta property="og:image" content="/images/bim_prove.png">

    @seo

    @turnstileScripts()

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">--}}
    {{--  splide  --}}
    <link rel="stylesheet" href="/images/css/splide.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet"/>

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

        form.footer-form input {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: transparent !important;
        }

        /*form.footer-form input[type='checkbox']:checked:after {*/
        /*    !*content: '✔';*!*/
        /*    color: red;*/
        /*    font-weight: bold;*/
        /*    content: 'x';*/
        /*    display: block;*/
        /*    text-align: center;*/
        /*}*/
        form.footer-form input::placeholder {
            /*opacity: 1 !important; !* Firefox *!*/
            color: white !important;
            font-size: 1.5rem !important;
            padding-left: 0 !important;
        }

        form.footer-form input[placeholder] {
            /*opacity: 1 !important; !* Firefox *!*/
            color: white !important;
            font-size: 1.5rem !important;
            padding-left: 0 !important;
            /*padding-bottom: 0 !important;*/
        }

        form.footer-form textarea::placeholder {
            color: white !important;
            font-size: 1.5rem !important;
        }

        form.footer-form textarea[placeholder] {
            color: white !important;
            font-size: 1.5rem !important;
        }

        form.footer-form input[type=file]::file-selector-button {
            color: #9a9a9a;
            padding-left: 1.5rem;
            /*background-color: transparent;*/
        }

        form.footer-form input[type=file]::file-selector-button:hover {
            color: #9a9a9a;
            padding-left: 1.5rem;
            /*background-color: transparent;*/
        }

        /*form.subscribe-form input {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*    background-color: transparent !important;*/
        /*}*/
        /*form.subscribe-form input::placeholder {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: #9a9a9a !important;*/
        /*    border-color: #9a9a9a !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/
        /*form.subscribe-form input[placeholder] {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: #9a9a9a !important;*/
        /*    border-color: #9a9a9a !important;*/
        /*    font-size: 1.25rem !important;*/
        /*    padding-left: 0 !important;*/
        /*}*/

        /*form.donate-form input {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*    background-color: #fff !important;*/
        /*}*/
        /*form.donate-form select {*/
        /*    -webkit-appearance: none;*/
        /*    -moz-appearance: none;*/
        /*    appearance: none;*/
        /*    background-color: #fff !important;*/
        /*}*/
        /*form.donate-form input::placeholder {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: #9a9a9a !important;*/
        /*    border-color: #fff !important;*/
        /*    font-size: 1.4rem !important;*/
        /*    padding: 10px !important;*/
        /*}*/
        /*form.donate-form select {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: #9a9a9a !important;*/
        /*    border-color: #fff !important;*/
        /*    font-size: 1.4rem !important;*/
        /*    padding: 10px !important;*/
        /*}*/
        /*form.donate-form input[placeholder] {*/
        /*    opacity: 1 !important; !* Firefox *!*/
        /*    color: #9a9a9a !important;*/
        /*    border-color: #fff !important;*/
        /*    font-size: 1.4rem !important;*/
        /*    padding: 10px !important;*/
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
            background-color: #6bdddb;
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
                background: url('/images/main_page/background2.webp') no-repeat center center local; background-size: cover;
            }
        }

        .horizontal-gradient {
            background: linear-gradient(to right, #b2f3ee, #eaefee);
        }

        .horizontal-gradient-calendar {
            background: linear-gradient(to right, #aabcbf, #c4d8db);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
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
            <img src="/images/bim_prove.png" class="img-fluid logo" alt="">
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
                                    <a class="nav-link text-dark dropdown-toggle" href="{{ route('main') }}#services" role="button">
                                        <p class="h6 d-inline m-0 fw-bold text-dark">
                                            SERVICES
                                        </p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        @foreach($services as $service)
                                            <li>
                                                <a class="dropdown-item fw-semibold text-uppercase"
                                                   @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif>
                                                    {{ $service->title_en }}
                                                </a>
                                            </li>
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
                                    <a class="nav-link"
                                       @if(request()->route()->getName() == 'main') href="#portfolio"
                                       @else href="{{ route('main') }}#portfolio" @endif >
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
                                    <ul class="dropdown-menu">
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
                        <div class="col-6 col-lg-12 px-0">
                            <div class="row">
                                <div class="col-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_1')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-linkedin img-fluid w-100" viewBox="0 0 16 16">--}}
{{--                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>--}}
{{--                                        </svg>--}}
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/link2.png"
                                             alt="linkedin">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_2')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-instagram img-fluid w-100" viewBox="0 0 16 16">--}}
{{--                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>--}}
{{--                                        </svg>--}}
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/insta2.png"
                                             alt="instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_3')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook img-fluid w-100" viewBox="0 0 16 16">--}}
{{--                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>--}}
{{--                                        </svg>--}}
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/face2.png"
                                             alt="facebook">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2 p-4 pt-0">
                                    <a href="{{ $contacts->where('name', 'social_4')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-youtube img-fluid w-100" viewBox="0 0 16 16">--}}
{{--                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>--}}
{{--                                        </svg>--}}
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/you2.png"
                                             alt="youtube">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6">

                    <h2 class="text-white h2 fw-bold mt-5">CONTACTS</h2>

                    <div class="row mt-4 pt-2">
                        <div class="col-12 d-none d-lg-block">
                            <a href="tel:{{ $contacts->where('name', 'phone')->first()->info }}"
                               class="text-white text-decoration-none">
                                <p class="h5">
                                    {{ $contacts->where('name', 'phone')->first()->info }}
                                </p>
                            </a>
                        </div>
                        <div class="col-12 d-none d-lg-block">
                            <a href="mailto:{{ $contacts->where('name', 'email')->first()->info }}"
                               class="text-white text-decoration-none">
                                <p class="h5">
                                    {{ $contacts->where('name', 'email')->first()->info }}
                                </p>
                            </a>
                        </div>
                        <div class="col-12 d-lg-none">
                            <div class="row">
                                <div class="col-12">
                                    <a href="tel:{{ $contacts->where('name', 'phone')->first()->info }}"
                                       class="text-white text-decoration-none">
                                        <p class="h5">
                                            {{ $contacts->where('name', 'phone')->first()->info }}
                                        </p>
                                    </a>
                                </div>
                                <div class="col-12 mt-4">
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
                    <a class="text-decoration-none p-0 m-0"
                       @if(request()->route()->getName() == 'main') href="#portfolio"
                       @else href="{{ route('main') }}#portfolio" @endif >
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
                        &copy; Copyright BIMprove company LLC. All rights reserved {{ date("Y") }}. <a
                            class="text-white" href="{{ route('policy') }}">Privacy Policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

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
