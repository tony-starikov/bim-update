<div class="container-fluid">
    <div class="container py-5 p-lg-5 py-lg-0">
        <div class="row p-lg-5">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase">{{ $block->items->where('name', 'block_header')->first()->value }}</h2>
            </div>

            <div class="col-12">
                <div class="row justify-content-center mt-4">

                    <div class="col-md-6 mt-4">
                        <div class="card border-0">
                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4]) }}">
                                <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4])->first()->title }}">
                                <div class="row align-items-center">
                                    <div class="col-7 mt-2">
                                        <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4]) }}">
                                            <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4])->first()->title }}</h3>
                                        </a>
                                    </div>
                                    <div class="col-5 mt-2">
                                        <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_1')->first()->value)[4]) }}" class="text-decoration-none">
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="card border-0">
                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4]) }}">
                                <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4])->first()->title }}">
                                <div class="row align-items-center">
                                    <div class="col-7 mt-2">
                                        <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4]) }}">
                                            <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4])->first()->title }}</h3>
                                        </a>
                                    </div>
                                    <div class="col-5 mt-2">
                                        <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_2')->first()->value)[4]) }}" class="text-decoration-none">
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4">
                        <div class="card border-0">
                            <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4]) }}">
                                <img src="{{ '/images/' . \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4])->first()->image }}" class="card-img" alt="{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4])->first()->title }}">
                                <div class="row align-items-center">
                                    <div class="col-7 mt-2">
                                        <a class="text-decoration-none" href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4]) }}">
                                            <h3 class="text-dark h6 fw-bold m-0">{{ \App\Models\Work::where('slug', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4])->first()->title }}</h3>
                                        </a>
                                    </div>
                                    <div class="col-5 mt-2">
                                        <a href="{{ route('portfolio.project', explode('/', $block->items->where('name', 'project_url_3')->first()->value)[4]) }}" class="text-decoration-none">
                                            <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 mt-4 p-xl-5">
                        <div class="row h-100 align-items-center justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                            <div class="col-9 col-md-10 col-xxl-8 px-5 py-3 text-center">
                                <p class="fw-bold my-3">{{ $block->items->where('name', 'text')->first()->value }}</p>
                                <a href="{{ env('APP_URL') . '/' . explode('/', $block->items->where('name', 'button_url')->first()->value)[3] }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                                    <p class="fw-bold h5 my-2 text-uppercase">{{ $block->items->where('name', 'button_text')->first()->value }}</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
