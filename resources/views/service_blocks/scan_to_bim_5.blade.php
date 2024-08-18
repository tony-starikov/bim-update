<div id="PROPOSE" class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-3">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                <div class="h5 fw-normal mt-5">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-lg-4">
                    @if($block->items->where('name', 'the_first_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_first_item_image')->first()->value) == true and $block->items->where('name', 'the_first_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_first_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_second_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_second_item_image')->first()->value) == true and $block->items->where('name', 'the_second_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_second_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_third_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_third_item_image')->first()->value) == true and $block->items->where('name', 'the_third_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_third_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_fourth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fourth_item_image')->first()->value) == true and $block->items->where('name', 'the_fourth_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_fourth_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_fifth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fifth_item_image')->first()->value) == true and $block->items->where('name', 'the_fifth_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_fifth_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_fifth_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_fifth_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_sixth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_sixth_item_image')->first()->value) == true and $block->items->where('name', 'the_sixth_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_sixth_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_sixth_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_sixth_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_seventh_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_seventh_item_image')->first()->value) == true and $block->items->where('name', 'the_seventh_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_seventh_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_seventh_item_image')->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_seventh_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_eighth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_eighth_item_image')->first()->value) == true and $block->items->where('name', 'the_eighth_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_eighth_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_eighth_item_image')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'the_eighth_item_header')->first()->value }} image" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_eighth_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_ninth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_ninth_item_image')->first()->value) == true and $block->items->where('name', 'the_ninth_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-7">
                                    <h3 class="h5 fw-bold mt-4">{{ $block->items->where('name', 'the_ninth_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-5">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_ninth_item_image')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'the_ninth_item_header')->first()->value }} image" class="img-fluid w-100">
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_ninth_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
