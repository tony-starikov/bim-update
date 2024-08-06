@extends('master')

@section('og')
    @if($og)
        <meta property="og:title" content="{{ $og->title }}"/>
        <meta property="og:description" content="{{ $og->description }}"/>
        <meta id="image" property="og:image" content="https://bim-prove.com/images/bim_prove.png">
        <meta property="og:image:width" content="122"/>
        <meta property="og:image:height" content="100"/>
        <meta property='og:type' content="website"/>
        <meta property="og:url" content="https://bim-prove.com{{ $og->url }}" />
    @endif
@endsection

{{--@section('schema')--}}
{{--    @if($service->schema_main)--}}
{{--        <script type="application/ld+json">{{ $service->schema_main }}</script>--}}
{{--    @endif--}}

{{--    @if($service->schema_faq)--}}
{{--        <script type="application/ld+json">{{ $service->schema_faq }}</script>--}}
{{--    @endif--}}
{{--@endsection--}}

@if($service->slug == 'scan-to-bim')
    @section('schema')

    <script type="application/ld+json">
    {
        "@context":"https://schema.org",
        "@graph":
        [
            {
                "@type": "WebPage",
                "@id": "https://bim-prove.com/service/scan-to-bim/#webpage",
                "url": "https://bim-prove.com/service/scan-to-bim",
                "name": "Scan to BIM Services | Point Cloud to BIM Modeling",
                "description": "Our Scan to BIM Services or Point Cloud to BIM Modeling delivers an accurate As-Built BIM Model depicting all elements in and around the building.",
                "inLanguage": "en-US",
                "isPartOf": {
                    "@type": "WebSite",
                    "@id": "https://bim-prove.com/#website",
                    "url": "https://bim-prove.com/",
                    "name": "BIMprove",
                    "description": "BIM Modeling Services - Scan to BIM, As-built drawings, MEP Coordination, Telecom design",
                    "inLanguage": "en-US",
                    "publisher": {
                        "@type": "Organization",
                        "@id": "https://bim-prove.com/#organization",
                        "url": "https://bim-prove.com/",
                        "name": "BIMprove llc",
                        "telephone": "+380668901648",
                        "sameAs": ["https://www.linkedin.com/company/bimprove/", "https://www.instagram.com/bimprove/", "https://www.facebook.com/bimproveworld", "https://www.youtube.com/@bimpr0ve"],
                        "logo": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#organizationLogo",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "width": "108",
                            "height": "140",
                            "caption": "BIMprove"
                        },
                        "image": {
                            "@type": "ImageObject",
                            "@id": "https://bim-prove.com/#image",
                            "url": "https://bim-prove.com/images/bim_prove.png",
                            "contentUrl": "https://bim-prove.com/images/bim_prove.png",
                            "inLanguage": "en-US",
                            "width": "122",
                            "height": "100",
                            "caption": "BIMprove"
                        },
                        "contactPoint": {
                            "@type": "ContactPoint",
                            "telephone": "380668901648",
                            "contactType": "none",
                            "address": "71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, GB"
                        }
                    }
                },
                "breadcrumb": {
                    "@type": "BreadcrumbList",
                    "@id": "https://bim-prove.com/service/scan-to-bim/#breadcrumblist",
                    "itemListElement": [{
                        "@type": "ListItem",
                        "@id": "https://bim-prove.com/#listItem",
                        "position": "1",
                        "name": "Home",
                        "item": {
                            "@type": "Thing",
                            "@id": "https://bim-prove.com/"
                        },
                        "nextItem": {
                            "@type": "ListItem",
                            "@id": "https://bim-prove.com/service/scan-to-bim/#listItem"
                        }
                    },{
                        "@type": "ListItem",
                        "@id": "https://bim-prove.com/service/scan-to-bim/#listItem",
                        "position": "2",
                        "name": "Scan to BIM Services | Point Cloud to BIM Modeling",
                        "previousItem": {
                            "@type": "ListItem",
                            "name": "https://bim-prove.com/#listItem"
                        }
                    }]
                }
            }
        ]
    }
