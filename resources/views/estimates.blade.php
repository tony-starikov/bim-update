@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid d-none d-xl-block" style="background-image: url(/images/estimates/header3.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0 my-lg-5">

                @if(Session::has('success'))
                    <div class="alert alert-success mt-5" role="alert">
                        <h6 class="m-0">
                            {{ Session::get('success') }}
                        </h6>
                    </div>
                @endif

                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <h2 class="display-5 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h2 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h2 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h2 class="text-white">
                                Request an estimate now to maximize the potential of your BIM project.
                            </h2>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4 px-0 mt-5">
                            <a href="#estimation1" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h4 d-block my-2">ESTIMATE PROJECT <i class="las la-lg la-arrow-down"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-image: url(/images/estimates/header3.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0">

                @if(Session::has('success'))
                    <div class="alert alert-success mt-5" role="alert">
                        <h6 class="m-0">
                            {{ Session::get('success') }}
                        </h6>
                    </div>
                @endif

                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <h2 class="display-6 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 px-0 mt-5">
                            <h4 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h4 class="text-white">
                                Request an estimate now to maximize the potential of your BIM project.
                            </h4>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4 px-0 mt-5">
                            <a href="#estimation2" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h6 d-block my-2">ESTIMATE PROJECT <i class="las la-lg la-arrow-down"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-image: url(/images/estimates/header3.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                @if(Session::has('success'))
                    <div class="alert alert-success mt-5" role="alert">
                        <h6 class="m-0">
                            {{ Session::get('success') }}
                        </h6>
                    </div>
                @endif

                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <h2 class="h2 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 px-0 mt-5">
                            <h4 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h4 class="text-white">
                                Request an estimate now to maximize the potential of your BIM project.
                            </h4>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-4 px-0 mt-5">
                            <a href="#estimation3" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h6 d-block my-2">ESTIMATE PROJECT <i class="las la-lg la-arrow-down"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-md-none" style="background-image: url(/images/estimates/header3.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                @if(Session::has('success'))
                    <div class="alert alert-success mt-5" role="alert">
                        <h6 class="m-0">
                            {{ Session::get('success') }}
                        </h6>
                    </div>
                @endif

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <h2 class="h2 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <h5 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <h5 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <h5 class="text-white">
                                Request an estimate now to maximize the potential of your BIM project.
                            </h5>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-7 mt-4">
                            <a href="#estimation4" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h6 d-block my-2">ESTIMATE PROJECT <i class="las la-lg la-arrow-down"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid container-fluid d-none d-xl-block" style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0 my-lg-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h2 class="display-5 fw-bold mb-0">
                                PROJECT ESTIMATE IN 3 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-5 px-0 pe-5 mt-5">
                            <div class="row">
                                <div class="col-1 ps-0 text-end">
                                    <h5 class="fw-normal">
                                        1.
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 class="fw-normal" style="text-align: justify;">
                                        You fill in the form
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h5 class="fw-normal">
                                        2.
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 class="fw-normal" style="text-align: justify;">
                                        Our specialists evaluate your project* The estimate is made within 3 hours during working hours from 09:00 to 18:00 (GMT+3).
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h5 class="fw-normal">
                                        3.
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 class="fw-normal" style="text-align: justify;">
                                        We send the results of the estimate to your e-mail.
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h5 class="fw-normal">
                                        4.
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 class="fw-normal" style="text-align: justify;">
                                        We schedule an appointment to discuss the details**
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h5>
                                        **
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 style="text-align: justify;">
                                        If necessary and after your consent
                                    </h5>
                                </div>
                            </div>
                        </div>

                        <div class="col-7 px-0 mt-5">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h2 class="display-6 fw-bold mb-0">
                                PROJECT ESTIMATE IN 3 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-5 px-0 pe-5 mt-5">
                            <div class="row">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        1.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        You fill in the form
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        2.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        Our specialists evaluate your project* The estimate is made within 3 hours during working hours from 09:00 to 18:00 (GMT+3).
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        3.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We send the results of the estimate to your e-mail.
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        4.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We schedule an appointment to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        **
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 style="text-align: justify;">
                                        If necessary and after your consent
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-7 px-0 mt-5">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 px-0">
                            <h2 class="h2 fw-bold mb-0">
                                PROJECT ESTIMATE IN 3 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-6 pe-5 mt-5">
                            <div class="row">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        1.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        You fill in the form
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        2.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        Our specialists evaluate your project* The estimate is made within 3 hours during working hours from 09:00 to 18:00 (GMT+3).
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        3.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We send the results of the estimate to your e-mail.
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        4.
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We schedule an appointment to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        **
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 style="text-align: justify;">
                                        If necessary and after your consent
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 px-0 mt-5">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid d-md-none" style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="h2 fw-bold mb-0">
                                PROJECT ESTIMATE IN 3 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-12 mt-5">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>

                        <div class="col-12 mt-5">
                            <div class="row">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        1.
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        You fill in the form
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        2.
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        Our specialists evaluate your project* The estimate is made within 3 hours during working hours from 09:00 to 18:00 (GMT+3).
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        3.
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We send the results of the estimate to your e-mail.
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6 class="fw-normal">
                                        4.
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 class="fw-normal" style="text-align: justify;">
                                        We schedule an appointment to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        **
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 style="text-align: justify;">
                                        If necessary and after your consent
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="estimation1" class="container-fluid container-fluid d-none d-xl-block">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 mt-5">
                <div class="col-12 col-xl-7 px-0">
                    <h2 class="display-5 fw-bold mb-0">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center px-0 p-lg-5">

{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-warning mt-5">--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <h6 class="m-0"> - {{ $error }}</h6>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                @endif--}}

                <div class="col-12 col-xl-6 ps-0 pe-5 mt-5">
                    <form method="post" class="text-white footer-form" enctype="multipart/form-data" action="{{route('estimatesProcessing')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="disciplines"
                            placeholder="Disciplines*"
                            value="{{old('disciplines', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="units"
                            placeholder="Project Units*"
                            value="{{old('units', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="language"
                            placeholder="Project Language*"
                            value="{{old('language', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="type"
                            placeholder="Type of the building\construction*"
                            value="{{old('type', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="area"
                            placeholder="Building\construction area*"
                            value="{{old('area', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="height"
                            placeholder="Height of a building\construction*"
                            value="{{old('height', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="data"
                            placeholder="Incoming data*"
                            value="{{old('data', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="incoming_point_cloud"
                            placeholder="Incoming Point Cloud*"
                            value="{{old('incoming_point_cloud', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="task_for_modeling"
                            placeholder="Task for modeling*"
                            value="{{old('task_for_modeling', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="revit_version"
                            placeholder="Revit version*"
                            value="{{old('revit_version', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="lod"
                            placeholder="LOD (Level of Detail)*"
                            value="{{old('lod', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="loi"
                            placeholder="LOI (Level of Information)*"
                            value="{{old('loi', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="project_accuracy"
                            placeholder="Project accuracy*"
                            value="{{old('project_accuracy', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="deliverables"
                            placeholder="Deliverables*"
                            value="{{old('deliverables', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="reference"
                            placeholder="Reference to object"
                            value="{{old('reference', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <h4 class="fw-semibold mt-4 py-3" style="color: #9a9a9a;">
                            Select files to upload...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-2 shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            style="border-color: #9a9a9a !important;"
                            multiple
                        />

                        <h4 class="fw-semibold mt-4 pt-3" style="color: #9a9a9a;">
                            Or left a reference to the files in cloud...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 pt-3 mt-4"
                            type="text"
                            name="cloud_link"
                            placeholder="Reference to the cloud"
                            value="{{old('cloud_link', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-6 px-0 mt-5 d-none d-xl-block">
                    <img class="img-fluid w-100" src="/images/estimates/illustration.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="estimation2" class="container-fluid d-none d-lg-block d-xl-none">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5">
                <div class="col-12 col-xl-7 px-0">
                    <h2 class="display-6 fw-bold mb-0">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center px-0 px-lg-5">

                {{--                @if ($errors->any())--}}
                {{--                    <div class="alert alert-warning mt-5">--}}
                {{--                        @foreach ($errors->all() as $error)--}}
                {{--                            <h6 class="m-0"> - {{ $error }}</h6>--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <div class="col-12 col-xl-6 ps-0 pe-5 mt-5">
                    <form method="post" class="text-white footer-form" enctype="multipart/form-data" action="{{route('estimatesProcessing')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="disciplines"
                            placeholder="Disciplines*"
                            value="{{old('disciplines', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="units"
                            placeholder="Project Units*"
                            value="{{old('units', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="language"
                            placeholder="Project Language*"
                            value="{{old('language', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="type"
                            placeholder="Type of the building\construction*"
                            value="{{old('type', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="area"
                            placeholder="Building\construction area*"
                            value="{{old('area', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="height"
                            placeholder="Height of a building\construction*"
                            value="{{old('height', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="data"
                            placeholder="Incoming data*"
                            value="{{old('data', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="incoming_point_cloud"
                            placeholder="Incoming Point Cloud*"
                            value="{{old('incoming_point_cloud', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="task_for_modeling"
                            placeholder="Task for modeling*"
                            value="{{old('task_for_modeling', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="revit_version"
                            placeholder="Revit version*"
                            value="{{old('revit_version', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="lod"
                            placeholder="LOD (Level of Detail)*"
                            value="{{old('lod', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="loi"
                            placeholder="LOI (Level of Information)*"
                            value="{{old('loi', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="project_accuracy"
                            placeholder="Project accuracy*"
                            value="{{old('project_accuracy', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="deliverables"
                            placeholder="Deliverables*"
                            value="{{old('deliverables', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="reference"
                            placeholder="Reference to object"
                            value="{{old('reference', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <h4 class="fw-semibold mt-4 py-3" style="color: #9a9a9a;">
                            Select files to upload...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-2 shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            style="border-color: #9a9a9a !important;"
                            multiple
                        />

                        <h4 class="fw-semibold mt-4 pt-3" style="color: #9a9a9a;">
                            Or left a reference to the files in cloud...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 pt-3 mt-4"
                            type="text"
                            name="cloud_link"
                            placeholder="Reference to the cloud"
                            value="{{old('cloud_link', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-6 px-0 mt-5 d-none d-xl-block">
                    <img class="img-fluid w-100" src="/images/estimates/illustration.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="estimation3" class="container-fluid d-none d-md-block d-lg-none">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-xl-7 px-0">
                    <h2 class="display-6 fw-bold mb-0">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">

                {{--                @if ($errors->any())--}}
                {{--                    <div class="alert alert-warning mt-5">--}}
                {{--                        @foreach ($errors->all() as $error)--}}
                {{--                            <h6 class="m-0"> - {{ $error }}</h6>--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <div class="col-12 col-xl-6 px-0 mt-5">
                    <form method="post" class="text-white footer-form" enctype="multipart/form-data" action="{{route('estimatesProcessing')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="disciplines"
                            placeholder="Disciplines*"
                            value="{{old('disciplines', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="units"
                            placeholder="Project Units*"
                            value="{{old('units', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="language"
                            placeholder="Project Language*"
                            value="{{old('language', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="type"
                            placeholder="Type of the building\construction*"
                            value="{{old('type', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="area"
                            placeholder="Building\construction area*"
                            value="{{old('area', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="height"
                            placeholder="Height of a building\construction*"
                            value="{{old('height', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="data"
                            placeholder="Incoming data*"
                            value="{{old('data', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="incoming_point_cloud"
                            placeholder="Incoming Point Cloud*"
                            value="{{old('incoming_point_cloud', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="task_for_modeling"
                            placeholder="Task for modeling*"
                            value="{{old('task_for_modeling', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="revit_version"
                            placeholder="Revit version*"
                            value="{{old('revit_version', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="lod"
                            placeholder="LOD (Level of Detail)*"
                            value="{{old('lod', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="loi"
                            placeholder="LOI (Level of Information)*"
                            value="{{old('loi', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="project_accuracy"
                            placeholder="Project accuracy*"
                            value="{{old('project_accuracy', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="deliverables"
                            placeholder="Deliverables*"
                            value="{{old('deliverables', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="reference"
                            placeholder="Reference to object"
                            value="{{old('reference', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <h4 class="fw-semibold mt-4 py-3" style="color: #9a9a9a;">
                            Select files to upload...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-2 shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            style="border-color: #9a9a9a !important;"
                            multiple
                        />

                        <h4 class="fw-semibold mt-4 pt-3" style="color: #9a9a9a;">
                            Or left a reference to the files in cloud...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 pt-3 mt-4"
                            type="text"
                            name="cloud_link"
                            placeholder="Reference to the cloud"
                            value="{{old('cloud_link', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-6 px-0 mt-5 d-none d-xl-block">
                    <img class="img-fluid w-100" src="/images/estimates/illustration.png" alt="">
                </div>
            </div>
        </div>
    </div>

    <div id="estimation4" class="container-fluid d-md-none">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold mb-0">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">

                {{--                @if ($errors->any())--}}
                {{--                    <div class="alert alert-warning mt-5">--}}
                {{--                        @foreach ($errors->all() as $error)--}}
                {{--                            <h6 class="m-0"> - {{ $error }}</h6>--}}
                {{--                        @endforeach--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <div class="col-12 mt-5">
                    <form method="post" class="text-white footer-form" enctype="multipart/form-data" action="{{route('estimatesProcessing')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="disciplines"
                            placeholder="Disciplines*"
                            value="{{old('disciplines', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="units"
                            placeholder="Project Units*"
                            value="{{old('units', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="language"
                            placeholder="Project Language*"
                            value="{{old('language', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="type"
                            placeholder="Type of the building\construction*"
                            value="{{old('type', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="area"
                            placeholder="Building\construction area*"
                            value="{{old('area', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="height"
                            placeholder="Height of a building\construction*"
                            value="{{old('height', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="data"
                            placeholder="Incoming data*"
                            value="{{old('data', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="incoming_point_cloud"
                            placeholder="Incoming Point Cloud*"
                            value="{{old('incoming_point_cloud', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="task_for_modeling"
                            placeholder="Task for modeling*"
                            value="{{old('task_for_modeling', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="revit_version"
                            placeholder="Revit version*"
                            value="{{old('revit_version', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="lod"
                            placeholder="LOD (Level of Detail)*"
                            value="{{old('lod', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="loi"
                            placeholder="LOI (Level of Information)*"
                            value="{{old('loi', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="project_accuracy"
                            placeholder="Project accuracy*"
                            value="{{old('project_accuracy', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="deliverables"
                            placeholder="Deliverables*"
                            value="{{old('deliverables', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                            required
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 mt-4 pt-3"
                            type="text"
                            name="reference"
                            placeholder="Reference to object"
                            value="{{old('reference', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <h4 class="fw-semibold mt-4 py-3" style="color: #9a9a9a;">
                            Select files to upload...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-2 shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            style="border-color: #9a9a9a !important;"
                            multiple
                        />

                        <h4 class="fw-semibold mt-4 pt-3" style="color: #9a9a9a;">
                            Or left a reference to the files in cloud...
                        </h4>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-2 border-bottom shadow-none rounded-0 pt-3 mt-4"
                            type="text"
                            name="cloud_link"
                            placeholder="Reference to the cloud"
                            value="{{old('cloud_link', '')}}"
                            aria-label=".form-control-lg example"
                            style="border-color: #9a9a9a !important;"
                        />

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>

                <div class="col-6 px-0 mt-5 d-none d-xl-block">
                    <img class="img-fluid w-100" src="/images/estimates/illustration.png" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
