@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta id="image" property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="website"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('main')
    <div id="main">
        <div class="container-fluid pt-5" style="background: url('/images/service/all/background_services.png') no-repeat center center local; background-size: cover; min-height: 75vh;">
            <div class="container pb-0 px-0 p-lg-5">
                <div class="row px-5 mt-xl-5 text-center">
                    <div class="col-12 mt-5">
                        <h1 class="text-white mt-4 text-uppercase fw-bold">All our BIM Services</h1>
                        <div class="mt-4 row justify-content-center">
                            <div class="col-md-10 col-xl-7">
                                <h3 class="text-white px-lg-5 px-xl-2 px-xxl-5 text-uppercase h4 fw-semibold">Care for every project</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-5 pb-5 justify-content-center">
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/all/icon1.png" loading="lazy" alt="icon1" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">Point cloud registration</h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/all/icon2.png" loading="lazy" alt="icon2" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">REVIT MODELLING</h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/all/icon3.png" loading="lazy" alt="icon3" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">FACILITY MANAGEMENT</h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/all/icon4.png" loading="lazy" alt="icon4" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">AS-BUILT SERVICES</h3>
                    </div>
                </div>
            </div>
        </div>

        <div id="breadcrumb" class="container-fluid">
            <div class="container pt-3 p-lg-5 pb-lg-0">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Services</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="services" class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="h1 fw-bold">SERVICES</h2>
                    </div>
                </div>
                <div class="row px-lg-5">
                    @foreach($services as $service)
                        <div class="col-12 col-md-6 col-xxl-4 mt-5">
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
                                                <img src="/images/{{ $service->image }}" class="img-fluid w-100 bg-transparent position-relative" style="position: relative; bottom: 30px; left: 4px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="h6 text-secondary">
                                                    {{ $service->description }}
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

        <div id="achievements" class="container-fluid horizontal-gradient">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="h2 fw-semibold m-0 pb-4">
                            Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
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

        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">What are BIM Services?</h2>
                    </div>
                    <div class="col-12 mt-lg-4 pt-2 pt-lg-3">
                        <div class="h5 fw-normal">
                            <p>
                                BIM Services is a set of solutions aimed at the realization of projects using BIM methodology in the construction industry. From idea to realization. At each stage of the project, BIM brings its advantages and helps realize projects with greater efficiency.
                            </p>
                            &nbsp;
                            <p>
                                Building Information Modeling (BIM) is a digital representation of the physical and functional characteristics of an object with the filling of the necessary data about any object. In addition, BIM creates an excellent opportunity for communication between stakeholders, simplifying the decision-making process.
                            </p>
                            &nbsp;
                            <p>
                                BIMPROVE is a BIM company providing BIM in Revit services in various areas. We provide services to architects, designers, civil engineers, MEP engineers, general contractors and construction managers, subcontractors, equipment manufacturers, telecommunication companies.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="calendar" class="container-fluid horizontal-gradient-calendar">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="text-white h1 fw-bold text-uppercase w-100 mb-5">UNLOCK THE FULL POTENTIAL OF OUR SERVICES</h2>
                    </div>
                    <div class="col-lg-7 col-xl-6 col-xxl-5">
                        <h3 class="text-white h3 fw-bold text-uppercase w-100 m-0">CONTACT US</h3>
                        <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>
                    </div>

                    <div class="col-lg-5 col-xl-6 col-xxl-7 d-none d-lg-block">
                        <div class="row mb-3">
                            <div class="col-12 h5 fw-semibold text-white">
                                <h3 class="text-white h3 fw-bold text-uppercase w-100 mb-4">How can we help you?</h3>
                                <p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img src="/images/service/all/services.png" class="img-fluid w-100" alt="mail_photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection

{{--@section('canonical')--}}
{{--    @if($service->canonical)--}}
{{--        <link rel="canonical" href="{{ $service->canonical }}">--}}
{{--    @endif--}}
{{--@endsection--}}
