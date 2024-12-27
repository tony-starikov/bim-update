<div id="POINT" class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase mb-5">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                @if($block->items->where('name', 'paragraph')->first()->value)
                    <div class="h5 fw-normal">
                        {!! $block->items->where('name', 'paragraph')->first()->value !!}
                    </div>
                @endif
            </div>
            <div class="col-12 p-xl-0">
                <div class="row">

                    @for($i = 1; $i < 16; $i++)
                        @if($block->items->where('name', 'item_text_' . $i)->first()->value)
                            <div class="col-xl-6 col-xxl-4">
                                <div class="row mt-4 align-items-center">
                                    <div class="col-1 col-xl-2">
                                        <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                    </div>
                                    <div class="col-11 col-xl-10">
                                        <div class="h5 fw-normal">
                                            {!! $block->items->where('name', 'item_text_' . $i)->first()->value !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endfor

                </div>

            </div>
        </div>
    </div>
</div>
