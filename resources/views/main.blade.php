@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="website"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('schema')

<script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@graph":
        [
            {
                "@type": "WebPage",
                "@id": "https://bim-prove.com/#webpage",
                "url": "https://bim-prove.com/",
                "name": "Revit Modeling Services | BIMprove",
                "description": "BIM outsourcing at a favorable price. Accurate and fully coordinated BIM models. We work in the USA | EU",
                "inLanguage": "en-US",
                "isPartOf": {
                    "@type": "WebSite",
                    "@id": "https://bim-prove.com/#website",
                    "url": "https://bim-prove.com/",
                    "name": "BIMprove",
                    "description": "BIM Modeling Services - Scan to BIM, As-built drawings, MEP Coordination, Telecom design",
                    "inLanguage": "en-US",
                    "publisher": {
                        "@type": "Organization",
                        "@id": "https://bim-prove.com/#organization",
                        "url": "https://bim-prove.com/",
                        "name": "BIMprove llc",
                        "telephone": "+380668901648",
                        "sameAs": ["https://www.linkedin.com/company/bimprove/", "https://www.instagram.com/bimprove/", "https://www.facebook.com/bimproveworld", "https://www.youtube.com/@bimpr0ve"],
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#organizationLogo",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "width": "108",
                            "height": "140",
                            "caption": "BIMprove"
                        },
                        "image": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#image",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "contentUrl": "https://bim-prove.com/images/bim_prove.png",
                            "inLanguage": "en-US",
                            "width": "122",
                            "height": "100",
                            "caption": "BIMprove"
                        },
                        "contactPoint": {
                            "@type": "ContactPoint",
                            "telephone": "380668901648",
                            "contactType": "none",
                            "address": "71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, GB"
                        }
                    }
                },
                "breadcrumb": {
                    "@type": "BreadcrumbList",
                    "@id": "https://bim-prove.com/#breadcrumblist",
                    "itemListElement": [{
                        "@type": "ListItem",
                        "@id": "https://bim-prove.com/#listItem",
                        "position": "1",
                        "name": "Home",
                        "item": {
                            "@type": "Thing",
                            "@id": "https://bim-prove.com/"
                        }
                    }]
                },
                "about": {
                        "@type": "Organization",
                        "@id": "https://bim-prove.com/#organization",
                        "url": "https://bim-prove.com/",
                        "name": "BIMprove llc",
                        "telephone": "+380668901648",
                        "sameAs": ["https://www.linkedin.com/company/bimprove/", "https://www.instagram.com/bimprove/", "https://www.facebook.com/bimproveworld", "https://www.youtube.com/@bimpr0ve"],
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#organizationLogo",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "width": "108",
                            "height": "140",
                            "caption": "BIMprove"
                        },
                        "image": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#image",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "contentUrl": "https://bim-prove.com/images/bim_prove.png",
                            "inLanguage": "en-US",
                            "width": "122",
                            "height": "100",
                            "caption": "BIMprove"
                        },
                        "contactPoint": {
                            "@type": "ContactPoint",
                            "telephone": "380668901648",
                            "contactType": "none",
                            "address": "71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, GB"
                        }
                }
            }
        ]
    }
</script>

@endsection

