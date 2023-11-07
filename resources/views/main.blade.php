@extends('master')

@section('main')

    <div id="bg-video">
        <video class="d-none d-md-block" id="video" poster="/images/poster.png" autoplay playsinline muted loop>
            <source src="/images/video/bg_video_new_1.webm" type="video/webm">
            <source src="images/video/bg_video_new_1.mp4" type="video/mp4">
        </video>

        <div class="container-fluid video-container" style="min-height: 100vh;">
            <div class="container" style="min-height: 100vh;">
                <div class="row pb-0 px-0 p-lg-5 align-items-center align-items-center" style="min-height: 100vh;">
                    <div class="col-12 mt-5 text-center">
                        <div class="row">
                            <h1 class="text-white fw-bold mt-xl-5">
                                {{ $page_info->pageItems->where('name', 'main_header')->first()->value }}
                            </h1>
                            <h2 class="text-white h2 fw-semibold">
                                <small>
                                    {{ $page_info->pageItems->where('name', 'main_subheader')->first()->value }}
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
                    <h2 class="h1 fw-bold pb-4">
                        {{ $page_info->pageItems->where('name', 'stars_header')->first()->value }}
                    </h2>
                </div>
            </div>
            <div class="row px-lg-5 d-none d-md-flex">

                @foreach($stars as $star)
                    @if($star->title_en == 'Contact')
                        <div class="col-12 col-sm-6 col-xl-4 mt-4">
                            <div class="card p-0 h-100" style="border: none; border-radius: 0;">
                                <div class="d-flex align-items-center h-50 px-5" style="background-color: #6de1df">
                                    <button id="button-five-stars-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100" style="background-color: #43aeb6" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                        <span class="fw-bold h6 d-block my-2">BOOK A MEETING</span>
                                    </button>
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
                                            <img src="/images/{{ $star->image }}" class="img-fluid p-1 w-100 bg-transparent">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-0 d-flex align-items-center" style="background-color: #ffffff">
                                    <p class="h5 text-secondary p-3 py-xl-5">
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
                                                            <img src="/images/{{ $star->image }}" class="img-fluid w-100 bg-transparent">
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
                        <img src="images/{{ $achievement->image }}" class="img-fluid w-100">
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
                    <h2 class="h1 fw-bold m-0 pb-4">
                        {{ $page_info->pageItems->where('name', 'services_header')->first()->value }}
                    </h2>
                </div>
            </div>
            <div class="row px-lg-5">

                @foreach($services as $service)
                    <div class="col-12 col-md-6 col-xxl-4 my-3">
                        <div class="card p-0 h-100" style="border: 4px solid #6bdcdb; border-radius: 0;">
                            <div class="service-container h-100">
                                <div class="container-fluid service-card">
                                    <div class="row">
                                        <div class="col-8 col-md-8 col-lg-8 col-xl-9 col-xxl-7 px-0 d-flex align-items-center">
                                            <h3 class="h5 fw-bold ps-3" style="position: relative; bottom: 25px;">
                                                <small>
                                                    {{ $service->title_en }}
                                                </small>
                                            </h3>
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
                                    <div class="row d-lg-none">
                                        <div class="col-12">
                                            <p class="h5 text-secondary" style="min-height: 77px;">
                                                {{ $service->description_en }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-3 pt-0 p-lg-3 border-0 d-flex align-items-center bg-transparent service-card-footer">
                                    <p class="h5 text-secondary d-none d-lg-block">
                                        {{ $service->description_en }}
                                    </p>
                                    <a @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none d-lg-none" style="background-color: #43aeb6">
                                        <span class="fw-bold h5 d-block my-2">EXPLORE</span>
                                    </a>
                                </div>
                                <div class="service-overlay d-none d-lg-block">
                                    <div class="d-flex align-self-center h-100 px-5" style="background-color: #6de1df">
                                        <a class="text-decoration-none w-100 align-self-center" @if($service->show_page) href="{{ route('showService', [$service->slug]) }}" @else target="_blank" href="{{ route('downloadService', [$service->slug]) }}" @endif>
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h4 d-block my-2">EXPLORE</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

{{--    TESTIMONIALS--}}
    <div id="testimonials" class="container-fluid horizontal-gradient py-3 pb-5 px-0">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold">
                        {{ $page_info->pageItems->where('name', 'testimonials_header')->first()->value }}
                    </h2>
                </div>
            </div>
        </div>
        <div class="row w-100 m-0 pb-5">
            <div class="col-12 px-sm-5 px-md-0">
                <section id="splide1" class="splide" aria-label="Slide Container Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach($testimonials as $testimonial)
                                <li class="splide__slide">
                                    <div class="card h-100 p-2 mx-4 rounded-5 border-0" @if(($testimonial->id % 2) == 0) style="background-color: #c4c4c4" @else style="background-color: #6bdcdb" @endif >
                                        <div class="card-header bg-transparent border-0">
                                            <div class="row" style="min-height: 50%">
                                                <div class="col-4">
                                                    <img class="img w-100" src="/images/{{ $testimonial->image }}" alt="">
                                                </div>

                                                <div class="col-8">
                                                    <p class="text-white fw-bold h6 w-100 mt-3 mb-0">{{ $testimonial->name }} {{ $testimonial->surname }}</p>
                                                    <p class="text-white fw-semibold h6 w-100">{{ $testimonial->profession }}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body pt-0 d-flex align-items-center" style="min-height: 50%">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-white fw-semibold h6">
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

{{--    PORTFOLIO--}}
    <div id="portfolio" class="py-3">
        <div class="container-fluid d-none d-lg-block pb-5 px-0">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="h1 fw-bold">
                            {{ $page_info->pageItems->where('name', 'portfolio_header')->first()->value }}
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row w-100 px-0 m-0">
                <div class="col-12 w-100 p-0">
                    <section id="splide7" class="splide" aria-label="Slide Container Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @for($i = 0; $i < $works->count() ; $i ++)
                                    @if($i >= ($works->count() / 2)) @continue @endif
                                    <li class="splide__slide px-3">
                                        <div class="splide__slide__container">
                                            <div class="portfolio-container">
                                                <div class="card border-0 text-bg-dark">
                                                    <img src="/images/{{ $works[$i]->image }}" class="card-img" alt="...">
                                                </div>
                                                <div class="overlay">
                                                    <div class="row m-0 text-white">
                                                        <div class="col-12 p-2 px-4">
                                                            <div class="row justify-content-between">
                                                                <div class="col-7">
                                                                    <p class="h5 fw-bold m-0">{{ $works[$i]->title_first }}</p>
                                                                </div>
                                                                <div class="col-5 ps-0">
                                                                    <p class="h6 fw-bold">{{ $works[$i]->parameter_1 }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-between">
                                                                <div class="col-7">
                                                                    <p class="h5 fw-bold m-0">{{ $works[$i]->title_second }}</p>
                                                                </div>
                                                                <div class="col-5 ps-0">
                                                                    <p class="h6 fw-bold">{{ $works[$i]->parameter_2 }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row justify-content-between">
                                                                <div class="col-7">
                                                                    <p class="h6 text-secondary fw-bold m-0">{{ $works[$i]->subtitle }}</p>
                                                                </div>
                                                                <div class="col-5 ps-0">
                                                                    <p class="h6 fw-bold">{{ $works[$i]->parameter_3 }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <p class="h6 fw-bold">{{ $works[$i]->disciplines }}</p>
                                                                </div>
                                                            </div>

                                                            <div class="row m-0 border-bottom border-3 border-white">
                                                            </div>

                                                            <div class="row d-flex align-items-center">
                                                                <div class="col-4 d-flex justify-content-center">
                                                                    <img src="/images/{{ $works[$i]->image_small }}" class="img-fluid w-100 mt-2" alt="...">
                                                                </div>
                                                                <div class="col-8 px-0 d-flex justify-content-center">
                                                                    <p class="h6 mt-2 text-secondary small">
                                                                        {{ $works[$i]->description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row w-100 mt-4 mx-0 px-0 pb-5">
                <div class="col-12 w-100 p-0">
                    <section id="splide8" class="splide" aria-label="Slide Container Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @for($i = 0; $i < $works->count() ; $i ++)
                                    @if($i < ($works->count() / 2)) @continue @endif
                                    <li class="splide__slide px-3">
                                            <div class="splide__slide__container">
                                                <div class="portfolio-container">
                                                    <div class="card border-0 text-bg-dark">
                                                        <img src="/images/{{ $works[$i]->image }}" class="card-img" alt="...">
                                                    </div>
                                                    <div class="overlay">
                                                        <div class="row m-0 text-white">
                                                            <div class="col-12 p-2 px-4">
                                                                <div class="row justify-content-between">
                                                                    <div class="col-7">
                                                                        <p class="h5 fw-bold m-0">{{ $works[$i]->title_first }}</p>
                                                                    </div>
                                                                    <div class="col-5 ps-0">
                                                                        <p class="h6 fw-bold">{{ $works[$i]->parameter_1 }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row justify-content-between">
                                                                    <div class="col-7">
                                                                        <p class="h5 fw-bold m-0">{{ $works[$i]->title_second }}</p>
                                                                    </div>
                                                                    <div class="col-5 ps-0">
                                                                        <p class="h6 fw-bold">{{ $works[$i]->parameter_2 }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row justify-content-between">
                                                                    <div class="col-7">
                                                                        <p class="h6 text-secondary fw-bold m-0">{{ $works[$i]->subtitle }}</p>
                                                                    </div>
                                                                    <div class="col-5 ps-0">
                                                                        <p class="h6 fw-bold">{{ $works[$i]->parameter_3 }}</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <p class="h6 fw-bold">{{ $works[$i]->disciplines }}</p>
                                                                    </div>
                                                                </div>

                                                                <div class="row m-0 border-bottom border-3 border-white">
                                                                </div>

                                                                <div class="row d-flex align-items-center">
                                                                    <div class="col-4 d-flex justify-content-center">
                                                                        <img src="/images/{{ $works[$i]->image_small }}" class="img-fluid w-100 mt-2" alt="...">
                                                                    </div>
                                                                    <div class="col-8 px-0 d-flex justify-content-center">
                                                                        <p class="h6 mt-2 text-secondary small">
                                                                            {{ $works[$i]->description }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="container-fluid d-lg-none pb-5 px-0">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="h1 fw-bold">
                            {{ $page_info->pageItems->where('name', 'portfolio_header')->first()->value }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mx-0 px-0">
                <div class="col-12 w-100 p-0">
                    <section id="splide13" class="splide" aria-label="Slide Container Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                @foreach($works as $work)
                                    <li class="splide__slide px-sm-3">
                                        <div class="splide__slide__container">
                                            <div class="card h-100 border-0" style="background-color: #6bdddb;">
                                                <img src="/images/{{ $work->image }}" class="card-img" alt="...">

                                                <div class="row m-0 py-3 text-white">
                                                    <div class="col-12 p-2 px-4">
                                                        <div class="row justify-content-between">
                                                            <div class="col-7">
                                                                <p class="h5 fw-bold m-0">{{ $work->title_first }}</p>
                                                            </div>
                                                            <div class="col-5 ps-0">
                                                                <p class="h6 fw-bold">{{ $work->parameter_1 }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-between">
                                                            <div class="col-7">
                                                                <p class="h5 fw-bold m-0">{{ $work->title_second }}</p>
                                                            </div>
                                                            <div class="col-5 ps-0">
                                                                <p class="h6 fw-bold">{{ $work->parameter_2 }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-between">
                                                            <div class="col-7">
                                                                <p class="h6 text-secondary fw-bold m-0">{{ $work->subtitle }}</p>
                                                            </div>
                                                            <div class="col-5 ps-0">
                                                                <p class="h6 fw-bold">{{ $work->parameter_3 }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <p class="h6 fw-bold">{{ $work->disciplines }}</p>
                                                            </div>
                                                        </div>

                                                        <div class="row m-0 border-bottom border-3 border-white">
                                                        </div>

                                                        <div class="row d-flex align-items-center">
                                                            <div class="col-4 d-flex justify-content-center">
                                                                <img src="/images/{{ $work->image_small }}" class="img-fluid w-100 mt-2" alt="...">
                                                            </div>
                                                            <div class="col-8 px-0 d-flex justify-content-center">
                                                                <p class="h6 mt-2 text-secondary small">
                                                                    {{ $work->description }}
                                                                </p>
                                                            </div>
                                                        </div>
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

{{--    ABOUT--}}
    <div id="about" class="container-fluid horizontal-gradient px-0 py-3">
        <div class="container py-5 p-lg-5">
            <div class="row px-lg-5">
                <div class="col-12">
                    <h2 class="h1 fw-bold">
                        {{ $page_info->pageItems->where('name', 'about_header')->first()->value }}
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row pe-0">
                        <div class="col-xl-5 mt-4">
                            <h3 class="h4 lh-1 fw-semibold">
                                {{ $page_info->pageItems->where('name', 'about_subheader')->first()->value }}
                            </h3>
                            <p class="h5 mt-2 fw-normal" style="text-align: justify">
                                {{ $page_info->pageItems->where('name', 'about_text')->first()->value }}
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
                                                    <img src="/images/{{ $teammate->image }}" class="img-fluid w-100">
                                                </div>
                                                <div class="card-body pb-0 px-4">
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
                            <button id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                            </button>
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
            {
                type   : 'loop',
                arrows: boolean = true,
                perPage: 3,
                padding: { left: '10%', right: '10%' },
                breakpoints: {
                    768: {
                        perPage: 1,
                        padding: { left: '0%', right: '0%' },
                    },
                    992: {
                        perPage: 1,
                        padding: { left: '20%', right: '20%' },
                    },
                    1200: {
                        perPage: 2,
                        padding: { left: '10%', right: '10%' },
                    },
                    1400: {
                        perPage: 2,
                        padding: { left: '20%', right: '20%' },
                    },
                },
            },

            // portfolio
            {
                type   : 'loop',
                arrows: boolean = true,
                perPage: 2,
                padding: { left: '25%', right: '25%' },
                breakpoints: {
                    768: {
                        perPage: 1,
                        padding: { left: '0%', right: '0%' },
                    },
                    992: {
                        perPage: 1,
                        padding: { left: '20%', right: '20%' },
                    },
                    1145: {
                        perPage: 1,
                        padding: { left: '25%', right: '25%' },
                    },
                    1200: {
                        perPage: 1,
                        padding: { left: '30%', right: '30%' },
                    },
                    1300: {
                        perPage: 2,
                        padding: { left: '10%', right: '10%' },
                    },
                    1535: {
                        perPage: 2,
                        padding: { left: '15%', right: '15%' },
                    },
                    1850: {
                        perPage: 2,
                        padding: { left: '20%', right: '20%' },
                    },
                },
            },
            {
                type   : 'loop',
                arrows: boolean = true,
                perPage: 2,
                padding: { left: '20%', right: '30%' },
                breakpoints: {
                    768: {
                        perPage: 1,
                        padding: { left: '0%', right: '0%' },
                    },
                    992: {
                        perPage: 1,
                        padding: { left: '20%', right: '20%' },
                    },
                    1145: {
                        perPage: 1,
                        padding: { left: '20%', right: '30%' },
                    },
                    1200: {
                        perPage: 1,
                        padding: { left: '20%', right: '40%' },
                    },
                    1300: {
                        perPage: 2,
                        padding: { left: '5%', right: '15%' },
                    },
                    1535: {
                        perPage: 2,
                        padding: { left: '10%', right: '20%' },
                    },
                    1850: {
                        perPage: 2,
                        padding: { left: '15%', right: '25%' },
                    },
                },
            },

            {
                type   : 'loop',
                perPage: 1,
                padding: { left: '20%', right: '20%' },
                arrows: boolean = true,
                breakpoints: {
                    576: {
                        perPage: 1,
                        padding: { left: '0%', right: '0%' },
                    },
                    768: {
                        perPage: 1,
                        padding: { left: '5%', right: '5%' },
                    },
                },
            },

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

@section('modals')
    <!-- Modal START -->
    <div class="modal fade w-100 h-100" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content h-100" style="background-color: #b5c5c8;">
                <div class="modal-body h-100 p-0">
                    <div class="container-fluid min-vh-100">
                        <div class="row">
                            <div class="col-10 col-lg-10 col-xl-11"></div>
                            <div class="col-2 col-lg-2 col-xl-1 d-flex justify-content-end">
                                <button type="button" class="btn border-0 pe-0" data-bs-dismiss="modal">
                                    <i class="las la-3x la-times text-white"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row p-0 py-0 p-xl-5">
                            <div class="col-12 col-xl-6 align-self-stretch">
                                <h4 class="fw-bold text-white display-6 w-100 lh-1">
                                    Meet at a time that is convenient for you.
                                </h4>
                                <h4 class="h2 lh-1 mt-3 mb-3 text-white fw-semibold">
                                    <small>
                                        Book a date and time that is convenient for you to discuss how we can help you.
                                    </small>
                                </h4>
                                <img src="/images/main_page/calendar_image.png" class="img-fluid w-100 p-5 my-5 d-none d-xl-block" alt="mail_photo">
                            </div>
                            <div class="col-12 col-xl-6">
                                <!-- Calendly inline widget begin -->
                                <div class="calendly-inline-widget w-100" data-url="https://calendly.com/bimprove/30min" style="height:700px;"></div>
                                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
                                <!-- Calendly inline widget end -->
                            </div>
                        </div>
                        <div class="row p-3 pt-2 text-center d-flex align-items-center">
                            <h4 class="h4 lh-1 text-white fw-semibold">
                                <small>
                                    If you have a proposal, fill out the form with your information and we'll get back to you.
                                </small>
                            </h4>
                        </div>
                        <div class="row pb-3 d-flex justify-content-center">
                            <div class="col-6 col-lg-3 col-xl-2 mb-2">
                                <a href="{{ route('contact') }}" role="button" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100 mx-auto" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block m-0">CONTACT US</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal END -->
@endsection
