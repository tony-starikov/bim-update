<div id="BENEFITS" class="container-fluid my-lg-5 horizontal-gradient">
    <div class="container py-5 p-lg-5">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                <div class="row row-cols-1 row-cols-md-3 g-1">
                    <div class="col">
                        <div class="card h-100 p-3 border-0 bg-transparent">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="reviewing">
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #edf4f4">
                                <h3 class="h5 fw-bold text-uppercase">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</h3>
                                <div class="h6 text-secondary mt-4 mb-0">
                                    {!! $block->items->where('name', 'the_first_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 p-3 border-0 bg-transparent">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="reviewing">
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #edf4f4">
                                <h3 class="h5 fw-bold text-uppercase">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</h3>
                                <div class="h6 text-secondary mt-4 mb-0">
                                    {!! $block->items->where('name', 'the_second_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 p-3 border-0 bg-transparent">
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" class="img-fluid w-100 mb-5 mx-auto" alt="reviewing">
                                </div>
                            </div>
                            <div class="card-body" style="background-color: #edf4f4">
                                <h3 class="h5 fw-bold text-uppercase">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</h3>
                                <div class="h6 text-secondary mt-4 mb-0">
                                    {!! $block->items->where('name', 'the_third_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                            <div class="card-footer border-0 bg-transparent">
                                {{--                            <small class="text-muted">Last updated 3 mins ago</small>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
