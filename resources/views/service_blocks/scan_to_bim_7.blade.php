<div id="HOW" class="container-fluid">
    <div class="container pb-5 pt-0 p-lg-5 pt-lg-0">
        <div class="row p-lg-5 pt-0">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                <div class="h5 fw-normal pb-3 mt-5">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>


            @if($block->items->where('name', 'the_first_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_first_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_first_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_first_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_first_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_first_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_first_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_first_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if($block->items->where('name', 'the_second_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_second_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_second_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_second_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_second_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_second_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_second_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_second_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if($block->items->where('name', 'the_third_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_third_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_third_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_third_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_third_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_third_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_third_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_third_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if($block->items->where('name', 'the_fourth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fourth_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_fourth_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_fourth_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_fourth_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_fourth_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_fourth_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_fourth_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if($block->items->where('name', 'the_fifth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_fifth_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_fifth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_fifth_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_fifth_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_fifth_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_fifth_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_fifth_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_fifth_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_fifth_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if($block->items->where('name', 'the_sixth_item_header')->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'the_sixth_item_image')->first()->value) == true)
                <div class="row p-0 mx-auto mt-4 d-flex align-items-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-1 p-0 h-100 d-flex align-items-center" style="background-color: #46d9d6;">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_sixth_item_image')->first()->value }}" loading="lazy" alt="arrow" class="images-fluid w-100">
                    </div>
                    <div class="col-11 py-2">
                        <h3 class="h5 fw-bold text-uppercase pb-2">{{ $block->items->where('name', 'the_sixth_item_header')->first()->value }}</h3>
                        <div class="row h6 text-secondary my-0">
                            @if($block->items->where('name', 'the_sixth_item_paragraph_1')->first()->value != null)
                                <div class="col-12">
                                    {!! $block->items->where('name', 'the_sixth_item_paragraph_1')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_sixth_item_paragraph_2')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_sixth_item_paragraph_2')->first()->value !!}
                                </div>
                            @endif

                            @if($block->items->where('name', 'the_sixth_item_paragraph_3')->first()->value != null)
                                <div class="col-6">
                                    {!! $block->items->where('name', 'the_sixth_item_paragraph_3')->first()->value !!}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
