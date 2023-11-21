@extends('master')

{{--@section('title', $page_info->__('title'))--}}

{{--@section('description', $page_info->description)--}}

@section('main')
    <div class="container-fluid" style="background-color: #bacacd">

        <div class="container p-0 p-lg-5">
            <div class="row py-5 px-0 px-lg-5">
                <div class="col-lg-6 mt-5">
                    <h2 class="text-white display-4 fw-bold pb-2 mt-2">CONTACT US</h2>

                    <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="a9502e08c5db13bf4b8dc917463d33adc65e4914cbc0158eb7e7866b8c7edf7a"></script>

                </div>
                <div class="col-lg-6 p-5 p-lg-0 d-flex align-items-center">
                    <div class="row px-0 p-lg-5">
                        <div class="col-12">
                            <p class="text-white h2 fw-semibold">
                                <small>
                                    Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.
                                </small>
                            </p>
                        </div>

                        <div class="d-none d-lg-block col-12">
                            <h2 class="text-white h2 fw-bold mt-5">SOCIAL MEDIA</h2>

                            <div class="row mt-4">
                                <div class="col-12 px-0">
                                    <div class="row">
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_1')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/link2.png"
                                                     alt="linkedin">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_2')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/insta2.png"
                                                     alt="instagram">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_3')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/face2.png"
                                                     alt="facebook">
                                            </a>
                                        </div>
                                        <div class="col-6 col-sm-3 p-4 pt-0">
                                            <a href="{{ $contacts->where('name', 'social_4')->first()->info }}" target="_blank"
                                               class="text-white h4 text-decoration-none">
                                                <img class="img-fluid w-100"
                                                     src="/images/main_page/social/you2.png"
                                                     alt="youtube">
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
