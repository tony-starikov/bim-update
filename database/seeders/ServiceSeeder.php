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
                'title_en' => 'MEP Coordination & Digital Fabrication',
                'description_en' => 'Projects development from scratch using BIM technologies on all stages of production.',
                'image' => 'service/MEP_coordination_3.png',
                'slug' => 'mep-coordination',
                'presentation' => 'presentations/mep_coordination.pdf',
                'show_page' => 1,
            ],
            [
                'title_en' => 'Telecom Design',
                'description_en' => 'Creation of 3D projects, drawings design, detail development.',
                'image' => 'service/Telecom_3.png',
                'slug' => 'telecom-design',
                'presentation' => 'presentations/telecom_design.pdf',
                'show_page' => 1,
            ],
            [
                'title_en' => 'Scan to BIM',
                'description_en' => 'Creation of a quality BIM model by the point clouds according to customers requirements with excellent accuracy.',
                'image' => 'service/Scan_to_BIM_3.png',
                'slug' => 'scan-to-bim',
                'presentation' => 'presentations/scan_to_bim.pdf',
                'show_page' => 1,
            ],
            [
                'title_en' => 'BIM modeling',
                'description_en' => 'Development of BIM models and visualizations, providing project documentation.',
                'image' => 'service/Modeling_3.png',
                'slug' => 'bim-modeling',
                'presentation' => 'presentations/bim_modeling.pdf',
                'show_page' => 0,
            ],
            [
                'title_en' => 'BIM content creation',
                'description_en' => 'Development of unique parametric Revit families.',
                'image' => 'service/BIM_content_creation_3.png',
                'slug' => 'bim-content-creation',
                'presentation' => 'presentations/bim_content_creation.pdf',
                'show_page' => 0,
            ],
            [
                'title_en' => 'Software development',
                'description_en' => 'Development of Dynamo Scripts and Add-Ins for Revit.',
                'image' => 'service/Software_development_3.png',
                'slug' => 'software-development',
                'presentation' => 'presentations/software_development.pdf',
                'show_page' => 0,
            ],
        ]);
    }
}
