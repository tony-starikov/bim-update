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
                'title_en' => 'MEP BIM Modeling',
                'description_en' => 'We make drawings not only informative but also convenient for the user. Shop drawings, Coordination, Fabrication, 3D modeling in Revit.',
                'image' => 'service/MEP_coordination_3.png',
                'slug' => 'mep-coordination',
                'presentation' => 'presentations/bim-prove-mep-coordination-min.pdf',
                'show_page' => 1,
                'canonical' => 'https://bim-prove.com/service/mep-coordination',
            ],
            [
                'title_en' => 'Telecom Design',
                'description_en' => 'Creation of design drawings for the Telecom sector. Preparation of documentation, sites, metalwork. Creation of informational 3D models (Digital twins).',
                'image' => 'service/Telecom_3.png',
                'slug' => 'telecom-design',
                'presentation' => 'presentations/bim-prove-telecom-design-min.pdf',
                'show_page' => 1,
                'canonical' => 'https://bim-prove.com/service/telecom-design',
            ],
            [
                'title_en' => 'Scan to BIM',
                'description_en' => 'Creation of quality BIM models by the Point Clouds according to customers requirements with excellent accuracy. Also As-built services.',
                'image' => 'service/Scan_to_BIM_3.png',
                'slug' => 'scan-to-bim',
                'presentation' => 'presentations/bim-prove-scan-to-bim-min.pdf',
                'show_page' => 1,
                'canonical' => 'https://bim-prove.com/service/scan-to-bim',
            ],
            [
                'title_en' => 'BIM modeling',
                'description_en' => 'Developing 3D Revit Architectural BIM models for each building design phase. Creating visualizations. Interior designs. Coordination with other disciplines.',
                'image' => 'service/Modeling_3.png',
                'slug' => 'architectural-bim-service',
                'presentation' => 'presentations/bim-prove-bim-modeling.pdf',
                'show_page' => 0,
                'canonical' => '',
            ],
            [
                'title_en' => 'BIM content creation',
                'description_en' => 'Developmenting unique parametric and non-parametric Revit families for all types of architectural, structural, MEP, HVAC and other elements for clients in various industries.',
                'image' => 'service/BIM_content_creation_3.png',
                'slug' => 'bim-content-creation',
                'presentation' => 'presentations/bim-prove-bim-content-creation.pdf',
                'show_page' => 0,
                'canonical' => '',
            ],
            [
                'title_en' => 'Software development',
                'description_en' => 'Buisiness automations. Projects development from scratch using BIM-technologies on all stages of production. Revit API, Python, C#, Dynamo, Scripting.',
                'image' => 'service/Software_development_3.png',
                'slug' => 'software-development',
                'presentation' => 'presentations/bim-prove-software-development.pdf',
                'show_page' => 0,
                'canonical' => '',
            ],
        ]);
    }
}
