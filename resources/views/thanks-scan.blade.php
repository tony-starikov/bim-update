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

@section('meta')
    <meta name="robots" content="noindex" />
@endsection

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">
        <div class="container mt-5 pb-5 p-lg-5" style="min-height: 100vh;">
            <div class="row px-lg-5 mt-5">
                <div class="col-12">
                    <div class="row row-cols-1 row-cols-lg-2 g-5">
                        <div class="col">
                            <div class="card border border-0 bg-transparent h-100">
                                <img src="/images/thanks_3.png" alt="thanks scan to bim" class="card-img-top img-fluid w-50 mx-auto">
                                <div class="card-body border border-0">
                                    <h5 class="text-white fw-semibold mt-lg-4">
                                        Thank you!
                                    </h5>
                                    <h5 class="text-white fw-semibold">
                                        Your message has been sent to BIM/VDC specialists.
                                    </h5>
                                    <h5 class="text-white fw-semibold mt-4">
                                        They will begin processing your application shortly.
                                    </h5>
                                    <h5 class="text-white fw-semibold mt-4">
                                        Once the assessment is complete, they will contact you within 24 hours.
                                    </h5>
                                </div>
                                <div class="card-footer border border-0 bg-transparent">
                                    <div class="row p-2 mt-3 d-flex justify-content-center">
                                        <div class="col-12 col-md-9 col-xxl-7 mx-auto">
                                            <a id="button-first-screen-xxl" href="{{ route('main') }}" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                                <span class="fw-bold h5 d-block my-2">HOME PAGE</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border border-0 bg-transparent h-100">
                                <img src="/images/Kseniya_2.png" alt="thanks scan to bim" class="card-img-top img-fluid w-50 mx-auto">
                                <div class="card-body border border-0">
                                    <h5 class="text-white fw-bold mt-4">
                                        Do you still have questions?
                                    </h5>
                                    <h5 class="text-white fw-semibold">
                                        Contact Ksenya Kutsenko, director of Scan to BIM.
                                    </h5>
                                    <a href="mailto:k.kseniya@bim-prove.com" class="text-decoration-underline text-white">
                                        <h5 class="text-white fw-semibold mt-4">
                                            Email: k.kseniya@bim-prove.com
                                        </h5>
                                    </a>
                                    <a class="text-decoration-underline text-white" href="https://www.linkedin.com/in/kseniya-kutsenko-0ab737216/" target="_blank">
                                        <h5 class="text-white fw-semibold">
                                            Linkedin: Ksenya Kutsenko
                                        </h5>
                                    </a>
                                </div>
                                <div class="card-footer border border-0 bg-transparent">
                                    <div class="row p-2 mt-3 d-flex justify-content-center">
                                        <div class="col-12 col-md-10 col-lg-12 col-xxl-9 mx-auto">
                                            <a id="button-first-screen-xxl" href="/service/scan-to-bim" role="button" class="btn btn-primary shadow-sm btn-lg border-0 rounded-4 w-100 text-center button-first-screen-xxl" style="background-color: #6bdcdb">
                                                <span class="fw-bold text-uppercase h5 d-block my-2">Scan to bim SERVICES</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
