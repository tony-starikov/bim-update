<!doctype html>
<html class="w-100" lang="ua">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-T276DWG');</script>
    <!-- End Google Tag Manager -->

    <!-- Google Optimize -->
    <script src="https://www.googleoptimize.com/optimize.js?id=OPT-WL7D2N2"></script>
    <!-- End Google Optimize -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

    <meta property="og:image" content="/images/bim_prove.png">

    @seo

    @turnstileScripts()

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome -->
    {{--    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">--}}

    {{--  splide  --}}
    <link rel="stylesheet" href="/images/css/splide.min.css">
    <script src="/images/js/splide.min.js"></script>

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

        .horizontal-gradient {
            background: linear-gradient(to right, #b2f3ee, #eaefee);
        }

        .horizontal-gradient-calendar {
            background: linear-gradient(to right, #aabcbf, #c4d8db);
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

<nav class="navbar navbar-expand-lg shadow-lg bg-white fixed-top py-1 main-width">
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
                                <li class="nav-item mx-2" data-bs-dismiss="offcanvas">
                                    <a class="nav-link" href="{{ route('main') }}#services">
                                        <p class="h6 m-0 fw-bold text-dark">
                                            SERVICES
                                        </p>
                                    </a>
                                </li>
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
                                    <a class="nav-link text-dark dropdown-toggle" href="#" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
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


<main role="main">
    @yield('main')

    <div class="container-fluid main-width py-3" style="background-color: #9a9a9a">
        <div class="container main-container">
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="text-white h2 fw-bold mt-5">SOCIAL MEDIA</h2>

                    <div class="row mt-4">
                        <div class="col-6 col-lg-12 px-0">
                            <div class="row">
                                <div class="col-6 col-lg-2">
                                    <a href="{{ $contacts->where('name', 'social_1')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/link.png"
                                             alt="linkedin">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <a href="{{ $contacts->where('name', 'social_2')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/insta.png"
                                             alt="instagram">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <a href="{{ $contacts->where('name', 'social_3')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/face.png"
                                             alt="facebook">
                                    </a>
                                </div>
                                <div class="col-6 col-lg-2">
                                    <a href="{{ $contacts->where('name', 'social_4')->first()->info }}" target="_blank"
                                       class="text-white h4 text-decoration-none">
                                        <img class="img-fluid w-100"
                                             src="/images/main_page/social/you.png"
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
                            <div class="d-inline-block pe-3 border-end border-2 border-white">
                                <a href="tel:{{ $contacts->where('name', 'phone')->first()->info }}"
                                   class="text-white text-decoration-none">
                                    <p class="h5">
                                        {{ $contacts->where('name', 'phone')->first()->info }}
                                    </p>
                                </a>
                            </div>
                            <div class="d-inline-block ps-3 pe-0">
                                <a href="mailto:{{ $contacts->where('name', 'email')->first()->info }}"
                                   class="text-white text-decoration-none">
                                    <p class="h5">
                                        {{ $contacts->where('name', 'email')->first()->info }}
                                    </p>
                                </a>
                            </div>
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
                               @if(request()->route()->getName() == 'main') href="#services"
                               @else href="{{ route('main') }}#services" @endif >
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

@yield('modals')

@include('cookie-consent::index')
</body>
</html>
