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
        <div class="container-fluid pt-5" style="background: url('/images/background_page_plugin.png') no-repeat center center local; background-size: cover; min-height: 75vh;">
            <div class="container mt-5 pb-0 px-0 p-lg-5">
                <div class="row px-5 mt-xl-5 align-items-center">
                    <div class="col-12 mt-5">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-1 p-0">
                                <img src="/images/add-in.png" loading="lazy" alt="icon1" class="img-fluid">
                            </div>
                            <div class="col-11 col-sm-10 col-md-8 col-lg-7 col-xl-6 col-xxl-5">
                                <h1 class="text-white m-0 text-uppercase fw-bold">BIMPROVE ADD-IN</h1>
                            </div>
                        </div>
                        <div class="mt-4 row justify-content-center">
                            <div class="col-12">
                                <h3 class="text-white text-center px-lg-5 px-xl-2 px-xxl-5 text-uppercase h4 fw-semibold">Effective tool for Autodesk Revit</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row px-5 mt-5 justify-content-center">
                            <div class="col-lg-6 col-xl-5">
                                <a target="_blank" href="https://apps.autodesk.com/RVT/en/Detail/Index?id=7674884213406283426&appLang=en&os=Win64" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6;">
                                    <span class="fw-bold h5 my-2 text-uppercase">DOWNLOAD</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="breadcrumb" class="container-fluid" style="background-color: #ecebeb">
            <div class="container pt-3 p-lg-5 pb-lg-0">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BIMPROVE ADD-IN</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background-color: #ecebeb">
            <div class="container py-5 p-lg-5 py-lg-0">
                <div class="row justify-content-center align-items-center p-lg-5">
                    <div class="col-md-6">
                        <img src='/images/knopka3.png' loading="lazy" alt="icon1" class="w-100 img-fluid mb-5 mb-xl-0">
                    </div>
                    <div class="col-md-6">
                        <h2 class="fw-bold text-uppercase">BIMPROVE ADD-IN</h2>
                        <div class="h5 fw-normal">
                            <p>
                                The BIMPROVE team is always striving to optimize workflow and reach new heights of efficiency. When the development department was created in the company, it was immediately decided to create a plug-in for the convenience and maximum efficiency of work in Revit.
                            </p>
                            <p>
                                BIMPROVE Add-in has been tested on many commercial projects and has earned its place in the list of mandatory plug-ins for working in Revit.
                            </p>
                            <p>
                                Since 2023, when the plugin was optimized and new tools were added, we decided to share it with the world. It's completely free and you can download it from the official Autodesk App Store.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container py-5 p-lg-5 py-lg-0">
                <div class="row justify-content-center align-items-center p-lg-5">
                    <div class="col-12">
                        <a href="https://www.youtube.com/watch?v=HZ6AunDGONU" target="_blank">
                            <img src='/images/video_blog.png' loading="lazy" alt="icon1" class="w-100 bg-secondary img-fluid">
                        </a>
                    </div>
                    <div class="col-12">
                        <div class="row px-5 justify-content-between">
                            <div class="col-lg-6 col-xl-5 mt-4">
                                <a target="_blank" href="https://apps.autodesk.com/RVT/en/Detail/Index?id=7674884213406283426&appLang=en&os=Win64" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6;">
                                    <span class="fw-bold h5 my-2 text-uppercase">DOWNLOAD</span>
                                </a>
                            </div>
                            <div class="col-lg-6 col-xl-5 mt-4">
                                <a target="_blank" href="https://bim-prove.notion.site/BIMPROVE-Add-In-226fe7f5dd364f578950957345f03986" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6;">
                                    <span class="fw-bold h5 my-2 text-uppercase">DOCUMENTATION</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="TOOLS" class="container-fluid">
            <div class="container py-5 p-lg-5 py-lg-0">
                <div class="row p-lg-5 pb-lg-4">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase mb-5">Tools included</h2>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Geometry Converter</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool allows converting any Revit geometry to a regular editable Autodesk Revit family.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Ribbon Manager</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool copy selected buttons in the Ribbon onto a single tab making it easy to access the tools you use most often.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Bind Leader</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool can help you create a leader arrow between a selected text note and a selected point in the most convenient way.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Set Point cloud “Normal”</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                With this tool you are able to switch the visibility of all Point Clouds visible in the active view to Normals Color Mode with one click.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Hide DWG</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool is focused on toggling the visibility of all .dwg links visible in the active view of your Revit project.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Wipe View Templates</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool allows you to easily delete all view templates from the current document with just a few clicks, saving valuable time and effort.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold text-uppercase">Tab Visibility</h3>
                                        <p class="h5 text-secondary">
                                            <small>
                                                This tool is created to hide/show the Revit® ribbon tabs visibility.
                                            </small>
                                        </p>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src='/images/tool.png' loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">Custom Software Development</h2>
                    </div>
                    <div class="col-12 mt-lg-4 pt-2 pt-lg-3">
                        <div class="h5 fw-normal">
                            <p>
                                If you feel you need additional optimization of your workflow, we can help you with your ideas. Email us and we will contact you for more details.
                            </p>
                            &nbsp;
                            <p>
                                Improve the quality of your Revit projects with the help of our development team. Read about our services on the Software Development services page.
                            </p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row px-5 mt-5 justify-content-center">
                            <div class="col-lg-6 col-xl-5">
                                <a href="{{ route('showService', 'software-development') }}" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6;">
                                    <span class="fw-bold h5 my-2 text-uppercase">services page</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="container py-5 p-lg-5">
                <div class="row px-lg-5 pt-lg-0">
                    <div class="col-12">
                        <h2 class="fw-bold text-uppercase">OUR plugins and scripts for Revit</h2>
                    </div>

                    <div class="col-12">
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="card shadow-sm rounded-4 h-100 px-2" style="border: 4px solid #6bdcdb;">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-center">
                                            <div class="col-11 py-2">
                                                <img class="img-fluid w-100 rounded" src="/images/{{ \App\Models\Family::where('title_en', 'Furniture Audience Seatings')->first()->image }}" alt="Furniture Audience Seatings">
                                            </div>
                                        </div>
                                        <div class="row" style="min-height: 50px;">
                                            <div class="col-12">
                                                <h6 class="h5 fw-semibold">
                                                    Furniture Audience Seatings
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="h5 fw-bold">
                                                    <span class="badge bg-success">Free</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-12">
                                                <a href="{{ route('downloadFamily', \App\Models\Family::where('title_en', 'Furniture Audience Seatings')->first()->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h6 d-block my-1">DOWNLOAD</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="card shadow-sm rounded-4 h-100 px-2" style="border: 4px solid #6bdcdb;">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-center">
                                            <div class="col-11 py-2">
                                                <img class="img-fluid w-100 rounded" src="/images/{{ \App\Models\Family::where('title_en', 'Furniture Meeting Room')->first()->image }}" alt="Furniture Meeting Room">
                                            </div>
                                        </div>
                                        <div class="row" style="min-height: 50px;">
                                            <div class="col-12">
                                                <h6 class="h5 fw-semibold">
                                                    Furniture Meeting Room
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="h5 fw-bold">
                                                    <span class="badge bg-success">Free</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-12">
                                                <a href="{{ route('downloadFamily', \App\Models\Family::where('title_en', 'Furniture Meeting Room')->first()->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h6 d-block my-1">DOWNLOAD</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="card shadow-sm rounded-4 h-100 px-2" style="border: 4px solid #6bdcdb;">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-center">
                                            <div class="col-11 py-2">
                                                <img class="img-fluid w-100 rounded" src="/images/{{ \App\Models\Family::where('title_en', 'Doors Sliding Outswing')->first()->image }}" alt="Doors Sliding Outswing">
                                            </div>
                                        </div>
                                        <div class="row" style="min-height: 50px;">
                                            <div class="col-12">
                                                <h6 class="h5 fw-semibold">
                                                    Doors Sliding Outswing
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="h5 fw-bold">
                                                    <span class="badge bg-success">Free</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-12">
                                                <a href="{{ route('downloadFamily', \App\Models\Family::where('title_en', 'Doors Sliding Outswing')->first()->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h6 d-block my-1">DOWNLOAD</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 px-4">
                        <div class="row mt-4 px-4 py-5 p-lg-5 justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                            <div class="col-lg-6 text-center">
                                <a href="{{ route('families') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                                    <p class="fw-bold h5 my-2 text-uppercase">VIEW ALL</p>
                                </a>
                            </div>
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
