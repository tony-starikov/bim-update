<div id="COUNTRIES" class="container-fluid" style="background-color: #f1faf9;">
    <div class="container py-5 p-lg-5">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>
            <div class="col-12 text-center mt-4">
                <img src="{{ '/images/' . $block->items->where('name', 'map_image')->first()->value }}" loading="lazy" class="img-fluid mx-auto w-100" alt="map">
            </div>
        </div>
    </div>
</div>
