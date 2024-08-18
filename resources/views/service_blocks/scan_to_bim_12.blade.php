<div id="faq" class="container-fluid">
    <div class="container py-5 p-lg-5">
        <div class="row p-lg-5 pt-0">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                @if($block->items->where('name', 'the_first_item_header')->first()->value != null and $block->items->where('name', 'the_first_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_first_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_first_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_first_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_first_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_first_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_first_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_first_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_first_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_second_item_header')->first()->value != null and $block->items->where('name', 'the_second_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_second_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_second_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_second_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_second_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_second_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_second_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_second_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_second_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_third_item_header')->first()->value != null and $block->items->where('name', 'the_third_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_third_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_third_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_third_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_third_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_third_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_third_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_third_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_third_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_fourth_item_header')->first()->value != null and $block->items->where('name', 'the_fourth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_fourth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_fourth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_fourth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_fourth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_fourth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_fourth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_fourth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_fourth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_fifth_item_header')->first()->value != null and $block->items->where('name', 'the_fifth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_fifth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_fifth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_fifth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_fifth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_fifth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_fifth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_fifth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_fifth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_sixth_item_header')->first()->value != null and $block->items->where('name', 'the_sixth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_sixth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_sixth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_sixth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_sixth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_sixth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_sixth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_sixth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_sixth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_seventh_item_header')->first()->value != null and $block->items->where('name', 'the_seventh_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_seventh_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_seventh_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_seventh_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_seventh_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_seventh_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_seventh_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_seventh_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_seventh_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_eighth_item_header')->first()->value != null and $block->items->where('name', 'the_eighth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_eighth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_eighth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_eighth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_eighth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_eighth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_eighth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_eighth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_eighth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_ninth_item_header')->first()->value != null and $block->items->where('name', 'the_ninth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_ninth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_ninth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_ninth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_ninth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_ninth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_ninth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_ninth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_ninth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                @if($block->items->where('name', 'the_tenth_item_header')->first()->value != null and $block->items->where('name', 'the_tenth_item_paragraph_1')->first()->value != null)
                    <div class="row mt-4">
                        <div class="col-2 col-md-1 align-self-stretch">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_tenth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_tenth_item_header')->first()->id }}">
                                <img src="{{ '/images/' . $block->items->where('name', 'the_tenth_item_image')->first()->value }}" loading="lazy" alt="arrow">
                            </a>
                        </div>
                        <div class="col-10 col-md-11 pt-2">
                            <a class="border-0 text-decoration-none text-dark shadow-none" data-bs-toggle="collapse" href="#collapseExample{{ $block->items->where('name', 'the_tenth_item_header')->first()->id }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $block->items->where('name', 'the_tenth_item_header')->first()->id }}">
                                <p class="h3 fw-semibold m-0">{{ $block->items->where('name', 'the_tenth_item_header')->first()->value }}</p>
                            </a>
                            <div class="collapse" id="collapseExample{{ $block->items->where('name', 'the_tenth_item_header')->first()->id }}">
                                <div class="card card-body h5 fw-normal border-0">
                                    {!! $block->items->where('name', 'the_tenth_item_paragraph_1')->first()->value !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
