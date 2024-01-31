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

    <div class="container-fluid" style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;">
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

                    <div class="row">
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
                          action="{{route('estimatesProcessingMep')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email*</label>
                            <input name="email" type="email" class="form-control" id="email"
                                   placeholder="name@example.com" value="{{old('email', '')}}" required>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="John Dou"
                                   value="{{old('name', '')}}" required>
                        </div>


                        <label class="form-label mb-2">Type of the building\construction*</label>

                        <select name="type" id="type-select" class="form-select mb-3" aria-label="Default select example">
                            <option {{ old('type') == 'Residential Building' ? "selected" : "" }} value="Residential Building">Residential Building</option>
                            <option {{ old('type') == 'Administrative Building' ? "selected" : "" }} value="Administrative Building">Administrative Building</option>
                            <option {{ old('type') == 'Industrial Building' ? "selected" : "" }} value="Industrial Building">Industrial Building</option>
                            <option {{ old('type') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-type-box" class="mb-4 d-none">
                            <label for="other-type" class="form-label">Other type*</label>
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


                        <label class="form-label mb-2">Project language*</label>

                        <select name="language" id="language-select" class="form-select mb-3" aria-label="Default select example">
                            <option {{ old('language') == 'English' ? "selected" : "" }} value="English">English</option>
                            <option {{ old('language') == 'German' ? "selected" : "" }} value="German">German</option>
                            <option {{ old('language') == 'French' ? "selected" : "" }} value="French">French</option>
                            <option {{ old('language') == 'Ukrainian' ? "selected" : "" }} value="Ukrainian">Ukrainian</option>
                            <option {{ old('language') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-language-box" class="mb-4 d-none">
                            <label for="other-language" class="form-label">Other language*</label>
                            <input name="other-language" type="text" class="form-control" id="other-language"
                                   value="{{old('other-language', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const languageSelect = document.getElementById('language-select');

                            const languageBox = document.getElementById('other-language-box');

                            if (languageSelect.value === 'Other') {
                                if (languageBox.classList.contains('d-none')) {
                                    languageBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!languageBox.classList.contains('d-none')) {
                                    languageBox.classList.add('d-none');
                                }
                            }

                            languageSelect.addEventListener('change', function handleChange(event) {
                                if (languageBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        languageBox.classList.remove('d-none');
                                    }
                                } else {
                                    languageBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Project units*</label>

                        <select name="units" id="units-select" class="form-select mb-3" aria-label="Default select example">
                            <option {{ old('units') == 'Metric' ? "selected" : "" }} value="Metric">Metric</option>
                            <option {{ old('units') == 'Imperial' ? "selected" : "" }} value="Imperial">Imperial</option>
                            <option {{ old('units') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-units-box" class="mb-4 d-none">
                            <label for="other-units" class="form-label">Other units*</label>
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


                        <label class="form-label m-0">Disciplines*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]" value="HVAC"
                                           id="disciplines1"
                                           @if(is_array(old('disciplines')) && in_array('HVAC', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines1">
                                        HVAC
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Electrical" id="disciplines2"
                                           @if(is_array(old('disciplines')) && in_array('Electrical', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines2">
                                        Electrical
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Plumbing" id="disciplines3"
                                           @if(is_array(old('disciplines')) && in_array('Plumbing', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines3">
                                        Plumbing
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="disciplines[]"
                                           value="Fire Protection" id="disciplines4"
                                           @if(is_array(old('disciplines')) && in_array('Fire Protection', old('disciplines'))) checked @endif>
                                    <label class="form-check-label" for="disciplines4">
                                        Fire Protection
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

                            <div id="other-disciplines-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-disciplines" class="form-label">Other discipline</label>
                                    <input name="other-disciplines" type="text" class="form-control"
                                           id="other-disciplines" value="{{old('other-disciplines', '')}}"
                                           placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const el = document.getElementById('disciplines8');

                            const box = document.getElementById('other-disciplines-box');

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


                        <label class="form-label m-0">Services*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Modeling"
                                           id="services1"
                                           @if(is_array(old('services')) && in_array('Modeling', old('services'))) checked @endif>
                                    <label class="form-check-label" for="services1">
                                        Modeling
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]"
                                           value="Fabrication" id="services2"
                                           @if(is_array(old('services')) && in_array('Fabrication', old('services'))) checked @endif>
                                    <label class="form-check-label" for="services2">
                                        Fabrication
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]"
                                           value="Coordination" id="services3"
                                           @if(is_array(old('services')) && in_array('Coordination', old('services'))) checked @endif>
                                    <label class="form-check-label" for="services3">
                                        Coordination
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]"
                                           value="Creating Shop Drawings" id="services4"
                                           @if(is_array(old('services')) && in_array('Creating Shop Drawings', old('services'))) checked @endif>
                                    <label class="form-check-label" for="services4">
                                        Creating Shop Drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Other"
                                           id="services5"
                                           @if(is_array(old('services')) && in_array('Other', old('services'))) checked @endif>
                                    <label class="form-check-label" for="services5">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-service" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-service" class="form-label">Other service</label>
                                    <input name="other-service" type="text" class="form-control" id="other-service"
                                           value="{{old('other-service', '')}}"
                                           placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const serviceEl = document.getElementById('services5');

                            const serviceBox = document.getElementById('other-service');

                            if (serviceEl.checked) {
                                if (serviceBox.classList.contains('d-none')) {
                                    serviceBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!serviceBox.classList.contains('d-none')) {
                                    serviceBox.classList.add('d-none')
                                }
                            }

                            serviceEl.addEventListener('change', function handleChange(event) {
                                serviceBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label mb-2">LOD (Level of development)*</label>

                        <select name="lod" id="lod-select" class="form-select mb-3" aria-label="Default select example">
                            <option {{ old('lod') == '100' ? "selected" : "" }} value="100">100</option>
                            <option {{ old('lod') == '200' ? "selected" : "" }} value="200">200</option>
                            <option {{ old('lod') == '300' ? "selected" : "" }} value="300">300</option>
                            <option {{ old('lod') == '400' ? "selected" : "" }} value="400">400</option>
                            <option {{ old('lod') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-lod-box" class="mb-4 d-none">
                            <label for="other-lod" class="form-label">Other lod*</label>
                            <input name="other-lod" type="text" class="form-control" id="other-lod"
                                   value="{{old('other-lod', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const lodSelect = document.getElementById('lod-select');

                            const lodBox = document.getElementById('other-lod-box');

                            if (lodSelect.value === 'Other') {
                                if (lodBox.classList.contains('d-none')) {
                                    lodBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!lodBox.classList.contains('d-none')) {
                                    lodBox.classList.add('d-none');
                                }
                            }

                            lodSelect.addEventListener('change', function handleChange(event) {
                                if (lodBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        lodBox.classList.remove('d-none');
                                    }
                                } else {
                                    lodBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label m-0">Incoming data*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="PDF drawings"
                                           id="data1"
                                           @if(is_array(old('data')) && in_array('PDF drawings', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data1">
                                        PDF drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="NWD/NWC models"
                                           id="data2"
                                           @if(is_array(old('data')) && in_array('NWD/NWC models', old('data'))) checked @endif>
                                    <label class="form-check-label" for="services2">
                                        NWD/NWC models
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="DWG drawings"
                                           id="data3"
                                           @if(is_array(old('data')) && in_array('DWG drawings', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data3">
                                        DWG drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="Submittals"
                                           id="data4"
                                           @if(is_array(old('data')) && in_array('Submittals', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data4">
                                        Submittals
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="Standards"
                                           id="data5"
                                           @if(is_array(old('data')) && in_array('Standards', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data5">
                                        Standards
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="RVT templates"
                                           id="data6"
                                           @if(is_array(old('data')) && in_array('RVT templates', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data6">
                                        RVT templates
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="RVT models"
                                           id="data7"
                                           @if(is_array(old('data')) && in_array('RVT models', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data7">
                                        RVT models
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="data[]" value="Other"
                                           id="data8"
                                           @if(is_array(old('data')) && in_array('Other', old('data'))) checked @endif>
                                    <label class="form-check-label" for="data8">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-data-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-data" class="form-label">Other incoming data</label>
                                    <input name="other-data" type="text" class="form-control" id="other-data"
                                           value="{{old('other-data', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const dataEl = document.getElementById('data8');

                            const dataBox = document.getElementById('other-data-box');

                            if (dataEl.checked) {
                                if (dataBox.classList.contains('d-none')) {
                                    dataBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!dataBox.classList.contains('d-none')) {
                                    dataBox.classList.add('d-none')
                                }
                            }

                            dataEl.addEventListener('change', function handleChange(event) {
                                dataBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0">
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


                        <label class="form-label m-0">Coordination software</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="coordination[]" value="Navisworks"
                                           id="coordination1"
                                           @if(is_array(old('coordination')) && in_array('Navisworks', old('coordination'))) checked @endif>
                                    <label class="form-check-label" for="coordination1">
                                        Navisworks
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="coordination[]" value="Revizto"
                                           id="coordination2"
                                           @if(is_array(old('coordination')) && in_array('Revizto', old('coordination'))) checked @endif>
                                    <label class="form-check-label" for="coordination2">
                                        Revizto
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="coordination[]" value="Solibri"
                                           id="coordination3"
                                           @if(is_array(old('coordination')) && in_array('Solibri', old('coordination'))) checked @endif>
                                    <label class="form-check-label" for="coordination3">
                                        Solibri
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="coordination[]" value="BIM Track"
                                           id="coordination4"
                                           @if(is_array(old('coordination')) && in_array('BIM Track', old('coordination'))) checked @endif>
                                    <label class="form-check-label" for="coordination4">
                                        BIM Track
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="coordination[]" value="Other"
                                           id="coordination5"
                                           @if(is_array(old('coordination')) && in_array('Other', old('coordination'))) checked @endif>
                                    <label class="form-check-label" for="coordination5">
                                        Other
                                    </label>
                                </div>
                            </div>

                            <div id="other-coordination-box" class="col-12 d-none">
                                <div class="mb-4">
                                    <label for="other-coordination" class="form-label">Other coordination software*</label>
                                    <input name="other-coordination" type="text" class="form-control" id="other-coordination"
                                           value="{{old('other-coordination', '')}}" placeholder="Write your variant here...">
                                </div>
                            </div>
                        </div>

                        <script>
                            const coordinationEl = document.getElementById('coordination5');

                            const coordinationBox = document.getElementById('other-coordination-box');

                            if (coordinationEl.checked) {
                                if (coordinationBox.classList.contains('d-none')) {
                                    coordinationBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!coordinationBox.classList.contains('d-none')) {
                                    coordinationBox.classList.add('d-none')
                                }
                            }

                            coordinationEl.addEventListener('change', function handleChange(event) {
                                coordinationBox.classList.toggle('d-none');
                            });
                        </script>


                        <label class="form-label m-0">
                            Fabrication software
                        </label>

                        <select name="fabrication" id="fabrication-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('fabrication') == 'CAMduct' ? "selected" : "" }} value="CAMduct">CAMduct</option>
                            <option {{ old('fabrication') == 'ESTmep' ? "selected" : "" }} value="ESTmep">ESTmep</option>
                            <option {{ old('fabrication') == 'CADmep' ? "selected" : "" }} value="CADmep">CADmep</option>
                            <option {{ old('fabrication') == 'SysQue' ? "selected" : "" }} value="SysQue">SysQue</option>
                            <option {{ old('fabrication') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-fabrication-box" class="mb-4 d-none">
                            <label for="other-fabrication" class="form-label">Other fabrication software*</label>
                            <input name="other-fabrication" type="text" class="form-control" id="other-fabrication"
                                   value="{{old('other-fabrication', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const fabricationSelect = document.getElementById('fabrication-select');

                            const fabricationBox = document.getElementById('other-fabrication-box');

                            if (fabricationSelect.value === 'Other') {
                                if (fabricationBox.classList.contains('d-none')) {
                                    fabricationBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!fabricationBox.classList.contains('d-none')) {
                                    fabricationBox.classList.add('d-none');
                                }
                            }

                            fabricationSelect.addEventListener('change', function handleChange(event) {
                                if (fabricationBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        fabricationBox.classList.remove('d-none');
                                    }
                                } else {
                                    fabricationBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Expected project duration*</label>

                        <select name="duration" id="duration-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('duration') == '1-2 weeks' ? "selected" : "" }} value="1-2 weeks">1-2 weeks
                            </option>
                            <option {{ old('duration') == '1 month' ? "selected" : "" }} value="1 month">1 month
                            </option>
                            <option {{ old('duration') == '3 months' ? "selected" : "" }} value="3 months">3 months
                            </option>
                            <option {{ old('duration') == '6 months' ? "selected" : "" }} value="6 months">6 months
                            </option>
                            <option {{ old('duration') == '1 year' ? "selected" : "" }} value="1 year">1 year</option>
                            <option {{ old('duration') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-duration-box" class="mb-4 d-none">
                            <label for="other-duration" class="form-label">Other duration*</label>
                            <input name="other-duration" type="text" class="form-control" id="other-duration"
                                   value="{{old('other-duration', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const durationSelect = document.getElementById('duration-select');

                            const durationBox = document.getElementById('other-duration-box');

                            if (durationSelect.value === 'Other') {
                                if (durationBox.classList.contains('d-none')) {
                                    durationBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!durationBox.classList.contains('d-none')) {
                                    durationBox.classList.add('d-none');
                                }
                            }

                            durationSelect.addEventListener('change', function handleChange(event) {
                                if (durationBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        durationBox.classList.remove('d-none');
                                    }
                                } else {
                                    durationBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Required number of draftsmen</label>

                        <select name="draftsmen" id="draftsmen-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('draftsmen') == '1-2 persons' ? "selected" : "" }} value="1-2 persons">1-2 persons</option>
                            <option {{ old('draftsmen') == '3-4 persons' ? "selected" : "" }} value="3-4 persons">3-4 persons</option>
                            <option {{ old('draftsmen') == '5-6 persons' ? "selected" : "" }} value="5-6 persons">5-6 persons</option>
                            <option {{ old('draftsmen') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-draftsmen-box" class="mb-4 d-none">
                            <label for="other-draftsmen" class="form-label">Other number of draftsmen*</label>
                            <input name="other-draftsmen" type="text" class="form-control" id="other-draftsmen"
                                   value="{{old('other-draftsmen', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const draftsmenSelect = document.getElementById('draftsmen-select');

                            const draftsmenBox = document.getElementById('other-draftsmen-box');

                            if (draftsmenSelect.value === 'Other') {
                                if (draftsmenBox.classList.contains('d-none')) {
                                    draftsmenBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!draftsmenBox.classList.contains('d-none')) {
                                    draftsmenBox.classList.add('d-none');
                                }
                            }

                            draftsmenSelect.addEventListener('change', function handleChange(event) {
                                if (draftsmenBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        draftsmenBox.classList.remove('d-none');
                                    }
                                } else {
                                    draftsmenBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Required number of modelers</label>

                        <select name="modelers" id="modelers-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('modelers') == '1-2 persons' ? "selected" : "" }} value="1-2 persons">1-2 persons</option>
                            <option {{ old('modelers') == '3-4 persons' ? "selected" : "" }} value="3-4 persons">3-4 persons</option>
                            <option {{ old('modelers') == '5-6 persons' ? "selected" : "" }} value="5-6 persons">5-6 persons</option>
                            <option {{ old('modelers') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-modelers-box" class="mb-4 d-none">
                            <label for="other-modelers" class="form-label">Other number of modelers*</label>
                            <input name="other-modelers" type="text" class="form-control" id="other-modelers"
                                   value="{{old('other-modelers', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const modelersSelect = document.getElementById('modelers-select');

                            const modelersBox = document.getElementById('other-modelers-box');

                            if (modelersSelect.value === 'Other') {
                                if (modelersBox.classList.contains('d-none')) {
                                    modelersBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!modelersBox.classList.contains('d-none')) {
                                    modelersBox.classList.add('d-none');
                                }
                            }

                            modelersSelect.addEventListener('change', function handleChange(event) {
                                if (modelersBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        modelersBox.classList.remove('d-none');
                                    }
                                } else {
                                    modelersBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Required number of coordinators</label>

                        <select name="coordinators" id="coordinators-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('coordinators') == '1-2 persons' ? "selected" : "" }} value="1-2 persons">1-2 persons</option>
                            <option {{ old('coordinators') == '3-4 persons' ? "selected" : "" }} value="3-4 persons">3-4 persons</option>
                            <option {{ old('coordinators') == '5-6 persons' ? "selected" : "" }} value="5-6 persons">5-6 persons</option>
                            <option {{ old('coordinators') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-coordinators-box" class="mb-4 d-none">
                            <label for="other-coordinators" class="form-label">Other number of coordinators*</label>
                            <input name="other-coordinators" type="text" class="form-control" id="other-coordinators"
                                   value="{{old('other-coordinators', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const coordinatorsSelect = document.getElementById('coordinators-select');

                            const coordinatorsBox = document.getElementById('other-coordinators-box');

                            if (coordinatorsSelect.value === 'Other') {
                                if (coordinatorsBox.classList.contains('d-none')) {
                                    coordinatorsBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!coordinatorsBox.classList.contains('d-none')) {
                                    coordinatorsBox.classList.add('d-none');
                                }
                            }

                            coordinatorsSelect.addEventListener('change', function handleChange(event) {
                                if (coordinatorsBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        coordinatorsBox.classList.remove('d-none');
                                    }
                                } else {
                                    coordinatorsBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label mb-2">Required number of BIM managers</label>

                        <select name="managers" id="managers-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('managers') == '1 person' ? "selected" : "" }} value="1 person">1 person</option>
                            <option {{ old('managers') == '2 persons' ? "selected" : "" }} value="2 persons">2 persons</option>
                            <option {{ old('managers') == '3 persons' ? "selected" : "" }} value="3 persons">3 persons</option>
                            <option {{ old('managers') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-managers-box" class="mb-4 d-none">
                            <label for="other-managers" class="form-label">Other number of managers*</label>
                            <input name="other-managers" type="text" class="form-control" id="other-managers"
                                   value="{{old('other-managers', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const managersSelect = document.getElementById('managers-select');

                            const managersBox = document.getElementById('other-managers-box');

                            if (managersSelect.value === 'Other') {
                                if (managersBox.classList.contains('d-none')) {
                                    managersBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!managersBox.classList.contains('d-none')) {
                                    managersBox.classList.add('d-none');
                                }
                            }

                            managersSelect.addEventListener('change', function handleChange(event) {
                                if (managersBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        managersBox.classList.remove('d-none');
                                    }
                                } else {
                                    managersBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <label class="form-label m-0">Deliverables*</label>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]"
                                           value="RVT model" id="deliverables1"
                                           @if(is_array(old('deliverables')) && in_array('RVT model', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables1">
                                        RVT model
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="NWC export"
                                           id="deliverables2"
                                           @if(is_array(old('deliverables')) && in_array('NWC export', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables2">
                                        NWC export
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="PDF drawings"
                                           id="deliverables3"
                                           @if(is_array(old('deliverables')) && in_array('PDF drawings', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables3">
                                        PDF drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="IFC export"
                                           id="deliverables4"
                                           @if(is_array(old('deliverables')) && in_array('IFC export', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables4">
                                        IFC export
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="DWG drawings"
                                           id="deliverables5"
                                           @if(is_array(old('deliverables')) && in_array('DWG drawings', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables5">
                                        DWG drawings
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="Clash Report"
                                           id="deliverables6"
                                           @if(is_array(old('deliverables')) && in_array('Clash Report', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables6">
                                        Clash Report
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="deliverables[]" value="NWD model"
                                           id="deliverables7"
                                           @if(is_array(old('deliverables')) && in_array('NWD model', old('deliverables'))) checked @endif>
                                    <label class="form-check-label" for="deliverables7">
                                        NWD model
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
                                    <input name="other-deliverables" type="text" class="form-control" id="other-deliverables"
                                           value="{{old('other-deliverables', '')}}" placeholder="Write your variant here...">
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


                        <label class="form-label mb-2">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.*
                        </label>

                        <select name="downtime" id="downtime-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('downtime') == 'Yes, I accept' ? "selected" : "" }} value="Yes, I accept">Yes, I accept</option>
                            <option {{ old('downtime') == "No, I don't accept" ? "selected" : "" }} value="No, I don't accept">No, I don't accept</option>
                        </select>


                        <label class="form-label mb-2">
                            Possibility of making independent technical decisions by the performer.*
                        </label>

                        <select name="decisions" id="decisions-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('decisions') == 'Yes, but inform the customer' ? "selected" : "" }} value="Yes, but inform the customer">Yes, but inform the customer</option>
                            <option {{ old('decisions') == "No, check with the customer for approval" ? "selected" : "" }} value="No, check with the customer for approval">No, check with the customer for approval</option>
                        </select>


                        <label class="form-label mb-2">Providing models and / or reports to control the work process.</label>

                        <select name="reports" id="reports-select" class="form-select mb-3"
                                aria-label="Default select example">
                            <option {{ old('reports') == 'every day' ? "selected" : "" }} value="every day">every day</option>
                            <option {{ old('reports') == 'every week' ? "selected" : "" }} value="every week">every week</option>
                            <option {{ old('reports') == 'every month' ? "selected" : "" }} value="every month">every month</option>
                            <option {{ old('reports') == 'after the modeling is completed' ? "selected" : "" }} value="after the modeling is completed">after the modeling is completed</option>
                            <option {{ old('reports') == 'according to discussed schedule' ? "selected" : "" }} value="according to discussed schedule">according to discussed schedule</option>
                            <option {{ old('reports') == 'Other' ? "selected" : "" }} value="Other">Other</option>
                        </select>

                        <div id="other-reports-box" class="mb-4 d-none">
                            <label for="other-reports" class="form-label">Other models and / or reports to control the work process*</label>
                            <input name="other-reports" type="text" class="form-control" id="other-reports"
                                   value="{{old('other-reports', '')}}" placeholder="Write your variant here...">
                        </div>

                        <script>
                            const reportsSelect = document.getElementById('reports-select');

                            const reportsBox = document.getElementById('other-reports-box');

                            if (reportsSelect.value === 'Other') {
                                if (reportsBox.classList.contains('d-none')) {
                                    reportsBox.classList.toggle('d-none');
                                }
                            } else {
                                if (!reportsBox.classList.contains('d-none')) {
                                    reportsBox.classList.add('d-none');
                                }
                            }

                            reportsSelect.addEventListener('change', function handleChange(event) {
                                if (reportsBox.classList.contains('d-none')) {
                                    if (event.target.value === 'Other') {
                                        reportsBox.classList.remove('d-none');
                                    }
                                } else {
                                    reportsBox.classList.add('d-none');
                                }
                            });
                        </script>


                        <div class="mb-3">
                            <label for="comment" class="form-label">
                                Comment
                            </label>
                            <textarea name="comment" class="form-control" id="comment" rows="1"></textarea>
                        </div>


                        <div class="mb-3">
                            <label for="files" class="form-label">Select files to upload*</label>
                            <input  name="files[]" class="form-control" type="file" id="files" multiple>
                            <div id="filesHelp" class="form-text">Architectural plan, MEP design drawings, rvt models, ifc models (jpg, pdf, dwg, rvt, ifc)</div>
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
