<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'id' => 1,
                'title_en' => 'MEP BIM Modeling',
                'description_en' => 'We make drawings not only informative but also convenient for the user. Shop drawings, Coordination, Fabrication, 3D modeling in Revit.',
                'image' => 'service/MEP_coordination_3.png',
                'slug' => 'mep-coordination',
                'presentation' => 'presentations/bim-prove-mep-coordination-min.pdf',
                'show_page' => 1,
                'show_on_main_page' => 1,
                'canonical' => 'https://bim-prove.com/service/mep-coordination',
                'service_menu_item_id' => 1,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 2,
                'title_en' => 'Telecom Design',
                'description_en' => 'Creation of design drawings for the Telecom sector. Preparation of documentation, sites, metalwork. Creation of informational 3D models (Digital twins).',
                'image' => 'service/Telecom_3.png',
                'slug' => 'telecom-design',
                'presentation' => 'presentations/bim-prove-telecom-design-min.pdf',
                'show_page' => 1,
                'show_on_main_page' => 1,
                'canonical' => 'https://bim-prove.com/service/telecom-design',
                'service_menu_item_id' => 2,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 3,
                'title_en' => 'Scan to BIM',
                'description_en' => 'Creation of quality BIM models by the Point Clouds according to customers requirements with excellent accuracy. Also As-built services.',
                'image' => 'service/Scan_to_BIM_3.png',
                'slug' => 'scan-to-bim',
                'presentation' => 'presentations/bim-prove-scan-to-bim-min.pdf',
                'show_page' => 1,
                'show_on_main_page' => 1,
                'canonical' => 'https://bim-prove.com/service/scan-to-bim',
                'service_menu_item_id' => 3,
                'schema_main' => '{"@context":"https://schema.org","@graph":[{"@type": "WebPage","@id": "https://bim-prove.com/service/scan-to-bim/#webpage","url": "https://bim-prove.com/service/scan-to-bim","name": "Scan to BIM Services | Point Cloud to BIM Modeling","description": "Our Scan to BIM Services or Point Cloud to BIM Modeling delivers an accurate As-Built BIM Model depicting all elements in and around the building.","inLanguage": "en-US","isPartOf": {"@type": "WebSite","@id": "https://bim-prove.com/#website","url": "https://bim-prove.com/","name": "BIMprove","description": "BIM Modeling Services - Scan to BIM, As-built drawings, MEP Coordination, Telecom design","inLanguage": "en-US","publisher": {"@type": "Organization","@id": "https://bim-prove.com/#organization","url": "https://bim-prove.com/","name": "BIMprove llc","telephone": "+380668901648","sameAs": ["https://www.linkedin.com/company/bimprove/", "https://www.instagram.com/bimprove/", "https://www.facebook.com/bimproveworld", "https://www.youtube.com/@bimpr0ve"],"logo": {"@type": "ImageObject","@id": "https://bim-prove.com/#organizationLogo","url": "https://bim-prove.com/images/bim_prove.png","width": "108","height": "140","caption": "BIMprove"},"image": {"@type": "ImageObject","@id": "https://bim-prove.com/#image","url": "https://bim-prove.com/images/bim_prove.png","contentUrl": "https://bim-prove.com/images/bim_prove.png","inLanguage": "en-US","width": "122","height": "100","caption": "BIMprove"},"contactPoint": {"@type": "ContactPoint","telephone": "380668901648","contactType": "none","address": "71-75 Shelton Street, Covent Garden, London, WC2H 9JQ, GB"}}},"breadcrumb": {"@type": "BreadcrumbList","@id": "https://bim-prove.com/service/scan-to-bim/#breadcrumblist","itemListElement": [{"@type": "ListItem","@id": "https://bim-prove.com/#listItem","position": "1","name": "Home","item": {"@type": "Thing","@id": "https://bim-prove.com/"},"nextItem": {"@type": "ListItem","@id": "https://bim-prove.com/service/scan-to-bim/#listItem"}},{"@type": "ListItem","@id": "https://bim-prove.com/service/scan-to-bim/#listItem","position": "2","name": "Scan to BIM Services | Point Cloud to BIM Modeling","previousItem": {"@type": "ListItem","name": "https://bim-prove.com/#listItem"}}]}}]}',
                'schema_faq' => '{"@context": "https://schema.org","@type": "FAQPage","mainEntity": [{"@type": "Question","name": "What are the benefits of scan to BIM service?","acceptedAnswer": {"@type": "Answer","text": "Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery."}},{"@type": "Question","name": "What is Level of detail (LOD)?","acceptedAnswer": {"@type": "Answer","text": "Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document. We create BIM models by the Point Cloud in LODs: 100, 200, 300, 350. Learn more about Level of Detail in our article."}},{"@type": "Question","name": "How long does it take to complete a project?","acceptedAnswer": {"@type": "Answer","text": "The duration of a Scan to BIM modeling depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a from few days to 1-2 months."}},{"@type": "Question","name": "What results will you get by using our service?","acceptedAnswer": {"@type": "Answer","text": "The deliverables of a Scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D BIM models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects."}},{"@type": "Question","name": "What types of projects can 3D modeling be helpful for?","acceptedAnswer": {"@type": "Answer","text": "Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction."}},{"@type": "Question","name": "Who will benefit from our Point Cloud BIM modeling services?","acceptedAnswer": {"@type": "Answer","text": "With 7 years of BIM modeling experience, our team has extensive knowledge with a variety of clients. BIM modeling services (also known as Scan to BIM) are suitable for company types such as Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies."}},{"@type": "Question","name": "Why Choose Our Scan to BIM Services?","acceptedAnswer": {"@type": "Answer","text": "BIMprove employs Point Cloud specialists, BIM modelers and CAD drafters who can accurately process Point Cloud data, then create a 3D BIM models with the required LOD, and create 2D drawings with dimensions, annotations and overlay layers if required. We guarantee on-time delivery: Accurate point cloud reproduction / 3D BIM models with the required LOD level from 100 to 350 / 2D drawings with required data."}},{"@type": "Question","name": "What is As-built?","acceptedAnswer": {"@type": "Answer","text": "An As-built drawing is a drawing that we, as a digital construction contractor, create after the successful completion of a project based on BIM models. Construction workers typically compare the construction drawing to the original drawings and specifications created at the beginning of the project. These are required documents on every construction project."}}]}',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 4,
                'title_en' => 'BIM modeling',
                'description_en' => 'Developing 3D Revit Architectural BIM models for each building design phase. Creating visualizations. Interior designs. Coordination with other disciplines.',
                'image' => 'service/Modeling_3.png',
                'slug' => 'architectural-bim-service',
                'presentation' => 'presentations/bim-prove-bim-modeling.pdf',
                'show_page' => 0,
                'show_on_main_page' => 1,
                'canonical' => '',
                'service_menu_item_id' => 4,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 5,
                'title_en' => 'BIM content creation',
                'description_en' => 'Developmenting unique parametric and non-parametric Revit families for all types of architectural, structural, MEP, HVAC and other elements for clients in various industries.',
                'image' => 'service/BIM_content_creation_3.png',
                'slug' => 'bim-content-creation',
                'presentation' => 'presentations/bim-prove-bim-content-creation.pdf',
                'show_page' => 0,
                'show_on_main_page' => 1,
                'canonical' => '',
                'service_menu_item_id' => 5,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 6,
                'title_en' => 'Software development',
                'description_en' => 'Buisiness automations. Projects development from scratch using BIM-technologies on all stages of production. Revit API, Python, C#, Dynamo, Scripting.',
                'image' => 'service/Software_development_3.png',
                'slug' => 'software-development',
                'presentation' => 'presentations/bim-prove-software-development.pdf',
                'show_page' => 0,
                'show_on_main_page' => 1,
                'canonical' => '',
                'service_menu_item_id' => 6,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 7,
                'title_en' => 'MEP BIM Modeling',
                'description_en' => 'Utilize the services of one skilled professional to strengthen your team or order the entire project to be completed by a group of specialists.',
                'image' => null,
                'slug' => 'mep-bim-modeling',
                'presentation' => null,
                'show_page' => 1,
                'show_on_main_page' => 0,
                'canonical' => 'https://bim-prove.com/service/mep-bim-modeling',
                'service_menu_item_id' => null,
                'schema_main' => '',
                'schema_faq' => '',
                'order' => 7,
                'order_dump' => 7,
            ],
        ]);
    }
}
