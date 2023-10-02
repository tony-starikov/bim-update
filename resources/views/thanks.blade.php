@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container p-5 d-flex align-items-center" style="min-height: 100vh;">
            <div class="row w-100 px-5 justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <img src="/images/thanks/illustration_scan_to_bim.png" alt="thanks scan to bim" class="img-fluid w-100 mt-5">
                </div>
                <div class="col-12 mt-5 text-center">
                    <h2 class="text-white fw-bold text-center">
                        Your message has been sent.
                    </h2>
                    <h2 class="text-white fw-bold text-center">
                        Our support team will contact you within 24 hours.
                    </h2>
                    <div class="row p-2 my-3 d-flex justify-content-center">
                        <div class="col-12 col-md-6 col-lg-5 col-xl-4 col-xxl-3 mx-auto">
                            <a id="button-first-screen-xxl" href="{{ route('main') }}" role="button" class="btn btn-primary shadow-lg btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                <span class="fw-bold h5 d-block my-2">HOME PAGE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
