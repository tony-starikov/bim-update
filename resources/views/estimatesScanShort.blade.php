@extends('master')

@section('turnstile')
    @turnstileScripts()
@endsection

@section('main')
    <div class="container-fluid" style="background-image: url(/images/estimates/header_main.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover; min-height: 100vh;">
        <div class="container px-0 p-lg-5">
            <div class="row py-5 px-lg-5">

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
                                SCAN TO BIM SERVICE
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11 col-xl-10 mt-5">
                            <h4 class="text-white">
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9 col-xl-8 mt-5">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <h4 class="text-white">
                                Request a free estimate now! Maximize the potential of your BIM project.
                            </h4>
                        </div>
                    </div>

                    <div class="row pt-2">
                        <div class="col-md-5 col-xl-4 mt-5">
                            <a href="{{ route('showService', 'scan-to-bim') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h5 d-block my-2">SCAN TO BIM SERVICE</span>
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
                    <form method="post" class="footer-form text-white" enctype="multipart/form-data" action="{{route('processingScanShort')}}">
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
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none fw-bold text-white"
                                           type="checkbox" name="disciplines[]"
                                           value="Architectural" @if(is_array(old('disciplines')) && in_array('Architectural', old('disciplines'))) checked @endif
                                           id="disciplines1"
                                           style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines1">
                                        Architectural
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Structural" @if(is_array(old('disciplines')) && in_array('Structural', old('disciplines'))) checked @endif id="disciplines2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines2">
                                        Structural
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Mechanical" @if(is_array(old('disciplines')) && in_array('Mechanical', old('disciplines'))) checked @endif id="disciplines3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines3">
                                        Mechanical
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif id="disciplines4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines4">
                                        Electrical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif id="disciplines5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines5">
                                        Plumbing
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif id="disciplines6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines6">
                                        Fire Protection
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="disciplines[]" value="Site" @if(is_array(old('disciplines')) && in_array('Site', old('disciplines'))) checked @endif id="disciplines7" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="disciplines7">
                                        Site
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
                            Type of the building\construction*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
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

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Storage" {{ (old('type') == 'Storage' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type3">
                                        Storage
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Historical building" {{ (old('type') == 'Historical Building' ) ? 'checked' : '' }} id="type4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type4">
                                        Historical Building
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Commercial building" {{ (old('type') == 'Commercial Building' ) ? 'checked' : '' }} id="type5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type5">
                                        Commercial Building
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="type6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0" type="text" name="area" value="{{old('area', '')}}" placeholder="Building/construction area*" aria-label=".form-control-lg example">
                        </div>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0" type="text" name="height" value="{{old('height', '')}}" placeholder="Height of a building/construction*" aria-label=".form-control-lg example">
                        </div>


                        <h4 class="fw-bold my-4">
                            Task for modeling*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="3D model" @if(is_array(old('task')) && in_array('3D model', old('task'))) checked @endif id="task1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task1">
                                        3D model
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="Floor plans" @if(is_array(old('task')) && in_array('Floor plans', old('task'))) checked @endif id="task2" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task2">
                                        Floor plans
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="Ceilings plans" @if(is_array(old('task')) && in_array('Ceilings plans', old('task'))) checked @endif id="task3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task3">
                                        Ceilings plans
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="Elevations" @if(is_array(old('task')) && in_array('Elevations', old('task'))) checked @endif id="task4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task4">
                                        Elevations
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="Sections" @if(is_array(old('task')) && in_array('Sections', old('task'))) checked @endif id="task5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task5">
                                        Sections
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="checkbox" name="task[]" value="Other" @if(is_array(old('task')) && in_array('Other', old('task'))) checked @endif id="task6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="task6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="task-other" value="{{old('task-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            LOD (Level of Detail)*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="lod[]"
                                        value="LOD 100"
                                        @if(is_array(old('lod')) && in_array('LOD 100', old('lod'))) checked @endif
                                        id="lod1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod1">
                                        LOD 100
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="lod[]"
                                        value="LOD 200"
                                        @if(is_array(old('lod')) && in_array('LOD 200', old('lod'))) checked @endif
                                        id="lod2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod2">
                                        LOD 200
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="lod[]"
                                        value="LOD 300"
                                        @if(is_array(old('lod')) && in_array('LOD 300', old('lod'))) checked @endif
                                        id="lod3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod3">
                                        LOD 300
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="lod[]"
                                        value="LOD 350"
                                        @if(is_array(old('lod')) && in_array('LOD 350', old('lod'))) checked @endif
                                        id="lod4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod4">
                                        LOD 350
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="checkbox"
                                        name="lod[]"
                                        value="Other"
                                        @if(is_array(old('lod')) && in_array('Other', old('lod'))) checked @endif
                                        id="lod5"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Project accuracy*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="accuracy"
                                        value="5 mm"
                                        {{ (old('accuracy') == '5 mm' ) ? 'checked' : '' }}
                                        id="accuracy1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="accuracy1">
                                        5 mm
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="accuracy"
                                        value="10-15 mm"
                                        {{ (old('accuracy') == '10-15 mm' ) ? 'checked' : '' }}
                                        id="accuracy2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="accuracy2">
                                        10-15 mm
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="accuracy"
                                        value="20-30 mm"
                                        {{ (old('accuracy') == '20-30 mm' ) ? 'checked' : '' }}
                                        id="accuracy3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="accuracy3">
                                        20-30 mm
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="accuracy"
                                        value="30-40 mm"
                                        {{ (old('accuracy') == '30-40 mm' ) ? 'checked' : '' }}
                                        id="accuracy4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="accuracy4">
                                        30-40 mm
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="accuracy" value="Other" {{ (old('accuracy') == 'Other' ) ? 'checked' : '' }} id="accuracy5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="accuracy5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="accuracy-other" value="{{old('accuracy-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            In which currency to specify the price?*
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="currency"
                                        value="€ EUR"
                                        {{ (old('currency') == '€ EUR' ) ? 'checked' : '' }}
                                        id="currency1"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="currency1">
                                        € EUR
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="currency"
                                        value="$ USD"
                                        {{ (old('currency') == '$ USD' ) ? 'checked' : '' }}
                                        id="currency2"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="currency2">
                                        $ USD
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="currency"
                                        value="₤ GBP"
                                        {{ (old('currency') == '₤ GBP' ) ? 'checked' : '' }}
                                        id="currency3"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="currency3">
                                        ₤ GBP
                                    </label>
                                </div>

                                <div class="form-check d-flex align-items-center mb-3">
                                    <input
                                        class="form-check-input fw-bold border border-3 border-white shadow-none"
                                        type="radio"
                                        name="currency"
                                        value="A$ AUD"
                                        {{ (old('currency') == 'A$ AUD' ) ? 'checked' : '' }}
                                        id="currency4"
                                        style="width: 30px; height: 30px;"
                                    >
                                    <label class="form-check-label ms-1 mt-2 h5" for="currency4">
                                        A$ AUD
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-3 border-white shadow-none" type="radio" name="currency" value="Other" {{ (old('currency') == 'Other' ) ? 'checked' : '' }} id="currency10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label ms-1 mt-2 h5" for="currency10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg border-0 border-bottom border-3 border-white rounded-0 px-2 shadow-none" type="text" name="currency-other" value="{{old('currency-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="start"
                            placeholder="Start and finish of the project"
                            value="{{old('start', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="address"
                            placeholder="Object address"
                            value="{{old('address', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="link"
                            placeholder="Link to a Google Map"
                            value="{{old('link', '')}}"
                            aria-label=".form-control-lg example"
                        />


                        <input
                            class="form-control form-control-lg fw-semibold border border-0 border-3 border-bottom border-white shadow-none rounded-0 mt-4"
                            type="text"
                            name="comment"
                            placeholder="Comment"
                            value="{{old('comment', '')}}"
                            aria-label=".form-control-lg example"
                        />

                        <h4 class="fw-semibold text-white mt-4 py-3">
                            Select files to upload...
                        </h4>

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

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
