<div id="PROJECTS" class="container-fluid">
    <div class="container py-5 p-lg-5 pt-lg-0">
        <div class="row p-lg-5 pt-lg-0">
            <div class="col-12">
                <h2 class="fw-bold">
                    OUR SCAN TO BIM PROJECTS
                </h2>
            </div>

            <div class="col-12">
                <div class="row mt-4">
                    @foreach($works as $work)
                        <div class="col-md-6 mt-4">
                            <div class="card border-0">
                                <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                    <img src="/images/{{ $work->image }}" class="card-img" alt="{{ $work->title }}">
                                    <div class="row align-items-center">
                                        <div class="col-7 mt-2">
                                            <a class="text-decoration-none" href="{{ route('portfolio.project', $work->slug) }}">
                                                <h3 class="text-dark h6 fw-bold m-0">{{ $work->title }}</h3>
                                            </a>
                                        </div>
                                        <div class="col-5 mt-2">
                                            <a href="{{ route('portfolio.project', $work->slug) }}" class="text-decoration-none">
                                                <button class="btn btn-primary btn-lg border-0 shadow-none rounded-4 w-100" style="background-color: #43aeb6" type="button">
                                                    <span class="fw-bold h6 d-block my-1">EXPLORE</span>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12 px-4">
                <div class="row mt-4 px-4 py-5 p-lg-5 justify-content-center" style="border: 4px solid; border-color: #6ad9d8;">
                    <div class="col-lg-6 text-center">
                        <a id="estimate-project-screen-scantobim-xxl" href="{{ route('estimates') }}" role="button" class="btn btn-primary btn-lg border-0 rounded-4 w-100" style="background-color: #43aeb6">
                            <p class="fw-bold h5 my-2">ESTIMATE YOUR PROJECT</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
