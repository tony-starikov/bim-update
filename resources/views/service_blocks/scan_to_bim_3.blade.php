<div id="GET" class="container-fluid">
    <div class="container pb-5 p-lg-5 pt-lg-0 pb-lg-0">
        <div class="row p-lg-5 pt-0">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                <div class="h5 fw-normal mt-5">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
                <div class="h5 fw-normal mt-5">
                    {!! $block->items->where('name', 'paragraph_2')->first()->value !!}
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-4 pt-3">
                    @if($block->items->where('name', 'the_first_item_image')->first()->value != null and $block->items->where('name', 'the_first_item_header')->first()->value != null)
                        <div class="col-md-6 col-xl-4 mt-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-4">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-8">
                                    <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_second_item_image')->first()->value != null and $block->items->where('name', 'the_second_item_header')->first()->value != null)
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @if($block->items->where('name', 'the_third_item_image')->first()->value != null and $block->items->where('name', 'the_third_item_header')->first()->value != null)
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @if($block->items->where('name', 'the_fourth_item_image')->first()->value != null and $block->items->where('name', 'the_fourth_item_header')->first()->value != null)
                            <div class="col-md-6 col-xl-4 mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-4">
                                        <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                    </div>
                                    <div class="col-8">
                                        <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</h3>
                                    </div>
                                </div>
                            </div>
                    @endif
                    @if($block->items->where('name', 'the_ninth_item_image')->first()->value != null and $block->items->where('name', 'the_ninth_item_header')->first()->value != null)

                    @endif
                    <div class="col-md-6 col-xl-4 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_fifth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_fifth_item_header')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>
                    @if($block->items->where('name', 'the_ninth_item_image')->first()->value != null and $block->items->where('name', 'the_ninth_item_header')->first()->value != null)

                    @endif
                    <div class="col-md-6 col-xl-4 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_sixth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_sixth_item_header')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>
                    @if($block->items->where('name', 'the_ninth_item_image')->first()->value != null and $block->items->where('name', 'the_ninth_item_header')->first()->value != null)

                    @endif
                    <div class="col-md-6 col-xl-4 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_seventh_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_seventh_item_header')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>
                    @if($block->items->where('name', 'the_ninth_item_image')->first()->value != null and $block->items->where('name', 'the_ninth_item_header')->first()->value != null)

                    @endif
                    <div class="col-md-6 col-xl-4 mt-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-4">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_eighth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                            </div>
                            <div class="col-8">
                                <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_eighth_item_header')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>
                    @if($block->items->where('name', 'the_ninth_item_image')->first()->value != null and $block->items->where('name', 'the_ninth_item_header')->first()->value != null)
                        <div class="col-md-6 col-xl-4 mt-3">
                            <div class="row d-flex align-items-center">
                                <div class="col-4">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_ninth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                                </div>
                                <div class="col-8">
                                    <h3 class="h5 fw-semibold text-uppercase">{{ $block->items->where('name', 'the_ninth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
