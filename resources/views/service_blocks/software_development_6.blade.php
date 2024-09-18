<div class="container-fluid">
    <div class="container p-lg-5 py-lg-0">
        <div class="row py-5 p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold mb-5">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        @if($block->items->where('name', 'item_text_' . $i)->first()->value)
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card h-100" style="border: 4px solid #6de0de">
                                    <div class="card-body p-0 d-flex align-items-center">
                                        <div class="col-2 p-0" style="background-color: #6ad9d8;">
                                            <img src="{{ '/images/' . $block->items->where('name', 'item_image_' . $i)->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                        </div>
                                        <div class="col-10 p-3 d-flex align-items-center">
                                            <h3 class="h5 m-0">{{ $block->items->where('name', 'item_text_' . $i)->first()->value }}</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-9 mt-4 p-4" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="row align-items-center justify-content-center p-4">
                            <div class="col-md-8 mt-4 mt-md-0 text-center">
                                <a href="{{ $block->items->where('name', 'button_url')->first()->value }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} w-100" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}" type="button">
                                    <span class="fw-bold h4 d-block my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
