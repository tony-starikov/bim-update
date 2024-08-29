<div id="calendar" class="container-fluid horizontal-gradient-calendar py-3">
    <div class="container py-5 p-lg-5">
        <div class="row px-lg-5">
            <div class="col-12">
                <h2 class="text-white h1 fw-bold text-uppercase w-100 mb-5">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-lg-7 col-xl-6 col-xxl-5">
                <h3 class="text-white h3 fw-bold text-uppercase w-100 m-0">{{ $block->items->where('name', 'subheader_1')->first()->value }}</h3>
                {!! $block->items->where('name', 'script')->first()->value !!}
            </div>

            <div class="col-lg-5 col-xl-6 col-xxl-7 d-none d-lg-block">
                <div class="row mb-3">
                    <div class="col-12 h5 fw-semibold text-white">
                        <h3 class="text-white h3 fw-bold text-uppercase w-100 mb-4">{{ $block->items->where('name', 'subheader_2')->first()->value }}</h3>
                        {!! $block->items->where('name', 'paragraph')->first()->value !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" class="img-fluid w-100" alt="mail_photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
