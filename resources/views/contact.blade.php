@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="/images/bim_prove.png">
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">

        <div class="container p-0 p-lg-5">
            <div class="row py-5 px-0 px-lg-5">
                <div class="col-lg-6 mt-5">
                    <h1 class="text-white fw-bold my-2">CONTACT US</h1>

                    <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="a9502e08c5db13bf4b8dc917463d33adc65e4914cbc0158eb7e7866b8c7edf7a"></script>

                </div>
                <div class="col-lg-6 mt-5 p-5 p-lg-0 d-flex align-items-center">
                    <div class="row px-0 p-lg-5">
                        <div class="col-12">
                            <h2 class="text-white h2 fw-bold">
                                HOW CAN WE HELP YOU?
                            </h2>
                            <p class="text-white h4 fw-semibold mt-3">
                                FILL OUT THE FORM AND WE'LL BE IN TOUCH SOON!
                            </p>
                        </div>

                        <div class="d-none d-lg-block col-12">
                            <h2 class="text-white h2 fw-bold mt-5">
                                LET'S CONNECT
                            </h2>

                            <div class="row mt-5">
                                <div class="col-12 px-0">
                                    <div class="row">
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_1')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/LinkedIn.png"
                                                     alt="linkedin">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_2')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/Instagram.png"
                                                     alt="instagram">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_3')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/Facebook.png"
                                                     alt="facebook">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_4')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/YouTube.png"
                                                     alt="youtube">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-12">
                                    <a href="mailto:{{ $contacts->where('name', 'email')->first()->info }}"
                                       class="text-white text-decoration-none">
                                        <p class="h4 fw-semibold">
                                            Email us: {{ $contacts->where('name', 'email')->first()->info }}
                                        </p>
                                    </a>
                                    <a href="tel:{{ $contacts->where('name', 'phone')->first()->info }}"
                                       class="text-white text-decoration-none">
                                        <p class="h4 fw-semibold">
                                            Let's Talk: {{ $contacts->where('name', 'phone')->first()->info }}
                                        </p>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
