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
                                        The estimate is made within 24 hours during working hours from 09:00 to 18:00 (GMT+3)
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
                    <form method="post" class="footer-form" enctype="multipart/form-data" action="{{route('processingScanShort')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Email*</label>
                            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com" value="{{old('email', '')}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">Name*</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="John Dou" value="{{old('name', '')}}" required>
                        </div>


                        <label class="form-label m-0 fw-semibold">Disciplines*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Architectural" id="disciplines1" @if(is_array(old('disciplines')) && in_array('Architectural', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines1">
                                        Architectural
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Structural" id="disciplines2" @if(is_array(old('disciplines')) && in_array('Structural', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines2">
                                        Structural
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Mechanical" id="disciplines3" @if(is_array(old('disciplines')) && in_array('Mechanical', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines3">
                                        Mechanical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Electrical" id="disciplines4" @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines4">
                                        Electrical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Plumbing" id="disciplines5" @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines5">
                                        Plumbing
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Fire Protection" id="disciplines6" @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines6">
                                        Fire Protection
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Site" id="disciplines7" @if(is_array(old('disciplines')) && in_array('Site', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines7">
                                        Site
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="Other" id="disciplines8" @if(is_array(old('disciplines')) && in_array('Other', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines8">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-discipline" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-discipline" class="form-label">Other discipline</label>
                                    <input name="other-discipline" type="text" class="form-control" id="other-discipline" value="{{old('other-discipline', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const el = document.getElementById('disciplines8');

                            const box = document.getElementById('other-discipline');

                            if(el.checked) {
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


                        <label class="form-label mb-2 fw-semibold">Type of the building\construction*</label>

{{--                        {{ (old('type') == 'Residential Building' ) ? 'checked' : '' }}--}}
                        <select name="type" id="type-select" class="form-select mb-3" aria-label="Default select example">
                            <option selected value="Residential Building">Residential Building</option>
                            <option value="Industrial Building">Industrial Building</option>
                            <option value="Storage">Storage</option>
                            <option value="Historical Building">Historical Building</option>
                            <option value="Commercial Building">Commercial Building</option>
                            <option value="Other">Other</option>
                        </select>

                        <div id="other-type-box" class="mb-4 d-none">
                            <label for="other-type" class="form-label">Other type of the building\construction*</label>
                            <input name="other-type" type="text" class="form-control" id="other-type" value="{{old('other-type', '')}}" placeholder="Write your variant here...">
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
                            <input name="area" type="text" class="form-control" id="area" placeholder="500m2" value="{{old('area', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="height" class="form-label fw-semibold">Height of a building/construction*</label>
                            <input name="height" type="text" class="form-control" id="height" placeholder="10m" value="{{old('height', '')}}">
                        </div>



                        <label class="form-label m-0 fw-semibold">
                            Task for modeling*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="3D model" id="task1" @if(is_array(old('task')) && in_array('3D model', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task1">
                                        3D model
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Floor plans" id="task2" @if(is_array(old('task')) && in_array('Floor plans', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task2">
                                        Floor plans
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Ceilings plans" id="task3" @if(is_array(old('task')) && in_array('Ceilings plans', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task3">
                                        Ceilings plans
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Elevations" id="task4" @if(is_array(old('task')) && in_array('Elevations', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task4">
                                        Elevations
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Sections" id="task5" @if(is_array(old('task')) && in_array('Sections', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task5">
                                        Sections
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="task[]" value="Other" id="task6" @if(is_array(old('task')) && in_array('Other', old('task'))) checked @endif>
                                    <label class="form-check-label" for="task6">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-task-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-task" class="form-label">Other task</label>
                                    <input name="other-task" type="text" class="form-control" id="other-task" value="{{old('other-task', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const taskEl = document.getElementById('task6');

                            const taskBox = document.getElementById('other-task-box');

                            if(taskEl.checked) {
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
                            LOD (Level of Detail)*
                        </label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 100" id="lod1" @if(is_array(old('lod')) && in_array('LOD 100', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod1">
                                        LOD 100
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 200" id="lod2" @if(is_array(old('lod')) && in_array('LOD 200', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod2">
                                        LOD 200
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 300" id="lod3" @if(is_array(old('lod')) && in_array('LOD 300', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod3">
                                        LOD 300
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="LOD 350" id="lod4" @if(is_array(old('lod')) && in_array('LOD 350', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod4">
                                        LOD 350
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="lod[]" value="Other" id="lod5" @if(is_array(old('lod')) && in_array('Other', old('lod'))) checked @endif>
                                    <label class="form-check-label" for="lod5">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-lod-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-lod" class="form-label">Other lod</label>
                                    <input name="other-lod" type="text" class="form-control" id="other-lod" value="{{old('other-lod', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const lodEl = document.getElementById('lod5');

                            const lodBox = document.getElementById('other-lod-box');

                            if(lodEl.checked) {
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
                            Project accuracy*
                        </label>

                        <select name="accuracy" id="accuracy-select" class="form-select mb-3" aria-label="Default select example">
                            <option value="5 mm">5 mm</option>
                            <option value="10-15 mm">10-15 mm</option>
                            <option value="20-30 mm">20-30 mm</option>
                            <option value="30-40 mm">30-40 mm</option>
                            <option value="Other">Other</option>
                        </select>

                        <div id="other-accuracy-box" class="mb-4 d-none">
                            <label for="other-accuracy" class="form-label">Other accuracy</label>
                            <input name="other-accuracy" type="text" class="form-control" id="other-accuracy" value="{{old('other-accuracy', '')}}" placeholder="Write your variant here...">
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

                        <select name="currency" id="currency-select" class="form-select mb-3" aria-label="Default select example">
                            <option value="€ EUR">€ EUR</option>
                            <option value="$ USD">$ USD</option>
                            <option value="₤ GBP">₤ GBP</option>
                            <option value="A$ AUD">A$ AUD</option>
                            <option value="Other">Other</option>
                        </select>

                        <div id="other-currency-box" class="mb-4 d-none">
                            <label for="other-currency" class="form-label">Other currency</label>
                            <input name="other-currency" type="text" class="form-control" id="other-currency" value="{{old('other-currency', '')}}" placeholder="Write your variant here...">
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
                            <input name="start" type="text" class="form-control" id="start" placeholder="30.01.2024 - 30.05.2024" value="{{old('start', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label fw-semibold">
                                Object address
                            </label>
                            <input name="address" type="text" class="form-control" id="address" placeholder="20 W 34th St., New York, NY 10001, United States" value="{{old('address', '')}}">
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label fw-semibold">
                                Link to a Google Map
                            </label>
                            <input name="link" type="text" class="form-control" id="link" placeholder="https://www.google.com/maps" value="{{old('link', '')}}">
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
