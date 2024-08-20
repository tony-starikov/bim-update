<div class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-3">
        <div class="row px-lg-5">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-6 col-md-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-5 mt-4 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_first_item_header')->first()->value }}" class="img-fluid w-100">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_first_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-md-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-5 mt-4 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_second_item_header')->first()->value }}" class="img-fluid w-100">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_second_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-md-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-5 mt-4 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_third_item_header')->first()->value }}" class="img-fluid w-100">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_third_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-md-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-5 mt-4 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}" class="img-fluid w-100">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_fourth_item_subheader')->first()->value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
