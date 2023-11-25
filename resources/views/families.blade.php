@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

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
                        On this page, you will find scripts and plugins from our development team free of charge.
                    </p>
                </div>

                <div class="col-lg-11 col-xl-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 mt-4 mt-sm-5 ps-sm-0">
                            <a href="{{ route('products') }}" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <span class="fw-bold h5 my-2">REVIT PLUGINS</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mt-4 mt-sm-5 pe-sm-0">
                            <a href="{{ route('families') }}" role="button" class="btn btn-primary shadow btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <span class="fw-bold h5 my-2">REVIT FAMILIES</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5 pb-0">
            @foreach($families as $family)
                <div class="row p-5">
                    <div class="col-5 px-0 ps-2">
                        <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                    </div>
                    <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                        <div class="row">
                            <h6 class="display-6 fw-bold">
                                {{ $family->title_en }}
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary m-0">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none">
        <div class="container p-5 pb-0">
            @foreach($families as $family)
                <div class="row p-5">
                    <div class="col-5 px-0">
                        <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                    </div>
                    <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                        <div class="row">
                            <h6 class="h2 fw-bold">
                                {{ $family->title_en }}
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary m-0">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h5 d-block my-1 mx-1">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none">
        <div class="container p-5 pb-0">
            @foreach($families as $family)
                <div class="row p-5">
                    <div class="col-5 px-0">
                        <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                    </div>
                    <div class="col-7 px-0 ps-4 align-self-stretch position-relative">
                        <div class="row">
                            <h6 class="h3 mb-1 fw-bold">
                                {{ $family->title_en }}
                            </h6>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary small m-0">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h6 d-block m-0">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none">
        <div class="container">
            <div class="row">
                @foreach($families as $family)
                    <div class="col-6 pt-5">

                        <div class="card border border-0 h-100">
                            <div class="card-body border border-0 p-0">
                                <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                                <h6 class="h3 mt-2 fw-bold">
                                    {{ $family->title_en }}
                                </h6>
                                <p class="text-secondary m-0 mb-2">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                            <div class="card-footer border border-0 bg-transparent p-0">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h5 d-block m-1">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center py-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-sm-block d-md-none">
        <div class="container">
            <div class="row">
                @foreach($families as $family)
                    <div class="col-12 pt-5">

                        <div class="card border border-0 h-100">
                            <div class="card-body border border-0 p-0">
                                <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                                <h6 class="h3 mt-2 fw-bold">
                                    {{ $family->title_en }}
                                </h6>
                                <p class="text-secondary m-0 mb-2">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                            <div class="card-footer border border-0 bg-transparent p-0">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center py-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-sm-none">
        <div class="container">
            <div class="row">
                @foreach($families as $family)
                    <div class="col-12 pt-5">

                        <div class="card border border-0 h-100">
                            <div class="card-body border border-0 p-0">
                                <img class="img-fluid w-100" src="/images/{{ $family->image }}" alt="">
                                <h6 class="h3 mt-2 fw-bold">
                                    {{ $family->title_en }}
                                </h6>
                                <p class="text-secondary m-0 mb-2">
                                    {{ $family->description_en }}
                                </p>
                            </div>
                            <div class="card-footer border border-0 bg-transparent p-0">
                                <a href="{{ route('downloadFamily', $family->slug) }}" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100" style="background-color: #6bdcdb;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center py-5">
                        {{ $families->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--    <div class="container-fluid" style="background-color: #dafffc">--}}

{{--        <div class="container">--}}
{{--            <div class="row pb-3">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="d-md-none">--}}
{{--                        <h1 class="display-6 fw-bold mt-5">--}}
{{--                            SUPPORT THE DEVELOPMENT OF BIMPROVE--}}
{{--                        </h1>--}}
{{--                    </div>--}}
{{--                    <div class="d-none d-md-block">--}}
{{--                        <h1 class="display-2 fw-bold mt-5 pt-md-0 pt-lg-5">--}}
{{--                            SUPPORT THE DEVELOPMENT OF BIMPROVE--}}
{{--                        </h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row pb-5">--}}
{{--                <div class="col-6">--}}
{{--                    <img class="img-fluid w-100" src="/images/donate_image.png" alt="">--}}
{{--                </div>--}}
{{--                <div class="col-6">--}}
{{--                    <form class="donate-form w-75 mt-5" method="post" action="{{ route('donate') }}">--}}
{{--                        @csrf--}}
{{--                        <div class="mb-5">--}}
{{--                            <input type="text" name="donate" class="form-control fw-bold shadow-none border-3" id="exampleFormControlInput2" placeholder="Select or insert an amount">--}}
{{--                        </div>--}}

{{--                        <div class="row pb-5">--}}
{{--                            <div class="col-3">--}}
{{--                                <input name="donate10" value="0" type="hidden">--}}
{{--                                <input name="donate10" value="1" type="checkbox" class="btn-check" id="btn-check1" autocomplete="off">--}}
{{--                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check1">$10</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-3">--}}
{{--                                <input name="donate20" value="0" type="hidden">--}}
{{--                                <input name="donate20" value="1" type="checkbox" class="btn-check" id="btn-check2" autocomplete="off">--}}
{{--                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check2">$20</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-3">--}}
{{--                                <input name="donate50" value="0" type="hidden">--}}
{{--                                <input name="donate50" value="1" type="checkbox" class="btn-check" id="btn-check3" autocomplete="off">--}}
{{--                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check3">$50</label>--}}
{{--                            </div>--}}
{{--                            <div class="col-3">--}}
{{--                                <input name="donate100" value="0" type="hidden">--}}
{{--                                <input name="donate100" value="1" type="checkbox" class="btn-check" id="btn-check4" autocomplete="off">--}}
{{--                                <label class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold p-2 fs-3" style="background-color: #6bdcdb" for="btn-check4">$100</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col-12">--}}
{{--                                <button type="submit" class="btn btn-primary btn-lg border-0 w-100 mx-auto fw-bold d-lg-none" style="background-color: #43aeb6">--}}
{{--                                    <span class="fw-bold h6 d-block my-1">DONATE</span>--}}
{{--                                </button>--}}

{{--                                <button type="submit" class="btn btn-primary btn-lg border-0 w-50 mx-auto fw-bold d-none d-lg-block" style="background-color: #43aeb6">--}}
{{--                                    <span class="fw-bold h4 d-block my-1">DONATE</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
