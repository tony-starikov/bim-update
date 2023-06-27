@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid d-none d-xxl-block" style="background: url('/images/service/scan_to_bim_images/background2.png') no-repeat center center local; background-size: cover;">
        <div class="container mt-5 p-5">
            <div class="row px-5 mt-5 text-center">
                <div class="col-12 mt-5 order-first">
                    <h1 class="d-none">Bimprove</h1>
                    <h2 class="fw-bold mt-4 display-5">
                        THE INDIVIDUAL<br>FIVE-STAR
                    </h2>
                    <h2 class="text-white fw-bold display-3">
                        SCAN TO BIM SERVICE
                    </h2>
                </div>
            </div>

            <div class="row px-5 pb-4 mt-5 text-center">
                <div class="col-12">
                    <a href="{{ route('contact') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-50" style="background-color: #43aeb6">
                        <span class="fw-bold h4 d-block my-2">ESTIMATE YOUR PROJECT</span>
                    </a>
                </div>
            </div>

            <div class="row px-5 pb-5">
                <div class="col-3 p-5 text-center">
                    <img src="/images/service/scan_to_bim_images/icons/icon1.png" alt="icon1" class="img-fluid w-75">
                    <h6 class="text-white fw-semibold mt-4">
                        DIGITAL TWINS
                    </h6>
                </div>
                <div class="col-3 p-5 text-center">
                    <img src="/images/service/scan_to_bim_images/icons/icon2.png" alt="icon2" class="img-fluid w-75">
                    <h6 class="text-white fw-semibold mt-4">
                        REALITY CAPTURE
                    </h6>
                </div>
                <div class="col-3 p-5 text-center">
                    <img src="/images/service/scan_to_bim_images/icons/icon3.png" alt="icon3" class="img-fluid w-75">
                    <h6 class="text-white fw-semibold mt-4">
                        FACILITY MANAGEMENT
                    </h6>
                </div>
                <div class="col-3 p-5 text-center">
                    <img src="/images/service/scan_to_bim_images/icons/icon4.png" alt="icon4" class="img-fluid w-75">
                    <h6 class="text-white fw-semibold mt-4">
                        AS-BUILT
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        WHAT DO WE PROPOSE?
                    </h2>
                </div>
                <div class="row mt-4">
                    @for($i = 1; $i < 7; $i++)
                        <div class="col-4 p-4 pb-0">
                            <div class="row p-2" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h5 class="fw-bold mt-4">
                                        As-built model
                                    </h5>
                                </div>
                                <div class="col-5">
                                    <img src="/images/service/scan_to_bim_images/proposes/service{{$i}}.png" alt="service{{$i}}" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <h5 class="text-secondary">
                                        <small>
                                            Creation of the executive 3D model "As-built" by the Point Cloud. Adding Facilities Management Information to BIM Model Elements.
                                        </small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        WHAT IS THE SCAN TO BIM SERVICE?
                    </h2>
                </div>
                <div class="row mt-4 pt-3">

                    <div class="col-6">
                        <h5 class="text-secondary" style="text-align: justify;">
                            Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps in creating a comprehensive and detailed model of the building, which can be used for renovation, restoration, or retrofitting purposes. The Scan to BIM service is essential in creating a collaborative environment for developing and executing efficiently the construction projects.
                        </h5>
                    </div>
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="fw-semibold pb-2">
                                    What disciplines we work with?
                                </h2>
                            </div>

                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Mechanical
                                </h4>
                            </div>
                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Electrical
                                </h4>
                            </div>

                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Plumbing
                                </h4>
                            </div>
                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Fire Protection
                                </h4>
                            </div>

                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Structural
                                </h4>
                            </div>
                            <div class="col-6 p-2 pt-0">
                                <h4 class="fw-semibold border border-3 border-dark rounded-4 p-2 py-3 text-center">
                                    Architectural
                                </h4>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 pt-5">
                        <h5 class="text-secondary">
                            The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings, greater accuracy, and reduced risk of errors. It helps in minimizing on-site work and disruptions, reduces the chances of rework, and allows for better visualization and analysis of the building's structure. Additionally, the Scan to BIM service enables stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        WHAT WE MAKE BY THE POINT CLOUD?
                    </h2>
                </div>
                <div class="row mt-4 pt-3 d-flex align-items-center">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/cloud/arrow.png" alt="arrow" class="images-fluid w-50">
                    </div>
                    <div class="col-11">
                        <h4 class="fw-bold">
                            Residential Buildings
                        </h4>
                    </div>
                </div>
                <div class="row mt-4 pt-3 d-flex align-items-center">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/cloud/arrow.png" alt="arrow" class="images-fluid w-50">
                    </div>
                    <div class="col-11">
                        <h4 class="fw-bold">
                            Residential Buildings
                        </h4>
                    </div>
                </div>
                <div class="row mt-4 pt-3 d-flex align-items-center">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/cloud/arrow.png" alt="arrow" class="images-fluid w-50">
                    </div>
                    <div class="col-11">
                        <h4 class="fw-bold">
                            Residential Buildings
                        </h4>
                    </div>
                </div>
                <div class="row mt-4 pt-3 d-flex align-items-center">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/cloud/arrow.png" alt="arrow" class="images-fluid w-50">
                    </div>
                    <div class="col-11">
                        <h4 class="fw-bold">
                            Residential Buildings
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        WHAT WILL YOU GET WORKING WITH US?
                    </h2>
                </div>
                <div class="row mt-4 pt-3">
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Adherence to deadlines.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Adherence to deadlines
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Certified team.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Certified team
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Communication.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Communication
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/HIGH QUALITY.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    HIGH QUALITY
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Model development.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Model development
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Project adjustmnent.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Project adjustmnent
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Tasks soving.png" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h4 class="fw-semibold text-uppercase">
                                    Tasks solving
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="/images/service/scan_to_bim_images/get/Work process organization.png" alt="arrow" class="images-fluid w-100">
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

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        HOW DO WE WORK?
                    </h2>
                </div>

                <div class="row p-0 mx-3 mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0">
                        <img src="/images/service/scan_to_bim_images/how/number.png" alt="arrow" class="images-fluid w-75">
                    </div>
                    <div class="col-11">
                        <h5 class="fw-bold text-uppercase">
                            CONSULTATION
                        </h5>
                        <h6 class="text-secondary">
                            Receiving the task by email, google-form, or during the meeting.
                        </h6>
                    </div>
                </div>

                <div class="row p-0 mx-3 mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0">
                        <img src="/images/service/scan_to_bim_images/how/number.png" alt="arrow" class="images-fluid w-75">
                    </div>
                    <div class="col-11">
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

                <div class="row p-0 mx-3 mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0">
                        <img src="/images/service/scan_to_bim_images/how/number.png" alt="arrow" class="images-fluid w-75">
                    </div>
                    <div class="col-11">
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

                <div class="row p-0 mx-3 mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0">
                        <img src="/images/service/scan_to_bim_images/how/number.png" alt="arrow" class="images-fluid w-75">
                    </div>
                    <div class="col-11">
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

    <div class="container-fluid d-none d-xxl-block" style="background: url('/images/service/scan_to_bim_images/benefits/background.png') no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        OUR BENEFITS
                    </h2>
                </div>

                <div class="row p-0 mx-2 mt-4">

                    <div class="col-4 p-4 d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/images/service/scan_to_bim_images/benefits/reviewing.png" class="img-fluid w-25 mb-5" alt="reviewing">
                            </div>
                            <div class="col-12 p-3" style="background-color: #edf4f4">
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
                        </div>
                    </div>

                    <div class="col-4 p-4 d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/images/service/scan_to_bim_images/benefits/development.png" class="img-fluid w-25 mb-5" alt="reviewing">
                            </div>
                            <div class="col-12 p-3" style="background-color: #edf4f4">
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
                        </div>
                    </div>

                    <div class="col-4 p-4 d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="/images/service/scan_to_bim_images/benefits/organization.png" class="img-fluid w-25 mb-5" alt="reviewing">
                            </div>
                            <div class="col-12 p-3" style="background-color: #edf4f4">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block" style="background: url('/images/service/scan_to_bim_images/map/background.png') no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        COUNTRIES WE WORKED WITH
                    </h2>
                </div>

                <div class="row p-0 mt-4">
                    <div class="col-12 text-center">
                        <img src="/images/service/scan_to_bim_images/map/map.png" class="img-fluid w-100" alt="map">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        OUR SCAN TO BIM PROJECTS
                    </h2>
                </div>

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/25GA.png" class="img-fluid w-100" alt="25GA">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/Azovstal.png" class="img-fluid w-100" alt="Azovstal">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/Bridge.png" class="img-fluid w-100" alt="Bridge">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/Factory.png" class="img-fluid w-100" alt="Factory">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/House.png" class="img-fluid w-100" alt="House">
                    </div>
                    <div class="col-6 mt-4">
                        <img src="/images/service/scan_to_bim_images/projects/Hypermarket.png" class="img-fluid w-100" alt="Hypermarket">
                    </div>
                </div>

                <div class="row p-0 mx-3 mt-4" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-12 text-center p-5">
                        <a href="{{ route('contact') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-25" style="background-color: #43aeb6">
                            <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12">
                    <h2 class="fw-bold display-5">
                        FREQUENTLY ASKED QUESTIONS
                    </h2>
                </div>

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/faq/arrow.png" alt="">
                    </div>
                    <div class="col-11">
                        <a class="btn border-0 shadow-none" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="h2 fw-semibold">
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

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/faq/arrow.png" alt="">
                    </div>
                    <div class="col-11">
                        <a class="btn border-0 shadow-none" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="h2 fw-semibold">
                                How long does it take to complete a scan to BIM project?
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample1">
                            <div class="card card-body h5 fw-normal border-0">
                                Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/faq/arrow.png" alt="">
                    </div>
                    <div class="col-11">
                        <a class="btn border-0 shadow-none" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="h2 fw-semibold">
                                What are the deliverables of scan to BIM service?
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample2">
                            <div class="card card-body h5 fw-normal border-0">
                                Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/faq/arrow.png" alt="">
                    </div>
                    <div class="col-11">
                        <a class="btn border-0 shadow-none" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="h2 fw-semibold">
                                What types of projects can benefit from scan to BIM service?
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample3">
                            <div class="card card-body h5 fw-normal border-0">
                                Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row p-0 mx-2 mt-4">
                    <div class="col-1">
                        <img src="/images/service/scan_to_bim_images/faq/arrow.png" alt="">
                    </div>
                    <div class="col-11">
                        <a class="btn border-0 shadow-none" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="h2 fw-semibold">
                                What are the benefits of scan to BIM service?
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample4">
                            <div class="card card-body h5 fw-normal border-0">
                                Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pt-0">
            <div class="row p-5 pt-0">
                <div class="col-12 text-center">
                    <a href="{{ route('downloadService', 'scan-to-bim') }}" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-50" style="background-color: #6bdcdb">
                        <span class="fw-bold h4 d-block my-2">
                            DOWNLOAD PRESENTATION
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid d-none d-xxl-block" style="background: url(/images/main_page/calendar_bg.png) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-6">
                    <h2 class="text-white fw-bold display-5 w-100">
                        {{ $page_info->pageItems->where('name', 'calendar_header')->first()->value }}
                    </h2>
                    <h2 class="text-white h1 fw-semibold mt-4">
                        <small>
                            {{ $page_info->pageItems->where('name', 'calendar_subheader')->first()->value }}
                        </small>
                    </h2>
                    <button class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-50 mt-4" style="background-color: #6bdcdb" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <span class="fw-bold h4 d-block my-2">GO TO CALENDAR</span>
                    </button>
                </div>
                <div class="col-6 d-flex align-items-center">
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
