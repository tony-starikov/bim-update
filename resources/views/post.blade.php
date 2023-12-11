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

    <img class="img-fluid w-100 mt-5" src="/images/{{ $post->bg_image }}" alt="">

    <div class="container-fluid d-none d-lg-block">
        <div class="container p-5">

            <div class="col-12 px-5">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                                <li class="breadcrumb-item"><a class="text-dark" href="{{ route('blog') }}">Blog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->title_en }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <h1 class="fw-bold">
                        {{ $post->title_en }}
                    </h1>
                </div>
                <div class="row">
                    <h5>
                        {{ $post->date }}
                    </h5>
                </div>
                <div class="col-12" style="font-family: 'Montserrat', sans-serif !important;">
                    {!! $post->content !!}
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid d-lg-none">
        <div class="container pt-3 pb-2">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('blog') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $post->title_en }}</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <h3 class="fw-bold">
                            {{ $post->title_en }}
                        </h3>
                    </div>
                    <div class="row">
                        <h6>
                            {{ $post->date }}
                        </h6>
                    </div>
                    <div class="col-12" style="font-family: 'Montserrat', sans-serif !important;">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('canonical')
    @if($post->canonical)
        <link rel="canonical" href="{{ $post->canonical }}">
    @endif
@endsection
