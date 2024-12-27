<div class="container-fluid">
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
            @for($i = 1; $i < 6; $i++)
                <div class="col-12 mt-4">
                    @if($block->items->where('name', 'subheader_' . $i)->first()->value)
                        <h4 class="fw-bold text-uppercase">{{ $block->items->where('name', 'subheader_' . $i)->first()->value }}</h4>
                    @endif
                    <div class="h5 fw-normal px-5 pt-4 pb-2 mt-4" style="background-color: #e2eded;">
                        {!! $block->items->where('name', 'paragraph_' . $i)->first()->value !!}
                    </div>
                </div>
            @endfor
            <div class="col-12 mt-5">
                <div class="row align-items-center m-0 px-5 py-5" style="background-color: #e2eded;">
                    <div class="col-md-8">
                        <h3 class="h5 fw-normal">{{ $block->items->where('name', 'contact_us_text')->first()->value }}</h3>
                    </div>
                    <div class="col-md-4 mt-4 mt-md-0 text-center">
                        <a href="{{ $block->items->where('name', 'button_url')->first()->value }}" id="go-to-calendar-home-xxl" class="btn btn-primary btn-lg border-0 rounded-4 shadow-{{ $block->items->where('name', 'button_shadow')->first()->value }} w-100" style="background-color: {{ $block->items->where('name', 'button_color')->first()->value }}" type="button">
                            <span class="fw-bold h4 d-block my-2">{{ $block->items->where('name', 'button_text')->first()->value }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
