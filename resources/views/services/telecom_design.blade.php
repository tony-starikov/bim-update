@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="article"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('main')

    <div id="header" class="container-fluid" style="background: url('/images/service/telecom_design_images/header/header.webp') no-repeat center center local; background-size: cover; min-height: 100vh;">
        <div class="container mt-5 pb-0 px-0 p-lg-5">
            <div class="row px-5 mt-5 text-center">
                <div class="col-12 mt-5">
                    <h2 class="fw-bold mt-4 h1">
                        THE INDIVIDUAL<br>FIVE-STAR
                    </h2>
                    <h1 class="fw-bold text-white">
                        TELECOMMUNICATION DESIGN SERVICE
                    </h1>
                </div>
            </div>

            <div class="row px-5 pb-4 mt-5 justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <a href="#cad" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                        <span class="fw-bold h5 my-2">OUR SERVICES</span>
                    </a>
                </div>
            </div>

            <div class="row px-lg-5 pb-5 pt-4 pt-xl-0 justify-content-center">
                <div class="col-5 col-lg-3 p-xl-5 text-center">
                    <img src="/images/service/telecom_design_images/header/icons/icon1.webp" loading="lazy" alt="icon1" class="img-fluid w-75 px-md-4 p-lg-0">
                    <h6 class="text-white small fw-semibold mt-4">
                        CAD DRAWINGS
                    </h6>
                </div>
                <div class="col-5 col-lg-3 p-xl-5 text-center">
                    <img src="/images/service/telecom_design_images/header/icons/icon3.webp" loading="lazy" alt="icon3" class="img-fluid w-75 px-md-4 p-lg-0">
                    <h6 class="text-white small fw-semibold mt-4">
                        DIGITAL TWINS CREATION
                    </h6>
                </div>
                <div class="col-5 col-lg-3 p-xl-5 text-center">
                    <img src="/images/service/telecom_design_images/header/icons/icon2.webp" loading="lazy" alt="icon2" class="img-fluid w-75 px-md-4 p-lg-0">
                    <h6 class="text-white small fw-semibold mt-4">
                        STEEL STRUCTURE DESIGN SOLUTIONS
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div id="soft" class="container-fluid">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold h1">
                        OUR SOFTWARE SKILLS
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/revit_autodesk.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Autodesk Revit
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/autocad.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Autodesk AutoCAD
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/advanced_steel.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Advance Steel
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/rhino.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Rhinoceros
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/navisworks.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Autodesk Navisworks
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/graphisoft.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Graphisoft Arhicad
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/sketchup.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Sketchup
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/lumion.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Lumion
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <div class="row mt-4 d-flex align-items-center">
                                <div class="col-3">
                                    <img src="/images/service/telecom_design_images/software/revit_recap.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-9 px-0 d-flex align-items-center">
                                    <h5 class="fw-bold m-0">
                                        Autodesk ReCap
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cad" class="container-fluid" style="background: url('/images/service/telecom_design_images/services/cad_drawings/background.webp') no-repeat center center local; background-size: cover;">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold h1">
                        WHAT WE PROPOSE
                    </h2>
                </div>
                <div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-end order-2 order-lg-1">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="my-3">
                                        CAD Drawings
                                    </h3>
                                    <h5 class="fw-normal py-4 px-4 m-0" style="background-color: #eff6f6; text-align: justify;">
                                        Specializing in comprehensive design and planning of telecom sites, our adept team delivers end-to-end solutions, tailoring to each client’s specific needs. Leveraging industry standards and innovative technology, we assure high-quality designs and seamless project execution. Our prowess extends to creating precise CAD drawings, from initial planning to detailed design, ensuring accuracy that contributes significantly to the successful realization of your telecom projects.
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center order-1 order-lg-2">
                            <div class="row">
                                <div class="col-12">
                                    <img src="/images/service/telecom_design_images/services/cad_drawings/draft.webp" loading="lazy" alt="draft" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="download" class="container-fluid">
        <div class="container p-5">
            <div class="row py-5 p-lg-5 justify-content-center">
                <div class="col-lg-9 col-xl-6 text-center">
                    <a href="{{ route('downloadService', 'telecom-design') }}" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-2">
                                DOWNLOAD PRESENTATION
                            </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: url('/images/service/telecom_design_images/services/steel/propose.webp') no-repeat center center local; background-size: cover;">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center">
                            <img src="/images/service/telecom_design_images/services/steel/frame.webp" loading="lazy" alt="draft" class="img-fluid w-100">
                        </div>
                        <div class="col-lg-6 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="my-3">
                                        Steel Structure Design Solutions
                                    </h3>
                                    <h5 class="fw-normal py-4 px-4 m-0" style="background-color: #eff6f6; text-align: justify;">
                                        Our company specializes in preparing comprehensive drawings for steel structures, from the preconstruction to construction stages. With advanced design techniques, we create precise blueprint designs, construction drawings, and detailed drawings customized to meet client requirements. Our expertise spans across various steel structures, including those for the telecom sector.
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: url('/images/service/telecom_design_images/services/twin/twin.webp') no-repeat center center local; background-size: cover;">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center order-2 order-lg-1">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="my-3">
                                        Digital twins creation
                                    </h3>
                                    <h5 class="fw-normal py-4 px-4 m-0" style="background-color: #eff6f6; text-align: justify;">
                                        By creating digital twins of telecom sites, we provide an innovative solution for project planning, monitoring, and management. These virtual replicas offer significant benefits, including improved efficiency, risk mitigation, and cost savings.
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center order-1 order-lg-2">
                            <img src="/images/service/telecom_design_images/services/twin/draft.webp" loading="lazy" alt="draft" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="rooftop" class="container-fluid" style="background-color: #faffff;">
        <div class="container py-5 p-lg-5">
            <div class="row pb-5 p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold h1">
                        PROJECT CASE
                    </h2>
                    <h3 class="mt-4">
                        Rooftop Presentation
                    </h3>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/rooftop/draft1.webp" loading="lazy" alt="draft1" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/rooftop/draft2.webp" loading="lazy" alt="draft2" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/rooftop/draft3.webp" loading="lazy" alt="draft3" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/rooftop/draft4.webp" loading="lazy" alt="draft4" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-12 px-4">
                            <div class="row p-5 justify-content-center" style="border: 4px solid #6de0de">
                                <div class="col-lg-9 col-xl-6 text-center">
                                    <a id="check-model-first-xl" href="https://autode.sk/3X6EaNy" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                        <span class="fw-bold h5 my-2">CHECK THE MODEL</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold h1">
                        PROJECT CASE
                    </h2>
                    <h3 class="mt-4">
                        HQ Tower Presentation
                    </h3>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/tower/draft1.webp" loading="lazy" alt="draft1" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/tower/draft2.webp" loading="lazy" alt="draft2" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/tower/draft3.webp" loading="lazy" alt="draft3" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/telecom_design_images/tower/draft4.webp" loading="lazy" alt="draft4" class="img-fluid w-100">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="row">
                        <div class="col-12 px-4">
                            <div class="row p-5 justify-content-center" style="border: 4px solid #6de0de">
                                <div class="col-lg-9 col-xl-6 text-center">
                                    <a id="check-model-second-xl" href="https://autode.sk/443fpUS" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                        <span class="fw-bold h5 my-2">CHECK THE MODEL</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="COUNTRIES">
        <div class="container-fluid" style="background: url('/images/service/telecom_design_images/map/background.webp') no-repeat center center local; background-size: cover;">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            COUNTRIES WE WORKED WITH
                        </h2>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <img src="/images/service/telecom_design_images/map/map.webp" loading="lazy" class="img-fluid mx-auto w-100" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="BENEFITS">
        <div class="container-fluid" style="background: url('/images/service/telecom_design_images/benefits/background.webp') no-repeat center center local; background-size: cover;">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            OUR BENEFITS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row row-cols-1 row-cols-md-3 g-1">
                            <div class="col">
                                <div class="card h-100 p-3 border-0 bg-transparent">
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <img src="/images/service/telecom_design_images/benefits/reviewing1.webp" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="reviewing">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h5 class="fw-bold text-uppercase">
                                            REVIEWING
                                        </h5>

                                        <h6 class="text-secondary p-2">
                                            - Verification using BIMprove Add-In or check-list
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Checking the 3D model against engineering logic
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Reviewing drawings by customer requirements
                                        </h6>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 p-3 border-0 bg-transparent">
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <img src="/images/service/telecom_design_images/benefits/development1.webp" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="development">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h5 class="fw-bold text-uppercase">
                                            DEVELOPMENT
                                        </h5>

                                        <h6 class="text-secondary p-2">
                                            - Continuous development of Add-In and Dynamo Scripts
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Development and constant updating of the template
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Developing parametric families
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Creating our own database
                                        </h6>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100 p-3 border-0 bg-transparent">
                                    <div class="row justify-content-center">
                                        <div class="col-4">
                                            <img src="/images/service/telecom_design_images/benefits/organization1.webp" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="organization">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h5 class="fw-bold text-uppercase">
                                            ORGANIZATION
                                        </h5>

                                        <h6 class="text-secondary p-2">
                                            - Unique project management technologies
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Individual approach in communication with the client
                                        </h6>
                                        <h6 class="text-secondary p-2">
                                            - Continuous analysis of the finished work
                                        </h6>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="calendar">
        <div class="container-fluid d-none d-xxl-block" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-6">
                        <h2 class="text-white fw-bold display-5 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h1 fw-semibold mt-4">
                            <small>
                                Book a consultation at your convenience!
                            </small>
                        </h2>
                        <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" loading="lazy" class="img-fluid w-100" alt="mail_photo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-xl-block d-xxl-none" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-6">
                        <h2 class="text-white fw-bold display-5 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h1 fw-semibold mt-4">
                            <small>
                                Book a consultation at your convenience!
                            </small>
                        </h2>
                        <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" loading="lazy" class="img-fluid w-100" alt="mail_photo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-lg-block d-xl-none" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-6">
                        <h2 class="text-white fw-bold h1 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h4 fw-semibold mt-4">
                            Book a consultation at your convenience!
                        </h2>
                        <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" loading="lazy" class="img-fluid w-100" alt="mail_photo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-md-block d-lg-none" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container">
                <div class="row py-5">
                    <div class="col-7">
                        <h2 class="text-white fw-bold h1 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h4 fw-semibold mt-4">
                            Book a consultation at your convenience!
                        </h2>
                        <button class="btn btn-primary border-0 rounded-4 shadow-none w-75 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                    <div class="col-5 d-flex align-items-center">
                        <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" loading="lazy" class="img-fluid w-100" alt="mail_photo">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-sm-block d-md-none" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12">
                        <h2 class="text-white fw-bold h2 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h4 fw-semibold mt-4">
                            Book a consultation at your convenience!
                        </h2>
                        <button class="btn btn-primary border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-sm-none" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12">
                        <h2 class="text-white fw-bold h1 w-100">
                            UNLOCK THE FULL POTENTIAL OF SCAN TO BIM.
                        </h2>
                        <h2 class="text-white h4 fw-semibold mt-4">
                            Book a consultation at your convenience!
                        </h2>
                        <button class="btn btn-primary border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                            <span class="fw-bold h5 d-block my-2">GO TO CALENDAR</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

@section('canonical')
    @if($service->canonical)
        <link rel="canonical" href="{{ $service->canonical }}">
    @endif
@endsection
