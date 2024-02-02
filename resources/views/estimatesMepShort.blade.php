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
    <div class="container-fluid"
         style="background-image: url(/images/estimates/header_main_mep.png); background-position: center; background-repeat: no-repeat; background-attachment: local; background-size: cover;  min-height: 100vh;">
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
                                Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each
                                client.
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-lg-9 col-xxl-8 mt-4">
                            <h4 class="text-white">
                                Our team of experts will analyze the unique requirements of your project and provide an
                                accurate and detailed estimate.
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
                            <a href="{{ route('showService', 'mep-coordination') }}" role="button"
                               class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center"
                               style="background-color: #43aeb6">
                                <span
                                    class="fw-bold h5 d-block my-2">MEP COORDINATION & DIGITAL FABRICATION SERVICE</span>
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
                          action="{{route('processingMepShort')}}">
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


                        <label class="form-label m-0 fw-semibold">Disciplines*</label>

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


                        <label class="form-label m-0 fw-semibold">Services*</label>

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


                        <label class="form-label mb-2 fw-semibold">LOD (Level of development)*</label>

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


                        <label class="form-label m-0 fw-semibold">Incoming data*</label>

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


                        <label class="form-label mb-2 fw-semibold">Expected project duration*</label>

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


                        <label class="form-label m-0 fw-semibold">Deliverables*</label>

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

                        <div class="mb-3">
                            <label for="comment" class="form-label fw-semibold">
                                Comment
                            </label>
                            <textarea name="comment" class="form-control" id="comment" rows="1"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="files" class="form-label fw-semibold">Select files to upload*</label>
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