@section('main')

    <div id="bg-video">
        <video title="Presentation video of outsourcing company BIMprove llc." class="d-none d-md-block" id="video" poster="/images/poster.png" autoplay playsinline muted loop>
            <meta itemprop="description" content="Presentation video of outsourcing company BIMprove llc.">
            <source src="/images/video/bg_video_new_1.webm" type="video/webm">
            <source src="images/video/bg_video_new_1.mp4" type="video/mp4">
        </video>

        <div class="container-fluid video-container" style="min-height: 100vh;">
            <div class="container" style="min-height: 100vh;">
                <div class="row pb-0 px-0 p-lg-5 align-items-center align-items-center" style="min-height: 100vh;">
                    <div class="col-12 mt-5 text-center">
                        <div class="row">
                            <h1 class="text-white fw-bold mt-xl-5">
                                THE INDIVIDUAL FIVE-STAR BIM SERVICE:
                                {{--                                {{ $page_info->pageItems->where('name', 'main_header')->first()->value }}--}}
                            </h1>
                            <h2 class="text-white h2 fw-semibold">
                                <small>
                                    Unlock your AEC company's full potential with our customized BIM support, delivering a five-star BIM service experience tailored specifically for you.
                                    {{--                                    {{ $page_info->pageItems->where('name', 'main_subheader')->first()->value }}--}}
                                </small>
                            </h2>
                        </div>

                        <div class="row p-4 p-xl-5 d-flex justify-content-center">
                            <div class="col-12 col-md-7 col-lg-5">
                                <a id="button-first-screen-xxl" href="#services" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                    <span class="fw-bold h5 d-block my-2">OUR SERVICES</span>
                                </a>
                            </div>
                        </div>

                        <div class="row px-xl-5 mt-4 justify-content-center justify-content-xl-between">
                            @foreach($stars as $star)
                                @if($star->title_en !== 'Contact')
                                    <div class="col-4 col-xl-2 text-center">
                                        <div class="row justify-content-center">
                                            <div class="col-6 col-lg-5 col-xl-12 text-center p-0">
                                                <img src="/images/{{ $star->image_big }}" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <p class="h6 text-white fw-semibold text-uppercase px-0 py-4 m-0 d-none d-md-block">
                                            {{ $star->title_en }}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    STARS--}}
    <div id="stars" class="container-fluid bg-white py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold text-uppercase">
{{--                        {{ $page_info->pageItems->where('name', 'stars_header')->first()->value }}--}}
                        Your business deserves<br>
                        our five-stars in BIM modeling:
                    </h2>
                    <p class="h5 fw-normal mb-4 mt-5">
                        BIMPROVE outsourced BIM company providing 3D BIM modeling services in Revit in different lines. We provide services to architects, designers, civil engineers, MEP engineers, general contractors and construction managers, subcontractors, equipment manufacturers, Telecom companies.
                    </p>
                </div>
            </div>
            <div class="row px-lg-5 d-none d-md-flex">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 col-sm-6 col-xl-4 mt-4">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-5" style="background-color: #6de1df">
                                    <a class="d-flex w-100 text-decoration-none" href="/contact">
                                        <button id="button-five-stars-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                            <span class="fw-bold h6 d-block my-2">BOOK A MEETING</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-12 col-sm-6 col-xl-4 mt-4">
                            <div class="card p-2 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-7 px-0 d-flex align-items-center">
                                            <h3 class="h5 fw-bold ps-3">
                                                {{ $star->title_en }}
                                            </h3>
                                        </div>
                                        <div class="col-5">
                                            <img src="/images/{{ $star->image }}" alt="{{ $star->title_en }}" class="img-fluid p-1 w-100 bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <p class="h6 text-secondary p-3 py-xl-5">
                                        {{ $star->description_en }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row d-md-none">
                <div class="col-12 mx-0 px-0">
                    <section class="splide" aria-label="Slide Container Example">
                        <div class="splide__track">
                            <ul class="splide__list">

                                @foreach($stars as $star)
                                    @if($star->title_en !== 'Contact')
                                        <li class="splide__slide">
                                            <div class="card p-3 pb-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-8 d-flex align-items-center">
                                                            <h3 class="h5 fw-bold">
                                                                <small>
                                                                    {{ $star->title_en }}
                                                                </small>
                                                            </h3>
                                                        </div>
                                                        <div class="col-4">
                                                            <img src="/images/{{ $star->image }}" alt="{{ $star->title_en }}" class="img-fluid w-100 bg-transparent">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer border-0 d-flex align-items-center" style="background-color: #ffffff">
                                                    <p class="h6 text-secondary py-4">
                                                        {{ $star->description_en }}
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

{{--    ACHIEVEMENTS--}}
    <div id="achievements" class="container-fluid horizontal-gradient py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold m-0 pb-4">
                        {{ $page_info->pageItems->where('name', 'achievements_header')->first()->value }}
                    </h2>
                </div>
            </div>
            <div class="row justify-content-between px-lg-5 pb-0">
                @foreach($achievements as $achievement)
                    <div class="col-6 col-md-3 col-xl-2 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-3 mt-4 text-center">
                        <img src="images/{{ $achievement->image }}" alt="{{ $achievement->title_en }}" class="img-fluid w-100">
                        <p class="fw-bold mt-1 h2">{{ $achievement->title_en }}</p>
                        <p class="card-title text-dark fw-bold">
                            {{ $achievement->subtitle_en }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

{{--    SERVICES--}}
    <div id="services" class="container-fluid py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold">
                        {{ $page_info->pageItems->where('name', 'services_header')->first()->value }}
                    </h2>
                    <p class="h5 fw-normal my-5">
                        With over 7 years of experience in the AEC industry as an outsourcing company, we have successfully completed over <a href="{{ route('portfolio.index') }}" class="text-dark">1,400+ BIM projects</a> in the United States, Canada, Germany, Belgium, UK, Australia, New Zealand, etc. BIMPROVE is a confident player in the digital construction market. We offer 3D BIM Modeling Services in industries such as manufacturing and warehousing, airports, residential, education, commercial, medical centers, etc.
                    </p>
                </div>
            </div>
            <div class="row px-lg-5">

                @foreach($services as $service)
                    <div class="col-12 col-md-6 col-xxl-4 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="card-body px-0 pt-0">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-8 col-md-8 col-lg-8 col-xl-9 col-xxl-7 px-0 d-flex align-items-center">
                                            <a @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif class="text-decoration-none text-dark" style="position: relative; bottom: 25px;">
                                                <h3 class="h5 fw-bold ps-3">
                                                    <small>
                                                        {{ $service->title_en }}
                                                    </small>
                                                </h3>
                                            </a>
                                        </div>
                                        <div class="col-4 col-md-4 col-lg-4 col-xl-3 col-xxl-5 p-0 ps-2">
                                            @if($service->video_url)
                                                <a href="#{{ $service->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $service->slug }}">
                                                    <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="z-index: 10;position: relative; bottom: 30px; left: 4px">
                                                </a>
                                            @else
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 4px">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="h6 text-secondary">
                                                {{ $service->description_en }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer p-3 pt-0 p-lg-3 border-0 d-flex align-items-center bg-transparent">
                                <a @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none" style="background-color: #43aeb6">
                                    <span class="fw-bold h5 d-block my-2">EXPLORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

{{--    TESTIMONIALS--}}
    <div id="testimonials" class="container-fluid horizontal-gradient py-lg-3 pb-lg-5 px-0">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold">
                        {{ $page_info->pageItems->where('name', 'testimonials_header')->first()->value }}
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12 px-0">
                    <section id="splide1" class="splide" aria-label="Slide Container Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach($testimonials as $testimonial)
                                    <li class="splide__slide py-5 px-lg-5">
                                        <div class="card h-100 shadow mx-3 py-4 rounded-5 border-0">
                                            <div class="card-body bg-transparent border-0">
                                                <div class="row">
                                                    <div class="col-3 col-md-2 col-xl-1 text-center">
                                                        <img class="img-fluid w-100" src="/images/{{ $testimonial->image }}" alt="{{ $testimonial->name }} {{ $testimonial->surname }}">
                                                        <img class="img-fluid w-50 mt-3" src="/images/testimonials/link.png" alt="">
                                                    </div>

                                                    <div class="col-9 col-md-10 col-xl-11">
                                                        <p class="fw-bold h6">{{ $testimonial->name }} {{ $testimonial->surname }} <span class="fw-semibold" style="color: #86919e">{{ $testimonial->level }}</span></p>
                                                        <p class="fw-semibold h6">{{ $testimonial->profession }}</p>
                                                        <p class="fw-semibold h6" style="color: #86919e">{{ $testimonial->date }}</p>
{{--                                                        <p class="fw-semibold text-secondary h6">--}}
{{--                                                            April 19, 2022--}}
{{--                                                        </p>--}}
                                                        <p class="h6 mt-3">
                                                            {{ $testimonial->text }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>

{{--    PORTFOLIO--}}
    <div id="portfolio" class="py-3">
        <div class="container-fluid pb-5 px-0">
            <div class="container pt-5 p-lg-5 pb-lg-2">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="h1 fw-bold">
                            {{ $page_info->pageItems->where('name', 'portfolio_header')->first()->value }}
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row w-100 justify-content-evenly p-2 px-sm-5">
                <div class="col-12 px-lg-5">
                    <div class="row px-lg-5">
                        @foreach($works as $work)
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="card border-0">
                                    <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                        <img src="/images/{{ $work->image }}" class="card-img" alt="{{ $work->title }}">
                                        <div class="row align-items-center">
                                            <div class="col-7 mt-2">
                                                <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                                    <h3 class="text-dark h6 fw-bold m-0">{{ $work->title }}</h3>
                                                </a>
                                            </div>
                                            <div class="col-5 mt-2">
                                                <a href="{{ route('portfolio.project', $work->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                            <div class="d-none d-md-block d-xl-none col-6 mt-4">
                                <div class="card h-100 border-0" style="background-color: #6de1df">
                                    <div class="row px-5 h-100 d-flex justify-content-center align-items-center">
                                        <div class="col-12">
                                            <a href="{{ route('portfolio.index') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                                <span class="fw-bold h6 d-block my-2">ALL PROJECTS</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="container px-lg-5">
                <div class="row px-4 px-xl-5 mt-5 d-flex d-md-none d-xl-flex justify-content-center">
                    <div class="col-12 col-md-7 col-lg-5">
                        <a href="{{ route('portfolio.index') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                            <span class="fw-bold h5 d-block my-2">ALL PROJECTS</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    ABOUT--}}
    <div id="about" class="container-fluid horizontal-gradient px-0 py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold text-uppercase">
{{--                        {{ $page_info->pageItems->where('name', 'about_header')->first()->value }}--}}
                        Discover the Comprehensive<br>
                        BIM Services of BIMPROVE
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row pe-0">
                        <div class="col-xl-5 mt-4">
                            <h3 class="h5 mb-3 fw-semibold">
{{--                                {{ $page_info->pageItems->where('name', 'about_subheader')->first()->value }}--}}
                                The BIMPROVE team will let you forget about worrying for the project.
                            </h3>
                            <p class="h6 mb-3 fw-normal">
{{--                                {{ $page_info->pageItems->where('name', 'about_text')->first()->value }}--}}
                                BIMPROVE is, first and foremost, about people. A team of specialists passionate about BIM technology and 3D modeling. Our vision for the team is to continuously grow, develop, and bring digital construction and digital twins to life.
                            </p>
                            <p class="h6 mb-3 fw-normal">
                                As a business, we aim to provide BIM services at a five-star level with personalized support. Our priorities are quality, speed, accountability, process optimization, and customer savings.
                            </p>
                            <p class="h6 fw-normal">
                                When you work with us, you'll forget about project anxiety. We guarantee project realization without breaking deadlines and no rework.
                            </p>
                        </div>
                        <div class="col-xl-7 mt-4 px-3 ps-xl-4 pe-xl-0">
                            <img src="/images/{{ $page_info->pageItems->where('name', 'about_image')->first()->value }}" class="img-fluid w-100" alt="team_photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    TEAM--}}
    <div id="team" class="container-fluid py-3 pb-5 px-0">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold">
                        {{ $page_info->pageItems->where('name', 'team_header')->first()->value }}
                    </h2>
                </div>
            </div>
        </div>

        <div class="row w-100 px-0 pb-5">
            <div class="col-12">
                <section id="splide17" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($teammates as $teammate)
                                <li class="splide__slide">
                                    <div class="splide__slide__container">
                                        <a class="p-0 m-0 text-decoration-none" target="_blank" href="{{ $teammate->linkedin_url }}">
                                            <div class="card border-0 px-xxl-5 h-100 bg-transparent">
                                                <div class="text-center p-4 pt-0">
                                                    <img src="/images/{{ $teammate->image }}" class="px-5 px-sm-0 img-fluid w-100">
                                                </div>
                                                <div class="card-body pb-0 px-5 px-sm-4">
                                                    <p class="h3 fw-bold text-dark">{{ $teammate->name_en }}</p>
                                                    <p class="h3 fw-bold text-dark">{{ $teammate->surname_en }}</p>
                                                    <p class="h5 card-title text-dark">
                                                        {{ $teammate->position_en }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

{{--    CALENDAR--}}
    <div id="calendar" class="container-fluid horizontal-gradient-calendar py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-md-6">
                    <h2 class="text-white h1 fw-bold w-100">
                        {{ $page_info->pageItems->where('name', 'calendar_header')->first()->value }}
                    </h2>
                    <h3 class="h2 text-white fw-semibold mt-4">
                        <small>
                            {{ $page_info->pageItems->where('name', 'calendar_subheader')->first()->value }}
                        </small>
                    </h3>
                    <div class="row">
                        <div class="col-md-12 col-xxl-9">
                            <a href="{{ route('contact') }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button">
                                <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 d-none d-md-flex align-items-center">
                    <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" class="img-fluid w-100" alt="mail_photo">
                </div>
            </div>
        </div>
    </div>

    <script>
        let elms = document.getElementsByClassName( 'splide' );

        let configs = [
            // stars

            {
                type   : 'loop',
                perPage: 1,
                arrows: boolean = true,
            },

            // testimonials
            // {
            //     type   : 'loop',
            //     arrows: boolean = true,
            //     perPage: 3,
            //     padding: { left: '10%', right: '10%' },
            //     breakpoints: {
            //         768: {
            //             perPage: 1,
            //             padding: { left: '0%', right: '0%' },
            //         },
            //         992: {
            //             perPage: 1,
            //             padding: { left: '20%', right: '20%' },
            //         },
            //         1200: {
            //             perPage: 2,
            //             padding: { left: '10%', right: '10%' },
            //         },
            //         1400: {
            //             perPage: 2,
            //             padding: { left: '20%', right: '20%' },
            //         },
            //     },
            // },

            {
                type   : 'loop',
                arrows: boolean = true,
                perPage: 1,
            },

            // portfolio
            // {
            //     type   : 'loop',
            //     arrows: boolean = true,
            //     perPage: 2,
            //     padding: { left: '25%', right: '25%' },
            //     breakpoints: {
            //         768: {
            //             perPage: 1,
            //             padding: { left: '0%', right: '0%' },
            //         },
            //         992: {
            //             perPage: 1,
            //             padding: { left: '20%', right: '20%' },
            //         },
            //         1145: {
            //             perPage: 1,
            //             padding: { left: '25%', right: '25%' },
            //         },
            //         1200: {
            //             perPage: 1,
            //             padding: { left: '30%', right: '30%' },
            //         },
            //         1300: {
            //             perPage: 2,
            //             padding: { left: '10%', right: '10%' },
            //         },
            //         1535: {
            //             perPage: 2,
            //             padding: { left: '15%', right: '15%' },
            //         },
            //         1850: {
            //             perPage: 2,
            //             padding: { left: '20%', right: '20%' },
            //         },
            //     },
            // },
            // {
            //     type   : 'loop',
            //     arrows: boolean = true,
            //     perPage: 2,
            //     padding: { left: '20%', right: '30%' },
            //     breakpoints: {
            //         768: {
            //             perPage: 1,
            //             padding: { left: '0%', right: '0%' },
            //         },
            //         992: {
            //             perPage: 1,
            //             padding: { left: '20%', right: '20%' },
            //         },
            //         1145: {
            //             perPage: 1,
            //             padding: { left: '20%', right: '30%' },
            //         },
            //         1200: {
            //             perPage: 1,
            //             padding: { left: '20%', right: '40%' },
            //         },
            //         1300: {
            //             perPage: 2,
            //             padding: { left: '5%', right: '15%' },
            //         },
            //         1535: {
            //             perPage: 2,
            //             padding: { left: '10%', right: '20%' },
            //         },
            //         1850: {
            //             perPage: 2,
            //             padding: { left: '15%', right: '25%' },
            //         },
            //     },
            // },
            //
            // {
            //     type   : 'loop',
            //     perPage: 1,
            //     padding: { left: '20%', right: '20%' },
            //     arrows: boolean = true,
            //     breakpoints: {
            //         576: {
            //             perPage: 1,
            //             padding: { left: '0%', right: '0%' },
            //         },
            //         768: {
            //             perPage: 1,
            //             padding: { left: '5%', right: '5%' },
            //         },
            //     },
            // },

            // team
            {
                type   : 'loop',
                perPage: 4,
                arrows: boolean = true,
                breakpoints: {
                    576: {
                        perPage: 1,
                    },
                    768: {
                        perPage: 2,
                    },
                    1200: {
                        perPage: 3,
                    },
                },
            },
        ];

        document.addEventListener( 'DOMContentLoaded', function() {
            for ( let i = 0; i < elms.length; i++ ) {
                new Splide( elms[ i ], configs[ i ] ).mount();
            }
        } );
    </script>

@endsection

{{--@section('modals')--}}
{{--    <!-- Modal START -->--}}
{{--    <div class="modal fade w-100 h-100" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-xl">--}}
{{--            <div class="modal-content h-100" style="background-color: #b5c5c8;">--}}
{{--                <div class="modal-body h-100 p-0">--}}
{{--                    <div class="container-fluid min-vh-100">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-10 col-lg-10 col-xl-11"></div>--}}
{{--                            <div class="col-2 col-lg-2 col-xl-1 d-flex justify-content-end">--}}
{{--                                <button type="button" class="btn border-0 pe-0" data-bs-dismiss="modal">--}}
{{--                                    <i class="las la-3x la-times text-white"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row p-0 py-0 p-xl-5">--}}
{{--                            <div class="col-12 col-xl-6 align-self-stretch">--}}
{{--                                <h4 class="fw-bold text-white display-6 w-100 lh-1">--}}
{{--                                    Meet at a time that is convenient for you.--}}
{{--                                </h4>--}}
{{--                                <h4 class="h2 lh-1 mt-3 mb-3 text-white fw-semibold">--}}
{{--                                    <small>--}}
{{--                                        Book a date and time that is convenient for you to discuss how we can help you.--}}
{{--                                    </small>--}}
{{--                                </h4>--}}
{{--                                <img src="/images/main_page/calendar_image.webp" class="img-fluid w-100 p-5 my-5 d-none d-xl-block" alt="mail_photo">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <!-- Calendly inline widget begin -->--}}
{{--                                <div class="calendly-inline-widget w-100" data-url="https://calendly.com/bimprove/30min" style="height:700px;"></div>--}}
{{--                                <script type="text/javascript">--}}
{{--                                    window.addEventListener('DOMContentLoaded', (event) => {--}}
{{--                                        let script = document.createElement('script');--}}
{{--                                        script.src = "https://assets.calendly.com/assets/external/widget.js";--}}
{{--                                        script.innerHTML = ''--}}
{{--                                        document.body.appendChild(script);--}}
{{--                                    });--}}
{{--                                </script>--}}
{{--                                <!-- Calendly inline widget end -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row p-3 pt-2 text-center d-flex align-items-center">--}}
{{--                            <h4 class="h4 lh-1 text-white fw-semibold">--}}
{{--                                <small>--}}
{{--                                    If you have a proposal, fill out the form with your information and we'll get back to you.--}}
{{--                                </small>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                        <div class="row pb-3 d-flex justify-content-center">--}}
{{--                            <div class="col-6 col-lg-3 col-xl-2 mb-2">--}}
{{--                                <a href="{{ route('contact') }}" role="button" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100 mx-auto" style="background-color: #43aeb6">--}}
{{--                                    <span class="fw-bold h6 d-block m-0">CONTACT US</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Modal END -->--}}
{{--@endsection--}}

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
