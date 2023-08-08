@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

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
                <div class="col-12">
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
                    <div class="col-12">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
