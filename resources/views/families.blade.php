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

        <div class="container py-5 p-lg-5 mt-5" style="min-height: 50vh;">
            <div class="row py-5 p-lg-5 my-xxl-3">

                <div class="col-md-8 col-lg-8 col-xl-6 px-0 pt-xl-5">
                    <h1 class="fw-bold text-uppercase">
                        Families for Revit
                    </h1>
                    <p class="h6 fw-semibold mt-4">
                        Families in Autodesk Revit are the foundation of all digital modeling. Without them, there would be no 3D models, which are now so prevalent in AEC. Moreover, the creation of families in Revit has already gone beyond the realm of AEC and covers much bigger horizons.
                    </p>
                    <p class="h6 fw-semibold mt-4">
                        On this page you can find Revit families from our BIM content creation team for free.
                    </p>
                </div>

                <div class="col-lg-11 col-xl-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 mt-4 mt-sm-5 ps-sm-0">
                            <a href="{{ route('products') }}" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <span class="fw-bold h5 my-2">REVIT PLUGINS</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="container pb-5 p-lg-5">
            <div class="row p-lg-5">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Families</li>
                        </ol>
                    </nav>
                </div>
                @foreach($families as $family)
                    <div class="col-md-6 col-xl-4 mt-4">
                        <div class="card rounded-4 h-100 px-2 border-0" style="background-color: rgba(168,175,175,0.2);">
                            <div class="card-body">
                                <div class="row" style="min-height: 50px;">
                                    <div class="col-12">
                                        <h6 class="h5 fw-bold">
                                            {{ $family->title_en }}
                                        </h6>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-11 py-2">
                                        <img class="img-fluid w-100 rounded" src="/images/{{ $family->image }}" alt="{{ $family->title_en }}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent mt-2">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="h5 fw-bold">
                                            <span class="badge bg-success">Free</span>
                                        </h6>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col-12">
                                        <a href="{{ route('downloadFamily', $family->slug) }}" class="text-decoration-none">
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h6 d-block my-1">DOWNLOAD</span>
                                            </button>
                                        </a>
                                    </div>
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
        {{--                        {{ $plugins->links('vendor.pagination.custom') }}--}}
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
