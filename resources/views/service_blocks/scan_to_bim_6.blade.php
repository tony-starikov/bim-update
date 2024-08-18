<div id="POINT" class="container-fluid">
    <div class="container pb-5 p-lg-5 py-lg-0">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                <div class="h5 fw-normal mt-5">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
            <div class="col-12">
                <div class="row">

                    @if($block->items->where('name', 'the_first_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_first_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_second_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_second_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_third_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_third_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_fourth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fourth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_fifth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fifth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fifth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_fifth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_sixth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_sixth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_sixth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_sixth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_seventh_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_seventh_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_seventh_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_seventh_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_eighth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_eighth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_eighth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_eighth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_ninth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_ninth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_ninth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_ninth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_tenth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_tenth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_tenth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_tenth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_eleventh_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_eleventh_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_eleventh_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_eleventh_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_twelfth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_twelfth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_twelfth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_twelfth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_thirteenth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_thirteenth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_thirteenth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_thirteenth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_fourteenth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fourteenth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fourteenth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_fourteenth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_fifteenth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fifteenth_item_image')->first()->value) == true)
                        <div class="col-sm-6 col-lg-4">
                            <div class="row mt-4 pt-3">
                                <div class="col-2 pe-0">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fifteenth_item_image')->first()->value }}" loading="lazy" alt="dot" class="images-fluid">
                                </div>
                                <div class="col-10">
                                    <h3 class="h4 fw-bold">{{ $block->items->where('name', 'the_fifteenth_item_header')->first()->value }}</h3>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
