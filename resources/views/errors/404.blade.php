@extends('errors.master')

@section('meta')
    <meta name="robots" content="noindex" />
@endsection

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container p-5 d-flex align-items-center" style="min-height: 100vh;">
            <div class="row w-100 px-lg-5 justify-content-center">
                <div class="col-md-8 mt-lg-4">
                    <img src="/images/404-bg.png" alt="thanks scan to bim" class="img-fluid w-100 mt-5">
                </div>
                <div class="col-12 mt-5 text-center">
                    <h4 class="text-white fw-bold text-center">
                        We can't find the right page. But don't worry!
                    </h4>
                    <h4 class="text-white fw-bold text-center">
                        Here are some useful links:
                    </h4>
                    <div class="row p-2 mb-3 d-flex justify-content-center">
                        <div class="col-12 col-md-6 col-xxl-3 mt-4 mx-auto">
                            <a id="button-first-screen-xxl" href="{{ route('main') }}" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                <span class="fw-bold h5 d-block my-2">HOME</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-3 mt-4 mx-auto">
                            <a id="button-first-screen-xxl" href="{{ route('services') }}" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                <span class="fw-bold h5 d-block my-2">SERVICES</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-3 mt-4 mx-auto">
                            <a id="button-first-screen-xxl" href="{{ route('blog') }}" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                <span class="fw-bold h5 d-block my-2">BLOG</span>
                            </a>
                        </div>
                        <div class="col-12 col-md-6 col-xxl-3 mt-4 mx-auto">
                            <a id="button-first-screen-xxl" href="{{ route('portfolio.index') }}" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                <span class="fw-bold h5 d-block my-2">PORTFOLIO</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('canonical')
    <link rel="canonical" href="">
@endsection
