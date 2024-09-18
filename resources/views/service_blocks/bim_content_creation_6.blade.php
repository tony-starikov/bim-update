<div class="container-fluid">
    <div class="container py-5 p-lg-5">
        <div class="row px-lg-5 pt-lg-0">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                <div class="row justify-content-center mt-4">
                    @for($i = 1; $i < 4; $i++)
                        @if($block->items->where('name', 'family_title_' . $i)->first()->value)
                            <div class="col-md-6 col-xl-4 mt-4">
                                <div class="card shadow-sm rounded-4 h-100 px-2" style="border: 4px solid #6bdcdb;">
                                    <div class="card-body pb-0">
                                        <div class="row justify-content-center">
                                            <div class="col-11 py-2">
                                                <img class="img-fluid w-100 rounded" src="/images/{{ \App\Models\Family::where('title_en', $block->items->where('name', 'family_title_' . $i)->first()->value)->first()->image }}" alt="">
                                            </div>
                                        </div>
                                        <div class="row" style="min-height: 50px;">
                                            <div class="col-12">
                                                <h6 class="h5 fw-semibold">
                                                    {{ $block->items->where('name', 'family_title_' . $i)->first()->value }}
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="h5 fw-bold">
                                                    <span class="badge bg-success">Free</span>
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="row pb-3">
                                            <div class="col-12">
                                                <a href="{{ route('downloadFamily', \App\Models\Family::where('title_en', $block->items->where('name', 'family_title_' . $i)->first()->value)->first()->slug) }}" class="text-decoration-none">
                                                    <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                        <span class="fw-bold h6 d-block my-1">DOWNLOAD</span>
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    @endfor
                </div>
            </div>

            <div class="col-12 px-4">
                <div class="row mt-4 px-4 py-5 p-lg-5 justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-lg-6 text-center">
                        <a id="estimate-project-screen-scantobim-xxl" href="{{ $block->items->where('name', 'button_url')->first()->value }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                            <p class="fw-bold h5 my-2 text-uppercase">{{ $block->items->where('name', 'button_text')->first()->value }}</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
