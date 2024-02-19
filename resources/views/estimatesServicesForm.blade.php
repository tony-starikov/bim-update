@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="article"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}"/>
    @endif
@endsection

@section('turnstile')
    @turnstileScripts()
@endsection

@section('main')
    <div class="container-fluid" style="background-image: url(/images/estimates/header_main.webp); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
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
                        <div class="col-12 px-md-0 mt-3">
                            <h2 class="display-5 text-white fw-bold mt-5 mb-0">
                                BIM PROJECT ESTIMATE IN 24 HOURS<br>
                                SCAN TO BIM SERVICE
                            </h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 px-md-0 mt-5">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate.
                            </h4>
                        </div>
                    </div>

                    <div class="row pt-2">
                        <div class="col-md-5 col-xl-4 mt-5 p-md-0">
                            <a href="{{ route('showService', 'scan-to-bim') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center" style="background-color: #43aeb6">
                                <span class="fw-bold h5 d-block my-2">SCAN TO BIM SERVICE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid"
         style="background-image: url(/images/estimates/about.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
        <div class="container px-0 px-lg-5">
            <div class="row py-5 px-lg-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="fw-bold mb-0">
                                PROJECT ESTIMATE IN 24 HOURS
                            </h2>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-7 p-5 p-lg-0 pe-lg-5 mt-lg-5 order-2 order-lg-1">
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

                            <div class="row mt-2">
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

                            <div class="row mt-2">
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

                            <div class="row mt-2">
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

                            <div class="row mt-2">
                                <div class="col-1 ps-0 text-end">
                                    <h5>
                                        *
                                    </h5>
                                </div>
                                <div class="col-11 px-0">
                                    <h5 style="text-align: justify;">
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00
                                        (GMT+3)
                                    </h5>
                                </div>
                            </div>

                            <div class="row mt-2">
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

                        <div class="col-lg-5 px-5 p-lg-0 mt-5 order-1 order-lg-2">
                            <img class="img-fluid w-100" src="/images/estimates/schema.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div id="estimation1" class="container-fluid">
        <div class="container px-0 py-sm-5 p-lg-5">
            <div class="row justify-content-center px-0 p-lg-5">
                <div class="col-lg-9 p-2 p-lg-5" style="border: 4px solid #72e0df;">
                    <h2 class="fw-bold mb-4">
                        ESTIMATE YOUR PROJECT RIGHT NOW!
                    </h2>
                    <form method="post" class="footer-form" enctype="multipart/form-data"
                          action="{{route('estimatesProcessing')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email*</label>
                            <input name="email" type="email" class="form-control" id="email"
                                   placeholder="name@example.com" value="{{old('email', '')}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Name*</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="John Dou"
                                   value="{{old('name', '')}}" required>
                        </div>


                        <label class="form-label fw-semibold m-0">Disciplines*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Architectural" id="disciplines1"
                                           @if(is_array(old('disciplines')) && in_array('Architectural', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines1">
                                        Architectural
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Structural" id="disciplines2"
                                           @if(is_array(old('disciplines')) && in_array('Structural', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines2">
                                        Structural
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Mechanical" id="disciplines3"
                                           @if(is_array(old('disciplines')) && in_array('Mechanical', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines3">
                                        Mechanical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Electrical" id="disciplines4"
                                           @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines4">
                                        Electrical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Plumbing" id="disciplines5"
                                           @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines5">
                                        Plumbing
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Fire Protection" id="disciplines6"
                                           @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines6">
                                        Fire Protection
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Site"
                                           id="disciplines7"
                                           @if(is_array(old('disciplines')) && in_array('Site', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines7">
                                        Site
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Other"
                                           id="disciplines8"
                                           @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-discipline" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-discipline" class="form-label">Other discipline</label>
                                    <input name="other-discipline" type="text" class="form-control"
                                           id="other-discipline" value="{{old('other-discipline', '')}}"
                                           placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const el = document.getElementById('disciplines8');

                            const box = document.getElementById('other-discipline');

                            if (el.checked) {
                                if (box.classList.contains('d-none')) {
                                    box.classList.toggle('d-none');
                                }
                            } else {
                                if (!box.classList.contains('d-none')) {
                                    box.classList.add('d-none')
                                }
                            }

                            el.addEventListener('change', function handleChange(event) {
                                box.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label mb-2 fw-semibold">Project Units*</label>

                        {{--                        {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }}--}}
                        <select name="units" id="units-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('units') == 'Metric' ? "selected" : "" }} value="Metric">Metric</option>
                            <option {{ old('units') == 'Imperial' ? "selected" : "" }} value="Imperial">Imperial</option>
                            <option {{ old('units') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-units-box" class="mb-4 d-none">
                            <label for="other-units" class="form-label">Other project units*</label>
                            <input name="other-units" type="text" class="form-control" id="other-units"
                                   value="{{old('other-units', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const unitsSelect = document.getElementById('units-select');

                            const unitsBox = document.getElementById('other-units-box');

                            if (unitsSelect.value === 'Other') {
                                if (unitsBox.classList.contains('d-none')) {
                                    unitsBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!unitsBox.classList.contains('d-none')) {
                                    unitsBox.classList.add('d-none');
                                }
                            }

                            unitsSelect.addEventListener('change', function handleChange(event) {
                                if (unitsBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        unitsBox.classList.remove('d-none');
                                    }
                                } else {
                                    unitsBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2 fw-semibold">Type of the building\construction*</label>

                        {{--                        {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }}--}}
                        <select name="type" id="type-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('type') == 'Residential Building' ? "selected" : "" }} value="Residential Building">Residential Building</option>
                            <option {{ old('type') == 'Industrial Building' ? "selected" : "" }} value="Industrial Building">Industrial Building</option>
                            <option {{ old('type') == 'Storage' ? "selected" : "" }} value="Storage">Storage</option>
                            <option {{ old('type') == 'Historical Building' ? "selected" : "" }} value="Historical Building">Historical Building</option>
                            <option {{ old('type') == 'Commercial Building' ? "selected" : "" }} value="Commercial Building">Commercial Building</option>
                            <option {{ old('type') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-type-box" class="mb-4 d-none">
                            <label for="other-type" class="form-label">Other type of the building\construction*</label>
                            <input name="other-type" type="text" class="form-control" id="other-type"
                                   value="{{old('other-type', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const typeSelect = document.getElementById('type-select');

                            const typeBox = document.getElementById('other-type-box');

                            if (typeSelect.value === 'Other') {
                                if (typeBox.classList.contains('d-none')) {
                                    typeBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!typeBox.classList.contains('d-none')) {
                                    typeBox.classList.add('d-none');
                                }
                            }

                            typeSelect.addEventListener('change', function handleChange(event) {
                                if (typeBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        typeBox.classList.remove('d-none');
                                    }
                                } else {
                                    typeBox.classList.add('d-none');
                                }
                            });
                        </script>

                        <div class="mb-3">
                            <label for="area" class="form-label fw-semibold">Building/construction area*</label>
                            <input name="area" type="text" class="form-control" id="area" placeholder="500m2"
                                   value="{{old('area', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label fw-semibold">Height of a building/construction*</label>
                            <input name="height" type="text" class="form-control" id="height" placeholder="10m"
                                   value="{{old('height', '')}}">
                        </div>


                        <label class="form-label m-0 fw-semibold">
                            Incoming Point Cloud*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox" name="cloud[]"
                                           value="Point cloud"
                                           @if(is_array(old('cloud')) && in_array('Point cloud', old('cloud'))) checked
                                           @endif
                                           id="cloud1"
                                    >
                                    <label class="form-check-label" for="cloud1">
                                        Point cloud
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="DWG drafts"
                                        @if(is_array(old('cloud')) && in_array('DWG drafts', old('cloud'))) checked
                                        @endif
                                        id="cloud2"
                                    >
                                    <label class="form-check-label" for="cloud2">
                                        DWG drafts
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="PDF drafts"
                                        @if(is_array(old('cloud')) && in_array('PDF drafts', old('cloud'))) checked
                                        @endif
                                        id="cloud3"
                                    >
                                    <label class="form-check-label" for="cloud3">
                                        PDF drafts
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Photos"
                                        @if(is_array(old('cloud')) && in_array('Photos', old('cloud'))) checked @endif
                                        id="cloud4"
                                    >
                                    <label class="form-check-label" for="cloud3">
                                        Photos
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Revit families"
                                        @if(is_array(old('cloud')) && in_array('Revit families', old('cloud'))) checked
                                        @endif
                                        id="cloud5"
                                    >
                                    <label class="form-check-label" for="cloud5">
                                        Revit families
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Revit template for project"
                                        @if(is_array(old('cloud')) && in_array('Revit template for project', old('cloud'))) checked
                                        @endif
                                        id="cloud6"
                                    >
                                    <label class="form-check-label" for="cloud6">
                                        Revit template for project
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Revit sheets"
                                        @if(is_array(old('cloud')) && in_array('Revit sheets', old('cloud'))) checked
                                        @endif
                                        id="cloud7"
                                    >
                                    <label class="form-check-label" for="cloud7">
                                        Revit sheets
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Examples of similar projects"
                                        @if(is_array(old('cloud')) && in_array('Examples of similar projects', old('cloud'))) checked
                                        @endif
                                        id="cloud8"
                                    >
                                    <label class="form-check-label" for="cloud8">
                                        Examples of similar projects
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input
                                        class="form-check-input"
                                        type="checkbox"
                                        name="cloud[]"
                                        value="Manual for modeling"
                                        @if(is_array(old('cloud')) && in_array('Manual for modeling', old('cloud'))) checked
                                        @endif
                                        id="cloud9"
                                    >
                                    <label class="form-check-label" for="cloud9">
                                        Manual for modeling
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="cloud[]" value="Other"
                                           id="cloud10"
                                           @if(is_array(old('cloud')) && in_array('Other', old('cloud'))) checked @endif>
                                    <label class="form-check-label" for="cloud10">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-cloud" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-cloud-box" class="form-label">Other discipline</label>
                                    <input name="other-cloud" type="text" class="form-control" id="other-cloud-box"
                                           value="{{old('other-cloud', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const cloudEl = document.getElementById('cloud10');

                            const cloudBox = document.getElementById('other-cloud');

                            if (cloudEl.checked) {
                                if (cloudBox.classList.contains('d-none')) {
                                    cloudBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!cloudBox.classList.contains('d-none')) {
                                    cloudBox.classList.add('d-none')
                                }
                            }

                            cloudEl.addEventListener('change', function handleChange(event) {
                                cloudBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0 fw-semibold">
                            Task for modeling*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="3D model"
                                           id="task1"
                                           @if(is_array(old('task')) && in_array('3D model', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task1">
                                        3D model
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Floor plans"
                                           id="task2"
                                           @if(is_array(old('task')) && in_array('Floor plans', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task2">
                                        Floor plans
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Ceilings plans"
                                           id="task3"
                                           @if(is_array(old('task')) && in_array('Ceilings plans', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task3">
                                        Ceilings plans
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Elevations"
                                           id="task4"
                                           @if(is_array(old('task')) && in_array('Elevations', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task4">
                                        Elevations
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Sections"
                                           id="task5"
                                           @if(is_array(old('task')) && in_array('Sections', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task5">
                                        Sections
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Other"
                                           id="task6"
                                           @if(is_array(old('task')) && in_array('Other', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task6">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-task-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-task" class="form-label">Other task</label>
                                    <input name="other-task" type="text" class="form-control" id="other-task"
                                           value="{{old('other-task', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const taskEl = document.getElementById('task6');

                            const taskBox = document.getElementById('other-task-box');

                            if (taskEl.checked) {
                                if (taskBox.classList.contains('d-none')) {
                                    taskBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!taskBox.classList.contains('d-none')) {
                                    taskBox.classList.add('d-none')
                                }
                            }

                            taskEl.addEventListener('change', function handleChange(event) {
                                taskBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0 fw-semibold">
                            Deliverables*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]"
                                           value="RVT (only 3D model)" id="deliverables1"
                                           @if(is_array(old('deliverables')) && in_array('RVT (only 3D model)', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables1">
                                        RVT (only 3D model)
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]"
                                           value="RVT (only 3D model)" id="deliverables2"
                                           @if(is_array(old('deliverables')) && in_array('RVT (only 3D model)', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables2">
                                        RVT (only 3D model)
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]"
                                           value="RVT (3D model + drawings + schedules)" id="deliverables3"
                                           @if(is_array(old('deliverables')) && in_array('RVT (3D model + drawings + schedules)', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables3">
                                        RVT (3D model + drawings + schedules)
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="IFC"
                                           id="deliverables4"
                                           @if(is_array(old('deliverables')) && in_array('IFC', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables4">
                                        IFC
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="PDF"
                                           id="deliverables5"
                                           @if(is_array(old('deliverables')) && in_array('PDF', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables5">
                                        PDF
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="DWG"
                                           id="deliverables6"
                                           @if(is_array(old('deliverables')) && in_array('DWG', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables6">
                                        DWG
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="STP"
                                           id="deliverables7"
                                           @if(is_array(old('deliverables')) && in_array('STP', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables7">
                                        STP
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="Other"
                                           id="deliverables8"
                                           @if(is_array(old('deliverables')) && in_array('Other', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables8">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-deliverables-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-deliverables" class="form-label">Other deliverables</label>
                                    <input name="other-deliverables" type="text" class="form-control"
                                           id="other-deliverables" value="{{old('other-deliverables', '')}}"
                                           placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const deliverablesEl = document.getElementById('deliverables8');

                            const deliverablesBox = document.getElementById('other-deliverables-box');

                            if (deliverablesEl.checked) {
                                if (deliverablesBox.classList.contains('d-none')) {
                                    deliverablesBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!deliverablesBox.classList.contains('d-none')) {
                                    deliverablesBox.classList.add('d-none')
                                }
                            }

                            deliverablesEl.addEventListener('change', function handleChange(event) {
                                deliverablesBox.classList.toggle('d-none');
                            });
                        </script>

                        <label class="form-label m-0 fw-semibold">
                            Revit version*
                        </label>

                        <select name="version" id="version-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('version') == '2018' ? "selected" : "" }} value="2018">2018</option>
                            <option {{ old('version') == '2019' ? "selected" : "" }} value="2019">2019</option>
                            <option {{ old('version') == '2020' ? "selected" : "" }} value="2020">2020</option>
                            <option {{ old('version') == '2021' ? "selected" : "" }} value="2021">2021</option>
                            <option {{ old('version') == '2022' ? "selected" : "" }} value="2022">2022</option>
                            <option {{ old('version') == '2023' ? "selected" : "" }} value="2023">2023</option>
                            <option {{ old('version') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-version-box" class="mb-4 d-none">
                            <label for="other-version" class="form-label">Other version</label>
                            <input name="other-version" type="text" class="form-control" id="other-version"
                                   value="{{old('other-version', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const versionSelect = document.getElementById('version-select');

                            const versionBox = document.getElementById('other-version-box');

                            if (versionSelect.value === 'Other') {
                                if (versionBox.classList.contains('d-none')) {
                                    versionBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!versionBox.classList.contains('d-none')) {
                                    versionBox.classList.add('d-none');
                                }
                            }

                            versionSelect.addEventListener('change', function handleChange(event) {
                                if (versionBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        versionBox.classList.remove('d-none');
                                    }
                                } else {
                                    versionBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label m-0 fw-semibold">
                            LOD (Level of Detail)*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 100"
                                           id="lod1"
                                           @if(is_array(old('lod')) && in_array('LOD 100', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod1">
                                        LOD 100
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 200"
                                           id="lod2"
                                           @if(is_array(old('lod')) && in_array('LOD 200', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod2">
                                        LOD 200
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 300"
                                           id="lod3"
                                           @if(is_array(old('lod')) && in_array('LOD 300', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod3">
                                        LOD 300
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 350"
                                           id="lod4"
                                           @if(is_array(old('lod')) && in_array('LOD 350', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod4">
                                        LOD 350
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="Other" id="lod5"
                                           @if(is_array(old('lod')) && in_array('Other', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-lod-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-lod" class="form-label">Other lod</label>
                                    <input name="other-lod" type="text" class="form-control" id="other-lod"
                                           value="{{old('other-lod', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const lodEl = document.getElementById('lod5');

                            const lodBox = document.getElementById('other-lod-box');

                            if (lodEl.checked) {
                                if (lodBox.classList.contains('d-none')) {
                                    lodBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!lodBox.classList.contains('d-none')) {
                                    lodBox.classList.add('d-none')
                                }
                            }

                            lodEl.addEventListener('change', function handleChange(event) {
                                lodBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0 fw-semibold">
                            LOI (Level of Information)*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="loi[]" value="No need"
                                           id="loi1"
                                           @if(is_array(old('loi')) && in_array('No need', old('loi'))) checked @endif>
                                    <label class="form-check-label" for="loi1">
                                        No need
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="loi[]"
                                           value="Add elements materials" id="loi2"
                                           @if(is_array(old('loi')) && in_array('Add elements materials', old('loi'))) checked @endif>
                                    <label class="form-check-label" for="loi2">
                                        Add elements materials
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="loi[]" value="MEPF systems types from drawings" id="loi3"
                                           @if(is_array(old('loi')) && in_array('MEPF systems types from drawings', old('loi'))) checked @endif>
                                    <label class="form-check-label" for="loi3">
                                        MEPF systems types from drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="loi[]" value="Add pipes and ducts insulation from drawings" id="loi4"
                                           @if(is_array(old('loi')) && in_array('Add pipes and ducts insulation from drawings', old('loi'))) checked @endif>
                                    <label class="form-check-label" for="loi4">
                                        Add pipes and ducts insulation from drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="loi[]" value="Other" id="loi5"
                                           @if(is_array(old('loi')) && in_array('Other', old('loi'))) checked @endif>
                                    <label class="form-check-label" for="loi5">
                                        Add additional parameters from the project documentation (please write below the names of the parameters and for which elements to add them)
                                    </label>
                                </div>
                            </div>

                            <div id="other-loi-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-loi" class="form-label">Additional parameters</label>
                                    <input name="other-loi" type="text" class="form-control" id="other-loi"
                                           value="{{old('other-loi', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const loiEl = document.getElementById('loi5');

                            const loiBox = document.getElementById('other-loi-box');

                            if (loiEl.checked) {
                                if (loiBox.classList.contains('d-none')) {
                                    loiBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!loiBox.classList.contains('d-none')) {
                                    loiBox.classList.add('d-none')
                                }
                            }

                            loiEl.addEventListener('change', function handleChange(event) {
                                loiBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0 fw-semibold">
                            Project accuracy*
                        </label>

                        <select name="accuracy" id="accuracy-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('accuracy') == '5 mm' ? "selected" : "" }} value="5 mm">5 mm</option>
                            <option {{ old('accuracy') == '10-15 mm' ? "selected" : "" }} value="10-15 mm">10-15 mm</option>
                            <option {{ old('accuracy') == '20-30 mm' ? "selected" : "" }} value="20-30 mm">20-30 mm</option>
                            <option {{ old('accuracy') == '30-40 mm' ? "selected" : "" }} value="30-40 mm">30-40 mm</option>
                            <option {{ old('accuracy') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-accuracy-box" class="mb-4 d-none">
                            <label for="other-accuracy" class="form-label">Other accuracy</label>
                            <input name="other-accuracy" type="text" class="form-control" id="other-accuracy"
                                   value="{{old('other-accuracy', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const accuracySelect = document.getElementById('accuracy-select');

                            const accuracyBox = document.getElementById('other-accuracy-box');

                            if (accuracySelect.value === 'Other') {
                                if (accuracyBox.classList.contains('d-none')) {
                                    accuracyBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!accuracyBox.classList.contains('d-none')) {
                                    accuracyBox.classList.add('d-none');
                                }
                            }

                            accuracySelect.addEventListener('change', function handleChange(event) {
                                if (accuracyBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        accuracyBox.classList.remove('d-none');
                                    }
                                } else {
                                    accuracyBox.classList.add('d-none');
                                }
                            });
                        </script>

                        <label class="form-label m-0 fw-semibold">
                            In which currency to specify the price?*
                        </label>

                        <select name="currency" id="currency-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('currency') == '€ EUR' ? "selected" : "" }} value="€ EUR">€ EUR</option>
                            <option {{ old('currency') == '$ USD' ? "selected" : "" }} value="$ USD">$ USD</option>
                            <option {{ old('currency') == '₤ GBP' ? "selected" : "" }} value="₤ GBP">₤ GBP</option>
                            <option {{ old('currency') == 'A$ AUD' ? "selected" : "" }} value="A$ AUD">A$ AUD</option>
                            <option {{ old('currency') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-currency-box" class="mb-4 d-none">
                            <label for="other-currency" class="form-label">Other currency</label>
                            <input name="other-currency" type="text" class="form-control" id="other-currency"
                                   value="{{old('other-currency', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const currencySelect = document.getElementById('currency-select');

                            const currencyBox = document.getElementById('other-currency-box');

                            if (currencySelect.value === 'Other') {
                                if (currencyBox.classList.contains('d-none')) {
                                    currencyBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!currencyBox.classList.contains('d-none')) {
                                    currencyBox.classList.add('d-none');
                                }
                            }

                            currencySelect.addEventListener('change', function handleChange(event) {
                                if (currencyBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        currencyBox.classList.remove('d-none');
                                    }
                                } else {
                                    currencyBox.classList.add('d-none');
                                }
                            });
                        </script>

                        <div class="mb-3">
                            <label for="start" class="form-label fw-semibold">
                                Start and finish of the project
                            </label>
                            <input name="start" type="text" class="form-control" id="start"
                                   placeholder="30.01.2024 - 30.05.2024" value="{{old('start', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label fw-semibold">
                                Object address
                            </label>
                            <input name="address" type="text" class="form-control" id="address"
                                   placeholder="20 W 34th St., New York, NY 10001, United States"
                                   value="{{old('address', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label fw-semibold">
                                Link to a Google Map
                            </label>
                            <input name="link" type="text" class="form-control" id="link"
                                   placeholder="https://www.google.com/maps" value="{{old('link', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="comment" class="form-label fw-semibold">
                                Comment
                            </label>
                            <textarea name="comment" class="form-control" id="comment" rows="1"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="files" class="form-label fw-semibold">Select files to upload...</label>
                            <input name="files[]" class="form-control" type="file" id="files" multiple>
                        </div>

                        <div class="mb-3">
                            <label for="reference" class="form-label fw-semibold">Reference to the object</label>
                            <input
                                class="form-control"
                                type="text"
                                name="reference"
                                id="reference"
                                value="{{old('reference', '')}}"
                                aria-label=".form-control example"
                            />
                        </div>

                        <div class="mt-5">
                            <x-turnstile data-theme="light"/>
                        </div>

                        <button type="submit"
                                class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-5"
                                style="background-color: #6bdcdb">
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
