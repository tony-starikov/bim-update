<div class="container-fluid">
    <div class="container p-lg-5 py-lg-0">
        <div class="row py-5 p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                @if($block->items->where('name', 'paragraph')->first()->value != null)
                    <div class="h5 fw-normal mt-5">
                        {!! $block->items->where('name', 'paragraph')->first()->value !!}
                    </div>
                @endif
            </div>

            <div class="col-12 pt-4">
                <div class="row">

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_1')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_1')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_1')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_2')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_2')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_2')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_3')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_3')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_3')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_4')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_4')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_4')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_5')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_5')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_5')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-4 mb-4">
                        <div class="card h-100" style="border: 4px solid #6de0de">
                            <div class="card-body p-0 d-flex align-items-center">
                                <div class="col-2 h-100 p-0 d-flex align-items-center" style="background-color: #6ad9d8;">
                                    <img src="{{ '/images/' . $block->items->where('name', 'item_image_6')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-10 p-3 align-items-center">
                                    <h3 class="h5 mb-3 fw-bold">{{ $block->items->where('name', 'item_header_6')->first()->value }}</h3>
                                    <p class="m-0">{{ $block->items->where('name', 'item_text_6')->first()->value }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
