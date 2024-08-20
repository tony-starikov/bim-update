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
                <div class="row justify-content-center mt-lg-4">
                    @if($block->items->where('name', 'the_first_item_header')->first()->value != null and $block->items->where('name', 'the_first_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-12 text-center">
                                    <h3 class="h4 fw-bold my-4 text-uppercase">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_first_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_second_item_header')->first()->value != null and $block->items->where('name', 'the_second_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-12 text-center">
                                    <h3 class="h4 fw-bold my-4 text-uppercase">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_second_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if($block->items->where('name', 'the_third_item_header')->first()->value != null and $block->items->where('name', 'the_third_item_text')->first()->value != null)
                        <div class="col-md-6 col-xl-4 p-4 pb-0">
                            <div class="row p-2 py-4 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                <div class="col-12 text-center">
                                    <h3 class="h4 fw-bold my-4 text-uppercase">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'the_third_item_text')->first()->value }}</small></p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
