@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background: url(/images/plugins/background.webp) no-repeat center center local; background-size: cover;">

        <div class="container py-5 p-lg-5 mt-5" style="min-height: 50vh;">
            <div class="row py-5 p-lg-5">

                <div class="col-md-8 col-lg-8 col-xl-6 px-0 pt-xl-5">
                    <h1 class="fw-bold text-uppercase">
                        plugins and scripts for Revit
                    </h1>
                    <p class="h6 fw-semibold mt-4">
                        Dynamo scripts and plugins are powerful tools for automating the workflow in Autodesk Revit. They help you make your work more efficient and faster. And for business owners, it's an excellent opportunity to optimize costs.
                    </p>
                    <p class="h6 fw-semibold mt-4">
                        On this page, you will find scripts and plugins from our development team free of charge.
                    </p>
                </div>

                <div class="col-lg-11 col-xl-9">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 mt-4 mt-sm-5 ps-sm-0">
                            <a href="{{ route('products') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <span class="fw-bold h5 my-2">REVIT PLUGINS</span>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4 mt-4 mt-sm-5 pe-sm-0">
                            <a href="{{ route('families') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 p-3" style="background-color: #43aeb6">
                                <span class="fw-bold h5 my-2">REVIT FAMILIES</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-fluid d-none d-xxl-block">
        <div class="container p-5">
            @foreach($plugins as $plugin)
                <div class="row p-5">
                    <div class="col-5 px-0 align-self-stretch position-relative">
                        <div class="row">
                            <div class="col-5">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-7 position-relative">
                                <h6 class="h2 pe-4 fw-bold">
                                    {{ $plugin->title_en }}
                                </h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 w-100" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-7 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

{{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
{{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-none d-xl-block d-xxl-none">
        <div class="container p-5">
            @foreach($plugins as $plugin)
                <div class="row p-5">
                    <div class="col-5 px-0 align-self-stretch position-relative">
                        <div class="row">
                            <div class="col-3">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-9 position-relative">
                                <h6 class="h2 fw-bold pe-4">
                                    {{ $plugin->title_en }}
                                </h6>
{{--                                <h6 class="text-secondary mb-0">--}}
{{--                                    Month, Day, Year--}}
{{--                                </h6>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 w-100" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h4 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-7 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

                        {{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
                        {{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none">
        <div class="container p-5">
            @foreach($plugins as $plugin)
                <div class="row p-5">
                    <div class="col-6 px-0 align-self-stretch position-relative">
                        <div class="row">
                            <div class="col-2">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-10 position-relative">
                                <h6 class="h5 pe-4 fw-bold">
                                    {{ $plugin->title_en }}
                                </h6>
{{--                                <h6 class="text-secondary mb-0">--}}
{{--                                    Month, Day, Year--}}
{{--                                </h6>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3 small">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row position-absolute bottom-0">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 w-100 p-0" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-4">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-6 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

                        {{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
                        {{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center pb-5">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-none d-md-block d-lg-none">
        <div class="container">
            @foreach($plugins as $plugin)
                <div class="row pt-5">
                    <div class="col-12 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

                        {{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
                        {{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>

                    <div class="col-12 px-0 align-self-stretch position-relative">
                        <div class="row mt-2">
                            <div class="col-2">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-10 position-relative">
                                <h6 class="h3 fw-bold">
                                    {{ $plugin->title_en }}
                                </h6>
{{--                                <h6 class="text-secondary mb-0">--}}
{{--                                    Month, Day, Year--}}
{{--                                </h6>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3 small">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 p-0 w-50" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-auto">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row p-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-none d-sm-block d-md-none">
        <div class="container">
            @foreach($plugins as $plugin)
                <div class="row pt-5">
                    <div class="col-12 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

                        {{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
                        {{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>

                    <div class="col-12 px-0 align-self-stretch position-relative">
                        <div class="row mt-2">
                            <div class="col-2">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-10 position-relative">
                                <h6 class="h3 fw-bold">
                                    {{ $plugin->title_en }}
                                </h6>
{{--                                <h6 class="text-secondary mb-0">--}}
{{--                                    Month, Day, Year--}}
{{--                                </h6>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3 small">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 p-0 w-50" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-auto">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row p-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid d-sm-none">
        <div class="container">
            @foreach($plugins as $plugin)
                <div class="row pt-5">
                    <div class="col-12 px-0">

                        @if($plugin->video_url)
                            <a href="#{{ $plugin->slug }}" class="m-0 p-0" data-bs-toggle="modal" data-bs-target="#{{ $plugin->slug }}">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                            </a>
                        @else
                            <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">
                        @endif

                        {{--                        <iframe class="video w-100 h-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>--}}
                        {{--                        <img class="img-fluid w-100" src="/images/{{ $plugin->image }}" alt="">--}}
                    </div>

                    <div class="col-12 px-0 align-self-stretch position-relative">
                        <div class="row mt-2">
                            <div class="col-2">
                                <img class="img-fluid w-100" src="/images/{{ $plugin->logo }}" alt="">
                            </div>
                            <div class="col-10 position-relative">
                                <h6 class="h3 fw-bold">
                                    {{ $plugin->title_en }}
                                </h6>
{{--                                <h6 class="text-secondary mb-0">--}}
{{--                                    Month, Day, Year--}}
{{--                                </h6>--}}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <p class="text-secondary pe-4 mt-3 small">
                                    {{ $plugin->description_en }}
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <a href="{{ route('downloadPlugin', $plugin->slug) }}" class="btn btn-primary btn-lg shadow-none border-0 rounded-4 p-0 w-100" style="background-color: #6bdcdb; display: flex; align-items: flex-end;" role="button">
                                    <span class="fw-bold h5 d-block my-2 mx-auto">DOWNLOAD NOW</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

        <div class="container">
            <div class="row p-5">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        {{ $plugins->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('modals')
    @foreach($plugins as $plugin)
        @if($plugin->video_url)
            <!-- Modal -->
            <div class="modal fade" id="{{ $plugin->slug }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content bg-transparent border-0">
                        <div class="modal-body w-100 border-0">
                            <iframe id="{{ $plugin->slug }}_video" class="video w-100" src="{{ $plugin->video_url }}" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endsection


@section('js')
    <script>
        @foreach($plugins as $plugin)
            @if($plugin->video_url)
                $(document).ready(function() {
                    let url_{{ $plugin->slug }} = $("#{{ $plugin->slug }}_video").attr('src');

                    $("#{{ $plugin->slug }}").on('hide.bs.modal', function() {
                        $("#{{ $plugin->slug }}_video").attr('src', '');
                        $("#{{ $plugin->slug }}_video").attr('src', url_{{ $plugin->slug }} );
                    });

                    {{--$("#{{ $plugin->slug }}").on('shown.bs.modal', function() {--}}
                    {{--    $("#{{ $plugin->slug }}_video").attr('src', url_{{ $plugin->slug }} );--}}
                    {{--});--}}
                });
            @endif
        @endforeach
    </script>
@endsection

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
