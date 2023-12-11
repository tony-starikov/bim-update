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

    <div id="main">
        <div class="container-fluid" style="background: url('/images/service/mep/header/header.webp') no-repeat center center local; background-size: cover;">
            <div class="container mt-5 p-lg-5">
                <div class="row px-lg-5 mt-5 text-center">
                    <div class="col-12 mt-5 order-first">
                        <h1 class="text-white mt-4 fw-bold">
                            MEP FABRICATION SERVICE
                        </h1>
                        <div class="mt-4 row justify-content-center">
                            <div class="col-md-10 col-xl-7">
                                <p class="text-white h4 fw-semibold">
                                    Subject matter experts for your project with over four years of experience. Over 600+ projects realized. Daily reports.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row px-lg-5 pb-4 mt-5 justify-content-center">
                    <div class="col-lg-6 col-xl-5">
                        <a id="estimate-first-screen-mep" href="{{ route('estimatesMep') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                            <span class="fw-bold h5 my-2">ESTIMATE YOUR PROJECT</span>
                        </a>
                    </div>
                </div>

                <div class="row px-lg-5 pb-5 justify-content-center">
                    <div class="col-6 col-lg-3 p-5 text-center">
                        <img src="/images/service/mep/header/icons/icon1-min.png" loading="lazy" alt="icon1" class="img-fluid w-75">
                        <p class="h6 text-white small fw-semibold mt-4">
                            MODELING
                        </p>
                    </div>
                    <div class="col-6 col-lg-3 p-5 text-center">
                        <img src="/images/service/mep/header/icons/icon2-min.png" loading="lazy" alt="icon2" class="img-fluid w-75">
                        <p class="h6 text-white small fw-semibold mt-4">
                            COORDINATION
                        </p>
                    </div>
                    <div class="col-6 col-lg-3 p-5 text-center">
                        <img src="/images/service/mep/header/icons/icon3-min.png" loading="lazy" alt="icon3" class="img-fluid w-75">
                        <p class="h6 text-white small fw-semibold mt-4">
                            FABRICATION
                        </p>
                    </div>
                    <div class="col-6 col-lg-3 p-5 text-center">
                        <img src="/images/service/mep/header/icons/icon4-min.png" loading="lazy" alt="icon4" class="img-fluid w-75">
                        <p class="h6 text-white small fw-semibold mt-4">
                            SHOP DRAWINGS
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="What_disciplines">
        <div class="container-fluid">
            <div class="container pb-0 p-lg-5">
                <div class="row py-5 p-lg-5 pb-0">
                    <div class="col-12">
                        <h2 class="fw-bold m-0 text-uppercase">
                            What disciplines we work with?
                        </h2>
                    </div>

                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 px-lg-4">
                                <div class="row">
                                    <div class="col-md-6 ps-md-0 mt-4">
                                        <div class="card py-5 h-100" style="border: 4px solid #6de0de">
                                            <div class="card-body d-flex align-items-center">
                                                <p class="h5 fw-normal" style="text-align: justify;">
                                                    <span class="fw-semibold">Coordination Drawings:</span> Detailed drawings that show the precise locations and dimensions of MEP components, ensuring they fit seamlessly within the building structure.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pe-md-0 mt-4">
                                        <div class="card py-5 h-100" style="border: 4px solid #6de0de">
                                            <div class="card-body d-flex align-items-center">
                                                <p class="h5 fw-normal" style="text-align: justify;">
                                                    <span class="fw-semibold">Spool Drawings:</span> These drawings provide exact details of the individual pipes or ducts and their fittings, as well as information on their fabrication and installation.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 ps-md-0 mt-4">
                                        <div class="card py-5 h-100" style="border: 4px solid #6de0de">
                                            <div class="card-body d-flex align-items-center">
                                                <p class="h5 fw-normal" style="text-align: justify;">
                                                    <span class="fw-semibold">Fabrication Models:</span> 3D models used to visualize and coordinate the MEP systems in the context of the entire building. These models aid in detecting clashes and optimizing the layout.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pe-md-0 mt-4">
                                        <div class="card py-5 h-100" style="border: 4px solid #6de0de">
                                            <div class="card-body d-flex align-items-center">
                                                <p class="h5 fw-normal" style="text-align: justify;">
                                                    <span class="fw-semibold">Material Lists:</span> Comprehensive lists of materials required for the fabrication and installation of MEP components.
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

    <div id="PROPOSE">
        <div class="container-fluid">
            <div class="container p-lg-5 pt-lg-0 pb-0">
                <div class="row py-5 p-lg-5 pt-lg-0 pb-0">
                    <div class="col-12">
                        <h2 class="fw-bold mb-5">
                            WHAT DO WE PROPOSE?
                        </h2>
                    </div>

                    <div class="col-12 px-lg-3">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                MEP families creation
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/family-min.png" loading="lazy" alt="family" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                MEP Modeling
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/modeling-min.png" loading="lazy" alt="modeling" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                MEP Fabrication
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/fabrication-min.png" loading="lazy" alt="fabrication" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                Coordination
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/coordination-min.png" loading="lazy" alt="coordination" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                Drawings creation
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/drawings-min.png" loading="lazy" alt="drawings" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body d-flex align-items-center">
                                        <div class="col-7 d-flex align-items-center">
                                            <h3 class="h5 fw-bold m-0">
                                                Time scheduling
                                            </h3>
                                        </div>
                                        <div class="col-5 p-2">
                                            <img src="/images/service/mep/propose/scheduling-min.png" loading="lazy" alt="scheduling" class="images-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="h5 fw-bold p-5" style="text-align: justify; background-color: #eef5f5; border: 4px solid #6de0de;">
                                    Utilize the services of one skilled professional to strengthen your team or order the entire project to be completed by a group of specialists.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="HOW">
        <div class="container-fluid">
            <div class="container p-lg-5 pt-lg-0 pb-0">
                <div class="row py-5 p-lg-5 pt-lg-0 pb-0">
                    <div class="col-12">
                        <h2 class="fw-bold mb-5">
                            HOW DO WE WORK?
                        </h2>
                    </div>

                    <div class="col-12 px-3">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/1.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Analysing incoming contract drawings and submittals.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/2.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Project template adjustments.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/3.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                CAMduct creation or SysQue systems adjustment.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/4.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                MEP Fabrication.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/5.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Modeling MEP systems as per design drawings.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/6.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Prepearing all necessary families.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/7.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Coordination with other trades.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/8.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Creating Shop drawings.
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="/images/service/mep/how/9.png" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">
                                                Creating Spool drawings and worksheets.
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
    </div>

    <div id="SERVICES">

        <div class="d-none d-lg-block">
            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h2 class="fw-bold">
                                MORE ABOUT OUR SERVICES
                            </h2>
                            <h3 class="fw-semibold mt-4 mb-3">
                                Data base creation
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Every project starts with adjusting its own database. At this first stage we take into account all data provided by customers concerning materials, connections, insulation and services types of ducts and pipes to model HVAC components in the most authentic way.
                            </p>
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Families preparation
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Using submittals information we download all necessary families from official manufacturer websites or create these families ourselves if they aren’t available on the internet. This approach can guarantee 100% model conformity to clients requirements.
                            </p>
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Modeling process
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.
                            </p>
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Fabrication
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Using CAMduct or SysQue software our team are capable to implement Fabrication of MEP systems according to technical information provided by customer. HVAC and Fire Protection are our main directions in this field.
                            </p>
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Drawings creation
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                During the drawings creation process we always try to represent all required information about MEP components and optimize them to make drawings not only informative but convenient in usage.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0 pb-5">
                                <div class="col-12 px-0">
                                    <section id="slider5" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Coordination process
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                At this stage we have two main objectives: find and solve all interdisciplinary clashes which occur, optimize MEP systems routing to achieve a balance between system efficiency and its moderate cost.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0 pb-5">
                                <div class="col-12 px-0">
                                    <section id="slider6" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container p-5">
                    <div class="row p-5 pb-0">
                        <div class="col-12">
                            <h3 class="fw-semibold mb-3">
                                Spools creation
                            </h3>
                            <p class="h5 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                The final stage of our work is Spools creation. We provide to our clients spool maps and worksheets, that consist of all demanded information for duct and pipe manufacturing and installation.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0 pb-5">
                                <div class="col-12 px-0">
                                    <section id="slider7" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

        <div class="d-lg-none">
            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h2 class="fw-bold">
                                MORE ABOUT OUR SERVICES
                            </h2>
                            <h4 class="fw-semibold mt-4 mb-3">
                                Data base creation
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Every project starts with adjusting its own database. At this first stage we take into account all data provided by customers concerning materials, connections, insulation and services types of ducts and pipes to model HVAC components in the most authentic way.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider8" class="splide" aria-label="Slide Container Example">
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Families preparation
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Using submittals information we download all necessary families from official manufacturer websites or create these families ourselves if they aren’t available on the internet. This approach can guarantee 100% model conformity to clients requirements.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider9" class="splide" aria-label="Slide Container Example">
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Modeling process
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider10" class="splide" aria-label="Slide Container Example">
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Fabrication
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                Using CAMduct or SysQue software our team are capable to implement Fabrication of MEP systems according to technical information provided by customer. HVAC and Fire Protection are our main directions in this field.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider11" class="splide" aria-label="Slide Container Example">
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Drawings creation
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                During the drawings creation process we always try to represent all required information about MEP components and optimize them to make drawings not only informative but convenient in usage.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider12" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/drawing/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

            <div class="container-fluid" style="background-image: linear-gradient(to left, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background2.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Coordination process
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                At this stage we have two main objectives: find and solve all interdisciplinary clashes which occur, optimize MEP systems routing to achieve a balance between system efficiency and its moderate cost.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider13" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/coordination/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

            <div class="container-fluid" style="background-image: linear-gradient(to right, rgba(152,236,230, 0.6), rgba(226,232,232, 0.6)), url('/images/service/mep/services/background1.webp'); background-size: cover;">
                <div class="container py-5">
                    <div class="row pb-0">
                        <div class="col-12">
                            <h4 class="fw-semibold mb-3">
                                Spools creation
                            </h4>
                            <p class="h6 fw-normal mt-2 p-5" style="text-align: justify; background-color: #eef5f5;">
                                The final stage of our work is Spools creation. We provide to our clients spool maps and worksheets, that consist of all demanded information for duct and pipe manufacturing and installation.
                            </p>
                        </div>

                        <div class="col-12 mt-4 px-0">
                            <div class="row w-100 mx-0 px-0">
                                <div class="col-12 px-0">
                                    <section id="slider14" class="splide" aria-label="Slide Container Example">
                                        <div class="splide__track">
                                            <ul class="splide__list">

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img1.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img2.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img3.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
                                                    </div>
                                                </li>

                                                <li class="splide__slide">
                                                    <div class="splide__slide__container px-3">
                                                        <img src="/images/service/mep/services/spools/img4.webp" loading="lazy" alt="arrow" class="images-fluid w-100">
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

    <div id="WHAT">
        <div class="container-fluid">
            <div class="container p-lg-5">
                <div class="row py-5 p-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold m-0">
                            WHAT IS THE MEP FABRICATION SERVICE?
                        </h2>
                    </div>

                    <div class="col-12">
                        <p class="h5 fw-normal mt-5" style="text-align: justify;">
                            MEP fabrication is the process of creating detailed shop drawings and models for mechanical, electrical, and plumbing systems in construction. It ensures precise installation and coordination of MEP components, improving efficiency and quality.
                        </p>
                        <p class="h5 fw-normal mt-4" style="text-align: justify;">
                            During MEP fabrication, the design and engineering data from the building's MEP design are translated into highly accurate fabrication-level models and drawings. These models and drawings contain specific details, dimensions, and installation information needed for manufacturing the components and installing the MEP systems on-site.
                        </p>
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

    <div id="DOWNLOAD">
        <div class="container-fluid">
            <div class="container pb-0 p-lg-5">
                <div class="row py-5 p-lg-5 justify-content-center">
                    <div class="col-lg-9 col-xl-6 text-center">
                        <a href="{{ route('downloadService', 'mep-coordination') }}" target="_blank" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb">
                            <p class="fw-bold h4 d-block my-2">
                                DOWNLOAD PRESENTATION
                            </p>
                        </a>
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
        }, ).mount();

        new Splide( '#slider2', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider3', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider4', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider5', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider6', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider7', {
            type   : 'loop',
            perPage: 2,
            arrows: boolean = true,
        }, ).mount();




        new Splide( '#slider8', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider9', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider10', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider11', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider12', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider13', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();

        new Splide( '#slider14', {
            type   : 'loop',
            perPage: 1,
            arrows: boolean = true,
        }, ).mount();
    </script>
@endsection

@section('canonical')
    @if($service->canonical)
        <link rel="canonical" href="{{ $service->canonical }}">
    @endif
@endsection
