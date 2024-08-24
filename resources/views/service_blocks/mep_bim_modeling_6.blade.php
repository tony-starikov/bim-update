<div class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-12 mt-4">
                <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'subheader_1')->first()->value }}</h4>
                <div class="h5 fw-normal px-5 pt-4 pb-2 mt-4" style="background-color: #e2eded;">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
            <div class="col-12 mt-4">
                <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'subheader_2')->first()->value }}</h4>
                <div class="h5 fw-normal px-5 pt-4 pb-2 mt-4" style="background-color: #e2eded;">
                    {!! $block->items->where('name', 'paragraph_2')->first()->value !!}
                </div>
            </div>
            <div class="col-12 mt-4">
                <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'subheader_3')->first()->value }}</h4>
                <div class="h5 fw-normal px-5 pt-4 pb-2 mt-4" style="background-color: #e2eded;">
                    {!! $block->items->where('name', 'paragraph_3')->first()->value !!}
                </div>
            </div>
            <div class="col-12 mt-4">
                <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'subheader_4')->first()->value }}</h4>
                <div class="h5 fw-normal px-5 pt-4 pb-2 mt-4" style="background-color: #e2eded;">
                    {!! $block->items->where('name', 'paragraph_4')->first()->value !!}
                </div>
            </div>
        </div>
    </div>
</div>
