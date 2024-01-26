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
    "@context": "http://schema.org",
    "@type": "LocalBusiness",
    "description": "Our Scan to BIM Services offer precise parametric As-built BIM Models and 2D CAD Models showcasing details like pipes, walls, slabs, roof plans, facades, and landscapes within and around the building.",
    "name": "BIMprove | Scan to BIM Service",
    "image": "https://bim-prove.com/images/bim_prove.png",
    "url": "https://bim-prove.com/",
    "@id": "https://bim-prove.com/",
    "telephone": "+380668901648",
    "email": "info@bim-prove.com",
    "sameAs" : [ "https://www.scantobimservices.com/",
    "https://origin-team.com/services/building-information-modeling-bim/"]
    }
</script>
@endsection

@section('main')

    <div id="main">
        <div class="container-fluid" style="background: url('/images/service/scan_to_bim_images/scan-to-bim-background-new.webp') no-repeat center center local; background-size: cover; min-height: 100vh;">
            <div class="container mt-5 pb-0 px-0 p-lg-5">
                <div class="row px-5 mt-5 text-center">
                    <div class="col-12 mt-5">
                        <h1 class="text-white mt-4 fw-bold">
                            SCAN TO BIM<br>
                            BIM MODELING SERVICES
                        </h1>
                        <div class="mt-4 row justify-content-center">
                            <div class="col-md-10 col-xl-7">
                                <h2 class="text-white h4 fw-semibold">
                                    Guarantee of models quality. Daily reports.<br>
                                    3D modeling by Point Cloud specialists with over 7 years of experience in all disciplines.
                                </h2>
                            </div>
                        </div>
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
                        <img src="/images/service/scan_to_bim_images/icons/icon1-new.webp" loading="lazy" alt="icon1" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">
                            Point cloud registration
                        </h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon2-min.webp" loading="lazy" alt="icon2" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">
                            REALITY CAPTURE
                        </h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon3-min.webp" loading="lazy" alt="icon3" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">
                            FACILITY MANAGEMENT
                        </h3>
                    </div>
                    <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                        <img src="/images/service/scan_to_bim_images/icons/icon4-min.webp" loading="lazy" alt="icon4" class="img-fluid">
                        <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">
                            AS-BUILT SERVICES
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="GET">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5 pb-lg-0">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Scan To Bim Service</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row p-lg-5 pt-0">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">
                            What advantages you will get
                        </h2>
                        <p class="h5 fw-normal mt-5">
                            Our <b class="fw-bold">Scan to BIM Services</b> offer precise parametric <b class="fw-bold">As-built BIM Models</b> and 2D CAD Models showcasing details like pipes, walls, slabs, roof plans, facades, and landscapes within and around the building.
                        </p>
                        <p class="h5 fw-normal mt-5">
                            Our <b class="fw-bold">Point Cloud</b> to <b class="fw-bold">BIM Modeling Services</b> deliver models ranging from LOD 100 to 350, encompassing Architectural, Structural, Site, MEPFP Elements. We also include Clash Detection for projects involving Renovation, Refurbishment, Retrofit, or Reconstruction.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row mt-4 pt-3">
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Model development-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            3D Content Creation
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/HIGH QUALITY-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            HIGH QUALITY
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Adherence to deadlines-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            ADHERENCE TO DEADLINES
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Tasks soving-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            Tasks solving
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Project adjustmnent-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            Project adjustmnent
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Communication-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            Communication
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Certified team-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            Certified team
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="/images/service/scan_to_bim_images/get/Work process organization-min.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">
                                            Work process organization
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

    <div id="DOWNLOAD">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5 pb-0 pb-lg-0">
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

    <div id="PROPOSE">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5 py-lg-3">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">
                            More about our Scan to BIM Services
                        </h2>
                        <p class="h5 fw-normal mt-5">
                            Our <b class="fw-bold">Scan to BIM Services</b> (also known as Point Cloud <b class="fw-bold">BIM Modeling services</b>) are suitable for Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row mt-lg-4">
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            BIM modeling
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service1-min.png" loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                Creation of 3D Revit BIM-model by tracing the data from the Point Cloud. Parameterization of BIM elements.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            As-built drawings
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service2-min.png" loading="lazy" alt="service2" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                Design of As-built drawings based on 3D BIM models from Revit created by the scanning.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            QA\QC
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service6-min.png" loading="lazy" alt="service6" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                Checking of 3D BIM model accuracy, building and engineering logic, elements clashing.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            Progress Reports
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service5-min.png" loading="lazy" alt="service5" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                Creation of every day project reports. Own reporting system to inform about the progress of the modeling process.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            Export to other formats
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service4-min.png" loading="lazy" alt="service4" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                Export the Revit model in the format you need: IFC, NWC, NWF, DWG, PDF, DGN, FBX, STEP, SKP
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-4 pb-0">
                                <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-7">
                                        <h3 class="h5 fw-bold mt-4">
                                            Our Software skills
                                        </h3>
                                    </div>
                                    <div class="col-5">
                                        <img src="/images/service/scan_to_bim_images/proposes/service3-min.png" loading="lazy" alt="service3" class="img-fluid w-100">
                                    </div>
                                    <div class="col-12 pt-3">
                                        <p class="h5 text-secondary">
                                            <small>
                                                The main program for creating 3D BIM models is Revit. But our team is also proficient in other programs: AutoCAD, ArchiCAD, SketchUp, Navisworks.
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="POINT">
        <div class="container-fluid">
            <div class="container pb-5 p-lg-5 py-lg-0">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">
                            WE HAVE EXPERIENCE AND EXPERTISE IN THE FIELDS:
                        </h2>
                        <p class="h5 fw-normal pb-3 mt-5">
                            Our top priorities: <b class="fw-bold">quality, accuracy and logic</b>. Our experience includes developing parametric 3D BIM and 2D CAD models. We work with all disciplines: Architectural, Structural, Mechanical, Electrical, Plumbing, Fire Protection, Site.
                        </p>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Residential Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Educational Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Institutional Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Historical Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Business Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Mercantile Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Industrial Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Storages
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Parkings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Special Buildings
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Bridges
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Roads
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Transmission towers
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Monuments
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <div class="row mt-4 pt-3">
                                    <div class="col-2">
                                        <img src="/images/service/scan_to_bim_images/cloud/arrow-min.png" loading="lazy" alt="arrow" class="images-fluid w-50">
                                    </div>
                                    <div class="col-10">
                                        <h3 class="h4 fw-bold">
                                            Site
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

    <div id="HOW">
        <div class="container-fluid">
            <div class="container pb-5 pt-0 p-lg-5 pt-lg-0">
                <div class="row p-lg-5 pt-0">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            HOW DO WE WORK?
                        </h2>
                        <p class="h5 fw-normal pb-3 mt-5">
                            Our <b class="fw-bold">Scan to BIM Modeling</b> team is skilled in producing accurate 3D BIM models or 2D drawings for purposes such as design validation, planning, comparison, interference checks, MEP or construction elements demolition or addition, documentation of existing building conditions.
                        </p>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/1.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                CONSULTATION
                            </h3>
                            <p class="h6 text-secondary">
                                Receiving the task by email, project our <a href="{{ route('estimates') }}" class="text-secondary">estimation form</a>, or during the meeting.
                            </p>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/2.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                PROJECT ESTIMATION
                            </h3>
                            <p class="h6 text-secondary">
                                Estimation of the project and creation of an offer within 24 hours. We can create 3D model only by the Point Cloud or add information from the drawings. We use your company template or ours. If you need, we can create Revit template according to your needs and requirements.
                            </p>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/3.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                ESTIMATION APPROVAL
                            </h3>
                            <p class="h6 text-secondary">
                                Discussion of estimation with the client & commercial offer approval.
                            </p>
                            <p class="h6 text-secondary">
                                We create 3D models in LOD 100 - 350 and using Autodesk Revit versions 2019/2020/2021/2022/2023/2024.
                            </p>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/4.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                PROJECT SETUP
                            </h3>
                            <div class="row">
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - The creation of chats and dashboard
                                    </p>
                                    <p class="h6 text-secondary">
                                        - Deadline setting
                                    </p>
                                    <p class="h6 text-secondary">
                                        - Team meeting
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - Sorting and processing incoming information
                                    </p>
                                    <p class="h6 text-secondary">
                                        - Setting up the template for work
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/5.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                WORKFLOW
                            </h3>
                            <div class="row">
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - BIM and 3D modeling
                                    </p>
                                    <p class="h6 text-secondary">
                                        - preparation of drawings and schedules
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - step-by-step project review
                                    </p>
                                    <p class="h6 text-secondary">
                                        - daily/weekly reports or meetings with the client
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                            <img src="/images/service/digits/6.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                        </div>
                        <div class="col-11 py-2">
                            <h3 class="h5 fw-bold text-uppercase">
                                MODEL PUBLISHING
                            </h3>
                            <div class="row">
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - QA\QC in Revit or Navisworks
                                    </p>
                                    <p class="h6 text-secondary">
                                        - Adding missing elements and corrections after QA\QC
                                    </p>
                                    <p class="h6 text-secondary">
                                        - Purging unused elements, deleting working views
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p class="h6 text-secondary">
                                        - delivering model to the client
                                    </p>
                                    <p class="h6 text-secondary">
                                        - getting feedback and approval from the client
                                    </p>
                                    <p class="h6 text-secondary">
                                        - receiving payment
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="PROJECTS" class="container-fluid">
        <div class="container py-5 p-lg-5 pt-lg-0">
            <div class="row p-lg-5 pt-lg-0">
                <div class="col-12">
                    <h2 class="fw-bold">
                        OUR SCAN TO BIM PROJECTS
                    </h2>
                </div>

                <div class="col-12">
                    <div class="row mt-4">
                        @foreach($works as $work)
                            <div class="col-md-6 mt-4">
                                <div class="portfolio-container">
                                    <div class="card border-0 text-bg-dark">
                                        <img src="/images/{{ $work->image }}" loading="lazy" class="card-img" alt="...">
                                    </div>
                                    <div class="overlay">
                                        <div class="row m-0 text-white">
                                            <div class="col-12 p-0 text-center">
                                                <img src="/images/{{ $work->image_overlay }}" class="img-fluid w-100" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12 px-4">
                    <div class="row mt-4 px-4 py-5 p-lg-5 justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="col-lg-6 text-center">
                            <a id="estimate-project-screen-scantobim-xxl" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                                <p class="fw-bold h5 my-2">ESTIMATE YOUR PROJECT</p>
                            </a>
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

    <div id="SERVICE">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold">
                            WHAT IS THE SCAN TO BIM SERVICE?
                        </h2>
                    </div>
                    <div class="col-12">
                        <div class="row mt-lg-4 pt-2 pt-lg-3">

                            <div class="col-12" style="text-align: justify;">
                                <p class="h5 text-secondary">
                                    Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps create a comprehensive and detailed building model, which can be used for renovation, restoration, or retrofitting purposes. The BIM modeling service is essential in creating a collaborative environment for developing and executing efficient construction projects.
                                </p>
                                <p class="h5 text-secondary mt-5">
                                    The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings of 28%, greater accuracy, and reduced risk of errors by 40%. It helps minimize on-site work and disruptions reduces the chances of rework, and allows for better visualization and analysis of the building's structure. Additionally, the 3D BIM models enable stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="COUNTRIES" class="container-fluid" style="background-color: #f1faf9;">
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

    <div id="faq">
        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
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
                                        What are the benefits of scan to BIM service?
                                    </span>
                                </a>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery.
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
                                        What is Level of detail (LOD)?
                                    </span>
                                </a>
                                <div class="collapse" id="collapseExample1">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document. We create BIM models by the Point Cloud in LODs: 100, 200, 300, 350.
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
                                    <p class="h3 fw-semibold">
                                        How long does it take to complete a project?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample2">
                                    <div class="card card-body h5 fw-normal border-0">
                                        The duration of a Scan to BIM modeling depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a from few days to 1-2 months.
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
                                    <p class="h3 fw-semibold">
                                        What results will you get by using our service?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample3">
                                    <div class="card card-body h5 fw-normal border-0">
                                        The deliverables of a Scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D BIM models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects.
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
                                    <p class="h3 fw-semibold">
                                        What types of projects can 3D modeling be helpful for?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample4">
                                    <div class="card card-body h5 fw-normal border-0">
                                        Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <p class="h3 fw-semibold">
                                        Who will benefit from our Point Cloud BIM modeling services?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample5">
                                    <div class="card card-body h5 fw-normal border-0">
                                        With 7 years of BIM modeling experience, our team has extensive knowledge with a variety of clients. BIM modeling services (also known as Scan to BIM) are suitable for company types such as Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <p class="h3 fw-semibold">
                                        Why Choose Our Scan to BIM Services?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample6">
                                    <div class="card card-body h5 fw-normal border-0">
                                        BIMprove employs Point Cloud specialists, BIM modelers and CAD drafters who can accurately process Point Cloud data, then create a 3D BIM models with the required LOD, and create 2D drawings with dimensions, annotations and overlay layers if required. We guarantee on-time delivery: Accurate point cloud reproduction / 3D BIM models with the required LOD level from 100 to 350 / 2D drawings with required data.
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-2 col-md-1 align-self-stretch">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <img src="/images/service/scan_to_bim_images/faq/arrow.png" loading="lazy" alt="arrow">
                                </a>
                            </div>
                            <div class="col-10 col-md-11 pt-2">
                                <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample4">
                                    <p class="h3 fw-semibold">
                                        What is As-built?
                                    </p>
                                </a>
                                <div class="collapse" id="collapseExample7">
                                    <div class="card card-body h5 fw-normal border-0">
                                        An As-built drawing is a drawing that we, as a digital construction contractor, create after the successful completion of a project based on BIM models. Construction workers typically compare the construction drawing to the original drawings and specifications created at the beginning of the project. These are required documents on every construction project.
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
