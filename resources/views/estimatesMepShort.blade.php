@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;  min-height: 100vh;">
        <div class="container py-5 p-lg-5">
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
                        <div class="col-12 mt-3">
                            <h1 class="text-white fw-bold mt-5 mb-0">
                                BIM ESTIMATES FOR YOUR PROJECT<br>
                                MEP COORDINATION & DIGITAL FABRICATION SERVICE
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-xxl-9 mt-4">
                            <h4 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-lg-9 col-xxl-8 mt-4">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-lg-9 col-xxl-8 mt-4">
                            <h4 class="text-white">
                                Request a free estimate now! Maximize the potential of your BIM project.
                            </h4>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-7 col-lg-8 col-xl-6 mt-4">
                            <a href="{{ route('showService', 'mep-coordination') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h5 d-block my-2">MEP COORDINATION & DIGITAL FABRICATION SERVICE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 p-lg-5">
            <div class="row py-5 px-lg-5 my-0 my-lg-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold mb-0">
                                PROJECT ESTIMATE IN 24 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-5 p-5 p-lg-0 pe-lg-5 mt-lg-5 order-2 order-lg-1">
                            <div class="row">
                                <div class="col-1 ps-0 text-end">
                                    <h5 class="fw-normal">
                                        1.
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 class="fw-normal" style="text-align: justify;">
                                        Filling the form
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
                                    <h5 class="fw-normal">
                                        Project evaluation by our specialists*
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
                                        Receiving the Commercial Offer on your email
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
                                        Meeting scheduling**
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
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3)
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

                        <div class="col-lg-7 px-5 p-lg-0 mt-5 order-1 order-lg-2">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="estimation1" class="container-fluid" style="background-color: #849092">
        <div class="container px-0 py-sm-5 p-lg-5">
            <div class="row justify-content-center px-0 p-lg-5">
                <div class="col-lg-9 p-2 p-lg-5" style="border: 4px solid #72e0df;">
                    <h2 class="fw-bold mb-5 text-white">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                    <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('processingMepShort')}}">
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
                            Disciplines*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Services*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="services[]" value="Other" @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif id="services10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="services10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="services-other" value="{{old('services-other', '')}}" placeholder="Write your service">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            LOD (Level of development)*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other lod">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Incoming data*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="data[]" value="Other" @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif id="data10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="data10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="data-other" value="{{old('data-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Expected project duration*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="duration" value="Other" {{ (old('duration') == 'Other' ) ? 'checked' : '' }} id="duration10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="duration10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="duration-other" value="{{old('duration-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Deliverables*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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
                            <div class="col-md-6">
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
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="deliverables10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
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
                            Select files to upload*
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
@endsection
