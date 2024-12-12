<div class="container-fluid">
    <div class="container p-lg-5 py-lg-0">
        <div class="row py-5 p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-12 px-xl-5">
                <div class="row justify-content-evenly px-xl-5">
                    <div class="col-sm-6 col-md-5">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_1')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_1')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_2')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_2')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_3')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_3')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-5">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_4')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_4')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-12 mt-lg-4 pt-2 pt-lg-3">
                <div class="h5 fw-normal">
                    {!! $block->items->where('name', 'paragraph_1')->first()->value !!}
                </div>
            </div>

        </div>
    </div>
</div>
