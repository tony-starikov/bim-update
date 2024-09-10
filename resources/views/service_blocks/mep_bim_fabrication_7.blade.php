<div class="container-fluid">
    <div class="container p-lg-5 py-lg-0">
        <div class="row py-5 p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12 pt-4">
                <div class="row">

                    <div class="col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_1')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_1')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_2')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_2')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_3')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_3')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 px-4">
                        <div class="row align-items-center p-4" style="border: 4px solid; border-color: #6ad9d8;">
                            <div class="col-md-8">
                                <h3 class="h4 fw-bold m-0">{{ $block->items->where('name', 'contact_us_text')->first()->value }}</h3>
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
    </div>
</div>
