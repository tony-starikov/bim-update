<div id="calendar" class="container-fluid horizontal-gradient-calendar py-3">
    <div class="container py-5 p-lg-5">
        <div class="row px-lg-5">
            <div class="col-lg-7 col-xl-6 col-xxl-5">
                <h2 class="text-white h1 fw-bold text-uppercase w-100 mb-4">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                {!! $block->items->where('name', 'script')->first()->value !!}
{{--                <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="36e8ffcfd59d981ac14ebb11c74e5a169f998a7a9419bd84afbb87074fba57e4"></script>--}}
                {{--                <h3 class="h2 text-white fw-semibold mt-4">--}}
{{--                    <small>--}}
{{--                        {{ $page_info->pageItems->where('name', 'calendar_subheader')->first()->value }}--}}
{{--                    </small>--}}
{{--                </h3>--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-12 col-xxl-9">--}}
{{--                        <a href="{{ route('contact') }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-none w-100 mt-4" style="background-color: #6bdcdb" type="button">--}}
{{--                            <span class="fw-bold h4 d-block my-2">CONTACT US</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
            <div class="col-lg-5 col-xl-6 col-xxl-7 d-none d-lg-flex align-items-center">
                <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" class="img-fluid w-100" alt="mail_photo">
            </div>
        </div>
    </div>
</div>
