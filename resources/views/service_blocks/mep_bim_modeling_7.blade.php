<div class="container-fluid">
    <div class="container pb-5 p-lg-5 py-lg-0">
        <div class="row px-lg-5">
            <div class="col-12">
                <div class="row justify-content-between">
                    <div class="col-6 col-lg-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-4 mt-3 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_first_item_header')->first()->value }}" class="img-fluid p-md-4 p-lg-2 w-75">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_first_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-lg-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-4 mt-3 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_second_item_header')->first()->value }}" class="img-fluid p-md-4 p-lg-2 w-75">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_second_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-lg-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-4 mt-3 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_third_item_header')->first()->value }}" class="img-fluid p-md-4 p-lg-2 w-75">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_third_item_subheader')->first()->value }}</p>
                    </div>
                    <div class="col-6 col-lg-3 px-5 px-sm-5 px-md-4 px-lg-4 px-xl-4 mt-3 text-center">
                        <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" alt="{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}" class="img-fluid p-md-4 p-lg-2 w-75">
                        <p class="fw-bold mt-1 h2">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</p>
                        <p class="fw-bold mt-1 h5">{{ $block->items->where('name', 'the_fourth_item_subheader')->first()->value }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
