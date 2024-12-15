<div class="container-fluid pt-5" style="background: url('{{ '/images/' . $block->items->where('name', 'background_image')->first()->value }}') no-repeat center center local; background-size: cover; min-height: 100vh;">
    <div class="container p-lg-5">
        <div class="row px-lg-5 mt-5 text-center">
            <div class="col-12 mt-5 order-first">
                <h1 class="text-white mt-4 fw-bold text-uppercase">{{ $block->items->where('name', 'main_header')->first()->value }}</h1>
                <div class="mt-4 row justify-content-center">
                    <div class="col-md-10 col-xl-7">
                        <h2 class="text-white px-lg-5 px-xl-2 px-xxl-5 h4 fw-semibold">{{ $block->items->where('name', 'text_under_the_header')->first()->value }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="row px-lg-5 py-5 justify-content-center">
            <div class="col-7 col-md-6 col-lg-5 col-xl-4">
                <a id="estimate-first-screen-mep" href="{{ $block->items->where('name', 'button_url')->first()->value }}" role="button" class="btn btn-primary shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} btn-lg border-0 rounded-4 w-100 p-3" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}">
                    <span class="fw-bold h5 text-uppercase my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                </a>
            </div>
        </div>

        <div class="row px-5 px-lg-0 pb-5 justify-content-center justify-content-lg-between">
            <div class="col-6 col-lg-2 p-2 p-lg-2 text-center">
                <img src="{{ '/images/' . $block->items->where('name', 'item_image_1')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'item_header_1')->first()->value }}" class="img-fluid">
                <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'item_header_1')->first()->value }}</h3>
            </div>
            <div class="col-6 col-lg-2 p-2 p-lg-2 text-center">
                <img src="{{ '/images/' . $block->items->where('name', 'item_image_2')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'item_header_2')->first()->value }}" class="img-fluid">
                <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'item_header_2')->first()->value }}</h3>
            </div>
            <div class="col-6 col-lg-2 p-2 p-lg-2 text-center">
                <img src="{{ '/images/' . $block->items->where('name', 'item_image_3')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'item_header_3')->first()->value }}" class="img-fluid">
                <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'item_header_3')->first()->value }}</h3>
            </div>
            <div class="col-6 col-lg-2 p-2 p-lg-2 text-center">
                <img src="{{ '/images/' . $block->items->where('name', 'item_image_4')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'item_header_4')->first()->value }}" class="img-fluid">
                <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'item_header_4')->first()->value }}</h3>
            </div>
            <div class="col-6 col-lg-2 p-2 p-lg-2 text-center">
                <img src="{{ '/images/' . $block->items->where('name', 'item_image_5')->first()->value }}" loading="lazy" alt="{{ $block->items->where('name', 'item_header_5')->first()->value }}" class="img-fluid">
                <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'item_header_5')->first()->value }}</h3>
            </div>
        </div>
    </div>
</div>
