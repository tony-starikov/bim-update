@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="/images/bim_prove.png">
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('turnstile')
    @turnstileScripts()
@endsection

@section('main')

    <div class="container-fluid d-none d-xl-block" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0 my-lg-5">

                @if ($errors->any())
                    <div class="alert alert-warning mt-5">
                        @foreach ($errors->all() as $error)
                            <h6 class="m-0">{{ $error }}</h6>
                        @endforeach
                    </div>
                @endif

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
                                BIM ESTIMATES FOR YOUR PROJECT<br>
                                MEP COORDINATION & DIGITAL FABRICATION SERVICE
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h3 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h3 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h3 class="text-white">
                                Request a free estimate now!<br>
                                Maximize the potential of your BIM project.
                            </h3>
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

    <div class="container-fluid d-none d-lg-block d-xl-none" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0">

                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <h2 class="display-6 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT<br>
                                SCAN TO BIM SERVICE
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 px-0 mt-5">
                            <h5 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h5 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h5 class="text-white">
                                Request a free estimate now!<br>
                                Maximize the potential of your BIM project.
                            </h5>
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

    <div class="container-fluid d-none d-md-block d-lg-none" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                <div class="col-12 my-3">
                    <div class="row">
                        <div class="col-12 px-0 mt-3">
                            <h2 class="h2 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT<br>
                                SCAN TO BIM SERVICE
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 px-0 mt-5">
                            <h5 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-0 mt-5">
                            <h5 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5 px-0 mt-5">
                            <h5 class="text-white">
                                Request a free estimate now!<br>
                                Maximize the potential of your BIM project.
                            </h5>
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

    <div class="container-fluid d-md-none" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 py-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 mt-2">
                            <h2 class="h2 text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT<br>
                                SCAN TO BIM SERVICE
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
                                Request a free estimate now!<br>
                                Maximize the potential of your BIM project.
                            </h5>
                        </div>
                    </div>


                    <div class="row justify-content-center">
                        <div class="col-9 mt-4">
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
                                PROJECT ESTIMATE IN 24 HOURS
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
                                        Our specialists evaluate your project*
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
                                        We schedule a meeting to discuss the details**
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h5>
                                        *
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 style="text-align: justify;">
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3).
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
                                PROJECT ESTIMATE IN 24 HOURS
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
                                        Our specialists evaluate your project*
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
                                        We schedule a meeting to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        *
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 style="text-align: justify;">
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3).
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
                                PROJECT ESTIMATE IN 24 HOURS
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
                                        Our specialists evaluate your project*
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
                                        We schedule a meeting to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        *
                                    </h6>
                                </div>
                                <div class="col-11 px-0">
                                    <h6 style="text-align: justify;">
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3).
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
                                PROJECT ESTIMATE IN 24 HOURS
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
                                        Our specialists evaluate your project*
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
                                        We schedule a meeting to discuss the details**
                                    </h6>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-1 ps-0 text-end">
                                    <h6>
                                        *
                                    </h6>
                                </div>
                                <div class="col-11">
                                    <h6 style="text-align: justify;">
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3).
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




    <div id="estimation1" class="container-fluid container-fluid d-none d-xl-block" style="background-color: #849092">
        <div class="container px-0 p-lg-5">
            <div class="row justify-content-center px-0 p-lg-5">
                <div class="col-9 p-5" style="border: 4px solid #72e0df;">
                    <h2 class="display-5 fw-bold mb-5 text-white">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                    <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('estimatesProcessingMep')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-bold border border-0 border-3 border-bottom border-white shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-bold my-4">
                            Type of the building\construction*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Residential Building" {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }} id="type1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type1">
                                        Residential Building
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Industrial Building" {{ (old('type') == 'Industrial Building' ) ? 'checked' : '' }} id="type2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type2">
                                        Industrial Building
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Administrative Building" {{ (old('type') == 'Administrative Building' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type3">
                                        Administrative Building
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project language*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="English"
                                        {{ (old('language') == 'English' ) ? 'checked' : '' }}
                                        id="language1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language1">
                                        English
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="German"
                                        {{ (old('language') == 'German' ) ? 'checked' : '' }}
                                        id="language2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language2">
                                        German
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="French"
                                        {{ (old('language') == 'French' ) ? 'checked' : '' }}
                                        id="language3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language3">
                                        French
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="Ukrainian"
                                        {{ (old('language') == 'Ukrainian' ) ? 'checked' : '' }}
                                        id="language4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language4">
                                        Ukrainian
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="Other"
                                        {{ (old('language') == 'Other' ) ? 'checked' : '' }}
                                        id="language5"
                                        style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="language5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="language-other" value="{{old('language-other', '')}}" placeholder="Write other language">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project units*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Metric" {{ (old('units') == 'Metric' ) ? 'checked' : '' }} id="units1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units1">
                                        Metric
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Imperial" {{ (old('units') == 'Imperial' ) ? 'checked' : '' }} id="units2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units2">
                                        Imperial
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Other" {{ (old('units') == 'Other' ) ? 'checked' : '' }} id="units3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units3">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="units-other" value="{{old('units-other', '')}}" placeholder="Write other units">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Disciplines*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="disciplines[]"
                                        value="HVAC" @if(is_array(old('disciplines')) && in_array('HVAC', old('disciplines'))) checked @endif
                                        id="disciplines1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines1">
                                        HVAC
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif
                                        id="disciplines2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines2">
                                        Plumbing
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif
                                        id="disciplines3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines3">
                                        Electrical
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif
                                        id="disciplines6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines6">
                                        Fire Protection
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Services*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Modeling" @if(is_array(old('services')) && in_array('Modeling', old('services'))) checked @endif
                                        id="services1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services1">
                                        Modeling
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Coordination" @if(is_array(old('services')) && in_array('Coordination', old('services'))) checked @endif
                                        id="services2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services2">
                                        Coordination
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Fabrication" @if(is_array(old('services')) && in_array('Fabrication', old('services'))) checked @endif
                                        id="services3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services3">
                                        Fabrication
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Creating Shop Drawings" @if(is_array(old('services')) && in_array('Creating Shop Drawings', old('services'))) checked @endif
                                        id="services4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services4">
                                        Creating Shop Drawings
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="services[]" value="Other" @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif id="services10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="services10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="services-other" value="{{old('services-other', '')}}" placeholder="Write your service">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            LOD (Level of development)*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="100" {{ (old('lod') == '100' ) ? 'checked' : '' }}
                                        id="lod1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod1">
                                        100
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="200" {{ (old('lod') == '200' ) ? 'checked' : '' }}
                                        id="lod2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod2">
                                        200
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="300" {{ (old('lod') == '300' ) ? 'checked' : '' }}
                                        id="lod3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod3">
                                        300
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="400" {{ (old('lod') == '400' ) ? 'checked' : '' }}
                                        id="lod4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod4">
                                        400
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other lod">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Incoming data*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="PDF drawings"
                                        @if(is_array(old('data')) && in_array('PDF drawings', old('data'))) checked @endif
                                        id="data1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data1">
                                        PDF drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="DWG drawings"
                                        @if(is_array(old('data')) && in_array('DWG drawings', old('data'))) checked @endif
                                        id="data2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data2">
                                        DWG drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="RVT models"
                                        @if(is_array(old('data')) && in_array('RVT models', old('data'))) checked @endif
                                        id="data3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data3">
                                        RVT models
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="RVT templates"
                                        @if(is_array(old('data')) && in_array('RVT templates', old('data'))) checked @endif
                                        id="data4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data4">
                                        RVT templates
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="NWD/NWC models"
                                        @if(is_array(old('data')) && in_array('NWD/NWC models', old('data'))) checked @endif
                                        id="data5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data5">
                                        NWD/NWC models
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="Submittals"
                                        @if(is_array(old('data')) && in_array('Submittals', old('data'))) checked @endif
                                        id="data6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data6">
                                        Submittals
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="Standards"
                                        @if(is_array(old('data')) && in_array('Standards', old('data'))) checked @endif
                                        id="data7"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data7">
                                        Standards
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="data[]" value="Other" @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif id="data10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="data10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="data-other" value="{{old('data-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Revit version*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2020" {{ (old('version') == '2020' ) ? 'checked' : '' }} id="version4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version4">
                                        2020
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2021" {{ (old('version') == '2021' ) ? 'checked' : '' }} id="version5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version5">
                                        2021
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2022" {{ (old('version') == '2022' ) ? 'checked' : '' }} id="version6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version6">
                                        2022
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2023" {{ (old('version') == '2023' ) ? 'checked' : '' }} id="version7" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version7">
                                        2023
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2024" {{ (old('version') == '2024' ) ? 'checked' : '' }} id="version8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version8">
                                        2024
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="Other" {{ (old('version') == 'Other' ) ? 'checked' : '' }} id="version10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="version-other" value="{{old('version-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Coordination software
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Navisworks"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Navisworks', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware1">
                                        Navisworks
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="BIM Track"
                                        @if(is_array(old('coordinationSoftware')) && in_array('BIM Track', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware2">
                                        BIM Track
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Revizto"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Revizto', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware3">
                                        Revizto
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Solibri"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Solibri', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware4">
                                        Solibri
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Other" @if(is_array(old('coordinationSoftware')) && in_array('Other', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware10"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input
                                        class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none"
                                        type="text"
                                        name="coordinationSoftware-other"
                                        value="{{old('coordinationSoftware-other', '')}}"
                                        placeholder="Write your variant"
                                        aria-label=".form-control-lg example"
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Fabrication software
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="CAMduct" {{ (old('fabrication_software') == 'CAMduct' ) ? 'checked' : '' }}
                                        id="fabrication_software1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software1">
                                        CAMduct
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="CADmep" {{ (old('fabrication_software') == 'CADmep' ) ? 'checked' : '' }}
                                        id="fabrication_software2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software2">
                                        CADmep
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="ESTmep" {{ (old('fabrication_software') == 'ESTmep' ) ? 'checked' : '' }}
                                        id="fabrication_software3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software3">
                                        ESTmep
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="SysQue" {{ (old('fabrication_software') == 'SysQue' ) ? 'checked' : '' }}
                                        id="fabrication_software4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software4">
                                        SysQue
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="fabrication_software" value="Other" {{ (old('fabrication_software') == 'Other' ) ? 'checked' : '' }} id="fabrication_software10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="fabrication_software-other" value="{{old('fabrication_software-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Expected project duration*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1-2 weeks" {{ (old('duration') == '1-2 weeks' ) ? 'checked' : '' }}
                                        id="duration1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration1">
                                        1-2 weeks
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1 month" {{ (old('duration') == '1 month' ) ? 'checked' : '' }}
                                        id="duration2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration2">
                                        1 month
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="3 months" {{ (old('duration') == '3 months' ) ? 'checked' : '' }}
                                        id="duration3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration3">
                                        3 months
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="6 months" {{ (old('duration') == '6 months' ) ? 'checked' : '' }}
                                        id="duration4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration4">
                                        6 months
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1 year" {{ (old('duration') == '1 year' ) ? 'checked' : '' }}
                                        id="duration5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration5">
                                        1 year
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="duration" value="Other" {{ (old('duration') == 'Other' ) ? 'checked' : '' }} id="duration10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="duration-other" value="{{old('duration-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of draftsmen
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="1-2 persons" {{ (old('draftsmen') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="draftsmen1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="3-4 persons" {{ (old('draftsmen') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="draftsmen2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="5-6 persons" {{ (old('draftsmen') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="draftsmen3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="draftsmen" value="Other" {{ (old('draftsmen') == 'Other' ) ? 'checked' : '' }} id="draftsmen10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="draftsmen-other" value="{{old('draftsmen-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of modelers
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="1-2 persons" {{ (old('modelers') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="modelers1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="3-4 persons" {{ (old('modelers') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="modelers2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="5-6 persons" {{ (old('modelers') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="modelers3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="modelers" value="Other" {{ (old('modelers') == 'Other' ) ? 'checked' : '' }} id="modelers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="modelers-other" value="{{old('modelers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of coordinators
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="1-2 persons" {{ (old('coordinators') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="coordinators1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="3-4 persons" {{ (old('coordinators') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="coordinators2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="5-6 persons" {{ (old('coordinators') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="coordinators3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="coordinators" value="Other" {{ (old('coordinators') == 'Other' ) ? 'checked' : '' }} id="coordinators10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="coordinators-other" value="{{old('coordinators-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of BIM managers
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="1 person" {{ (old('managers') == '1 person' ) ? 'checked' : '' }}
                                        id="managers1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers1">
                                        1 person
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="2 persons" {{ (old('managers') == '2 persons' ) ? 'checked' : '' }}
                                        id="managers2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers2">
                                        2 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="3 persons" {{ (old('managers') == '3 persons' ) ? 'checked' : '' }}
                                        id="managers3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers3">
                                        3 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="managers" value="Other" {{ (old('managers') == 'Other' ) ? 'checked' : '' }} id="managers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="managers-other" value="{{old('managers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Deliverables*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="RVT model" @if(is_array(old('deliverables')) && in_array('RVT model', old('deliverables'))) checked @endif
                                        id="deliverables1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables1">
                                        RVT model
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="PDF drawings" @if(is_array(old('deliverables')) && in_array('PDF drawings', old('deliverables'))) checked @endif
                                        id="deliverables2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables2">
                                        PDF drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="DWG drawings" @if(is_array(old('deliverables')) && in_array('DWG drawings', old('deliverables'))) checked @endif
                                        id="deliverables3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables3">
                                        DWG drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="NWD model" @if(is_array(old('deliverables')) && in_array('NWD model', old('deliverables'))) checked @endif
                                        id="deliverables4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables4">
                                        NWD model
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="NWC export" @if(is_array(old('deliverables')) && in_array('NWC export', old('deliverables'))) checked @endif
                                        id="deliverables5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables5">
                                        NWC export
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="IFC export" @if(is_array(old('deliverables')) && in_array('IFC export', old('deliverables'))) checked @endif
                                        id="deliverables6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables6">
                                        IFC export
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="Clash Report" @if(is_array(old('deliverables')) && in_array('Clash Report', old('deliverables'))) checked @endif
                                        id="deliverables7"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables7">
                                        Clash Report
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="downtime"
                                        value="Yes, I accept" {{ (old('downtime') == 'Yes, I accept' ) ? 'checked' : '' }}
                                        id="downtime1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="downtime1">
                                        Yes, I accept
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="downtime"
                                        value="No, I don't accept" {{ (old('downtime') == "No, I don't accept" ) ? 'checked' : '' }}
                                        id="downtime2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="downtime2">
                                        No, I don't accept
                                    </label>
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Possibility of making independent technical decisions by the performer.*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="decisions"
                                        value="Yes, but inform the customer" {{ (old('decisions') == 'Yes, but inform the customer' ) ? 'checked' : '' }}
                                        id="decisions1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="decisions1">
                                        Yes, but inform the customer
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="decisions"
                                        value="No, check with the customer for approval" {{ (old('decisions') == "No, check with the customer for approval" ) ? 'checked' : '' }}
                                        id="decisions2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="decisions2">
                                        No, check with the customer for approval
                                    </label>
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Providing models and / or reports to control the work process.
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every day" {{ (old('reports') == 'every day' ) ? 'checked' : '' }}
                                        id="reports1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports1">
                                        every day
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every week" {{ (old('reports') == 'every week' ) ? 'checked' : '' }}
                                        id="reports2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports2">
                                        every week
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every month" {{ (old('reports') == 'every month' ) ? 'checked' : '' }}
                                        id="reports3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports3">
                                        every month
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="after the modeling is completed" {{ (old('reports') == 'after the modeling is completed' ) ? 'checked' : '' }}
                                        id="reports4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports4">
                                        after the modeling is completed
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="according to discussed schedule" {{ (old('reports') == 'according to discussed schedule' ) ? 'checked' : '' }}
                                        id="reports5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports5">
                                        according to discussed schedule
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="reports" value="Other" {{ (old('reports') == 'Other' ) ? 'checked' : '' }} id="reports10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="reports-other" value="{{old('reports-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-semibold text-white mt-4 pt-3">
                            Select files to upload...
                        </h4>
                        <small class="h6">
                            Architectural plan, MEP design drawings, rvt models, ifc models (jpg, pdf, dwg, rvt, ifc)
                        </small>

                        <input
                            class="form-control form-control-lg fw-semibold border border-3 border-white shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            multiple
                        />

                        <div class="mt-5">
                            <x-turnstile data-theme="light" />
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="estimation2" class="container-fluid d-none d-lg-block d-xl-none" style="background-color: #849092">
        <div class="container px-0 p-lg-5">
            <div class="row justify-content-center px-0 p-lg-5">
                <div class="col-11 p-5" style="border: 4px solid #72e0df;">
                    <h2 class="fw-bold mb-5 text-white">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                    <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('estimatesProcessingMep')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-bold border border-0 border-3 border-bottom border-white shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-bold my-4">
                            Type of the building\construction*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Residential Building" {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }} id="type1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type1">
                                        Residential Building
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Industrial Building" {{ (old('type') == 'Industrial Building' ) ? 'checked' : '' }} id="type2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type2">
                                        Industrial Building
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Administrative Building" {{ (old('type') == 'Administrative Building' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type3">
                                        Administrative Building
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project language*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="English"
                                        {{ (old('language') == 'English' ) ? 'checked' : '' }}
                                        id="language1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language1">
                                        English
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="German"
                                        {{ (old('language') == 'German' ) ? 'checked' : '' }}
                                        id="language2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language2">
                                        German
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="French"
                                        {{ (old('language') == 'French' ) ? 'checked' : '' }}
                                        id="language3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language3">
                                        French
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="Ukrainian"
                                        {{ (old('language') == 'Ukrainian' ) ? 'checked' : '' }}
                                        id="language4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="language4">
                                        Ukrainian
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="Other"
                                        {{ (old('language') == 'Other' ) ? 'checked' : '' }}
                                        id="language5"
                                        style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="language5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="language-other" value="{{old('language-other', '')}}" placeholder="Write other language">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project units*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Metric" {{ (old('units') == 'Metric' ) ? 'checked' : '' }} id="units1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units1">
                                        Metric
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Imperial" {{ (old('units') == 'Imperial' ) ? 'checked' : '' }} id="units2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units2">
                                        Imperial
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Other" {{ (old('units') == 'Other' ) ? 'checked' : '' }} id="units3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="units3">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="units-other" value="{{old('units-other', '')}}" placeholder="Write other units">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Disciplines*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="disciplines[]"
                                        value="HVAC" @if(is_array(old('disciplines')) && in_array('HVAC', old('disciplines'))) checked @endif
                                        id="disciplines1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines1">
                                        HVAC
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif
                                        id="disciplines2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines2">
                                        Plumbing
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif
                                        id="disciplines3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines3">
                                        Electrical
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="disciplines[]"
                                        value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif
                                        id="disciplines6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines6">
                                        Fire Protection
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Services*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Modeling" @if(is_array(old('services')) && in_array('Modeling', old('services'))) checked @endif
                                        id="services1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services1">
                                        Modeling
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Coordination" @if(is_array(old('services')) && in_array('Coordination', old('services'))) checked @endif
                                        id="services2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services2">
                                        Coordination
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Fabrication" @if(is_array(old('services')) && in_array('Fabrication', old('services'))) checked @endif
                                        id="services3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services3">
                                        Fabrication
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                        type="checkbox" name="services[]"
                                        value="Creating Shop Drawings" @if(is_array(old('services')) && in_array('Creating Shop Drawings', old('services'))) checked @endif
                                        id="services4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="services4">
                                        Creating Shop Drawings
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="services[]" value="Other" @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif id="services10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="services10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="services-other" value="{{old('services-other', '')}}" placeholder="Write your service">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            LOD (Level of development)*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="100" {{ (old('lod') == '100' ) ? 'checked' : '' }}
                                        id="lod1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod1">
                                        100
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="200" {{ (old('lod') == '200' ) ? 'checked' : '' }}
                                        id="lod2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod2">
                                        200
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="300" {{ (old('lod') == '300' ) ? 'checked' : '' }}
                                        id="lod3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod3">
                                        300
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="lod"
                                        value="400" {{ (old('lod') == '400' ) ? 'checked' : '' }}
                                        id="lod4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod4">
                                        400
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other lod">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Incoming data*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="PDF drawings"
                                        @if(is_array(old('data')) && in_array('PDF drawings', old('data'))) checked @endif
                                        id="data1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data1">
                                        PDF drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="DWG drawings"
                                        @if(is_array(old('data')) && in_array('DWG drawings', old('data'))) checked @endif
                                        id="data2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data2">
                                        DWG drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="RVT models"
                                        @if(is_array(old('data')) && in_array('RVT models', old('data'))) checked @endif
                                        id="data3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data3">
                                        RVT models
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="RVT templates"
                                        @if(is_array(old('data')) && in_array('RVT templates', old('data'))) checked @endif
                                        id="data4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data4">
                                        RVT templates
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="NWD/NWC models"
                                        @if(is_array(old('data')) && in_array('NWD/NWC models', old('data'))) checked @endif
                                        id="data5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data5">
                                        NWD/NWC models
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="Submittals"
                                        @if(is_array(old('data')) && in_array('Submittals', old('data'))) checked @endif
                                        id="data6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data6">
                                        Submittals
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="data[]"
                                        value="Standards"
                                        @if(is_array(old('data')) && in_array('Standards', old('data'))) checked @endif
                                        id="data7"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="data7">
                                        Standards
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="data[]" value="Other" @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif id="data10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="data10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="data-other" value="{{old('data-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Revit version*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2020" {{ (old('version') == '2020' ) ? 'checked' : '' }} id="version4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version4">
                                        2020
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2021" {{ (old('version') == '2021' ) ? 'checked' : '' }} id="version5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version5">
                                        2021
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2022" {{ (old('version') == '2022' ) ? 'checked' : '' }} id="version6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version6">
                                        2022
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2023" {{ (old('version') == '2023' ) ? 'checked' : '' }} id="version7" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version7">
                                        2023
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2024" {{ (old('version') == '2024' ) ? 'checked' : '' }} id="version8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version8">
                                        2024
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="Other" {{ (old('version') == 'Other' ) ? 'checked' : '' }} id="version10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="version10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="version-other" value="{{old('version-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Coordination software
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Navisworks"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Navisworks', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware1">
                                        Navisworks
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="BIM Track"
                                        @if(is_array(old('coordinationSoftware')) && in_array('BIM Track', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware2">
                                        BIM Track
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Revizto"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Revizto', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware3">
                                        Revizto
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Solibri"
                                        @if(is_array(old('coordinationSoftware')) && in_array('Solibri', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware4">
                                        Solibri
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Other" @if(is_array(old('coordinationSoftware')) && in_array('Other', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware10"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input
                                        class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none"
                                        type="text"
                                        name="coordinationSoftware-other"
                                        value="{{old('coordinationSoftware-other', '')}}"
                                        placeholder="Write your variant"
                                        aria-label=".form-control-lg example"
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Fabrication software
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="CAMduct" {{ (old('fabrication_software') == 'CAMduct' ) ? 'checked' : '' }}
                                        id="fabrication_software1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software1">
                                        CAMduct
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="CADmep" {{ (old('fabrication_software') == 'CADmep' ) ? 'checked' : '' }}
                                        id="fabrication_software2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software2">
                                        CADmep
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="ESTmep" {{ (old('fabrication_software') == 'ESTmep' ) ? 'checked' : '' }}
                                        id="fabrication_software3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software3">
                                        ESTmep
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="fabrication_software"
                                        value="SysQue" {{ (old('fabrication_software') == 'SysQue' ) ? 'checked' : '' }}
                                        id="fabrication_software4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software4">
                                        SysQue
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="fabrication_software" value="Other" {{ (old('fabrication_software') == 'Other' ) ? 'checked' : '' }} id="fabrication_software10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="fabrication_software-other" value="{{old('fabrication_software-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Expected project duration*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1-2 weeks" {{ (old('duration') == '1-2 weeks' ) ? 'checked' : '' }}
                                        id="duration1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration1">
                                        1-2 weeks
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1 month" {{ (old('duration') == '1 month' ) ? 'checked' : '' }}
                                        id="duration2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration2">
                                        1 month
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="3 months" {{ (old('duration') == '3 months' ) ? 'checked' : '' }}
                                        id="duration3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration3">
                                        3 months
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="6 months" {{ (old('duration') == '6 months' ) ? 'checked' : '' }}
                                        id="duration4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration4">
                                        6 months
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="duration"
                                        value="1 year" {{ (old('duration') == '1 year' ) ? 'checked' : '' }}
                                        id="duration5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration5">
                                        1 year
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="duration" value="Other" {{ (old('duration') == 'Other' ) ? 'checked' : '' }} id="duration10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="duration-other" value="{{old('duration-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of draftsmen
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="1-2 persons" {{ (old('draftsmen') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="draftsmen1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="3-4 persons" {{ (old('draftsmen') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="draftsmen2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="draftsmen"
                                        value="5-6 persons" {{ (old('draftsmen') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="draftsmen3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="draftsmen" value="Other" {{ (old('draftsmen') == 'Other' ) ? 'checked' : '' }} id="draftsmen10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="draftsmen10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="draftsmen-other" value="{{old('draftsmen-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of modelers
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="1-2 persons" {{ (old('modelers') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="modelers1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="3-4 persons" {{ (old('modelers') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="modelers2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="modelers"
                                        value="5-6 persons" {{ (old('modelers') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="modelers3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="modelers" value="Other" {{ (old('modelers') == 'Other' ) ? 'checked' : '' }} id="modelers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="modelers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="modelers-other" value="{{old('modelers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of coordinators
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="1-2 persons" {{ (old('coordinators') == '1-2 persons' ) ? 'checked' : '' }}
                                        id="coordinators1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators1">
                                        1-2 persons
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="3-4 persons" {{ (old('coordinators') == '3-4 persons' ) ? 'checked' : '' }}
                                        id="coordinators2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators2">
                                        3-4 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="coordinators"
                                        value="5-6 persons" {{ (old('coordinators') == '5-6 persons' ) ? 'checked' : '' }}
                                        id="coordinators3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators3">
                                        5-6 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="coordinators" value="Other" {{ (old('coordinators') == 'Other' ) ? 'checked' : '' }} id="coordinators10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="coordinators10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="coordinators-other" value="{{old('coordinators-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of BIM managers
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="1 person" {{ (old('managers') == '1 person' ) ? 'checked' : '' }}
                                        id="managers1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers1">
                                        1 person
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="2 persons" {{ (old('managers') == '2 persons' ) ? 'checked' : '' }}
                                        id="managers2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers2">
                                        2 persons
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="managers"
                                        value="3 persons" {{ (old('managers') == '3 persons' ) ? 'checked' : '' }}
                                        id="managers3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers3">
                                        3 persons
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="managers" value="Other" {{ (old('managers') == 'Other' ) ? 'checked' : '' }} id="managers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="managers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="managers-other" value="{{old('managers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Deliverables*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="RVT model" @if(is_array(old('deliverables')) && in_array('RVT model', old('deliverables'))) checked @endif
                                        id="deliverables1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables1">
                                        RVT model
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="PDF drawings" @if(is_array(old('deliverables')) && in_array('PDF drawings', old('deliverables'))) checked @endif
                                        id="deliverables2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables2">
                                        PDF drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="DWG drawings" @if(is_array(old('deliverables')) && in_array('DWG drawings', old('deliverables'))) checked @endif
                                        id="deliverables3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables3">
                                        DWG drawings
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="NWD model" @if(is_array(old('deliverables')) && in_array('NWD model', old('deliverables'))) checked @endif
                                        id="deliverables4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables4">
                                        NWD model
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="NWC export" @if(is_array(old('deliverables')) && in_array('NWC export', old('deliverables'))) checked @endif
                                        id="deliverables5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables5">
                                        NWC export
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="IFC export" @if(is_array(old('deliverables')) && in_array('IFC export', old('deliverables'))) checked @endif
                                        id="deliverables6"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables6">
                                        IFC export
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="deliverables[]"
                                        value="Clash Report" @if(is_array(old('deliverables')) && in_array('Clash Report', old('deliverables'))) checked @endif
                                        id="deliverables7"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables7">
                                        Clash Report
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="downtime"
                                        value="Yes, I accept" {{ (old('downtime') == 'Yes, I accept' ) ? 'checked' : '' }}
                                        id="downtime1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="downtime1">
                                        Yes, I accept
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="downtime"
                                        value="No, I don't accept" {{ (old('downtime') == "No, I don't accept" ) ? 'checked' : '' }}
                                        id="downtime2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="downtime2">
                                        No, I don't accept
                                    </label>
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Possibility of making independent technical decisions by the performer.*
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="decisions"
                                        value="Yes, but inform the customer" {{ (old('decisions') == 'Yes, but inform the customer' ) ? 'checked' : '' }}
                                        id="decisions1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="decisions1">
                                        Yes, but inform the customer
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="decisions"
                                        value="No, check with the customer for approval" {{ (old('decisions') == "No, check with the customer for approval" ) ? 'checked' : '' }}
                                        id="decisions2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="decisions2">
                                        No, check with the customer for approval
                                    </label>
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Providing models and / or reports to control the work process.
                        </h4>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every day" {{ (old('reports') == 'every day' ) ? 'checked' : '' }}
                                        id="reports1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports1">
                                        every day
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every week" {{ (old('reports') == 'every week' ) ? 'checked' : '' }}
                                        id="reports2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports2">
                                        every week
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="every month" {{ (old('reports') == 'every month' ) ? 'checked' : '' }}
                                        id="reports3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports3">
                                        every month
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="after the modeling is completed" {{ (old('reports') == 'after the modeling is completed' ) ? 'checked' : '' }}
                                        id="reports4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports4">
                                        after the modeling is completed
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="reports"
                                        value="according to discussed schedule" {{ (old('reports') == 'according to discussed schedule' ) ? 'checked' : '' }}
                                        id="reports5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports5">
                                        according to discussed schedule
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="reports" value="Other" {{ (old('reports') == 'Other' ) ? 'checked' : '' }} id="reports10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="reports10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="reports-other" value="{{old('reports-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-semibold text-white mt-4 pt-3">
                            Select files to upload...
                        </h4>
                        <small class="h6">
                            Architectural plan, MEP design drawings, rvt models, ifc models (jpg, pdf, dwg, rvt, ifc)
                        </small>

                        <input
                            class="form-control form-control-lg fw-semibold border border-3 border-white shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            multiple
                        />

                        <div class="mt-5">
                            <x-turnstile data-theme="light" />
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="estimation3" class="container-fluid d-none d-md-block d-lg-none" style="background-color: #849092">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-xl-7 px-0">
                    <h2 class="fw-bold mb-0 text-white">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-12 px-0">
                    <div class="col-12 col-xl-6 ps-0 pe-5 mt-5">
                        <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('estimatesProcessingMep')}}">
                            @csrf

                            <input
                                class="form-control form-control-lg fw-bold border border-0 border-3 border-bottom border-white shadow-none rounded-0"
                                type="email"
                                name="email"
                                placeholder="Email*"
                                value="{{old('email', '')}}"
                                aria-label=".form-control-lg example"
                            />

                            <h4 class="fw-bold my-4">
                                Type of the building\construction*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Residential Building" {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }} id="type1" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="type1">
                                            Residential Building
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Industrial Building" {{ (old('type') == 'Industrial Building' ) ? 'checked' : '' }} id="type2" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="type2">
                                            Industrial Building
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Administrative Building" {{ (old('type') == 'Administrative Building' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="type3">
                                            Administrative Building
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="type6">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Project language*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="language"
                                            value="English"
                                            {{ (old('language') == 'English' ) ? 'checked' : '' }}
                                            id="language1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="language1">
                                            English
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="language"
                                            value="German"
                                            {{ (old('language') == 'German' ) ? 'checked' : '' }}
                                            id="language2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="language2">
                                            German
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="language"
                                            value="French"
                                            {{ (old('language') == 'French' ) ? 'checked' : '' }}
                                            id="language3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="language3">
                                            French
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="language"
                                            value="Ukrainian"
                                            {{ (old('language') == 'Ukrainian' ) ? 'checked' : '' }}
                                            id="language4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="language4">
                                            Ukrainian
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="language"
                                            value="Other"
                                            {{ (old('language') == 'Other' ) ? 'checked' : '' }}
                                            id="language5"
                                            style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="language5">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="language-other" value="{{old('language-other', '')}}" placeholder="Write other language">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Project units*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Metric" {{ (old('units') == 'Metric' ) ? 'checked' : '' }} id="units1" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="units1">
                                            Metric
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Imperial" {{ (old('units') == 'Imperial' ) ? 'checked' : '' }} id="units2" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="units2">
                                            Imperial
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="units" value="Other" {{ (old('units') == 'Other' ) ? 'checked' : '' }} id="units3" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="units3">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="units-other" value="{{old('units-other', '')}}" placeholder="Write other units">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Disciplines*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                            type="checkbox" name="disciplines[]"
                                            value="HVAC" @if(is_array(old('disciplines')) && in_array('HVAC', old('disciplines'))) checked @endif
                                            id="disciplines1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="disciplines1">
                                            HVAC
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="disciplines[]"
                                            value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif
                                            id="disciplines2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="disciplines2">
                                            Plumbing
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="disciplines[]"
                                            value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif
                                            id="disciplines3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="disciplines3">
                                            Electrical
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="disciplines[]"
                                            value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif
                                            id="disciplines6"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="disciplines6">
                                            Fire Protection
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="disciplines8">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Services*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                            type="checkbox" name="services[]"
                                            value="Modeling" @if(is_array(old('services')) && in_array('Modeling', old('services'))) checked @endif
                                            id="services1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="services1">
                                            Modeling
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                            type="checkbox" name="services[]"
                                            value="Coordination" @if(is_array(old('services')) && in_array('Coordination', old('services'))) checked @endif
                                            id="services2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="services2">
                                            Coordination
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                            type="checkbox" name="services[]"
                                            value="Fabrication" @if(is_array(old('services')) && in_array('Fabrication', old('services'))) checked @endif
                                            id="services3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="services3">
                                            Fabrication
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                            type="checkbox" name="services[]"
                                            value="Creating Shop Drawings" @if(is_array(old('services')) && in_array('Creating Shop Drawings', old('services'))) checked @endif
                                            id="services4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="services4">
                                            Creating Shop Drawings
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="services[]" value="Other" @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif id="services10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="services10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="services-other" value="{{old('services-other', '')}}" placeholder="Write your service">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                LOD (Level of development)*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="lod"
                                            value="100" {{ (old('lod') == '100' ) ? 'checked' : '' }}
                                            id="lod1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="lod1">
                                            100
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="lod"
                                            value="200" {{ (old('lod') == '200' ) ? 'checked' : '' }}
                                            id="lod2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="lod2">
                                            200
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="lod"
                                            value="300" {{ (old('lod') == '300' ) ? 'checked' : '' }}
                                            id="lod3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="lod3">
                                            300
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="lod"
                                            value="400" {{ (old('lod') == '400' ) ? 'checked' : '' }}
                                            id="lod4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="lod4">
                                            400
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="lod5">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other lod">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Incoming data*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="PDF drawings"
                                            @if(is_array(old('data')) && in_array('PDF drawings', old('data'))) checked @endif
                                            id="data1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data1">
                                            PDF drawings
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="DWG drawings"
                                            @if(is_array(old('data')) && in_array('DWG drawings', old('data'))) checked @endif
                                            id="data2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data2">
                                            DWG drawings
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="RVT models"
                                            @if(is_array(old('data')) && in_array('RVT models', old('data'))) checked @endif
                                            id="data3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data3">
                                            RVT models
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="RVT templates"
                                            @if(is_array(old('data')) && in_array('RVT templates', old('data'))) checked @endif
                                            id="data4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data4">
                                            RVT templates
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="NWD/NWC models"
                                            @if(is_array(old('data')) && in_array('NWD/NWC models', old('data'))) checked @endif
                                            id="data5"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data5">
                                            NWD/NWC models
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="Submittals"
                                            @if(is_array(old('data')) && in_array('Submittals', old('data'))) checked @endif
                                            id="data6"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data6">
                                            Submittals
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="data[]"
                                            value="Standards"
                                            @if(is_array(old('data')) && in_array('Standards', old('data'))) checked @endif
                                            id="data7"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="data7">
                                            Standards
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="data[]" value="Other" @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif id="data10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="data10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="data-other" value="{{old('data-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Revit version*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2020" {{ (old('version') == '2020' ) ? 'checked' : '' }} id="version4" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version4">
                                            2020
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2021" {{ (old('version') == '2021' ) ? 'checked' : '' }} id="version5" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version5">
                                            2021
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2022" {{ (old('version') == '2022' ) ? 'checked' : '' }} id="version6" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version6">
                                            2022
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2023" {{ (old('version') == '2023' ) ? 'checked' : '' }} id="version7" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version7">
                                            2023
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="2024" {{ (old('version') == '2024' ) ? 'checked' : '' }} id="version8" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version8">
                                            2024
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="version" value="Other" {{ (old('version') == 'Other' ) ? 'checked' : '' }} id="version10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="version10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="version-other" value="{{old('version-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Coordination software
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="coordinationSoftware[]"
                                            value="Navisworks"
                                            @if(is_array(old('coordinationSoftware')) && in_array('Navisworks', old('coordinationSoftware'))) checked @endif
                                            id="coordinationSoftware1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware1">
                                            Navisworks
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="coordinationSoftware[]"
                                            value="BIM Track"
                                            @if(is_array(old('coordinationSoftware')) && in_array('BIM Track', old('coordinationSoftware'))) checked @endif
                                            id="coordinationSoftware2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware2">
                                            BIM Track
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="coordinationSoftware[]"
                                            value="Revizto"
                                            @if(is_array(old('coordinationSoftware')) && in_array('Revizto', old('coordinationSoftware'))) checked @endif
                                            id="coordinationSoftware3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware3">
                                            Revizto
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="coordinationSoftware[]"
                                            value="Solibri"
                                            @if(is_array(old('coordinationSoftware')) && in_array('Solibri', old('coordinationSoftware'))) checked @endif
                                            id="coordinationSoftware4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware4">
                                            Solibri
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="coordinationSoftware[]"
                                            value="Other" @if(is_array(old('coordinationSoftware')) && in_array('Other', old('coordinationSoftware'))) checked @endif
                                            id="coordinationSoftware10"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinationSoftware10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input
                                            class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none"
                                            type="text"
                                            name="coordinationSoftware-other"
                                            value="{{old('coordinationSoftware-other', '')}}"
                                            placeholder="Write your variant"
                                            aria-label=".form-control-lg example"
                                        >
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Fabrication software
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="fabrication_software"
                                            value="CAMduct" {{ (old('fabrication_software') == 'CAMduct' ) ? 'checked' : '' }}
                                            id="fabrication_software1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software1">
                                            CAMduct
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="fabrication_software"
                                            value="CADmep" {{ (old('fabrication_software') == 'CADmep' ) ? 'checked' : '' }}
                                            id="fabrication_software2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software2">
                                            CADmep
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="fabrication_software"
                                            value="ESTmep" {{ (old('fabrication_software') == 'ESTmep' ) ? 'checked' : '' }}
                                            id="fabrication_software3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software3">
                                            ESTmep
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="fabrication_software"
                                            value="SysQue" {{ (old('fabrication_software') == 'SysQue' ) ? 'checked' : '' }}
                                            id="fabrication_software4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software4">
                                            SysQue
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="fabrication_software" value="Other" {{ (old('fabrication_software') == 'Other' ) ? 'checked' : '' }} id="fabrication_software10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="fabrication_software10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="fabrication_software-other" value="{{old('fabrication_software-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Expected project duration*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="duration"
                                            value="1-2 weeks" {{ (old('duration') == '1-2 weeks' ) ? 'checked' : '' }}
                                            id="duration1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration1">
                                            1-2 weeks
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="duration"
                                            value="1 month" {{ (old('duration') == '1 month' ) ? 'checked' : '' }}
                                            id="duration2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration2">
                                            1 month
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="duration"
                                            value="3 months" {{ (old('duration') == '3 months' ) ? 'checked' : '' }}
                                            id="duration3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration3">
                                            3 months
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="duration"
                                            value="6 months" {{ (old('duration') == '6 months' ) ? 'checked' : '' }}
                                            id="duration4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration4">
                                            6 months
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="duration"
                                            value="1 year" {{ (old('duration') == '1 year' ) ? 'checked' : '' }}
                                            id="duration5"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration5">
                                            1 year
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="duration" value="Other" {{ (old('duration') == 'Other' ) ? 'checked' : '' }} id="duration10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="duration10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="duration-other" value="{{old('duration-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Required number of draftsmen
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="draftsmen"
                                            value="1-2 persons" {{ (old('draftsmen') == '1-2 persons' ) ? 'checked' : '' }}
                                            id="draftsmen1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="draftsmen1">
                                            1-2 persons
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="draftsmen"
                                            value="3-4 persons" {{ (old('draftsmen') == '3-4 persons' ) ? 'checked' : '' }}
                                            id="draftsmen2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="draftsmen2">
                                            3-4 persons
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="draftsmen"
                                            value="5-6 persons" {{ (old('draftsmen') == '5-6 persons' ) ? 'checked' : '' }}
                                            id="draftsmen3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="draftsmen3">
                                            5-6 persons
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="draftsmen" value="Other" {{ (old('draftsmen') == 'Other' ) ? 'checked' : '' }} id="draftsmen10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="draftsmen10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="draftsmen-other" value="{{old('draftsmen-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Required number of modelers
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="modelers"
                                            value="1-2 persons" {{ (old('modelers') == '1-2 persons' ) ? 'checked' : '' }}
                                            id="modelers1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="modelers1">
                                            1-2 persons
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="modelers"
                                            value="3-4 persons" {{ (old('modelers') == '3-4 persons' ) ? 'checked' : '' }}
                                            id="modelers2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="modelers2">
                                            3-4 persons
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="modelers"
                                            value="5-6 persons" {{ (old('modelers') == '5-6 persons' ) ? 'checked' : '' }}
                                            id="modelers3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="modelers3">
                                            5-6 persons
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="modelers" value="Other" {{ (old('modelers') == 'Other' ) ? 'checked' : '' }} id="modelers10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="modelers10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="modelers-other" value="{{old('modelers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Required number of coordinators
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="coordinators"
                                            value="1-2 persons" {{ (old('coordinators') == '1-2 persons' ) ? 'checked' : '' }}
                                            id="coordinators1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinators1">
                                            1-2 persons
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="coordinators"
                                            value="3-4 persons" {{ (old('coordinators') == '3-4 persons' ) ? 'checked' : '' }}
                                            id="coordinators2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinators2">
                                            3-4 persons
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="coordinators"
                                            value="5-6 persons" {{ (old('coordinators') == '5-6 persons' ) ? 'checked' : '' }}
                                            id="coordinators3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinators3">
                                            5-6 persons
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="coordinators" value="Other" {{ (old('coordinators') == 'Other' ) ? 'checked' : '' }} id="coordinators10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="coordinators10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="coordinators-other" value="{{old('coordinators-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Required number of BIM managers
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="managers"
                                            value="1 person" {{ (old('managers') == '1 person' ) ? 'checked' : '' }}
                                            id="managers1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="managers1">
                                            1 person
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="managers"
                                            value="2 persons" {{ (old('managers') == '2 persons' ) ? 'checked' : '' }}
                                            id="managers2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="managers2">
                                            2 persons
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="managers"
                                            value="3 persons" {{ (old('managers') == '3 persons' ) ? 'checked' : '' }}
                                            id="managers3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="managers3">
                                            3 persons
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="managers" value="Other" {{ (old('managers') == 'Other' ) ? 'checked' : '' }} id="managers10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="managers10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="managers-other" value="{{old('managers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                Deliverables*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="RVT model" @if(is_array(old('deliverables')) && in_array('RVT model', old('deliverables'))) checked @endif
                                            id="deliverables1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables1">
                                            RVT model
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="PDF drawings" @if(is_array(old('deliverables')) && in_array('PDF drawings', old('deliverables'))) checked @endif
                                            id="deliverables2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables2">
                                            PDF drawings
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="DWG drawings" @if(is_array(old('deliverables')) && in_array('DWG drawings', old('deliverables'))) checked @endif
                                            id="deliverables3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables3">
                                            DWG drawings
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="NWD model" @if(is_array(old('deliverables')) && in_array('NWD model', old('deliverables'))) checked @endif
                                            id="deliverables4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables4">
                                            NWD model
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="NWC export" @if(is_array(old('deliverables')) && in_array('NWC export', old('deliverables'))) checked @endif
                                            id="deliverables5"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables5">
                                            NWC export
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="IFC export" @if(is_array(old('deliverables')) && in_array('IFC export', old('deliverables'))) checked @endif
                                            id="deliverables6"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables6">
                                            IFC export
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="checkbox"
                                            name="deliverables[]"
                                            value="Clash Report" @if(is_array(old('deliverables')) && in_array('Clash Report', old('deliverables'))) checked @endif
                                            id="deliverables7"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables7">
                                            Clash Report
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="deliverables10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <h4 class="fw-bold my-4">
                                In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="downtime"
                                            value="Yes, I accept" {{ (old('downtime') == 'Yes, I accept' ) ? 'checked' : '' }}
                                            id="downtime1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="downtime1">
                                            Yes, I accept
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="downtime"
                                            value="No, I don't accept" {{ (old('downtime') == "No, I don't accept" ) ? 'checked' : '' }}
                                            id="downtime2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="downtime2">
                                            No, I don't accept
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <h4 class="fw-bold my-4">
                                Possibility of making independent technical decisions by the performer.*
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="decisions"
                                            value="Yes, but inform the customer" {{ (old('decisions') == 'Yes, but inform the customer' ) ? 'checked' : '' }}
                                            id="decisions1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="decisions1">
                                            Yes, but inform the customer
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="decisions"
                                            value="No, check with the customer for approval" {{ (old('decisions') == "No, check with the customer for approval" ) ? 'checked' : '' }}
                                            id="decisions2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="decisions2">
                                            No, check with the customer for approval
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <h4 class="fw-bold my-4">
                                Providing models and / or reports to control the work process.
                            </h4>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="reports"
                                            value="every day" {{ (old('reports') == 'every day' ) ? 'checked' : '' }}
                                            id="reports1"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports1">
                                            every day
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="reports"
                                            value="every week" {{ (old('reports') == 'every week' ) ? 'checked' : '' }}
                                            id="reports2"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports2">
                                            every week
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="reports"
                                            value="every month" {{ (old('reports') == 'every month' ) ? 'checked' : '' }}
                                            id="reports3"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports3">
                                            every month
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="reports"
                                            value="after the modeling is completed" {{ (old('reports') == 'after the modeling is completed' ) ? 'checked' : '' }}
                                            id="reports4"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports4">
                                            after the modeling is completed
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input
                                            class="form-check-input fw-bold border border-3 border-white shadow-none"
                                            type="radio"
                                            name="reports"
                                            value="according to discussed schedule" {{ (old('reports') == 'according to discussed schedule' ) ? 'checked' : '' }}
                                            id="reports5"
                                            style="width: 30px; height: 30px;"
                                        >
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports5">
                                            according to discussed schedule
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3">
                                    <div class="form-check d-flex align-items-center mb-3">
                                        <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="reports" value="Other" {{ (old('reports') == 'Other' ) ? 'checked' : '' }} id="reports10" style="width: 30px; height: 30px;">
                                        <label class="form-check-label ms-1 mt-2 h5" for="reports10">
                                            Other
                                        </label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="mb-3">
                                        <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="reports-other" value="{{old('reports-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                    </div>
                                </div>
                            </div>

                            <input
                                class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                                type="text"
                                name="comment"
                                placeholder="Comment"
                                value="{{old('comment', '')}}"
                                aria-label=".form-control-lg example"
                            />

                            <h4 class="fw-semibold text-white mt-4 pt-3">
                                Select files to upload...
                            </h4>
                            <small class="h6">
                                Architectural plan, MEP design drawings, rvt models, ifc models (jpg, pdf, dwg, rvt, ifc)
                            </small>

                            <input
                                class="form-control form-control-lg fw-semibold border border-3 border-white shadow-none rounded-0 mt-4 rounded-4"
                                type="file"
                                name="files[]"
                                placeholder="Select files"
                                id="files"
                                multiple
                            />

                            <div class="mt-5">
                                <x-turnstile data-theme="light" />
                            </div>

                            <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-5" style="background-color: #6bdcdb">
                                <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="estimation4" class="container-fluid d-md-none" style="background-color: #849092">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="fw-bold mb-0 text-white">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-12 mt-3">
                    <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('estimatesProcessingMep')}}">
                        @csrf

                        <input
                            class="form-control form-control-lg fw-bold border border-0 border-4 border-bottom border-white shadow-none rounded-0"
                            type="email"
                            name="email"
                            placeholder="Email*"
                            value="{{old('email', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-bold my-4">
                            Type of the building\construction*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Residential Building" {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }} id="type1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type1">
                                Residential Building
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Industrial Building" {{ (old('type') == 'Industrial Building' ) ? 'checked' : '' }} id="type2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type2">
                                Industrial Building
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Administrative Building" {{ (old('type') == 'Administrative Building' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type3">
                                Administrative Building
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project language*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="language"
                                value="English"
                                {{ (old('language') == 'English' ) ? 'checked' : '' }}
                                id="language1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language1">
                                English
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="language"
                                value="German"
                                {{ (old('language') == 'German' ) ? 'checked' : '' }}
                                id="language2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language2">
                                German
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="language"
                                value="French"
                                {{ (old('language') == 'French' ) ? 'checked' : '' }}
                                id="language3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language3">
                                French
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="language"
                                value="Ukrainian"
                                {{ (old('language') == 'Ukrainian' ) ? 'checked' : '' }}
                                id="language4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language4">
                                Ukrainian
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-4 border-white shadow-none"
                                        type="radio"
                                        name="language"
                                        value="Other"
                                        {{ (old('language') == 'Other' ) ? 'checked' : '' }}
                                        id="language5"
                                        style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="language-other" value="{{old('language-other', '')}}" placeholder="Write other language">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project units*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="units" value="Metric" {{ (old('units') == 'Metric' ) ? 'checked' : '' }} id="units1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="units1">
                                Metric
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="units" value="Imperial" {{ (old('units') == 'Imperial' ) ? 'checked' : '' }} id="units2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="units2">
                                Imperial
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="units" value="Other" {{ (old('units') == 'Other' ) ? 'checked' : '' }} id="units3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="units3">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="units-other" value="{{old('units-other', '')}}" placeholder="Write other units">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Disciplines*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none fw-bold text-white"
                                type="checkbox" name="disciplines[]"
                                value="HVAC" @if(is_array(old('disciplines')) && in_array('HVAC', old('disciplines'))) checked @endif
                                id="disciplines1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines1">
                                HVAC
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="disciplines[]"
                                value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif
                                id="disciplines2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines2">
                                Plumbing
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="disciplines[]"
                                value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif
                                id="disciplines3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines3">
                                Electrical
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="disciplines[]"
                                value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif
                                id="disciplines6"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines6">
                                Fire Protection
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Services*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none fw-bold text-white"
                                type="checkbox" name="services[]"
                                value="Modeling" @if(is_array(old('services')) && in_array('Modeling', old('services'))) checked @endif
                                id="services1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="services1">
                                Modeling
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none fw-bold text-white"
                                type="checkbox" name="services[]"
                                value="Coordination" @if(is_array(old('services')) && in_array('Coordination', old('services'))) checked @endif
                                id="services2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="services2">
                                Coordination
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none fw-bold text-white"
                                type="checkbox" name="services[]"
                                value="Fabrication" @if(is_array(old('services')) && in_array('Fabrication', old('services'))) checked @endif
                                id="services3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="services3">
                                Fabrication
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none fw-bold text-white"
                                type="checkbox" name="services[]"
                                value="Creating Shop Drawings" @if(is_array(old('services')) && in_array('Creating Shop Drawings', old('services'))) checked @endif
                                id="services4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="services4">
                                Creating Shop Drawings
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="services[]" value="Other" @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif id="services10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="services10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="services-other" value="{{old('services-other', '')}}" placeholder="Write your service">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            LOD (Level of development)*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="lod"
                                value="100" {{ (old('lod') == '100' ) ? 'checked' : '' }}
                                id="lod1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod1">
                                100
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="lod"
                                value="200" {{ (old('lod') == '200' ) ? 'checked' : '' }}
                                id="lod2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod2">
                                200
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="lod"
                                value="300" {{ (old('lod') == '300' ) ? 'checked' : '' }}
                                id="lod3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod3">
                                300
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="lod"
                                value="400" {{ (old('lod') == '400' ) ? 'checked' : '' }}
                                id="lod4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod4">
                                400
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other lod">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Revit version*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2020" {{ (old('version') == '2020' ) ? 'checked' : '' }} id="version4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version4">
                                2020
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2021" {{ (old('version') == '2021' ) ? 'checked' : '' }} id="version5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version5">
                                2021
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2022" {{ (old('version') == '2022' ) ? 'checked' : '' }} id="version6" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version6">
                                2022
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2023" {{ (old('version') == '2023' ) ? 'checked' : '' }} id="version7" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version7">
                                2023
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2024" {{ (old('version') == '2024' ) ? 'checked' : '' }} id="version8" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version8">
                                2024
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="Other" {{ (old('version') == 'Other' ) ? 'checked' : '' }} id="version10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="version-other" value="{{old('version-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Coordination software
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="coordinationSoftware[]"
                                value="Navisworks"
                                @if(is_array(old('coordinationSoftware')) && in_array('Navisworks', old('coordinationSoftware'))) checked @endif
                                id="coordinationSoftware1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinationSoftware1">
                                Navisworks
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="coordinationSoftware[]"
                                value="BIM Track"
                                @if(is_array(old('coordinationSoftware')) && in_array('BIM Track', old('coordinationSoftware'))) checked @endif
                                id="coordinationSoftware2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinationSoftware2">
                                BIM Track
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="coordinationSoftware[]"
                                value="Revizto"
                                @if(is_array(old('coordinationSoftware')) && in_array('Revizto', old('coordinationSoftware'))) checked @endif
                                id="coordinationSoftware3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinationSoftware3">
                                Revizto
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="coordinationSoftware[]"
                                value="Solibri"
                                @if(is_array(old('coordinationSoftware')) && in_array('Solibri', old('coordinationSoftware'))) checked @endif
                                id="coordinationSoftware4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinationSoftware4">
                                Solibri
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-4 border-white shadow-none"
                                        type="checkbox"
                                        name="coordinationSoftware[]"
                                        value="Other" @if(is_array(old('coordinationSoftware')) && in_array('Other', old('coordinationSoftware'))) checked @endif
                                        id="coordinationSoftware10"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinationSoftware10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input
                                        class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none"
                                        type="text"
                                        name="coordinationSoftware-other"
                                        value="{{old('coordinationSoftware-other', '')}}"
                                        placeholder="Write your variant"
                                        aria-label=".form-control-lg example"
                                    >
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Fabrication software
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="fabrication_software"
                                value="CAMduct" {{ (old('fabrication_software') == 'CAMduct' ) ? 'checked' : '' }}
                                id="fabrication_software1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="fabrication_software1">
                                CAMduct
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="fabrication_software"
                                value="CADmep" {{ (old('fabrication_software') == 'CADmep' ) ? 'checked' : '' }}
                                id="fabrication_software2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="fabrication_software2">
                                CADmep
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="fabrication_software"
                                value="ESTmep" {{ (old('fabrication_software') == 'ESTmep' ) ? 'checked' : '' }}
                                id="fabrication_software3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="fabrication_software3">
                                ESTmep
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="fabrication_software"
                                value="SysQue" {{ (old('fabrication_software') == 'SysQue' ) ? 'checked' : '' }}
                                id="fabrication_software4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="fabrication_software4">
                                SysQue
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="fabrication_software" value="Other" {{ (old('fabrication_software') == 'Other' ) ? 'checked' : '' }} id="fabrication_software10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="fabrication_software10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="fabrication_software-other" value="{{old('fabrication_software-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Expected project duration*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="duration"
                                value="1-2 weeks" {{ (old('duration') == '1-2 weeks' ) ? 'checked' : '' }}
                                id="duration1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration1">
                                1-2 weeks
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="duration"
                                value="1 month" {{ (old('duration') == '1 month' ) ? 'checked' : '' }}
                                id="duration2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration2">
                                1 month
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="duration"
                                value="3 months" {{ (old('duration') == '3 months' ) ? 'checked' : '' }}
                                id="duration3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration3">
                                3 months
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="duration"
                                value="6 months" {{ (old('duration') == '6 months' ) ? 'checked' : '' }}
                                id="duration4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration4">
                                6 months
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="duration"
                                value="1 year" {{ (old('duration') == '1 year' ) ? 'checked' : '' }}
                                id="duration5"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration5">
                                1 year
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="duration" value="Other" {{ (old('duration') == 'Other' ) ? 'checked' : '' }} id="duration10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="duration10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="duration-other" value="{{old('duration-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of draftsmen
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="draftsmen"
                                value="1-2 persons" {{ (old('draftsmen') == '1-2 persons' ) ? 'checked' : '' }}
                                id="draftsmen1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="draftsmen1">
                                1-2 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="draftsmen"
                                value="3-4 persons" {{ (old('draftsmen') == '3-4 persons' ) ? 'checked' : '' }}
                                id="draftsmen2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="draftsmen2">
                                3-4 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="draftsmen"
                                value="5-6 persons" {{ (old('draftsmen') == '5-6 persons' ) ? 'checked' : '' }}
                                id="draftsmen3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="draftsmen3">
                                5-6 persons
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="draftsmen" value="Other" {{ (old('draftsmen') == 'Other' ) ? 'checked' : '' }} id="draftsmen10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="draftsmen10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="draftsmen-other" value="{{old('draftsmen-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of modelers
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="modelers"
                                value="1-2 persons" {{ (old('modelers') == '1-2 persons' ) ? 'checked' : '' }}
                                id="modelers1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="modelers1">
                                1-2 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="modelers"
                                value="3-4 persons" {{ (old('modelers') == '3-4 persons' ) ? 'checked' : '' }}
                                id="modelers2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="modelers2">
                                3-4 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="modelers"
                                value="5-6 persons" {{ (old('modelers') == '5-6 persons' ) ? 'checked' : '' }}
                                id="modelers3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="modelers3">
                                5-6 persons
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="modelers" value="Other" {{ (old('modelers') == 'Other' ) ? 'checked' : '' }} id="modelers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="modelers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="modelers-other" value="{{old('modelers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of coordinators
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="coordinators"
                                value="1-2 persons" {{ (old('coordinators') == '1-2 persons' ) ? 'checked' : '' }}
                                id="coordinators1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinators1">
                                1-2 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="coordinators"
                                value="3-4 persons" {{ (old('coordinators') == '3-4 persons' ) ? 'checked' : '' }}
                                id="coordinators2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinators2">
                                3-4 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="coordinators"
                                value="5-6 persons" {{ (old('coordinators') == '5-6 persons' ) ? 'checked' : '' }}
                                id="coordinators3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinators3">
                                5-6 persons
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="coordinators" value="Other" {{ (old('coordinators') == 'Other' ) ? 'checked' : '' }} id="coordinators10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="coordinators10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="coordinators-other" value="{{old('coordinators-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Required number of BIM managers
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="managers"
                                value="1 person" {{ (old('managers') == '1 person' ) ? 'checked' : '' }}
                                id="managers1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="managers1">
                                1 person
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="managers"
                                value="2 persons" {{ (old('managers') == '2 persons' ) ? 'checked' : '' }}
                                id="managers2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="managers2">
                                2 persons
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="managers"
                                value="3 persons" {{ (old('managers') == '3 persons' ) ? 'checked' : '' }}
                                id="managers3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="managers3">
                                3 persons
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="managers" value="Other" {{ (old('managers') == 'Other' ) ? 'checked' : '' }} id="managers10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="managers10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="managers-other" value="{{old('managers-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Deliverables*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="RVT model" @if(is_array(old('deliverables')) && in_array('RVT model', old('deliverables'))) checked @endif
                                id="deliverables1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables1">
                                RVT model
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="PDF drawings" @if(is_array(old('deliverables')) && in_array('PDF drawings', old('deliverables'))) checked @endif
                                id="deliverables2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables2">
                                PDF drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="DWG drawings" @if(is_array(old('deliverables')) && in_array('DWG drawings', old('deliverables'))) checked @endif
                                id="deliverables3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables3">
                                DWG drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="NWD model" @if(is_array(old('deliverables')) && in_array('NWD model', old('deliverables'))) checked @endif
                                id="deliverables4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables4">
                                NWD model
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="NWC export" @if(is_array(old('deliverables')) && in_array('NWC export', old('deliverables'))) checked @endif
                                id="deliverables5"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables5">
                                NWC export
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="IFC export" @if(is_array(old('deliverables')) && in_array('IFC export', old('deliverables'))) checked @endif
                                id="deliverables6"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables6">
                                IFC export
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="checkbox"
                                name="deliverables[]"
                                value="Clash Report" @if(is_array(old('deliverables')) && in_array('Clash Report', old('deliverables'))) checked @endif
                                id="deliverables7"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables7">
                                Clash Report
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="downtime"
                                value="Yes, I accept" {{ (old('downtime') == 'Yes, I accept' ) ? 'checked' : '' }}
                                id="downtime1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="downtime1">
                                Yes, I accept
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="downtime"
                                value="No, I don't accept" {{ (old('downtime') == "No, I don't accept" ) ? 'checked' : '' }}
                                id="downtime2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="downtime2">
                                No, I don't accept
                            </label>
                        </div>

                        <h4 class="fw-bold my-4">
                            Possibility of making independent technical decisions by the performer.*
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="decisions"
                                value="Yes, but inform the customer" {{ (old('decisions') == 'Yes, but inform the customer' ) ? 'checked' : '' }}
                                id="decisions1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="decisions1">
                                Yes, but inform the customer
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="decisions"
                                value="No, check with the customer for approval" {{ (old('decisions') == "No, check with the customer for approval" ) ? 'checked' : '' }}
                                id="decisions2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="decisions2">
                                No, check with the customer for approval
                            </label>
                        </div>


                        <h4 class="fw-bold my-4">
                            Providing models and / or reports to control the work process.
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="reports"
                                value="every day" {{ (old('reports') == 'every day' ) ? 'checked' : '' }}
                                id="reports1"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports1">
                                every day
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="reports"
                                value="every week" {{ (old('reports') == 'every week' ) ? 'checked' : '' }}
                                id="reports2"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports2">
                                every week
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="reports"
                                value="every month" {{ (old('reports') == 'every month' ) ? 'checked' : '' }}
                                id="reports3"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports3">
                                every month
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="reports"
                                value="after the modeling is completed" {{ (old('reports') == 'after the modeling is completed' ) ? 'checked' : '' }}
                                id="reports4"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports4">
                                after the modeling is completed
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input
                                class="form-check-input fw-bold border border-4 border-white shadow-none"
                                type="radio"
                                name="reports"
                                value="according to discussed schedule" {{ (old('reports') == 'according to discussed schedule' ) ? 'checked' : '' }}
                                id="reports5"
                                style="width: 30px; height: 30px;"
                            >
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports5">
                                according to discussed schedule
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="Other" {{ (old('reports') == 'Other' ) ? 'checked' : '' }} id="reports10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" name="reports-other" value="{{old('reports-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-4 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-semibold text-white mt-4 pt-3">
                            Select files to upload...
                        </h4>
                        <small class="h6">
                            Architectural plan, MEP design drawings, rvt models, ifc models (jpg, pdf, dwg, rvt, ifc)
                        </small>

                        <input
                            class="form-control form-control-lg fw-semibold border border-4 border-white shadow-none rounded-0 mt-4 rounded-4"
                            type="file"
                            name="files[]"
                            placeholder="Select files"
                            id="files"
                            multiple
                        />


                        <div class="mt-5">
                            <x-turnstile data-theme="light" />
                        </div>


                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-5" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
