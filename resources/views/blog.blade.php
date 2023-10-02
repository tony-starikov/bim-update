@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="d-none d-xl-block container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">

        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-lg-block d-xl-none container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">

        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-md-block d-lg-none container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">

        <div class="container">
            <div class="row px-0 py-5">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="d-none d-sm-block d-md-none container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">

        <div class="container">
            <div class="row px-0 py-5">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-sm-none container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">

        <div class="container">
            <div class="row px-0 py-5">
                <div class="col-12 px-0 mt-5 order-first">
                    <h1 class="text-white display-5 fw-bold mt-5">
                        BIMPROVE BLOG
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container p-md-0 p-lg-5">

            <div class="d-none d-xxl-flex row p-5 pt-1">
                @foreach($posts as $post)
                    <div class="col-6 mt-4">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                        <h5 class="text-secondary mt-2">
                            {{ $post->date }}
                        </h5>
                        <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                            <h6 class="h3 fw-bold">
                                {{ $post->title_en }}
                            </h6>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="d-none d-xl-flex d-xxl-none row p-5 pt-1">
                @foreach($posts as $post)
                    <div class="col-6 mt-4">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                        <h5 class="text-secondary mt-2">
                            {{ $post->date }}
                        </h5>
                        <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                            <h6 class="h4 fw-bold">
                                {{ $post->title_en }}
                            </h6>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="d-none d-lg-flex d-xl-none row p-5 pt-1">
                @foreach($posts as $post)
                    <div class="col-6 mt-4">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                        <h5 class="text-secondary mt-2">
                            {{ $post->date }}
                        </h5>
                        <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                            <h6 class="h5 fw-bold">
                                {{ $post->title_en }}
                            </h6>
                        </a>
                    </div>
                @endforeach
            </div>

            @foreach($posts as $post)
                <div class="d-none d-md-flex d-lg-none row pt-5">
                    <div class="col-12">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                                <h6 class="h4 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                        </div>
                        <div class="row">
                            <h6 class="text-secondary">
                                {{ $post->date }}
                            </h6>
                        </div>
                        <div class="row w-100">
                            <div class="col-6">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none" style="background-color: #6bdcdb" href="{{ route('post', $post->slug) }}" role="button">
                                    <span class="fw-bold h5 d-block my-1">READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-sm-flex d-md-none row pt-5">
                    <div class="col-12">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                                <h6 class="h4 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                        </div>
                        <div class="row">
                            <h6 class="text-secondary">
                                {{ $post->date }}
                            </h6>
                        </div>
                        <div class="row w-100">
                            <div class="col-6">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none" style="background-color: #6bdcdb" href="{{ route('post', $post->slug) }}" role="button">
                                    <span class="fw-bold h5 d-block my-1">READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex d-sm-none row pt-5">
                    <div class="col-12">
                        <a href="{{ route('post', $post->slug) }}">
                            <img class="img-fluid w-100" src="/images/{{ $post->image }}" alt="">
                        </a>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                                <h6 class="h4 fw-bold">
                                    {{ $post->title_en }}
                                </h6>
                            </a>
                        </div>
                        <div class="row">
                            <h6 class="text-secondary">
                                {{ $post->date }}
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="btn btn-primary btn-lg border-0 rounded-4 w-100 shadow-none mx-auto" style="background-color: #6bdcdb" href="{{ route('post', $post->slug) }}" role="button">
                                    <span class="fw-bold h5 d-block my-1">READ MORE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                <div class="row d-lg-none p-5">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            {{ $posts->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>

                <div class="row d-none d-lg-flex">
                    <div class="col-12">
                        <div class="d-flex justify-content-center">
                            {{ $posts->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection
