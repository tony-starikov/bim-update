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
            <div class="col-12">
                <div class="row">

                    @if($block->items->where('name', 'item_text_1')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_1')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_2')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_2')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_3')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_3')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_4')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_4')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_5')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_5')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_6')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_6')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_7')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_7')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_8')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_8')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_9')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_9')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_10')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_10')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_11')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_11')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'item_text_12')->first()->value)
                        <div class="col-xl-6">
                            <div class="row align-items-center mt-4">
                                <div class="col-1 col-xl-2">
                                    <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid mb-3 ms-xl-4">
                                </div>
                                <div class="col-11 col-xl-10">
                                    <div class="h5 fw-normal">
                                        {!! $block->items->where('name', 'item_text_12')->first()->value !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>

                <div class="row justify-content-center">
                    <div class="col-12 mt-4 p-4" style="border: 4px solid; border-color: #6ad9d8;">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'contact_us_header')->first()->value }}</h4>
                                <h5 class="h5 fw-normal m-0">
                                    {!! $block->items->where('name', 'contact_us_paragraph')->first()->value !!}
                                </h5>
                            </div>
                            <div class="col-7 col-lg-4 mt-4 mt-md-0 text-center">
                                <a href="{{ $block->items->where('name', 'button_url')->first()->value }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} w-100" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}" type="button">
                                    <span class="fw-bold h4 d-block my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
