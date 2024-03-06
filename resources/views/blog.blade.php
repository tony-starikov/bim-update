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

    <div class="container-fluid" style="background: url(/images/main_page/cubes.png) no-repeat center center local; background-size: cover;">
        <div class="container p-5">
            <div class="row p-5">
                <div class="col-12 px-0 mt-5">
                    <h5 class="text-white fw-bold h1 mt-5">
                        BIMPROVE BLOG
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container p-md-0 p-lg-5">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-md-6 mt-4">
                        <div class="card shadow-sm rounded-4 h-100 overflow-hidden" style="border: 4px solid #6bdcdb;">
                            <div class="card-body p-0">
                                <a class="rounded-3" href="{{ route('post', $post->slug) }}">
                                    <img class="img-fluid w-100 rounded-top" src="/images/{{ $post->image }}" alt="">
                                </a>
                                <div class="row px-2">
                                    <div class="col-12">
                                        <h5 class="h6 text-secondary mt-2">
                                            {{ $post->date }}
                                        </h5>
                                        <a class="text-dark text-decoration-none" href="{{ route('post', $post->slug) }}">
                                            <h6 class="h5 text-uppercase fw-semibold">
                                                {{ $post->title_en }}
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

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

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
