<div class="container-fluid horizontal-gradient">
    <div class="container px-lg-5">
        <div class="row py-5 p-lg-5">

            <div class="col-12 px-4">
                <h3 class="h5 fw-bold text-center text-uppercase mb-3 px-2">{{ $block->items->where('name', 'item_header_1')->first()->value }}</h3>
                <div class="row align-items-center" style="background-color: #edf4f4">
                    <div class="col-12 p-4">
                        <div class="h5 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_1')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 px-4 mt-5">
                <h3 class="h5 fw-bold text-center text-uppercase my-3 px-2">{{ $block->items->where('name', 'item_header_2')->first()->value }}</h3>
                <div class="row align-items-center" style="background-color: #edf4f4">
                    <div class="col-12 p-4">
                        <div class="h5 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_2')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 px-4 mt-5">
                <h3 class="h5 fw-bold text-center text-uppercase my-3 px-2">{{ $block->items->where('name', 'item_header_3')->first()->value }}</h3>
                <div class="row align-items-center" style="background-color: #edf4f4">
                    <div class="col-12 p-4">
                        <div class="h5 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_3')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
