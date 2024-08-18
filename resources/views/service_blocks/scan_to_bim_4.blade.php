<div id="DOWNLOAD" class="container-fluid">
    <div class="container py-5 p-lg-5 pb-0 pb-lg-0">
        <div class="row p-lg-5 pt-0 pt-lg-0 justify-content-center">
            <div class="col-lg-9 col-xl-6 text-center">
                <a href="{{ Storage::disk('public')->url($block->items->where('name', 'file_to_download')->first()->value) }}" target="_blank" role="button" class="btn btn-primary shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} btn-lg border-0 rounded-4 w-100" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}">
                    <span class="fw-bold h4 d-block my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                </a>
            </div>
        </div>
    </div>
</div>
