<div class="container-fluid">
    <div class="container py-5 p-lg-5">
        <div class="row px-lg-5 pt-lg-0">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                <div class="row justify-content-center mt-4">

                    @if($block->items->where('name', 'the_first_project_url')->first()->value)
                        <div class="col-md-6 mt-4">
                            <div class="card border-0">
                                <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4]) }}">
                                    <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4])->first()->title }}">
                                    <div class="row align-items-center">
                                        <div class="col-7 mt-2">
                                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4]) }}">
                                                <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4])->first()->title }}</h3>
                                            </a>
                                        </div>
                                        <div class="col-5 mt-2">
                                            <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_first_project_url')->first()->value)[4]) }}" class="text-decoration-none">
                                                <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                    <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_second_project_url')->first()->value)
                        <div class="col-md-6 mt-4">
                            <div class="card border-0">
                                <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4]) }}">
                                    <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4])->first()->title }}">
                                    <div class="row align-items-center">
                                        <div class="col-7 mt-2">
                                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4]) }}">
                                                <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4])->first()->title }}</h3>
                                            </a>
                                        </div>
                                        <div class="col-5 mt-2">
                                            <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_second_project_url')->first()->value)[4]) }}" class="text-decoration-none">
                                                <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                    <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_third_project_url')->first()->value)
                        <div class="col-md-6 mt-4">
                            <div class="card border-0">
                                <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4]) }}">
                                    <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4])->first()->title }}">
                                    <div class="row align-items-center">
                                        <div class="col-7 mt-2">
                                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4]) }}">
                                                <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4])->first()->title }}</h3>
                                            </a>
                                        </div>
                                        <div class="col-5 mt-2">
                                            <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_third_project_url')->first()->value)[4]) }}" class="text-decoration-none">
                                                <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                    <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if($block->items->where('name', 'the_fourth_project_url')->first()->value)
                        <div class="col-md-6 mt-4">
                            <div class="card border-0">
                                <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4]) }}">
                                    <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4])->first()->title }}">
                                    <div class="row align-items-center">
                                        <div class="col-7 mt-2">
                                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4]) }}">
                                                <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4])->first()->title }}</h3>
                                            </a>
                                        </div>
                                        <div class="col-5 mt-2">
                                            <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'the_fourth_project_url')->first()->value)[4]) }}" class="text-decoration-none">
                                                <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                    <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            <div class="col-12 px-4">
                <div class="row mt-4 px-4 py-5 p-lg-5 justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-lg-6 text-center">
                        <a id="estimate-project-screen-scantobim-xxl" href="{{ env('APP_URL') . '/' . explode('/', $block->items->where('name', 'estimation_button_url')->first()->value)[3] }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                            <p class="fw-bold h5 my-2 text-uppercase">{{ $block->items->where('name', 'estimation_button_text')->first()->value }}</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