</script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "What are the benefits of scan to BIM service?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery."
        }
      },{
        "@type": "Question",
        "name": "What is Level of detail (LOD)?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document. We create BIM models by the Point Cloud in LODs: 100, 200, 300, 350. Learn more about Level of Detail in our article."
        }
      },{
        "@type": "Question",
        "name": "How long does it take to complete a project?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The duration of a Scan to BIM modeling depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a from few days to 1-2 months."
        }
      },{
        "@type": "Question",
        "name": "What results will you get by using our service?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The deliverables of a Scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D BIM models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects."
        }
      },{
        "@type": "Question",
        "name": "What types of projects can 3D modeling be helpful for?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction."
        }
      },{
        "@type": "Question",
        "name": "Who will benefit from our Point Cloud BIM modeling services?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "With 7 years of BIM modeling experience, our team has extensive knowledge with a variety of clients. BIM modeling services (also known as Scan to BIM) are suitable for company types such as Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies."
        }
      },{
        "@type": "Question",
        "name": "Why Choose Our Scan to BIM Services?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "BIMprove employs Point Cloud specialists, BIM modelers and CAD drafters who can accurately process Point Cloud data, then create a 3D BIM models with the required LOD, and create 2D drawings with dimensions, annotations and overlay layers if required. We guarantee on-time delivery: Accurate point cloud reproduction / 3D BIM models with the required LOD level from 100 to 350 / 2D drawings with required data."
        }
      },{
        "@type": "Question",
        "name": "What is As-built?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "An As-built drawing is a drawing that we, as a digital construction contractor, create after the successful completion of a project based on BIM models. Construction workers typically compare the construction drawing to the original drawings and specifications created at the beginning of the project. These are required documents on every construction project."
        }
      }]
    }
</script>
@endsection
@endif

@section('main')

    @foreach($service->blocks as $block)
        @include('service_blocks.' . $block->type->name)
    @endforeach

@endsection

{{--@section('modals')--}}
{{--    <!-- Modal START -->--}}
{{--    <div class="modal fade w-100 h-100" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-xl">--}}
{{--            <div class="modal-content h-100" style="background-color: #b5c5c8;">--}}
{{--                <div class="modal-body h-100 p-0">--}}
{{--                    <div class="container-fluid min-vh-100">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-10 col-lg-10 col-xl-11"></div>--}}
{{--                            <div class="col-2 col-lg-2 col-xl-1 d-flex justify-content-end">--}}
{{--                                <button type="button" class="btn border-0 pe-0" data-bs-dismiss="modal">--}}
{{--                                    <i class="las la-3x la-times text-white"></i>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row p-0 py-0 p-xl-5">--}}
{{--                            <div class="col-12 col-xl-6 align-self-stretch">--}}
{{--                                <h4 class="fw-bold text-white display-6 w-100 lh-1">--}}
{{--                                    Meet at a time that is convenient for you.--}}
{{--                                </h4>--}}
{{--                                <h4 class="h2 lh-1 mt-3 mb-3 text-white fw-semibold">--}}
{{--                                    <small>--}}
{{--                                        Book a date and time that is convenient for you to discuss how we can help you.--}}
{{--                                    </small>--}}
{{--                                </h4>--}}
{{--                                <img src="/images/main_page/calendar_image.webp" class="img-fluid w-100 p-5 my-5 d-none d-xl-block" alt="mail_photo">--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-xl-6">--}}
{{--                                <!-- Calendly inline widget begin -->--}}
{{--                                <div class="calendly-inline-widget w-100" data-url="https://calendly.com/bimprove/30min" style="height:700px;"></div>--}}
{{--                                <script type="text/javascript">--}}
{{--                                    window.addEventListener('DOMContentLoaded', (event) => {--}}
{{--                                        let script = document.createElement('script');--}}
{{--                                        script.src = "https://assets.calendly.com/assets/external/widget.js";--}}
{{--                                        script.innerHTML = ''--}}
{{--                                        document.body.appendChild(script);--}}
{{--                                    });--}}
{{--                                </script>--}}
{{--                                <!-- Calendly inline widget end -->--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row p-3 pt-2 text-center d-flex align-items-center">--}}
{{--                            <h4 class="h4 lh-1 text-white fw-semibold">--}}
{{--                                <small>--}}
{{--                                    If you have a proposal, fill out the form with your information and we'll get back to you.--}}
{{--                                </small>--}}
{{--                            </h4>--}}
{{--                        </div>--}}
{{--                        <div class="row pb-3 d-flex justify-content-center">--}}
{{--                            <div class="col-6 col-lg-3 col-xl-2 mb-2">--}}
{{--                                <a href="{{ route('contact') }}" role="button" class="btn btn-primary shadow-none btn-lg border-0 rounded-4 w-100 mx-auto" style="background-color: #43aeb6">--}}
{{--                                    <span class="fw-bold h6 d-block m-0">CONTACT US</span>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Modal END -->--}}
{{--@endsection--}}

@section('canonical')
    @if($service->canonical)
        <link rel="canonical" href="{{ $service->canonical }}">
    @endif
@endsection
