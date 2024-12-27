<div class="container-fluid px-0 py-5 p-lg-5 px-lg-0 py-lg-0">
    <div class="row p-lg-5 px-lg-0">
        <div class="col-12 px-0">
            <img src="{{ '/images/' . $block->items->where('name', 'image')->first()->value }}" loading="lazy" alt="dot" class="img-fluid w-100">
        </div>
    </div>
</div>
