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
                <div class="col-lg-7">
                    <img class="img-fluid w-100" src="/images/{{ $project->image }}" alt="{{ $project->title }}">
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <h1 class="text-dark h4 fw-bold m-0">{{ $project->title }}</h1>
                    <p class="text-secondary h6 fw-bold">{{ $project->subtitle }}</p>
                    <p class="text-dark h5 fw-bold">
                        Discipline: <span class="text-secondary">{{ $project->disciplines }}</span>
                    </p>
                    <p class="text-dark h5 fw-bold">
                        @if($project->parameter_1)
                            {{ $project->parameter_1 }}<br>
                        @endif
                        @if($project->parameter_2)
                            {{ $project->parameter_2 }}<br>
                        @endif
                        @if($project->parameter_3)
                            {{ $project->parameter_3 }}<br>
                        @endif
                    </p>
                    <p class="text-dark h6 fw-bold">
                        {{ $project->description }}
                    </p>
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
