@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="article"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

@section('main')
    <div class="container-fluid horizontal-gradient-docs">

        <div class="container py-5 p-lg-5 mt-5">

            <div class="row pt-0 p-md-5 pt-md-0 pb-xl-0 mt-lg-5 justify-content-center align-items-center">
                <div class="col-7 col-lg-5">
                    <img src="/images/documents/image.webp" class="img-fluid w-100" alt="...">
                </div>

                <div class="col-lg-7">
                    <h1 class="fw-bold">
                        Model-checking tools in Revit?
                    </h1>
                    <h2 class="h3 fw-bold text-white mb-5">
                        Get a checklist detailing 10 effective tools
                    </h2>
                    <script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="36e8ffcfd59d981ac14ebb11c74e5a169f998a7a9419bd84afbb87074fba57e4"></script>
                </div>
            </div>

            <div class="row p-5 rounded-5 bg-white">
                <div class="col-12">
                    <p class="h5">
                        Are you tired of struggling with bringing your ideas to life inside Revit? Wait is over, and the solution is here! We have created a precise step-by-step manual for proper 3D models to delve into the world of both stunning and professional designs in Revit. Get a checklist detailing 10 effective tools to master the art of 3D modeling with precision and finesse that only true experts can!
                    </p>
                    <p class="h5">
                        You’ll learn about:
                    </p>
                    <ul>
                        <li class="h5">The process of preparing and creating a floor plan</li>
                        <li class="h5">
                            Setting the correct phase and creating sections
                        </li>
                        <li class="h5">
                            Creating and adjusting the ceiling plan
                        </li>
                        <li class="h5">
                            Geometry verification process by choosing LOD according to the plan.
                        </li>
                        <li class="h5">
                            Checking phases and worksets
                        </li>
                        <li class="h5">
                            Converting ‘models in place” into families and connecting them to systems.
                        </li>
                    </ul>
                    <p class="h5">
                        Bonus! BIMprove add-ins: free Revit plugin from the Software development department and other basic useful tools.
                    </p>
                </div>
            </div>

        </div>

    </div>

@endsection

@section('canonical')
    @if($page_info->canonical)
        <link rel="canonical" href="{{ $page_info->canonical }}">
    @endif
@endsection
