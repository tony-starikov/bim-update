@extends('master')

@section('main')
    <div class="container-fluid" style="background: url('/images/service/architectural/header.webp') no-repeat center center local; background-size: cover;">
        <div class="container">
            <div class="row align-items-center" style="min-height: 100vh;">
                <div class="col-12 text-center py-5">
                    <h2 class="h1 mt-5 text-uppercase fw-bold">
                        THE INDIVIDUAL<br>
                        FIVE-STAR
                    </h2>
                    <h1 class="text-white text-uppercase fw-bold">
                        ARCHITECTURAL BIM SERVICE
                    </h1>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-lg-6 col-xl-5">
                            <a id="estimate-first-screen-mep" href="{{ route('estimatesMep') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <p class="fw-bold h5 my-2">BOOK A MEETING</p>
                            </a>
                        </div>
                    </div>

                    <div class="row mt-5 justify-content-center">
                        <div class="col-6 col-sm-5 col-md-3 col-xl-2 text-center">
                            <img src="/images/service/content/icons-head/icon1.webp" loading="lazy" alt="icon1" class="img-fluid w-100 px-4">
                            <p class="h6 text-white small fw-semibold mt-4 text-uppercase px-3">
                                DETAILED DRAWINGS PRODUCTION
                            </p>
                        </div>
                        <div class="col-6 col-sm-5 col-md-3 col-xl-2 text-center">
                            <img src="/images/service/content/icons-head/icon2.webp" loading="lazy" alt="icon2" class="img-fluid w-100 px-4">
                            <p class="h6 text-white small fw-semibold mt-4 text-uppercase px-3">
                                CORRECT SCHEDULES
                            </p>
                        </div>
                        <div class="col-6 col-sm-5 col-md-3 col-xl-2 text-center">
                            <img src="/images/service/content/icons-head/icon3.webp" loading="lazy" alt="icon3" class="img-fluid w-100 px-4">
                            <p class="h6 text-white small fw-semibold mt-4 text-uppercase px-3">
                                DIGITAL TWINS
                            </p>
                        </div>
                        <div class="col-6 col-sm-5 col-md-3 col-xl-2 text-center">
                            <img src="/images/service/content/icons-head/icon4.webp" loading="lazy" alt="icon4" class="img-fluid w-100 px-4">
                            <p class="h6 text-white small fw-semibold mt-4 text-uppercase px-3">
                                Realistic VISUALISATIONS
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold text-uppercase">
                        WHAT DO WE PROPOSE?
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row mt-lg-4">
                        <div class="col-lg-6 p-4 pb-0">
                            <div class="row align-items-center"  style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-6">
                                    <h3 class="h6 fw-bold text-uppercase">
                                        Architectural
                                        modeling
                                    </h3>
                                </div>
                                <div class="col-6 p-0">
                                    <img src="/images/service/architectural/what/img1.webp" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-4 pb-0">
                            <div class="row align-items-center"  style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-6">
                                    <h3 class="h6 fw-bold text-uppercase">
                                        Coordination with
                                        other disciplines
                                    </h3>
                                </div>
                                <div class="col-6 p-0">
                                    <img src="/images/service/architectural/what/img2.webp" loading="lazy" alt="service2" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-4 pb-0">
                            <div class="row align-items-center"  style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-6">
                                    <h3 class="h6 fw-bold text-uppercase">
                                        Visualization
                                    </h3>
                                </div>
                                <div class="col-6 p-0">
                                    <img src="/images/service/architectural/what/img3.webp" loading="lazy" alt="service3" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 p-4 pb-0">
                            <div class="row align-items-center"  style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-6">
                                    <h3 class="h6 fw-bold text-uppercase">
                                        Interior
                                        modeling
                                    </h3>
                                </div>
                                <div class="col-6 p-0">
                                    <img src="/images/service/architectural/what/img4.webp" loading="lazy" alt="service4" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="SERVICES">

        <div class="container-fluid" style="background-image: url('/images/service/architectural/background.webp'); background-size: cover;">
            <div class="container p-lg-5">
                <div class="row py-5 pb-0 p-lg-5 pb-lg-0">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">
                            What benefits BIM
                            model can give?
                        </h2>
                        <h3 class="fw-semibold mt-4 mb-3">
                            Accurate schedules of material and
                            equipment!
                        </h3>

                        {{--                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">--}}
                        {{--                                Every project starts with adjusting its own database. At this first stage we take into account all data provided by customers concerning materials, connections, insulation and services types of ducts and pipes to model HVAC components in the most authentic way.--}}
                        {{--                            </p>--}}
                    </div>

                    <div class="col-12 mt-4 px-0">
                        <div class="row w-100 mx-0 px-0 pb-5">
                            <div class="col-12 px-0">
                                <section id="slider1" class="splide" aria-label="Slide Container Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/database/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/database/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/database/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/database/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/database/img5.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('/images/service/architectural/background2.webp'); background-size: cover;">
            <div class="container p-lg-5">
                <div class="row py-5 pb-0 p-lg-5 pb-lg-0">
                    <div class="col-12">
                        <h3 class="fw-semibold mb-3">
                            A model in high LOD in 3D can help to
                            see your building with all detail!
                        </h3>

                        {{--                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">--}}
                        {{--                                Using submittals information we download all necessary families from official manufacturer websites or create these families ourselves if they aren’t available on the internet. This approach can guarantee 100% model conformity to clients requirements.--}}
                        {{--                            </p>--}}
                    </div>

                    <div class="col-12 mt-4 px-0">
                        <div class="row w-100 mx-0 px-0 pb-5">
                            <div class="col-12 px-0">
                                <section id="slider2" class="splide" aria-label="Slide Container Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/prep/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/prep/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/prep/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/prep/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/prep/img5.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('/images/service/architectural/background.webp'); background-size: cover;">
            <div class="container p-lg-5">
                <div class="row py-5 pb-0 p-lg-5 pb-lg-0">
                    <div class="col-12">
                        <h3 class="fw-semibold mb-3">
                            Coordination with other disciplines will not allow mistakes and clashes at the construction site. All clashes wil be identified at the design stage!
                        </h3>

                        {{--                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">--}}
                        {{--                                We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.--}}
                        {{--                            </p>--}}
                    </div>

                    <div class="col-12 mt-4 px-0">
                        <div class="row w-100 mx-0 px-0 pb-5">
                            <div class="col-12 px-0">
                                <section id="slider3" class="splide" aria-label="Slide Container Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img5.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/modeling/img6.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-image: url('/images/service/architectural/background2.webp'); background-size: cover;">
            <div class="container p-lg-5">
                <div class="row py-5 pb-0 p-lg-5 pb-lg-0">
                    <div class="col-12">
                        <h3 class="fw-semibold mb-3">
                            You can get Visualizations from an
                            existing Bim model!
                        </h3>

                        {{--                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">--}}
                        {{--                                Using CAMduct or SysQue software our team are capable to implement Fabrication of MEP systems according to technical information provided by customer. HVAC and Fire Protection are our main directions in this field.--}}
                        {{--                            </p>--}}
                    </div>

                    <div class="col-12 mt-4 px-0">
                        <div class="row w-100 mx-0 px-0 pb-5">
                            <div class="col-12 px-0">
                                <section id="slider4" class="splide" aria-label="Slide Container Example">
                                    <div class="splide__track">
                                        <ul class="splide__list">

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img5.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                            <li class="splide__slide">
                                                <div class="splide__slide__container px-3">
                                                    <img src="/images/service/mep/services/fabrication/img6.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container py-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <h2 class="fw-bold text-uppercase pb-4">
                        OUR BIM Architectural PROJECTS
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/content/proj/proj1.webp" loading="lazy" alt="service1" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/content/proj/proj2.webp" loading="lazy" alt="service2" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/content/proj/proj3.webp" loading="lazy" alt="service3" class="img-fluid w-100">
                        </div>
                        <div class="col-md-6 mt-4">
                            <img src="/images/service/content/proj/proj4.webp" loading="lazy" alt="service4" class="img-fluid w-100">
                        </div>
                        <div class="col-12 mt-4">
                            <div class="card h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="card-body py-5 p-md-5 text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <a id="estimate-project-screen-scantobim-xxl" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                                                <p class="fw-bold h4 d-block my-2">
                                                    BOOK A MEETING
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="BENEFITS">
        <div class="container-fluid horizontal-gradient">
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
                                            <img src="/images/service/scan_to_bim_images/benefits/reviewing1-min.png" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="reviewing">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h3 class="h5 fw-bold text-uppercase">
                                            REVIEWING
                                        </h3>

                                        <p class="h6 text-secondary p-2">
                                            - Verification using BIMprove Add-In or check-list
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Checking the 3D model against engineering logic
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Reviewing drawings by customer requirements
                                        </p>
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
                                            <img src="/images/service/scan_to_bim_images/benefits/development1-min.png" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="development">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h3 class="h5 fw-bold text-uppercase">
                                            DEVELOPMENT
                                        </h3>

                                        <p class="h6 text-secondary p-2">
                                            - Continuous development of Add-In and Dynamo Scripts
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Development and constant updating of the template
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Developing parametric families
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Creating our own database
                                        </p>
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
                                            <img src="/images/service/scan_to_bim_images/benefits/organization1-min.png" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="organization">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #edf4f4">
                                        <h3 class="h5 fw-bold text-uppercase">
                                            ORGANIZATION
                                        </h3>

                                        <p class="h6 text-secondary p-2">
                                            - Unique project management technologies
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Individual approach in communication with the client
                                        </p>
                                        <p class="h6 text-secondary p-2">
                                            - Continuous analysis of the finished work
                                        </p>
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

    <div id="COUNTRIES">
        <div class="container-fluid" style="background: url('/images/service/scan_to_bim_images/map/background-min.png') no-repeat center center local; background-size: cover;">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">
                            WHAT COUNTRIES HAVE WE WORKED WITH?
                        </h2>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <img src="/images/service/scan_to_bim_images/map/map-min.png" loading="lazy" class="img-fluid mx-auto w-100" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container px-lg-5 py-lg-0">
            <div class="row py-5 p-lg-5 justify-content-center">
                <div class="col-lg-9 col-xl-6 text-center">
                    <a href="{{ route('downloadService', 'software-development') }}" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb">
                        <p class="fw-bold h4 d-block my-2">
                            DOWNLOAD PRESENTATION
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="SOFT">
        <div class="container-fluid">
            <div class="container p-lg-5 pt-lg-0 pb-0">
                <div class="row py-5 p-lg-5 pt-lg-0 pb-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            OUR SOFTWARE SKILLS
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/revit_autodesk.png" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Autodesk Revit
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/autocad.png" loading="lazy" alt="autocad" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Autodesk AutoCAD
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/revizto.png" loading="lazy" alt="revizto" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Revizto
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/camduct.png" loading="lazy" alt="camduct" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Fabrication CAMduct
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/navisworks.png" loading="lazy" alt="graphisoft" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Autodesk Navisworks
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/graphisoft.png" loading="lazy" alt="graphisoft" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Graphisoft Arhicad
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/sysque.png" loading="lazy" alt="sysque" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            SysQue
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/bimcollab.png" loading="lazy" alt="bimcollab" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            BIMcollab
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <div class="row mt-4 d-flex align-items-center">
                                    <div class="col-3">
                                        <img src="/images/service/mep/software/revit_recap.png" loading="lazy" alt="revit_recap" class="images-fluid w-100">
                                    </div>
                                    <div class="col-9 px-0 d-flex align-items-center">
                                        <h3 class="h5 fw-bold m-0">
                                            Autodesk ReCap
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                                <img src="/images/main_page/calendar_image.webp" class="img-fluid w-100 p-5 my-5 d-none d-xl-block" alt="mail_photo">
                            </div>
                            <div class="col-12 col-xl-6">
                                <!-- Calendly inline widget begin -->
                                <div class="calendly-inline-widget w-100" data-url="https://calendly.com/bimprove/30min" style="height:700px;"></div>
                                <script type="text/javascript">
                                    window.addEventListener('DOMContentLoaded', (event) => {
                                        let script = document.createElement('script');
                                        script.src = "https://assets.calendly.com/assets/external/widget.js";
                                        script.innerHTML = ''
                                        document.body.appendChild(script);
                                    });
                                </script>
                            {{--                                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>--}}
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

    <script>
        new Splide( '#slider1', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
            breakpoints: {
                992: {
                    perPage: 1,
                },
            },
        }, ).mount();

        new Splide( '#slider2', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
            breakpoints: {
                992: {
                    perPage: 1,
                },
            },
        }, ).mount();

        new Splide( '#slider3', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
            breakpoints: {
                992: {
                    perPage: 1,
                },
            },
        }, ).mount();

        new Splide( '#slider4', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
            breakpoints: {
                992: {
                    perPage: 1,
                },
            },
        }, ).mount();
    </script>
@endsection
