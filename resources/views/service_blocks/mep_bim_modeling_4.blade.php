<div id="PROPOSE" class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row justify-content-center p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                <div class="h5 fw-normal mt-5">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
            <div class="col-lg-11 col-xl-9 mt-4" style="border: 4px solid; border-color: #6ad9d8;">
                <div class="row align-items-center p-4">
                    <div class="col-md-8">
                        <h3 class="h4 fw-semibold m-0">{{ $block->items->where('name', 'contact_us_text')->first()->value }}</h3>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0 text-center">
                        <a href="{{ $block->items->where('name', 'button_url')->first()->value }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} w-100" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}" type="button">
                            <span class="fw-bold h4 d-block my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
