<div id="breadcrumb" class="container-fluid">
    <div class="container py-3 p-lg-5 pb-lg-0">
        <div class="row px-lg-5">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a class="text-dark" href="{{ route('main') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $block->items->where('name', 'breadcrumb_item_active_1')->first()->value }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $block->items->where('name', 'breadcrumb_item_active_2')->first()->value }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
