<div id="main">
    <div class="container-fluid pt-5" style="background: url('{{ '/images/' . $block->items->where('name', 'background_image')->first()->value }}') no-repeat center center local; background-size: cover; min-height: 100vh;">
        <div class="container pb-0 px-0 p-lg-5">
            <div class="row px-5 mt-5 text-center">
                <div class="col-12 mt-5">
                    <h1 class="text-white mt-4 text-uppercase fw-bold">{{ $block->items->where('name', 'main_header')->first()->value }}</h1>
                    <div class="mt-4 row justify-content-center">
                        <div class="col-md-10 col-xl-7">
                            <h2 class="text-white px-lg-5 px-xl-2 px-xxl-5 h4 fw-semibold">{{ $block->items->where('name', 'text_under_the_header')->first()->value }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row px-5 pb-4 mt-5 justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <a id="estimate-first-screen-scantobim" href="{{ $block->items->where('name', 'button_url')->first()->value }}" role="button" class="btn btn-primary shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} btn-lg border-0 rounded-4 w-100 p-3" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}">
                        <span class="fw-bold h5 my-2 text-uppercase">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                    </a>
                </div>
            </div>

            <div class="row px-5 pb-5 justify-content-center">
                <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                    <img src="{{ '/images/' . $block->items->where('name', 'the_first_sub_service_image')->first()->value }}" loading="lazy" alt="icon1" class="img-fluid">
                    <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'the_first_sub_service_header')->first()->value }}</h3>
                </div>
                <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                    <img src="{{ '/images/' . $block->items->where('name', 'the_second_sub_service_image')->first()->value }}" loading="lazy" alt="icon2" class="img-fluid">
                    <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'the_second_sub_service_header')->first()->value }}</h3>
                </div>
                <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                    <img src="{{ '/images/' . $block->items->where('name', 'the_third_sub_service_image')->first()->value }}" loading="lazy" alt="icon3" class="img-fluid">
                    <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'the_third_sub_service_header')->first()->value }}</h3>
                </div>
                <div class="col-6 col-lg-3 p-2 p-lg-4 text-center">
                    <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_sub_service_image')->first()->value }}" loading="lazy" alt="icon4" class="img-fluid">
                    <h3 class="h6 text-white fw-semibold mt-4 text-center text-uppercase">{{ $block->items->where('name', 'the_fourth_sub_service_header')->first()->value }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
