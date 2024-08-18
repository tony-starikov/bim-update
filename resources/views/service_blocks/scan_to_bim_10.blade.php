<div id="SERVICE" class="container-fluid">
    <div class="container py-5 p-lg-5">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-12 mt-lg-4 pt-2 pt-lg-3">
                <div class="h5 text-secondary">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
        </div>
    </div>
</div>
