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
    <div class="container-fluid" style="background: url(/images/families/background.webp) no-repeat center center local; background-size: cover;">

        <div class="container py-5 p-lg-5 mt-5">
            <div class="row align-items-center py-5 p-lg-5">

                <div class="col-md-8 col-lg-8 col-xl-6 px-0 py-xl-5">
                    <h1 class="fw-bold text-uppercase">
                        Portfolio
                    </h1>
                    <p class="h5 mt-4">
                        Having successfully completed 1200+ BIM projects, BIMprove is a reliable outsourcing company, trusted by major companies in the United States, United Kingdom, Germany, Australia, Belgium and other countries.
                    </p>
                    <p class="h5 mt-4">
                        We have experience in 3D BIM modeling in industries such as manufacturing and warehouses, airports, residential buildings, educational, commercial, medical centers etc.
                    </p>
                    <p class="h5 mt-4">
                        We pride ourselves on the quality of our work and the level of service we provide.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container p-lg-5">
            <div class="row py-5 px-md-5">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
                @foreach($projects as $project)
                    <div class="col-lg-6 px-lg-4 mt-5">
                        <div class="card border-0">
                            <a href="{{ route('portfolio.project', $project->slug) }}" class="text-decoration-none">
                                <img src="/images/{{ $project->image }}" class="card-img" alt="{{ $project->title }}">
                            </a>
                            <div class="row mt-2 align-items-center">
                                <div class="col-7 mt-2">
                                    <a href="{{ route('portfolio.project', $project->slug) }}" class="text-decoration-none">
                                        <h3 class="text-dark h5 fw-bold m-0">{{ $project->title }}</h3>
                                    </a>
                                </div>
                                <div class="col-5 mt-2">
                                    <a href="{{ route('portfolio.project', $project->slug) }}" class="text-decoration-none">
                                        <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                            <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="d-flex justify-content-center pb-5">--}}
{{--                        {{ $projects->links('vendor.pagination.custom') }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>

@endsection

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
