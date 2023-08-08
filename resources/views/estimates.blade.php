@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')

    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container px-0 p-lg-5">
            <div class="row px-0 px-lg-5 my-0 my-lg-5">
                <div class="col-12 col-xl-6 mt-5">
                    <h2 class="text-white display-4 fw-bold pb-2 mt-5 mt-lg-0">BIM ESTIMATES FOR YOUR PROJECTS</h2>

                    <h2 class="d-xl-none text-white mb-4 h2 fw-semibold">
                        <small>
                            Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate. Request an estimate now to maximize the potential of your BIM project.
                        </small>
                    </h2>

                    <form method="post" class="text-white footer-form">
                        @csrf

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" placeholder="Email" aria-label=".form-control-lg example">
                        </div>

                        <h4 class="fw-bold my-4">
                            Disciplines
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Architectural
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Structural
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Mechanical
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Electrical
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Plumbing
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Fire Protection
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Site
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your discipline" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <h4 class="fw-bold my-4">
                            Project Units
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Metric
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Imperial
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other units" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Project language
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                English
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                German
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                French
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Ukrainian
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other language" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Type of the building\construction
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Residential Building
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Industrial Building
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Storage
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Transmission tower
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Guy tower
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" placeholder="Building\construction area" aria-label=".form-control-lg example">
                        </div>

                        <div class="my-3">
                            <input class="form-control form-control-lg fw-bold border border-4 border-white px-2 shadow-none" type="text" placeholder="Height of a building/construction" aria-label=".form-control-lg example">
                        </div>


                        <h4 class="fw-bold my-4">
                            Incoming data
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Point cloud
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                DWG drafts
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                PDF drafts
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Photos
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Revit families
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Revit template for project
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Revit sheets
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Examples of similar projects
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Manual for modeling
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Incoming Point Cloud
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                RCS
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                RCP
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Structural RCP
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Task for modeling
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                3D model
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Floor plans
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Ceilings plans
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Elevations
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Sections
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            The purpose of the model
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                As-built
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Reconstruction
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Facility Management
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                Digital Twins
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                For government
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Deliverables
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                RVT (only 3D model)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                RVT (3D model + drawings)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                RVT (3D mode l+ drawings + schedules)
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                IFC
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                PDF
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                DWG
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            Revit version
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2017
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2018
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2019
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2020
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2021
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                2022
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            LOD (Level of Detail)
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                LOD 100
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                LOD 200
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                LOD 300
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                LOD 350
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            LOI (Level of Information)
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                add elements materials
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                set systems types from drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                add pipes and ducts insulation from drawings
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="min-width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ps-1 mt-2 h5" for="flexCheckDefault">
                                add additional parameters from the project documentation
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">
                                no need
                            </label>
                        </div>

{{--                        <div class="row">--}}
{{--                            <div class="col-3">--}}
{{--                                <div class="form-check d-flex align-items-center mb-3">--}}
{{--                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="checkbox" value="" id="flexCheckDefault" style="width: 30px; height: 30px;">--}}
{{--                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexCheckDefault">--}}
{{--                                        Other--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-9">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write your variant" aria-label=".form-control-lg example">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <h4 class="fw-bold my-4">
                            Project accuracy
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                10 mm
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                20-30 mm
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                30-40 mm
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>


                        <h4 class="fw-bold my-4">
                            In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Yes, I accept
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                No, I don't accept
                            </label>
                        </div>

{{--                        <div class="row">--}}
{{--                            <div class="col-3">--}}
{{--                                <div class="form-check d-flex align-items-center mb-3">--}}
{{--                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">--}}
{{--                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">--}}
{{--                                        Other--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-9">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <h4 class="fw-bold my-4">
                            Possibility of making independent technical decisions by the performer
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                Yes, but inform the customer
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                No, check with the customer for approval
                            </label>
                        </div>

{{--                        <div class="row">--}}
{{--                            <div class="col-3">--}}
{{--                                <div class="form-check d-flex align-items-center mb-3">--}}
{{--                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">--}}
{{--                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">--}}
{{--                                        Other--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-9">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}


                        <h4 class="fw-bold my-4">
                            Providing models and / or reports to control the work process
                        </h4>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                every day
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                every week
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                every month
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                after the modeling is completed
                            </label>
                        </div>

                        <div class="form-check d-flex align-items-center mb-3">
                            <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                            <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                according to discussed schedule
                            </label>
                        </div>

                        <div class="row">
                            <div class="col-3">
                                <div class="form-check d-flex align-items-center mb-3">
                                    <input class="form-check-input fw-bold border border-4 border-white shadow-none" type="radio" name="flexRadioDefault" id="flexRadioDefault1" style="width: 30px; height: 30px;">
                                    <label class="form-check-label fw-bold ms-1 mt-2 h5" for="flexRadioDefault1">
                                        Other
                                    </label>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <input class="form-control form-control-lg fw-bold border-0 border-bottom border-4 border-white rounded-0 px-2 shadow-none" type="text" placeholder="Write other variant" aria-label=".form-control-lg example">
                                </div>
                            </div>
                        </div>




{{--                        <div class="mb-5">--}}
{{--                            <input type="text" name="phone" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput4" placeholder="Phone">--}}
{{--                        </div>--}}
{{--                        <div class="mb-5">--}}
{{--                            <input type="text" name="company" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput5" placeholder="Company">--}}
{{--                        </div>--}}
{{--                        <div class="mb-5">--}}
{{--                            <input type="text" name="message" class="form-control fw-bold shadow-none border-0 border-bottom border-white border-3 text-white rounded-0" id="exampleFormControlInput6" placeholder="Message">--}}
{{--                        </div>--}}

                        <button type="submit" class="btn btn-primary btn-lg border-0 w-50 fw-bold shadow-none mb-4 mb-lg-0 mt-4" style="background-color: #6bdcdb">
                            <span class="fw-bold h4 d-block my-1">SUBMIT</span>
                        </button>

                    </form>
                </div>
                <div class="d-none d-xl-block col-xl-6 mt-5">
                    <h2 class="p-5 text-white h2 fw-semibold">
                        <small>
                            Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Our team of experts will analyze the unique requirements of your project and provide an accurate and detailed estimate. Request an estimate now to maximize the potential of your BIM project.
                        </small>
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection
