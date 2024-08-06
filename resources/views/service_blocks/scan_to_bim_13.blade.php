<div id="calendar" class="container-fluid horizontal-gradient-calendar py-3">
    <div class="container py-5 p-lg-5">
        <div class="row px-lg-5">
            <div class="col-md-6">
                <h2 class="text-white h1 fw-bold w-100">
                    {{ $page_info->pageItems->where('name', 'calendar_header')->first()->value }}
                </h2>
                <h3 class="h2 text-white fw-semibold mt-4">
                    <small>
                        {{ $page_info->pageItems->where('name', 'calendar_subheader')->first()->value }}
                    </small>
                </h3>
                <div class="row">
                    <div class="col-md-12 col-xxl-9">
                        <a href="{{ route('contact') }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button">
                            <span class="fw-bold h4 d-block my-2">CONTACT US</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-6 d-none d-md-flex align-items-center">
                <img src="/images/{{ $page_info->pageItems->where('name', 'calendar_image')->first()->value }}" class="img-fluid w-100" alt="mail_photo">
            </div>
        </div>
    </div>
</div>
