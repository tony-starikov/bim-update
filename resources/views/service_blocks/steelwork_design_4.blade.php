<div id="BENEFITS" class="container-fluid horizontal-gradient">
    <div class="container pb-5 p-lg-5 pt-lg-0 pt-xl-5 my-lg-5">
        <div class="row p-lg-5 pt-lg-0 mb-5">

            <div class="col-12 col-xl-4 pt-5 pt-xl-0 px-4 mt-5">
                <h3 class="h5 fw-bold text-center text-uppercase mb-3 px-2">{{ $block->items->where('name', 'item_header_1')->first()->value }}</h3>
                <div class="row h-100 align-items-center" style="background-color: #edf4f4">
                    <div class="col-12">
                        <div class="h6 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_1')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 pt-5 pt-xl-0 px-4 mt-5">
                <h3 class="h5 fw-bold text-center text-uppercase mb-3 px-2">{{ $block->items->where('name', 'item_header_2')->first()->value }}</h3>
                <div class="row h-100 align-items-center" style="background-color: #edf4f4">
                    <div class="col-12">
                        <div class="h6 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_2')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-xl-4 pt-5 pt-xl-0 px-4 mt-5">
                <h3 class="h5 fw-bold text-center text-uppercase mb-3 px-2">{{ $block->items->where('name', 'item_header_3')->first()->value }}</h3>
                <div class="row h-100 align-items-center" style="background-color: #edf4f4">
                    <div class="col-12">
                        <div class="h6 text-secondary">
                            {!! $block->items->where('name', 'item_paragraph_3')->first()->value !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
