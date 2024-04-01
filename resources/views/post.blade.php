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

@section('shareon')
    <link
        href="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.min.css"
        rel="stylesheet"
    >
    <script
        src="https://cdn.jsdelivr.net/npm/shareon@2/dist/shareon.iife.js"
        defer
        init
    ></script>
@endsection

@section('main')

    <img class="img-fluid w-100 mt-5" src="/images/{{ $post->bg_image }}" alt="">

    <div class="container-fluid">
        <div class="container px-md-5 py-5 mb-5">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('blog') }}">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $post->title_en }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="p-4 rounded shadow" style="font-family: 'Montserrat', sans-serif !important;">
                                <h1 class="h2 fw-bold text-uppercase">
                                    {{ $post->title_en }}
                                </h1>
                                <a target="_blank" class="text-decoration-none" href="{{ $post->author_url }}">
                                    <img class="mb-1" width="20" height="20" src="https://img.icons8.com/ios-filled/30/linkedin.png" alt="linkedin"/>
                                    <h6 class="d-inline-block m-0 text-dark">
                                        {{ $post->author }}
                                    </h6>
                                </a>
                                <h6>
                                    {{ $post->date }}
                                </h6>
                                <div class="content w-100">
                                    {!! $post->content !!}
                                </div>
                                <h5>
                                    Share:
                                </h5>
                                <div class="shareon">
                                    <a class="facebook"></a>
                                    <a class="linkedin"></a>
                                    <a class="twitter"></a>
                                    <a class="copy-url"></a>
                                </div>
                            </div>
                            @if($prev or $next)
                                <div class="row mt-5 justify-content-between">
                                    <div class="col-6 col-lg-4">
                                        @if($prev)
                                            <a href="{{ route('post', $prev->slug) }}" role="button" class="btn btn-primary shadow-none btn border-2 rounded-0 w-100 text-center" style="border-color: #43aeb6; background-color: white">
                                                <span style="color: #43aeb6" class="fw-bold h6 d-block my-2">PREVIOUS POST</span>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-6 col-lg-4">
                                        @if($next)
                                            <a href="{{ route('post', $next->slug) }}" role="button" class="btn btn-primary shadow-none btn border-2 rounded-0 w-100 text-center" style="border-color: #43aeb6; background-color: white">
                                                <span style="color: #43aeb6" class="fw-bold h6 d-block my-2">NEXT POST</span>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        </div>
                        <div class="col-lg-4 px-0 py-5 p-lg-4">
                            @if($post->banner_header and $post->banner_header_url)
                                <a href="{{ $post->banner_header_url }}" target="_blank">
                                    <img class="img-fluid w-100" src="/images/{{ $post->banner_header }}" alt="">
                                </a>
                            @endif
                            <h4 class="mt-4 fw-semibold">
                                Newest articles:
                            </h4>
                            <ul class="my-ul px-0">
                                @foreach($posts as $item)
                                    <a class="text-decoration-none text-dark" href="{{ route('post', $item->slug) }}">
                                        <li class="h6 mt-3 fw-semibold">
                                            <div class="row align-items-center">
                                                <div class="col-4">
                                                    <img class="img-fluid w-100" src="/images/{{ $item->image }}" alt="">
                                                </div>
                                                <div class="col-8">
                                                    {{ $item->title_en }}
                                                </div>
                                            </div>
                                        </li>
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @if($post->banner_footer and $post->banner_footer_url)
                        <div class="row pt-0 pt-lg-5">
                            <div class="col-12 px-0">
                                <a href="{{ $post->banner_footer_url }}" target="_blank">
                                    <img class="img-fluid w-100" src="/images/{{ $post->banner_footer }}" alt="">
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        let content = document.querySelector('.content');
        let images = content.querySelectorAll('img');
        images.forEach((element) => {
            element.removeAttribute('width');
            element.removeAttribute('height');
            element.classList.add('img-fluid');
            element.classList.add('w-100');
        });
        let titlesList = document.createElement('ol');
        titlesList.classList.add('my-ul');
        titlesList.classList.add('px-1');
        let hs = content.querySelectorAll('h2');
        hs.forEach((element, index) => {
            element.id = 'title_' + index;

            let li = document.createElement('li');
            li.classList.add('py-1');
            let a = document.createElement('a');
            a.classList.add('text-decoration-none');
            a.innerText = element.innerText;
            a.href = '#' + element.id;
            li.appendChild(a);
            titlesList.appendChild(li);
        });

        let heading = document.createElement('h5');
        heading.classList.add('fw-semibold');
        heading.classList.add('mt-3');
        heading.innerText = 'Table of contents';
        content.insertAdjacentElement('afterbegin', titlesList);
        content.insertAdjacentElement('afterbegin', heading);
    </script>

@endsection

@section('canonical')
    @if($post->canonical)
        <link rel="canonical" href="{{ $post->canonical }}">
    @endif
@endsection
