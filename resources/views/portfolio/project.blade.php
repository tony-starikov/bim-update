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

    <div class="container-fluid pt-5 p-lg-5">
        <div class="container p-lg-5 mt-lg-5">
            <div class="row py-5 p-lg-5">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('portfolio.index') }}">Portfolio</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $project->title }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <h1 class="text-dark h4 fw-bold m-0">{{ $project->title }}</h1>
                    <p class="text-secondary h6 fw-bold">{{ $project->service }}</p>
                </div>
                <div class="col-lg-7">
                    <img class="img-fluid w-100" src="/images/{{ $project->image }}" alt="{{ $project->title }}">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0" style="font-family: 'Montserrat', sans-serif !important;">
                    {!! $project->content !!}

                    <div class="row mt-5 d-flex justify-content-center">
                        <div class="col-12">
                            @if($project->service === 'Scan to BIM')
                                <a href="{{ route('showService', 'scan-to-bim') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2 text-uppercase">Scan to BIM service</span>
                                </a>
                            @elseif($project->service === 'BIM modeling')
                                <a href="{{ route('showService', 'mep-coordination') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2 text-uppercase">MEP BIM Modeling service</span>
                                </a>
                            @elseif($project->service === 'Telecom')
                                <a href="{{ route('showService', 'telecom-design') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2 text-uppercase">Telecom Design service</span>
                                </a>
                            @else
                                <a href="{{ route('showService', 'mep-coordination') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                    <span class="fw-bold h6 d-block my-2 text-uppercase">MEP BIM Modeling service</span>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-5">
                    <p class="text-dark text-center h4 fw-bold mt-5">OTHER PROJECTS</p>
                    <div class="row justify-content-evenly">
                        @foreach($other_projects as $work)
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="portfolio-container">
                                    <div class="card border-0">
                                        <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                            <img src="/images/{{ $work->image }}" class="card-img" alt="{{ $work->title }}">
                                        </a>
                                        <div class="d-lg-none">
                                            <div class="row align-items-center">
                                                <div class="col-7 mt-2">
                                                    <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                                        <h3 class="text-dark h5 fw-bold m-0">{{ $work->title }}</h3>
                                                    </a>
                                                </div>
                                                <div class="col-5 mt-2">
                                                    <a href="{{ route('portfolio.project', $work->slug) }}" class="text-decoration-none">
                                                        <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                            <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="overlay d-none d-lg-block">
                                        <div class="row justify-content-center align-items-center text-center text-white">
                                            <div class="col-12 mt-2 p-4">
                                                <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                                    <h3 class="text-white h5 fw-bold m-0">{{ $work->title }}</h3>
                                                </a>
                                            </div>
                                            <div class="col-8">
                                                <a href="{{ route('portfolio.project', $work->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h5 d-block my-2">EXPLORE</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                            <div class="d-none d-md-block d-xl-none col-6 mt-4">
                                <div class="card h-100 border-0" style="background-color: #6de1df">
                                    <div class="row px-5 h-100 d-flex justify-content-center align-items-center">
                                        <div class="col-12">
                                            <a href="{{ route('portfolio.index') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #43aeb6">
                                                <span class="fw-bold h6 d-block my-2">ALL PROJECTS</span>
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

@endsection

{{--@section('canonical')--}}
{{--    @if($page_info->canonical)--}}
{{--        <link rel="canonical" href="{{ $page_info->canonical }}">--}}
{{--    @endif--}}
{{--@endsection--}}
