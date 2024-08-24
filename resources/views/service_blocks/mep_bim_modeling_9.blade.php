<div class="container-fluid">
    <div class="container p-lg-5 pt-lg-0 pb-0">
        <div class="row py-5 p-lg-5 pt-lg-0 pb-0">
            <div class="col-12">
                <h2 class="fw-bold">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-12 px-xl-5">
                <div class="row px-xl-5">
                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_1')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_1')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_2')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_2')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_3')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_3')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_4')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_4')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_5')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_5')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_6')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_6')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_7')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_7')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_8')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_8')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="row mt-4 d-flex align-items-center">
                            <div class="col-3">
                                <img src="{{ '/images/' . $block->items->where('name', 'item_image_9')->first()->value }}" loading="lazy" alt="revit_autodesk" class="images-fluid w-100">
                            </div>
                            <div class="col-9 px-0 d-flex align-items-center">
                                <h3 class="h5 fw-bold m-0">{{ $block->items->where('name', 'item_text_9')->first()->value }}</h3>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
