@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div id="main">
        <div class="container-fluid" style="background: url('/images/service/scan_to_bim_images/background3.png') no-repeat center center local; background-size: cover; min-height: 100vh;">
            <div class="container mt-5 pb-0 px-0 p-lg-5">
                <div class="row px-5 mt-5 text-center">
                    <div class="col-12 mt-5">
                        <h2 class="fw-bold mt-4 h1">
                            THE INDIVIDUAL<br>FIVE-STAR
                        </h2>
                        <h1 class="text-white fw-bold">
                            SCAN TO BIM SERVICE
                        </h1>
                    </div>
                </div>

                <div class="row px-5 pb-4 mt-5 justify-content-center">
                    <div class="col-lg-6 col-xl-5">
                        <a id="estimate-first-screen-scantobim" href="{{ route('estimates') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                            <span class="fw-bold h5 my-2">ESTIMATE YOUR PROJECT</span>
                        </a>
                    </div>
                </div>

                <div class="row px-5 pb-5 justify-content-center">
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon1-min.png" loading="lazy" alt="icon1" class="img-fluid">
                        <h6 class="text-white fw-semibold mt-4 text-center">
                            DIGITAL TWINS
                        </h6>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon2-min.png" loading="lazy" alt="icon2" class="img-fluid">
                        <h6 class="text-white fw-semibold mt-4 text-center">
                            REALITY CAPTURE
                        </h6>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon3-min.png" loading="lazy" alt="icon3" class="img-fluid">
                        <h6 class="text-white fw-semibold mt-4 text-center">
                            FACILITY MANAGEMENT
                        </h6>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon4-min.png" loading="lazy" alt="icon4" class="img-fluid">
                        <h6 class="text-white fw-semibold mt-4 text-center">
                            AS-BUILT
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PROPOSE">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold h1">
                            WHAT DO WE PROPOSE?
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row mt-lg-4">
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            As-built model
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service1-min.png" loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Creation of the executive 3D model «As-built» by the Point Cloud. Adding Management Information to BIM Elements.
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            As-built drawings
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service2-min.png" loading="lazy" alt="service2" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Design of As-built drawings based on 3D models “As-built”.
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            Engineering portals
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service3-min.png" loading="lazy" alt="service3" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Creation of engineering portals (linked 3D-model, attribute model, documentation, packages).
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            Anomalies
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service4-min.png" loading="lazy" alt="service4" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Detection of anomalies of actual placements and sizes of constructions in real life and project documentation.
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            Exception reports
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service5-min.png" loading="lazy" alt="service5" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Creation of a report on problems in the project.
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h5 class="fw-bold mt-4">
                                            QA\QC
                                        </h5>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service6-min.png" loading="lazy" alt="service6" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <h5 class="text-secondary">
                                            <small>
                                                Checking of model accuracy, building and engineering logic, elements clashing.
                                            </small>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="SERVICE">
        <div class="container-fluid">
            <div class="container pb-5 p-lg-5 pt-lg-0">
                <div class="row p-lg-5 pt-lg-0">
                    <div class="col-12">
                        <h2 class="fw-bold h1">
                            WHAT IS THE SCAN TO BIM SERVICE?
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row mt-lg-4 pt-2 pt-lg-3">

                            <div class="col-lg-6">
                                <h5 class="text-secondary" style="text-align: justify;">
                                    Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps in creating a comprehensive and detailed model of the building, which can be used for renovation, restoration, or retrofitting purposes. The Scan to BIM service is essential in creating a collaborative environment for developing and executing efficiently the construction projects.
                                </h5>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-12 mt-2 mt-lg-0">
                                        <h4 class="fw-semibold pb-2">
                                            What disciplines we work with?
                                        </h4>
                                    </div>

                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Mechanical
                                        </h5>
                                    </div>
                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Electrical
                                        </h5>
                                    </div>

                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Plumbing
                                        </h5>
                                    </div>
                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Fire Protection
                                        </h5>
                                    </div>

                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Structural
                                        </h5>
                                    </div>
                                    <div class="col-6 p-2 pt-0">
                                        <h5 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                            Architectural
                                        </h5>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12 pt-lg-5 mt-2 mt-lg-0">
                                <h5 class="text-secondary">
                                    The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings, greater accuracy, and reduced risk of errors. It helps in minimizing on-site work and disruptions, reduces the chances of rework, and allows for better visualization and analysis of the building's structure. Additionally, the Scan to BIM service enables stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="DOWNLOAD">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5 pt-0 pt-lg-0">
                <div class="row p-lg-5 pt-0 pt-lg-0 justify-content-center">
                    <div class="col-lg-9 col-xl-6 text-center">
                        <a href="{{ route('downloadService', 'scan-to-bim') }}" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-2">
                                DOWNLOAD PRESENTATION
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="POINT">
        <div class="container-fluid">
            <div class="container pb-5 p-lg-5 pt-lg-0">
                <div class="row p-lg-5 pt-lg-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            WHAT WE MAKE BY THE POINT CLOUD?
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Residential Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Educational Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Institutional Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Historical Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Business Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Mercantile Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Industrial Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Storages
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Parkings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Special Buildings
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Bridges
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Roads
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Transmission towers
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Monuments
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3 d-flex align-items-center">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h4 class="fw-bold">
                                            Radio masts and towers
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="GET">
        <div class="container-fluid">
            <div class="container p-lg-5 pt-0 pb-5">
                <div class="row p-lg-5 pt-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            WHAT WILL YOU GET WORKING WITH US?
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row mt-4 pt-3">
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Adherence to deadlines-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Adherence to deadlines
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Certified team-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Certified team
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Communication-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Communication
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/HIGH QUALITY-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            HIGH QUALITY
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Model development-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Model development
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Project adjustmnent-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Project adjustmnent
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Tasks soving-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Tasks solving
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Work process organization-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h4 class="fw-semibold text-uppercase">
                                            Work process organization
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="HOW">
        <div class="container-fluid">
            <div class="container pb-5 pt-0 p-lg-5 pt-lg-0">
                <div class="row p-lg-5 pt-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            HOW DO WE WORK?
                        </h2>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/1.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                CONSULTATION
                            </h5>
                            <h6 class="text-secondary">
                                Receiving the task by email, google-form, or during the meeting.
                            </h6>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/2.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                PROJECT ESTIMATION
                            </h5>
                            <h6 class="text-secondary">
                                Estimation of the project and creation of an offer.
                            </h6>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/3.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                ESTIMATION APPROVAL
                            </h5>
                            <h6 class="text-secondary">
                                Discussion of estimation with the client & commercial offer approval.
                            </h6>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/4.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                PROJECT SETUP
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - The creation of chats and dashboard
                                    </h6>
                                    <h6 class="text-secondary">
                                        - Deadline setting
                                    </h6>
                                    <h6 class="text-secondary">
                                        - Team meeting
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - Sorting and processing incoming information
                                    </h6>
                                    <h6 class="text-secondary">
                                        - Setting up the template for work
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/5.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                WORKFLOW
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - modeling
                                    </h6>
                                    <h6 class="text-secondary">
                                        - preparation of drawings and schedules
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - step-by-step project review
                                    </h6>
                                    <h6 class="text-secondary">
                                        - daily/weekly reports or meetings with the client
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/6.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h5 class="fw-bold text-uppercase">
                                MODEL PUBLISHING
                            </h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - QA\QC in Revit or Navisworks
                                    </h6>
                                    <h6 class="text-secondary">
                                        - Adding missing elements and corrections after QA\QC
                                    </h6>
                                    <h6 class="text-secondary">
                                        - Purging unused elements, deleting working views
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-secondary">
                                        - delivering model to the client
                                    </h6>
                                    <h6 class="text-secondary">
                                        - getting feedback and approval from the client
                                    </h6>
                                    <h6 class="text-secondary">
                                        - receiving payment
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="BENEFITS">
        <div class="container-fluid" style="background: url('/images/service/scan_to_bim_images/benefits/background-min.png') no-repeat center center local; background-size: cover;">
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
                                            <img src="/images/service/scan_to_bim_images/benefits/development1-min.png" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="development">
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
                                            <img src="/images/service/scan_to_bim_images/benefits/organization1-min.png" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="organization">
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

    <div id="COUNTRIES">
        <div class="container-fluid" style="background: url('/images/service/scan_to_bim_images/map/background-min.png') no-repeat center center local; background-size: cover;">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            COUNTRIES WE WORKED WITH
                        </h2>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <img src="/images/service/scan_to_bim_images/map/map-min.png" loading="lazy" class="img-fluid mx-auto w-100" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PROJECTS">
        <div class="container-fluid d-none d-xxl-block">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            OUR SCAN TO BIM PROJECTS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row mt-4">
                            @foreach($works as $work)
                                <div class="col-6 mt-4">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/{{ $work->image }}" loading="lazy" class="card-img" alt="...">
                                        </div>
                                        <div class="overlay">
                                            <div class="row m-0 text-white">
                                                <div class="col-12 p-2 px-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-7">
                                                            <h4 style="font-size: 1.2vw; min-height: 1.2vw;" class="fw-bold">{{ $work->title_first }}</h4>
                                                            <h4 style="font-size: 1.2vw; min-height: 1.2vw;" class="fw-bold">{{ $work->title_second }}</h4>
                                                            <h5 style="font-size: 1vw; min-height: 1vw;" class="text-secondary fw-bold">{{ $work->subtitle }}</h5>
                                                        </div>
                                                        <div class="col-5 ps-0 mt-2">
                                                            <h5 style="font-size: 0.9vw" class="fw-bold">{{ $work->parameter_1 }}</h5>
                                                            <h5 style="font-size: 0.9vw" class="fw-bold">{{ $work->parameter_2 }}</h5>
                                                            <h5 style="font-size: 0.9vw" class="fw-bold">{{ $work->parameter_3 }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 style="font-size: 1vw; min-height: 1vw" class="fw-bold">{{ $work->disciplines }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 border-bottom border-3 border-white">
                                                    </div>

                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <img src="/images/{{ $work->image_small }}" loading="lazy" style="width: 7vw;" class="img-fluid mt-2" alt="...">
                                                        </div>
                                                        <div class="col-8 px-0 d-flex justify-content-center">
                                                            <h6 style="font-size: 0.9vw" class="mt-2 text-secondary">
                                                                {{ $work->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center p-5" style="border: 4px solid; border-color: #6ad9d8;">
                                <a id="estimate-project-screen-scantobim-xxl" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6">
                                    <span class="fw-bold h4 d-block my-2">ESTIMATE YOUR PROJECT</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-xl-block d-xxl-none">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            OUR SCAN TO BIM PROJECTS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row mt-4">
                            @foreach($works as $work)
                                <div class="col-6 mt-4">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/{{ $work->image }}" loading="lazy" class="card-img" alt="...">
                                        </div>
                                        <div class="overlay">
                                            <div class="row m-0 text-white">
                                                <div class="col-12 p-2 px-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-7">
                                                            <h4 style="font-size: 1.4vw; min-height: 1.4vw;" class="fw-bold">{{ $work->title_first }}</h4>
                                                            <h4 style="font-size: 1.4vw; min-height: 1.4vw;" class="fw-bold">{{ $work->title_second }}</h4>
                                                            <h5 style="font-size: 1.3vw; min-height: 1.3vw;" class="text-secondary fw-bold">{{ $work->subtitle }}</h5>
                                                        </div>
                                                        <div class="col-5 ps-0 mt-2">
                                                            <h5 style="font-size: 1.2vw" class="fw-bold">{{ $work->parameter_1 }}</h5>
                                                            <h5 style="font-size: 1.2vw" class="fw-bold">{{ $work->parameter_2 }}</h5>
                                                            <h5 style="font-size: 1.2vw" class="fw-bold">{{ $work->parameter_3 }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 style="font-size: 1.3vw; min-height: 1.3vw;" class="fw-bold">{{ $work->disciplines }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 border-bottom border-3 border-white">
                                                    </div>

                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <img src="/images/{{ $work->image_small }}" loading="lazy" style="width: 9.5vw;" class="img-fluid mt-2" alt="...">
                                                        </div>
                                                        <div class="col-8 px-0">
                                                            <h6 style="font-size: 1.1vw" class="mt-2 text-secondary">
                                                                {{ $work->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center p-5" style="border: 4px solid; border-color: #6ad9d8;">
                                <a id="estimate-project-screen-scantobim-xl" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6">
                                    <span class="fw-bold h4 d-block my-2">ESTIMATE YOUR PROJECT</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid d-none d-lg-block d-xl-none">
            <div class="container p-5">
                <div class="row p-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            OUR SCAN TO BIM PROJECTS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row mt-4">
                            @foreach($works as $work)
                                <div class="col-6 mt-4">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/{{ $work->image }}" loading="lazy" class="card-img" alt="...">
                                        </div>
                                        <div class="overlay">
                                            <div class="row m-0 text-white">
                                                <div class="col-12 p-2 px-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-7">
                                                            <h4 style="font-size: 1.4vw; min-height: 1.4vw;" class="fw-bold mb-1">{{ $work->title_first }}</h4>
                                                            <h4 style="font-size: 1.4vw; min-height: 1.4vw;" class="fw-bold mb-1">{{ $work->title_second }}</h4>
                                                            <h5 style="font-size: 1.3vw; min-height: 1.3vw;" class="text-secondary fw-bold mb-1">{{ $work->subtitle }}</h5>
                                                        </div>
                                                        <div class="col-5 ps-0 mt-2">
                                                            <h5 style="font-size: 1.2vw" class="fw-bold mb-1">{{ $work->parameter_1 }}</h5>
                                                            <h5 style="font-size: 1.2vw" class="fw-bold mb-1">{{ $work->parameter_2 }}</h5>
                                                            <h5 style="font-size: 1.2vw" class="fw-bold mb-1">{{ $work->parameter_3 }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 style="font-size: 1.3vw; min-height: 1.3vw;" class="fw-bold mb-1">{{ $work->disciplines }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 border-bottom border-3 border-white">
                                                    </div>

                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <img src="/images/{{ $work->image_small }}" loading="lazy" style="width: 8vw;" class="img-fluid mt-2" alt="...">
                                                        </div>
                                                        <div class="col-8 ps-0">
                                                            <h6 style="font-size: 1vw" class="mt-2 text-secondary">
                                                                {{ $work->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-center p-5" style="border: 4px solid; border-color: #6ad9d8;">
                                <a id="estimate-project-screen-scantobim-lg" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2">ESTIMATE YOUR PROJECT</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-none d-md-block d-lg-none">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12">
                        <h2 class="fw-bold h2">
                            OUR SCAN TO BIM PROJECTS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row p-0 mt-4">
                            @foreach($works as $work)
                                <div class="col-6 mt-4">
                                    <div class="portfolio-container">
                                        <div class="card border-0 text-bg-dark">
                                            <img src="/images/{{ $work->image }}" loading="lazy" class="card-img" alt="...">
                                        </div>
                                        <div class="overlay">
                                            <div class="row m-0 text-white">
                                                <div class="col-12 p-2 px-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-7">
                                                            <h4 style="font-size: 1.3vw; min-height: 1.3vw;" class="fw-bold">{{ $work->title_first }}</h4>
                                                            <h4 style="font-size: 1.3vw; min-height: 1.3vw;" class="fw-bold">{{ $work->title_second }}</h4>
                                                            <h5 style="font-size: 1.1vw; min-height: 1.1vw;" class="text-secondary fw-bold">{{ $work->subtitle }}</h5>
                                                        </div>
                                                        <div class="col-5 ps-0 mt-2">
                                                            <h5 style="font-size: 1vw; min-height: 1vw" class="fw-bold">{{ $work->parameter_1 }}</h5>
                                                            <h5 style="font-size: 1vw; min-height: 1vw" class="fw-bold">{{ $work->parameter_2 }}</h5>
                                                            <h5 style="font-size: 1vw; min-height: 1vw" class="fw-bold">{{ $work->parameter_3 }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 style="font-size: 1.1vw; min-height: 1.1vw" class="fw-bold">{{ $work->disciplines }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 border-bottom border-3 border-white">
                                                    </div>

                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <img src="/images/{{ $work->image_small }}" loading="lazy" style="width: 7vw;" class="img-fluid mt-2" alt="...">
                                                        </div>
                                                        <div class="col-8 px-0 d-flex justify-content-center">
                                                            <h6 style="font-size: 1.1vw" class="mt-2 text-secondary">
                                                                {{ $work->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row px-2 mt-4">
                            <div class="col-12 text-center p-5" style="border: 4px solid; border-color: #6ad9d8;">
                                <a id="estimate-project-screen-scantobim-md" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2">ESTIMATE YOUR PROJECT</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid d-md-none">
            <div class="container">
                <div class="row py-5">
                    <div class="col-12">
                        <h2 class="fw-bold h2">
                            OUR SCAN TO BIM PROJECTS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            @foreach($works as $work)
                                <div class="col-12 mt-4">
                                    <div class="portfolio-container">
                                        <div class="card border-0 w-100 text-bg-dark">
                                            <img src="/images/{{ $work->image }}" loading="lazy" class="img-fluid w-100" alt="...">
                                        </div>
                                        <div class="overlay">
                                            <div class="row text-white">
                                                <div class="col-12 p-2 px-4">
                                                    <div class="row justify-content-between">
                                                        <div class="col-7">
                                                            <h4 style="font-size: 3vw; min-height: 3vw;" class="fw-bold">{{ $work->title_first }}</h4>
                                                            <h4 style="font-size: 3vw; min-height: 3vw;" class="fw-bold">{{ $work->title_second }}</h4>
                                                            <h5 style="font-size: 2.8vw; min-height: 2.8vw;" class="text-secondary fw-bold">{{ $work->subtitle }}</h5>
                                                        </div>
                                                        <div class="col-5 ps-0 mt-2">
                                                            <h5 style="font-size: 2.8vw; min-height: 2.8vw" class="fw-bold">{{ $work->parameter_1 }}</h5>
                                                            <h5 style="font-size: 2.8vw; min-height: 2.8vw" class="fw-bold">{{ $work->parameter_2 }}</h5>
                                                            <h5 style="font-size: 2.8vw; min-height: 2.8vw" class="fw-bold">{{ $work->parameter_3 }}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h5 style="font-size: 2.8vw; min-height: 2.8vw" class="fw-bold">{{ $work->disciplines }}</h5>
                                                        </div>
                                                    </div>

                                                    <div class="row m-0 border-bottom border-3 border-white">
                                                    </div>

                                                    <div class="row d-flex align-items-center">
                                                        <div class="col-4 d-flex justify-content-center">
                                                            <img src="/images/{{ $work->image_small }}" loading="lazy" class="img-fluid w-100 mt-2" alt="...">
                                                        </div>
                                                        <div class="col-8 px-0 d-flex justify-content-center">
                                                            <h6 style="font-size: 2.5vw" class="mt-2 text-secondary">
                                                                {{ $work->description }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row px-2 mt-4">
                            <div class="col-12 text-center p-5" style="border: 4px solid; border-color: #6ad9d8;">
                                <a id="estimate-project-screen-scantobim" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2">ESTIMATE YOUR PROJECT</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="faq">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5 pt-lg-0">
                <div class="row p-lg-5 pt-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            FREQUENTLY ASKED QUESTIONS
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <span class="h3 fw-semibold">
                                        What is Level of detail?
                                    </span>
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                                    <span class="h3 fw-semibold">
                                        How long does it take to complete a scan to BIM project?
                                    </span>
                                </a>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card card-body h5 fw-normal border-0">
                                        The duration of a scan to BIM project depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a few weeks to several months to complete.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                            <span class="h3 fw-semibold">
                                What are the deliverables of scan to BIM service?
                            </span>
                                </a>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body h5 fw-normal border-0">
                                        The deliverables of a scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                            <span class="h3 fw-semibold">
                                What types of projects can benefit from scan to BIM service?
                            </span>
                                </a>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <span class="h3 fw-semibold">
                                        What are the benefits of scan to BIM service?
                                    </span>
                                </a>
                                <div class="collapse" id="collapseExample4">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery.
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
