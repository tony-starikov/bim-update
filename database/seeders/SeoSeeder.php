<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seo')->insert([
            [
                'id' => 1,
                'url' => '/',
                'title' => 'The Individual Five-Star Service - BIMprove',
                'description' => "Unlock your AEC company's full potential with our customized BIM support, delivering a five-star service experience tailored specifically for you.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 2,
                'url' => '/service/scan-to-bim',
                'title' => 'Scan to BIM | Point Cloud | As-builts - BIMprove',
                'description' => "Revit models from the Point Cloud with BIMprove. The Individual Five-Star Service. Seven years of experience. A team of 45 professionals. Contact us!",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 3,
                'url' => '/service/telecom-design',
                'title' => 'Telecom Design | Digital Twins | CAD - BIMprove',
                'description' => "Creating digital twins in the telecommunications sector. Total solutions with a individual approach to each client. Contact us!",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 4,
                'url' => '/service/mep-coordination ',
                'title' => 'Shop Drawings | Coordination | Fabrication - BIMprove',
                'description' => "MEP modeling services. Coordination and customization of your project's communication. Modeling from drawings. Creation of Shop Drawings. Contact us!",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 5,
                'url' => '/estimates-mep-project',
                'title' => 'BIM Estimates for your project | MEP coordination',
                'description' => "Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 6,
                'url' => '/estimates-project-mep',
                'title' => 'BIM Estimates for your project | MEP coordination',
                'description' => "Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Shop Drawings | Coordination | Fabrication",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 7,
                'url' => '/estimates-scan-to-bim-project',
                'title' => 'BIM Estimates for your project | Scan to BIM',
                'description' => "Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Scan to BIM | Digital Twins | As-builts",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 8,
                'url' => '/estimates-project-scan-to-bim',
                'title' => 'BIM Estimates for your project | Scan to BIM',
                'description' => "Get an estimate for your BIM project from BIMprove LLC. Personalized approach to each client. Scan to BIM | Digital Twins | As-builts",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 9,
                'url' => '/blog',
                'title' => 'BIM Blog - BIM Articles and Blogs | BIMprove',
                'description' => "BIM blog - useful articles from practitioners, tips, advice to help you dive into the world of BIM.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 10,
                'url' => '/post/how-the-work-on-the-point-cloud-in-revit-is-going-on',
                'title' => 'How the work on the Point cloud in Revit is going on',
                'description' => "In this article, let's break down the options for working at Revit and go through them in detail.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 11,
                'url' => '/post/architecture-in-revit-by-point-cloud',
                'title' => 'Architecture in Revit by Point Cloud',
                'description' => "In this article, we will talk about the discipline of Architecture and the specifics of modeling its components in Revit by point cloud.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 12,
                'url' => '/post/what-is-bim',
                'title' => 'What is BIM? | Building Information Modeling',
                'description' => "This quick guide provides insight into what BIM is, how it works, and why it is important to manufacturers and designers alike.",
                'keywords' => 'Keywords',
                'text' => '',
            ],
            [
                'id' => 13,
                'url' => '/scan-to-bim-estimates-project',
                'title' => 'Scan to BIM | BIM Estimates for your project',
                'description' => "Assessment of your BIM project from the specialists of BIMprove LLC. The Individual Five-Star Service. BIM scanning | Digital twins | Built objects",
                'keywords' => 'Keywords',
                'text' => '',
            ],
//            [
//                'id' => 4,
//                'url' => '',
//                'title' => '',
//                'description' => "",
//                'keywords' => 'Keywords',
//                'text' => '',
//            ],
        ]);
    }
}
