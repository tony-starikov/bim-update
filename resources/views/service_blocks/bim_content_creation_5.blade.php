<div id="PROPOSE" class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row p-lg-5 pb-lg-4">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase mb-5">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
                @if($block->items->where('name', 'paragraph_1')->first()->value != null)
                    <div class="h5 fw-normal">
                        {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                    </div>
                @endif
            </div>
            <div class="col-12 mt-3">
                <div class="row justify-content-center">
                    @for($i = 1; $i < 7; $i++)
                        @if($block->items->where('name', 'item_header_' . $i)->first()->value != null and Storage::disk('public')->exists($block->items->where('name', 'item_image_' . $i)->first()->value) == true)
                            <div class="col-xl-6 p-4 pt-0">
                                <div class="row align-items-center p-3 h-100" style="border: 4px solid; border-color: #6ad9d8;">
                                    <div class="col-9 col-xl-8">
                                        <h3 class="h5 fw-bold m-0 text-uppercase">{{ $block->items->where('name', 'item_header_' . $i)->first()->value }}</h3>
                                    </div>
                                    <div class="col-3 col-xl-4">
                                        <img src="{{ '/images/' . $block->items->where('name', 'item_image_' . $i)->first()->value }}" loading="lazy" alt="service1" class="img-fluid w-100">
                                    </div>
                                    @if($block->items->where('name', 'item_text_' . $i)->first()->value)
                                        <div class="col-12 pt-3">
                                            <p class="h5 text-secondary"><small>{{ $block->items->where('name', 'item_text_' . $i)->first()->value }}</small></p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
