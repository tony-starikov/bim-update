@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0 my-lg-5">

                @if ($errors->any())
                    <div class="alert alert-warning mt-5">
                        @foreach ($errors->all() as $error)
                            <h6 class="m-0"> - {{ $error }}</h6>
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

                <div class="col-12 col-xl-6 mt-5">
                    <h2 class="text-white display-4 fw-bold pb-2 mt-5 mt-lg-0">BIM ESTIMATES FOR YOUR PROJECTS</h2>

                    <h2 class="d-xl-none text-white mb-4 h2 fw-semibold">
                        <small>
                            Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate. Request an estimate now to maximize the potential of your BIM project.
                        </small>
                    </h2>

                    <form method="post" class="text-white footer-form" enctype="multipart/form-data" action="{{route('estimatesProcessing')}}">
                        @csrf

                        <h4 class="fw-bold my-4">
                            Email<sup class="text-danger">*</sup>
                        </h4>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="email" name="email" placeholder="Write your email" value="{{old('email', '')}}" aria-label=".form-control-lg example">
                        </div>

                        <h4 class="fw-bold my-4">
                            Disciplines<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Architectural" @if(is_array(old('disciplines')) && in_array('Architectural', old('disciplines'))) checked @endif id="disciplines1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines1">
                                Architectural
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Structural" @if(is_array(old('disciplines')) && in_array('Structural', old('disciplines'))) checked @endif id="disciplines2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines2">
                                Structural
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Mechanical" @if(is_array(old('disciplines')) && in_array('Mechanical', old('disciplines'))) checked @endif id="disciplines3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines3">
                                Mechanical
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Electrical" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif id="disciplines4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines4">
                                Electrical
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Plumbing" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif id="disciplines5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines5">
                                Plumbing
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Fire Protection" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif id="disciplines6" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines6">
                                Fire Protection
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Site" @if(is_array(old('disciplines')) && in_array('Site', old('disciplines'))) checked @endif id="disciplines7" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines7">
                                Site
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="disciplines[]" value="Other" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif id="disciplines8" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="disciplines-other" value="{{old('disciplines-other', '')}}" placeholder="Write your discipline">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project Units<sup class="text-danger">*</sup>
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
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="units" value="Other" {{ (old('units') == 'Other' ) ? 'checked' : '' }} id="units3" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="units3">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="units-other" value="{{old('units-other', '')}}" placeholder="Write other units">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Project language<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="language" value="English" {{ (old('language') == 'English' ) ? 'checked' : '' }} id="language1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language1">
                                English
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="language" value="German" {{ (old('language') == 'German' ) ? 'checked' : '' }} id="language2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language2">
                                German
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="language" value="French" {{ (old('language') == 'French' ) ? 'checked' : '' }} id="language3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language3">
                                French
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="language" value="Ukrainian" {{ (old('language') == 'Ukrainian' ) ? 'checked' : '' }} id="language4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language4">
                                Ukrainian
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="language" value="Other" {{ (old('language') == 'Other' ) ? 'checked' : '' }} id="language5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="language5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="language-other" value="{{old('language-other', '')}}" placeholder="Write other language" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Type of the building/construction<sup class="text-danger">*</sup>
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
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Storage" {{ (old('type') == 'Storage' ) ? 'checked' : '' }} id="type3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type3">
                                Storage
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Transmission tower" {{ (old('type') == 'Transmission tower' ) ? 'checked' : '' }} id="type4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type4">
                                Transmission tower
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Guy tower" {{ (old('type') == 'Guy tower' ) ? 'checked' : '' }} id="type5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type5">
                                Guy tower
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="type" value="Other" {{ (old('type') == 'Other' ) ? 'checked' : '' }} id="type6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="type6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="type-other" value="{{old('type-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Building/construction area<sup class="text-danger">*</sup>
                        </h4>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="area" value="{{old('area', '')}}" placeholder="Building/construction area" aria-label=".form-control-lg example">
                        </div>


                        <h4 class="fw-bold my-4">
                            Height of a building/construction<sup class="text-danger">*</sup>
                        </h4>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="height" value="{{old('height', '')}}" placeholder="Height of a building/construction" aria-label=".form-control-lg example">
                        </div>


                        <h4 class="fw-bold my-4">
                            Incoming data<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Point cloud" @if(is_array(old('data')) && in_array('Point cloud', old('data'))) checked @endif id="data1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data1">
                                Point cloud
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="DWG drafts" @if(is_array(old('data')) && in_array('DWG drafts', old('data'))) checked @endif id="data2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data2">
                                DWG drafts
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="PDF drafts" @if(is_array(old('data')) && in_array('PDF drafts', old('data'))) checked @endif id="data3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data3">
                                PDF drafts
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Photos" @if(is_array(old('data')) && in_array('Photos', old('data'))) checked @endif id="data4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data4">
                                Photos
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Revit families" @if(is_array(old('data')) && in_array('Revit families', old('data'))) checked @endif id="data5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data5">
                                Revit families
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Revit template for project" @if(is_array(old('data')) && in_array('Revit template for project', old('data'))) checked @endif id="data6" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data6">
                                Revit template for project
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Revit sheets" @if(is_array(old('data')) && in_array('Revit sheets', old('data'))) checked @endif id="data7" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data7">
                                Revit sheets
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Examples of similar projects" @if(is_array(old('data')) && in_array('Examples of similar projects', old('data'))) checked @endif id="data8" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data8">
                                Examples of similar projects
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Manual for modeling" @if(is_array(old('data')) && in_array('Manual for modeling', old('data'))) checked @endif id="data9" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data9">
                                Manual for modeling
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="data[]" value="Other" @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif id="data10" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="data10">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="data-other" value="{{old('data-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Incoming Point Cloud<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="cloud[]" value="RCS" @if(is_array(old('cloud')) && in_array('RCS', old('cloud'))) checked @endif id="cloud1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="cloud1">
                                RCS
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="cloud[]" value="RCP" @if(is_array(old('cloud')) && in_array('RCP', old('cloud'))) checked @endif id="cloud2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="cloud2">
                                RCP
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="cloud[]" value="Structural RCP" @if(is_array(old('cloud')) && in_array('Structural RCP', old('cloud'))) checked @endif id="cloud3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="cloud3">
                                Structural RCP
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="cloud[]" value="Other" @if(is_array(old('cloud')) && in_array('Other', old('cloud'))) checked @endif id="cloud4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="cloud4">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="cloud-other" value="{{old('cloud-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Task for modeling<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="3D model" @if(is_array(old('task')) && in_array('3D model', old('task'))) checked @endif id="task1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task1">
                                3D model
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="Floor plans" @if(is_array(old('task')) && in_array('Floor plans', old('task'))) checked @endif id="task2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task2">
                                Floor plans
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="Ceilings plans" @if(is_array(old('task')) && in_array('Ceilings plans', old('task'))) checked @endif id="task3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task3">
                                Ceilings plans
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="Elevations" @if(is_array(old('task')) && in_array('Elevations', old('task'))) checked @endif id="task4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task4">
                                Elevations
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="Sections" @if(is_array(old('task')) && in_array('Sections', old('task'))) checked @endif id="task5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task5">
                                Sections
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="task[]" value="Other" @if(is_array(old('task')) && in_array('Other', old('task'))) checked @endif id="task6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="task6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="task-other" value="{{old('task-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            The purpose of the model<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="As-built" @if(is_array(old('purpose')) && in_array('As-built', old('purpose'))) checked @endif id="purpose1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose1">
                                As-built
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="Reconstruction" @if(is_array(old('purpose')) && in_array('Reconstruction', old('purpose'))) checked @endif id="purpose2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose2">
                                Reconstruction
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="Facility Management" @if(is_array(old('purpose')) && in_array('Facility Management', old('purpose'))) checked @endif id="purpose3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose3">
                                Facility Management
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="Digital Twins" @if(is_array(old('purpose')) && in_array('Digital Twins', old('purpose'))) checked @endif id="purpose4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose4">
                                Digital Twins
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="For government" @if(is_array(old('purpose')) && in_array('For government', old('purpose'))) checked @endif id="purpose5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose5">
                                For government
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="purpose[]" value="Other" @if(is_array(old('purpose')) && in_array('Other', old('purpose'))) checked @endif id="purpose6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="purpose6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="purpose-other" value="{{old('purpose-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Deliverables<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="RVT (only 3D model)" @if(is_array(old('deliverables')) && in_array('RVT (only 3D model)', old('deliverables'))) checked @endif id="deliverables1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables1">
                                RVT (only 3D model)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="RVT (3D model + drawings)" @if(is_array(old('deliverables')) && in_array('RVT (3D model + drawings)', old('deliverables'))) checked @endif id="deliverables2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables2">
                                RVT (3D model + drawings)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="RVT (3D model + drawings + schedules)" @if(is_array(old('deliverables')) && in_array('RVT (3D model + drawings + schedules)', old('deliverables'))) checked @endif id="deliverables3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables3">
                                RVT (3D model + drawings + schedules)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="IFC" @if(is_array(old('deliverables')) && in_array('IFC', old('deliverables'))) checked @endif id="deliverables4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables4">
                                IFC
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="PDF" @if(is_array(old('deliverables')) && in_array('PDF', old('deliverables'))) checked @endif id="deliverables5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables5">
                                PDF
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="DWG" @if(is_array(old('deliverables')) && in_array('DWG', old('deliverables'))) checked @endif id="deliverables6" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables6">
                                DWG
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="deliverables[]" value="Other" @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif id="deliverables7" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="deliverables7">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="deliverables-other" value="{{old('deliverables-other', '')}}" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Revit version<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2017" {{ (old('version') == '2017' ) ? 'checked' : '' }} id="version1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version1">
                                2017
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2018" {{ (old('version') == '2018' ) ? 'checked' : '' }} id="version2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version2">
                                2018
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="2019" {{ (old('version') == '2019' ) ? 'checked' : '' }} id="version3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version3">
                                2019
                            </label>
                        </div>

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

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="version" value="Other" {{ (old('version') == 'Other' ) ? 'checked' : '' }} id="version7" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="version7">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="version-other" value="{{old('version-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            LOD (Level of Detail)<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="LOD 100" {{ (old('lod') == 'LOD 100' ) ? 'checked' : '' }} id="lod1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod1">
                                LOD 100
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="LOD 200" {{ (old('lod') == 'LOD 200' ) ? 'checked' : '' }} id="lod2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod2">
                                LOD 200
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="LOD 300" {{ (old('lod') == 'LOD 300' ) ? 'checked' : '' }} id="lod3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod3">
                                LOD 300
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="LOD 350" {{ (old('lod') == 'LOD 350' ) ? 'checked' : '' }} id="lod4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod4">
                                LOD 350
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="lod" value="Other" {{ (old('lod') == 'Other' ) ? 'checked' : '' }} id="lod5" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="lod-other" value="{{old('lod-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            LOI (Level of Information)<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="loi[]" value="Add elements materials" @if(is_array(old('loi')) && in_array('Add elements materials', old('loi'))) checked @endif id="loi1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="loi1">
                                Add elements materials
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="loi[]" value="Set systems types from drawings" @if(is_array(old('loi')) && in_array('Set systems types from drawings', old('loi'))) checked @endif id="loi2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="loi2">
                                Set systems types from drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="loi[]" value="Add pipes and ducts insulation from drawings" @if(is_array(old('loi')) && in_array('Add pipes and ducts insulation from drawings', old('loi'))) checked @endif id="loi3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="loi3">
                                Add pipes and ducts insulation from drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="loi[]" value="Add additional parameters from the project documentation" @if(is_array(old('loi')) && in_array('Add additional parameters from the project documentation', old('loi'))) checked @endif id="loi4" style="min-width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ps-1 mt-2 h5" for="loi4">
                                Add additional parameters from the project documentation
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" name="loi[]" value="No need" @if(is_array(old('loi')) && in_array('No need', old('loi'))) checked @endif id="loi5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="loi5">
                                No need
                            </label>
                        </div>


                        <h4 class="fw-bold my-4">
                            Project accuracy<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="accuracy" value="10 mm" {{ (old('accuracy') == '10 mm' ) ? 'checked' : '' }} id="accuracy1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="accuracy1">
                                10 mm
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="accuracy" value="20-30 mm" {{ (old('accuracy') == '20-30 mm' ) ? 'checked' : '' }} id="accuracy2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="accuracy2">
                                20-30 mm
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="accuracy" value="30-40 mm" {{ (old('accuracy') == '30-40 mm' ) ? 'checked' : '' }} id="accuracy3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="accuracy3">
                                30-40 mm
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="accuracy" value="Other" {{ (old('accuracy') == 'Other' ) ? 'checked' : '' }} id="accuracy4" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="accuracy4">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="accuracy-other" value="{{old('accuracy-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="downtime" value="Yes, I accept" {{ (old('downtime') == 'Yes, I accept' ) ? 'checked' : '' }} id="downtime1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="downtime1">
                                Yes, I accept
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="downtime" value="No, I dont accept" {{ (old('downtime') == 'No, I dont accept' ) ? 'checked' : '' }} id="downtime2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="downtime2">
                                No, I don't accept
                            </label>
                        </div>


                        <h4 class="fw-bold my-4">
                            Possibility of making independent technical decisions by the performer<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="possibility" value="Yes, but inform the customer" {{ (old('possibility') == 'Yes, but inform the customer' ) ? 'checked' : '' }} id="possibility1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="possibility1">
                                Yes, but inform the customer
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="possibility" value="No, check with the customer for approval" {{ (old('possibility') == 'No, check with the customer for approval' ) ? 'checked' : '' }} id="possibility2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="possibility2">
                                No, check with the customer for approval
                            </label>
                        </div>


                        <h4 class="fw-bold my-4">
                            Providing models and / or reports to control the work process<sup class="text-danger">*</sup>
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="Every day" {{ (old('reports') == 'Every day' ) ? 'checked' : '' }} id="reports1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports1">
                                Every day
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="Every week" {{ (old('reports') == 'Every week' ) ? 'checked' : '' }} id="reports2" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports2">
                                Every week
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="Every month" {{ (old('reports') == 'Every month' ) ? 'checked' : '' }} id="reports3" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports3">
                                Every month
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="After the modeling is completed" {{ (old('reports') == 'After the modeling is completed' ) ? 'checked' : '' }} id="reports4" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports4">
                                After the modeling is completed
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="According to discussed schedule" {{ (old('reports') == 'According to discussed schedule' ) ? 'checked' : '' }} id="reports5" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports5">
                                According to discussed schedule
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="reports" value="Other" {{ (old('reports') == 'Other' ) ? 'checked' : '' }} id="reports6" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="reports6">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="reports-other" value="{{old('reports-other', '')}}" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Comment
                        </h4>

                        <div class="mb-3">
                            <textarea class="form-control fw-bold border border-4 border-white px-2 shadow-none bg-transparent text-white" id="comment" name="comment" rows="3">{{old('comment', '')}}</textarea>
                        </div>


                        <h4 class="fw-bold my-4">
                            Upload project files
                        </h4>

                        <div class="mb-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none bg-transparent text-white" type="file" name="files[]" id="files" multiple>
                        </div>

                        <h4 class="fw-bold my-4">
                            Link to the drive, dropbox etc...
                        </h4>

                        <div class="mb-4">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="link" placeholder="Link on cloud" value="{{old('link', '')}}" aria-label=".form-control-lg example">
                        </div>


                        <h4 class="fw-bold my-4">
                            Project reference
                        </h4>

                        <div class="mb-4">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" name="reference" placeholder="Reference to object" value="{{old('reference', '')}}" aria-label=".form-control-lg example">
                        </div>


                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-4" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
                <div class="d-none d-xl-block col-xl-6 mt-5">
                    <h2 class="px-5 text-white h2 fw-semibold">
                        <small>
                            Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate. Request an estimate now to maximize the potential of your BIM project.
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
