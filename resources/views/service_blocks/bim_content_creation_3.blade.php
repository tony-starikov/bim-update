<div class="container-fluid" @if($block->items->where('name', 'background_color')->first()->value) style="background-color: {{ $block->items->where('name', 'background_color')->first()->value }}" @endif >
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row justify-content-center p-lg-5">
            @if($block->items->where('name', 'block_header')->first()->value)
                <div class="col-12 mb-4">
                    <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                </div>
            @endif
            <div class="col-xl-6">
                <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="icon1" class="w-100 img-fluid mb-4 mb-xl-0">
            </div>
            <div class="col-xl-6">
                <div class="h5 fw-normal">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>
        </div>
    </div>
</div>
