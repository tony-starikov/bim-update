<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/scan-to-bim-background-new_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'SCAN TO BIM SERVICES',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'Guarantee of models quality. Daily reports. 3D modeling by Point Cloud specialists with over 7 years of experience in all disciplines.',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => 'https://bim-prove.com/scan-to-bim-estimates-project',
                'service_block_id' => 1,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'Point cloud registration',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon1_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'BIM MODELING',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon2_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'FACILITY MANAGEMENT',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon3_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'AS-BUILT SERVICES',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon4_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 1,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 1,
                'type_id' => 6,
            ],


            [
                'name' => 'breadcrumb_item_active',
                'value' => 'Scan To Bim Service',
                'service_block_id' => 2,
                'type_id' => 1,
            ],

            [
                'name' => 'block_header',
                'value' => 'What advantages you will get',
                'service_block_id' => 3,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> offer precise parametric <b class="fw-bold">As-built BIM Models</b> and 2D CAD Models showcasing details like pipes, walls, slabs, roof plans, facades, and landscapes within and around the building.</p>',
                'service_block_id' => 3,
                'type_id' => 4,
            ],
            [
                'name' => 'paragraph_2',
                'value' => '<p>Our <b class="fw-bold">Point Cloud</b> to <b class="fw-bold">BIM Modeling Services</b> deliver models ranging from LOD 100 to 350, encompassing Architectural, Structural, Site, MEPFP Elements. We also include Clash Detection for projects involving Renovation, Refurbishment, Retrofit, or Reconstruction.</p>',
                'service_block_id' => 3,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon1_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => '3D Content Creation',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon2_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'HIGH QUALITY',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon3_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ADHERENCE TO DEADLINES',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon4_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_header',
                'value' => 'Tasks solving',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon5_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_header',
                'value' => 'Project adjustmnent',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon6_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_header',
                'value' => 'Communication',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon7_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_header',
                'value' => 'Certified team',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon8_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_header',
                'value' => 'Work process organization',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'name' => 'file_to_download',
                'value' => 'service_block/scan-to-bim_4.pdf',
                'service_block_id' => 4,
                'type_id' => 7,
            ],
            [
                'name' => 'button_text',
                'value' => 'DOWNLOAD PRESENTATION',
                'service_block_id' => 4,
                'type_id' => 1,
            ],
            [
                'name' => 'button_color',
                'value' => '#6bdcdb',
                'service_block_id' => 4,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 4,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'More about our Scan to BIM Services',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> (also known as Point Cloud <b class="fw-bold">BIM Modeling services</b>) are suitable for Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.</p>',
                'service_block_id' => 5,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'BIM modeling',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon1_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => 'Creation of 3D Revit BIM-model by tracing the data from the Point Cloud. Parameterization of BIM elements.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'As-built drawings',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon2_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => 'Design of As-built drawings based on 3D BIM models from Revit created by the scanning.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'QA\QC',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon3_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => 'Checking of 3D BIM model accuracy, building and engineering logic, elements clashing.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => 'Progress Reports',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon4_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => 'Creation of every day project reports. Own reporting system to inform about the progress of the modeling process.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => 'Export to other formats',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon5_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => 'Export the Revit model in the format you need: IFC, NWC, NWF, DWG, PDF, DGN, FBX, STEP, SKP',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => 'Our Software skills',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon6_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => 'The main program for creating 3D BIM models is Revit. But our team is also proficient in other programs: AutoCAD, ArchiCAD, SketchUp, Navisworks.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'WE HAVE EXPERIENCE AND EXPERTISE IN THE FIELDS:',
                'service_block_id' => 6,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our top priorities: <b class="fw-bold">quality, accuracy and logic</b>. Our experience includes developing parametric 3D BIM and 2D CAD models. We work with all disciplines: Architectural, Structural, Mechanical, Electrical, Plumbing, Fire Protection, Site.</p>',
                'service_block_id' => 6,
                'type_id' => 4,
            ],


            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon1_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'Residential Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon2_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'Educational Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon3_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'Institutional Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon4_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_header',
                'value' => 'Historical Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon5_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_header',
                'value' => 'Business Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon6_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_header',
                'value' => 'Mercantile Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon7_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_header',
                'value' => 'Industrial Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon8_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_header',
                'value' => 'Storages',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon9_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_header',
                'value' => 'Parkings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_tenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon10_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_tenth_item_header',
                'value' => 'Special Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eleventh_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon11_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eleventh_item_header',
                'value' => 'Bridges',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_twelfth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon12_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_twelfth_item_header',
                'value' => 'Roads',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_thirteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon13_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_thirteenth_item_header',
                'value' => 'Transmission towers',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon14_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourteenth_item_header',
                'value' => 'Monuments',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon15_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifteenth_item_header',
                'value' => 'Site',
                'service_block_id' => 6,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Modeling</b> team is skilled in producing accurate 3D BIM models or 2D drawings for purposes such as design validation, planning, comparison, interference checks, MEP or construction elements demolition or addition, documentation of existing building conditions.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon1_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'CONSULTATION',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>Receiving the task by email, project our <a href="/scan-to-bim-estimates-project" class="text-secondary">estimation form</a>, or during the meeting.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_first_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_first_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon2_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'PROJECT ESTIMATION',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>Estimation of the project and creation of an offer within 24 hours. We can create 3D model only by the Point Cloud or add information from the drawings. We use your company template or ours. If you need, we can create Revit template according to your needs and requirements.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_second_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_second_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon3_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ESTIMATION APPROVAL',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>Discussion of estimation with the client & commercial offer approval.</p><p>We create 3D models in LOD 100 - 350 and using Autodesk Revit versions 2019/2020/2021/2022/2023/2024.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_third_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_third_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon4_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_header',
                'value' => 'PROJECT SETUP',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_fourth_item_paragraph_2',
                'value' => '<p>- The creation of chats and dashboard</p><p>- Deadline setting</p><p>- Team meeting</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_fourth_item_paragraph_3',
                'value' => '<p>- Sorting and processing incoming information</p><p>- Setting up the template for work</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon5_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_header',
                'value' => 'WORKFLOW',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_fifth_item_paragraph_2',
                'value' => '<p>- BIM and 3D modeling</p><p>- Preparation of drawings and schedules</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_fifth_item_paragraph_3',
                'value' => '<p>- Step-by-step project review</p><p>- Daily/weekly reports or meetings with the client</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon6_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_header',
                'value' => 'MODEL PUBLISHING',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_sixth_item_paragraph_2',
                'value' => '<p>- QA\QC in Revit or Navisworks</p><p>- Adding missing elements and corrections after QA\QC</p><p>- Purging unused elements, deleting working views</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'name' => 'the_sixth_item_paragraph_3',
                'value' => '<p>- Delivering model to the client</p><p>- Getting feedback and approval from the client</p><p>- Receiving payment</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SCAN TO BIM PROJECTS',
                'service_block_id' => 8,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_project_url',
                'value' => 'http://localhost/portfolio/ukrainian-metallurgical-plant',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'name' => 'the_second_project_url',
                'value' => 'http://localhost/portfolio/industrial-plant-northern-gzk',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'name' => 'the_third_project_url',
                'value' => 'http://localhost/portfolio/landscape-of-the-industrial-territory',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'name' => 'the_fourth_project_url',
                'value' => 'http://localhost/portfolio/hypermarket-billa',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_url',
                'value' => 'http://localhost/scan-to-bim-estimates-project',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 8,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 9,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon1_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon2_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon3_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT IS THE SCAN TO BIM SERVICE?',
                'service_block_id' => 10,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p style="text-align: justify;">Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps create a comprehensive and detailed building model, which can be used for renovation, restoration, or retrofitting purposes. The BIM modeling service is essential in creating a collaborative environment for developing and executing efficient construction projects.</p>&nbsp;<p style="text-align: justify;">The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings of 28%, greater accuracy, and reduced risk of errors by 40%. It helps minimize on-site work and disruptions reduces the chances of rework, and allows for better visualization and analysis of the building\'s structure. Additionally, the 3D BIM models enable stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.</p>',
                'service_block_id' => 10,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'COUNTRIES WE WORKED WITH',
                'service_block_id' => 11,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/scan-to-bim-block-11-icon1_11.png',
                'service_block_id' => 11,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'FREQUENTLY ASKED QUESTIONS',
                'service_block_id' => 12,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon1_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'What are the benefits of scan to BIM service?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon2_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'What is Level of detail (LOD)?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document. We create BIM models by the Point Cloud in LODs: 100, 200, 300, 350. <a href="/post/what-is-lod-level-of-detail-in-bim" class="text-dark">Learn more about Level of Detail in our article.</a></p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon3_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'How long does it take to complete a project?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>The duration of a Scan to BIM modeling depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a from few days to 1-2 months.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon4_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_header',
                'value' => 'What results will you get by using our service?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_paragraph_1',
                'value' => '<p>The deliverables of a Scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D BIM models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon5_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_header',
                'value' => 'What types of projects can 3D modeling be helpful for?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_paragraph_1',
                'value' => '<p>Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon6_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_header',
                'value' => 'Who will benefit from our Point Cloud BIM modeling services?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_paragraph_1',
                'value' => '<p>With 7 years of BIM modeling experience, our team has extensive knowledge with a variety of clients. BIM modeling services (also known as Scan to BIM) are suitable for company types such as Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon7_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_header',
                'value' => 'Why Choose Our Scan to BIM Services?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_paragraph_1',
                'value' => '<p>BIMprove employs Point Cloud specialists, BIM modelers and CAD drafters who can accurately process Point Cloud data, then create a 3D BIM models with the required LOD, and create 2D drawings with dimensions, annotations and overlay layers if required. We guarantee on-time delivery: Accurate point cloud reproduction / 3D BIM models with the required LOD level from 100 to 350 / 2D drawings with required data.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon8_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_header',
                'value' => 'What is As-built?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_paragraph_1',
                'value' => '<p>An As-built drawing is a drawing that we, as a digital construction contractor, create after the successful completion of a project based on BIM models. Construction workers typically compare the construction drawing to the original drawings and specifications created at the beginning of the project. These are required documents on every construction project.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_ninth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon9_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'name' => 'the_tenth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon10_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'name' => 'the_tenth_item_header',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'name' => 'the_tenth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 4,
            ],



//            [
//                'id' => 188,
//                'name' => 'block_header',
//                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
//                'service_block_id' => 13,
//                'type_id' => 1,
//            ],
//            [
//                'id' => 189,
//                'name' => 'script',
//                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
//                'service_block_id' => 13,
//                'type_id' => 8,
//            ],
//            [
//                'id' => 190,
//                'name' => 'image',
//                'value' => 'service_block/scan-to-bim-block-13-icon1_13.webp',
//                'service_block_id' => 13,
//                'type_id' => 2,
//            ],





            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 13,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 13,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 13,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 13,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 13,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/scan-to-bim-block-13-icon1_13.png',
                'service_block_id' => 13,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/mep-bim-modeling-background_36.webp',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'MEP BIM MODELING SERVICES',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'Utilize the services of one skilled professional to strengthen your team or order an entire project completed by a group of specialists.',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/mep-estimates-project',
                'service_block_id' => 36,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'MEP MODELING',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon1_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'BIM COORDINATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon2_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'FABRICATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon3_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'SHOP DRAWINGS CREATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon4_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 36,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 36,
                'type_id' => 6,
            ],


            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'MEP Services',
                'service_block_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => 'MEP BIM Modeling Service',
                'service_block_id' => 37,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 37,
                'type_id' => 5,
            ],



            [
                'name' => 'block_header',
                'value' => 'MEP sub-contractor Services',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>MEP drawings and MEP coordination are integral elements of any construction project. Whether your goal is whether a new building or the renovation of an existing one, you will need to prepare drawings and a required 3D model for BIM.</p>&nbsp;<p>Our MEP BIM coordination and modeling department specializes in developing accurate and detailed MEP models and drawings.</p>',
                'service_block_id' => 38,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'BIM Coordination',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon1_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'MEP Modeling',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon2_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'Drawings creation',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon3_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => 'MEP Fabrication',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon4_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => 'MEP Families Creation',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon5_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'Benefits of hiring our experts',
                'service_block_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We create 3D models and drawings in mechanical, fire protection and plumbing. We create 3D models and drawings in mechanical, fire protection and plumbing disciplines. You will receive BIM models according to project conditions and requirements - schematic design, design documents and construction documents.</p>&nbsp;<p>We provide MEP BIM models in the desired Revit versions - 2019/20/21/22/23/24 and in 3D Revit, DWG and IFC format (as required). We work with any LOD 100-500.</p>&nbsp;<p>We specialize in MEP outsourcing services, delivering precise 3D MEP models to MEP contractors, consultants, construction companies, design-build companies, and component manufacturers. Enhance efficiency in optimizing the design, detailing, quantity, fabrication, and installation of MEP building systems.</p>',
                'service_block_id' => 39,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'Utilize the services of one skilled professional to strengthen your team or order an entire project made by a group of specialists.',
                'service_block_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 39,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 39,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 39,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 39,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'Disciplines we work with',
                'service_block_id' => 40,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We help you prepare a complete package of design data for the design phase. We create accurate component drawings, analyze them and create 3D models. The finished data is compiled into a detailed report.</p>',
                'service_block_id' => 40,
                'type_id' => 4,
            ],


            [
                'name' => 'the_first_item_header',
                'value' => "HVAC systems",
                'service_block_id' => 40,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => 'This includes heating, ventilation and air conditioning systems and air ducts.',
                'service_block_id' => 40,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'Plumbing Systems',
                'service_block_id' => 40,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => 'This includes the sanitary sewerage system, garbage disposals, pipelines and their placement.',
                'service_block_id' => 40,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'Fire protection system',
                'service_block_id' => 40,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => 'This includes converting a detailed fire sprinkler design into a 3D fire protection model.',
                'service_block_id' => 40,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'MORE ABOUT OUR MEP SERVICES',
                'service_block_id' => 41,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => '3D MEP Modeling',
                'service_block_id' => 41,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.</p>',
                'service_block_id' => 41,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_2',
                'value' => 'Fabrication',
                'service_block_id' => 41,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_2',
                'value' => '<p>Using CAMduct or SysQue software our team is capable to implement Fabrication of MEP systems according to the technical information provided by customer. HVAC and Fire Protection are our main directions in this field.</p>',
                'service_block_id' => 41,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_3',
                'value' => 'Coordination process',
                'service_block_id' => 41,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_3',
                'value' => '<p>At this stage we have two main objectives: find and solve all interdisciplinary clashes which occur, optimize MEP systems routing to achieve a balance between system efficiency  and its  moderate  cost.</p>',
                'service_block_id' => 41,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_4',
                'value' => 'Drawings creation',
                'service_block_id' => 41,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_4',
                'value' => '<p>During the drawings creation process we always try to represent all required information about MEP components and optimize them to make drawings not only informative but convenient in usage.</p>',
                'service_block_id' => 41,
                'type_id' => 4,
            ],





            [
                'name' => 'the_first_item_header',
                'value' => '7',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_subheader',
                'value' => 'YEARS EXPERIENCE',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-modeling-block-7-icon1_42.png',
                'service_block_id' => 42,
                'type_id' => 2,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => '110+',
                'service_block_id' => 42,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_subheader',
                'value' => 'COMPLETED PROJECTS',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-modeling-block-7-icon2_42.png',
                'service_block_id' => 42,
                'type_id' => 2,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => '80%',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_subheader',
                'value' => 'CLIENTS STAY WITH US',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-modeling-block-7-icon3_42.png',
                'service_block_id' => 42,
                'type_id' => 2,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => '500+',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_subheader',
                'value' => 'DESIGNED FAMILIES',
                'service_block_id' => 42,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/mep-bim-modeling-block-7-icon4_42.png',
                'service_block_id' => 42,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-modeling-block-8-icon1_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Analysing incoming contract drawings and submittals.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-modeling-block-8-icon2_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Project template adjustments.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-modeling-block-8-icon3_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'CAMduct creation or SysQue systems adjustment.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/mep-bim-modeling-block-8-icon4_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'MEP Fabrication.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/mep-bim-modeling-block-8-icon5_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Modeling MEP systems as per design drawings.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/mep-bim-modeling-block-8-icon6_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Preparing all necessary families.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/mep-bim-modeling-block-8-icon7_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'Coordination with other trades.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/mep-bim-modeling-block-8-icon8_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'Creating Shop drawings.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/mep-bim-modeling-block-8-icon9_43.png',
                'service_block_id' => 43,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'Creating Spool drawings and worksheets.',
                'service_block_id' => 43,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SOFTWARE SKILLS',
                'service_block_id' => 44,
                'type_id' => 1,
            ],


            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_1_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Advance Steel',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_2_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Autodesk AutoCAD',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_3_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Autodesk Navisworks',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_4_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Graphisoft Archicad',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_5_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Lumion',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_6_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Revit RECAP',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_7_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'Rhinoceros',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_8_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'Robot structural analysis',
                'service_block_id' => 44,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/mep-bim-modeling-block-9-icon_9_44.png',
                'service_block_id' => 44,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'SketchUp',
                'service_block_id' => 44,
                'type_id' => 1,
            ],





            [
                'name' => 'block_header',
                'value' => 'OUR MEP PROJECTS',
                'service_block_id' => 45,
                'type_id' => 1,
            ],
            [
                'name' => 'project_url_1',
                'value' => 'http://localhost/portfolio/reston-gateway-block-c-hotel',
                'service_block_id' => 45,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_2',
                'value' => 'http://localhost/portfolio/the-stacks-part-b',
                'service_block_id' => 45,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_3',
                'value' => 'http://localhost/portfolio/balfour-at-palisades',
                'service_block_id' => 45,
                'type_id' => 3,
            ],
            [
                'name' => 'button_url',
                'value' => 'http://localhost/contact',
                'service_block_id' => 45,
                'type_id' => 3,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 45,
                'type_id' => 1,
            ],
            [
                'name' => 'text',
                'value' => 'Any questions? We\'re here to help. Leave your question and we\'ll get back to you.',
                'service_block_id' => 45,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 46,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-modeling-block-11-icon1_46.png',
                'service_block_id' => 46,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 46,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 46,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-modeling-block-11-icon2_46.png',
                'service_block_id' => 46,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 46,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 46,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-modeling-block-11-icon3_46.png',
                'service_block_id' => 46,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 46,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 46,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 47,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/mep-bim-modeling-block-12-icon1_47.png',
                'service_block_id' => 47,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 48,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 48,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 48,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/mep-bim-modeling-block-13-icon1_48.png',
                'service_block_id' => 48,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/mep-bim-coordination-background_49.webp',
                'service_block_id' => 49,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'MEP BIM COORDINATION SERVICES',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'MEP coordination experts with over four years of experience in Clash Detection for your project. Over 180+ accomplished projects. Daily reports.',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/mep-estimates-project',
                'service_block_id' => 49,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'Clash Detection',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/mep-bim-coordination-icon1_49.png',
                'service_block_id' => 49,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'COORDINATION',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/mep-bim-coordination-icon2_49.png',
                'service_block_id' => 49,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'Design optimization',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/mep-bim-coordination-icon3_49.png',
                'service_block_id' => 49,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'Clash Report Generation',
                'service_block_id' => 49,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/mep-bim-coordination-icon4_49.png',
                'service_block_id' => 49,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 49,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 49,
                'type_id' => 6,
            ],


            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'MEP Services',
                'service_block_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => 'MEP BIM Coordination Service',
                'service_block_id' => 50,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 50,
                'type_id' => 5,
            ],



            [
                'name' => 'block_header',
                'value' => 'MEP BIM Coordination Services',
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Building systems—Mechanical, Electrical, Plumbing (MEP), and Fire Safety (FS)— form a fundamental mix of components, considered to be 60% of total project costs. Our MEP coordination service is dedicated to harmonizing these critical systems with other building disciplines, encompassing structure and the external envelope.</p>&nbsp;<p>Expertise in design, construction, operations and maintenance is a necessity for successful MEP coordination. This involves precise horizontal and vertical placement of system components within defined architectural and structural constraints.</p>',
                'service_block_id' => 51,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'HVAC Coordination',
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-coordination-block-3-icon1_51.png',
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => 'Clash detection in Mechanical systems: mechanical ducts, mechanical pipes, mechanical equipment, etc.',
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'Plumbing Coordination',
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-coordination-block-3-icon2_51.png',
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => 'Clash detection in Plumbing systems: cold and hot water pipes, sanitary and drainage pipes, vent pipes, rain water pipes, plumbing fixtures, etc.',
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'Fire protection Coordination',
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-coordination-block-3-icon3_51.png',
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => 'Clash detection in Fire Protection systems: wet and dry piping systems, sprinkler systems, pumps, etc.',
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 51,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'OUR SOFTWARE SKILLS',
                'service_block_id' => 52,
                'type_id' => 1,
            ],


            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_1_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Advance Steel',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_2_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Autodesk AutoCAD',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_3_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Autodesk Navisworks',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_4_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Graphisoft Archicad',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_5_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Lumion',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_6_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Revit RECAP',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_7_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'Rhinoceros',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_8_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'Robot structural analysis',
                'service_block_id' => 52,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/mep-bim-coordination-block-4-icon_9_52.png',
                'service_block_id' => 52,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'SketchUp',
                'service_block_id' => 52,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'Benefits of working with us',
                'service_block_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>MEP coordination is not just about preventing clashes between disciplines. It is a professional approach to detecting and resolving problems before construction begins, helping to avoid costly disruptions and ensuring a smooth construction process that can potentially save millions in construction costs.</p>&nbsp;<p><strong>When you work with our outsourced team of MEP specialists you get the added benefits of:</strong></p><ul><li><span style="white-space: pre-wrap;">Cost and time saving by minimizing project errors;</span></li><li><span style="white-space: pre-wrap;">Freeing your employees from routine tasks;</span></li><li><span style="white-space: pre-wrap;">You will get experienced specialists in all disciplines;</span></li></ul>',
                'service_block_id' => 53,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'Utilize the services of one skilled professional to strengthen your team or order an entire project made by a group of specialists.',
                'service_block_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 53,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 53,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 53,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 53,
                'type_id' => 6,
            ],






            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 54,
                'type_id' => 1,
            ],

            [
                'name' => 'paragraph',
                'value' => '<p>We use <strong>Autodesk Navisworks</strong> to detect collisions and report coordination issues. BIM MEP coordination is a specific and complex process; outsourcing it to proven experts is the best choice, if possible.</p>',
                'service_block_id' => 54,
                'type_id' => 4,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-coordination-block-6-icon1_54.png',
                'service_block_id' => 54,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_1',
                'value' => 'NWC export and Creation of combined NWF file',
                'service_block_id' => 54,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Preparing files for work. We use the latest NWC files for export.',
                'service_block_id' => 54,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-coordination-block-6-icon2_54.png',
                'service_block_id' => 54,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_2',
                'value' => 'Clash detective and clash analyzing',
                'service_block_id' => 54,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Collision detection, creating Clash Detective tests. Running tests and identifying the critical collisions. Creating viewpoints and organizing them.',
                'service_block_id' => 54,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-coordination-block-6-icon3_54.png',
                'service_block_id' => 54,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_3',
                'value' => 'Coordination and optimization of MEP systems',
                'service_block_id' => 54,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'After detecting errors, we start the process of model correction and searching for an optimal solution.',
                'service_block_id' => 54,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/mep-bim-coordination-block-6-icon4_54.png',
                'service_block_id' => 54,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_4',
                'value' => 'Creating clash report',
                'service_block_id' => 54,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Prepare a progress report for project approval and delivery.',
                'service_block_id' => 54,
                'type_id' => 1,
            ],






            [
                'name' => 'block_header',
                'value' => 'Benefits of BIM Coordination',
                'service_block_id' => 55,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Autodesk Revit and Navisworks are the main tools. We use them to assist AEC professionals in all phases of design and construction. Our goal is to save you time and resources.</p>&nbsp;<ul><li><span style="white-space: pre-wrap;">Detect design errors before the construction process begins.</span></li><li><span style="white-space: pre-wrap;">We provide daily or weekly reports. This will improve teamwork among all stakeholders.</span></li><li><span style="white-space: pre-wrap;">Minimize errors, resulting in resource savings.</span></li></ul>&nbsp;<p>We work with general contractors, owners, the entire project subcontractor team, architects and engineers. Our coordinators will help to coordinate your activities and get you to the desired result.</p>',
                'service_block_id' => 55,
                'type_id' => 4,
            ],





            [
                'name' => 'block_header',
                'value' => 'OUR MEP PROJECTS',
                'service_block_id' => 56,
                'type_id' => 1,
            ],
            [
                'name' => 'project_url_1',
                'value' => 'http://localhost/portfolio/reston-gateway-block-c-hotel',
                'service_block_id' => 56,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_2',
                'value' => 'http://localhost/portfolio/the-stacks-part-b',
                'service_block_id' => 56,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_3',
                'value' => 'http://localhost/portfolio/balfour-at-palisades',
                'service_block_id' => 56,
                'type_id' => 3,
            ],
            [
                'name' => 'button_url',
                'value' => 'http://localhost/contact',
                'service_block_id' => 56,
                'type_id' => 3,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 56,
                'type_id' => 1,
            ],
            [
                'name' => 'text',
                'value' => 'Any questions? We\'re here to help. Leave your question and we\'ll get back to you.',
                'service_block_id' => 56,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 57,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-coordination-block-9-icon1_57.png',
                'service_block_id' => 57,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 57,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 57,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-coordination-block-9-icon2_57.png',
                'service_block_id' => 57,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 57,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 57,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-coordination-block-9-icon3_57.png',
                'service_block_id' => 57,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 57,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 57,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 58,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/mep-bim-coordination-block-10-icon1_58.png',
                'service_block_id' => 58,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 59,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 59,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 59,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/mep-bim-coordination-block-11-icon1_59.png',
                'service_block_id' => 59,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/mep-bim-fabrication-background_60.webp',
                'service_block_id' => 60,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'MEP BIM FABRICATION SERVICES',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'MEP Fabrication experts in creating detailed Shop Drawings and models for your project. Over 80+ accomplished projects. Daily reports. Large team.',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/mep-estimates-project',
                'service_block_id' => 60,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'Clash Detection',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/mep-bim-fabrication-icon1_60.png',
                'service_block_id' => 60,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'COORDINATION',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/mep-bim-fabrication-icon2_60.png',
                'service_block_id' => 60,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'Design optimization',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/mep-bim-fabrication-icon3_60.png',
                'service_block_id' => 60,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'Clash Report Generation',
                'service_block_id' => 60,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/mep-bim-fabrication-icon4_60.png',
                'service_block_id' => 60,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 60,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 60,
                'type_id' => 6,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'MEP Services',
                'service_block_id' => 61,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => 'MEP BIM Fabrication Service',
                'service_block_id' => 61,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 61,
                'type_id' => 5,
            ],




            [
                'name' => 'block_header',
                'value' => 'Sub-contractoring services for fabrication',
                'service_block_id' => 62,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p><strong>Manufacturing MEP</strong> parts is a very important process. Mistakes in this business are very costly. One of crucial steps is drawings creation from which the MEP systems are manufactured.</p>&nbsp;<p>Improper creation of these drawings leads to many problems. <strong>Timelines are violated, additional costs are incurred, etc.</strong> To avoid this, everything must be done correctly, in a coordinated, error-free manner. Modern tools can help you avoid all these problems. But, of course, the experience of the team is also important, without which unfortunate mistakes can be made.</p>&nbsp;<p>With state-of-the-art tools and skilled employees, <strong>BIMPROVE</strong> can help you create drawings and 3D models of your engineering systems without overlays, ready for installation and suitable for production.</p>',
                'service_block_id' => 62,
                'type_id' => 4,
            ],






            [
                'name' => 'block_header',
                'value' => 'BIM Fabrication Services',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '',
                'service_block_id' => 63,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'MEP families creation',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon1_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'Accurate BIM Drafting Services',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon2_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'Fabrication shop drawings',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon3_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => 'BIM fabrication integration',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon4_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => 'MEP CAD DRAWINGS',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon5_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => 'Fabrication productivity',
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-4-icon6_63.png',
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 63,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SOFTWARE SKILLS',
                'service_block_id' => 64,
                'type_id' => 1,
            ],


            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_1_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Advance Steel',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_2_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Autodesk AutoCAD',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_3_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Autodesk Navisworks',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_4_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Graphisoft Archicad',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_5_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Lumion',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_6_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Revit RECAP',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_7_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'Rhinoceros',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_8_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'Robot structural analysis',
                'service_block_id' => 64,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/mep-bim-fabrication-block-5-icon_9_64.png',
                'service_block_id' => 64,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'SketchUp',
                'service_block_id' => 64,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'Our expertise in BIM fabrication',
                'service_block_id' => 65,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p><strong>BIMPROVE</strong> offers expert <strong>BIM Fabrication</strong> and prefabrication services tailored to different construction sectors. Our prefabrication services yield substantial benefits by boosting and optimizing productivity, reducing project timelines, and enhancing overall profitability.</p>&nbsp;<p>Using CAMduct or SysQue software our team is capable of implementing the Fabrication of MEP systems according to technical information provided by the customer. HVAC and Fire Protection are our main directions in this field.</p>&nbsp;<p><strong>When you work with our outsourced team of MEP specialists you get the added benefits of:</strong></p>&nbsp;<ul><li><span style="white-space: pre-wrap;">Cost and time saving by minimizing project errors;</span></li><li><span style="white-space: pre-wrap;">Freeing your employees from routine tasks;</span></li><li><span style="white-space: pre-wrap;">You will get experienced specialists in all disciplines;</span></li></ul>',
                'service_block_id' => 65,
                'type_id' => 4,
            ],






            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 66,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/mep-bim-fabrication-block-7-icon1_66.png',
                'service_block_id' => 66,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Every project starts with adjusting its own database. At this first stage we take into account all data provided by customers concerning materials, connections, insulation and services types of ducts and pipes to model HVAC components in the most authentic way.',
                'service_block_id' => 66,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/mep-bim-fabrication-block-7-icon2_66.png',
                'service_block_id' => 66,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Using submittals information we download all necessary families from official manufacturer websites or create these families ourselves if they aren’t available on the internet. This approach can guarantee 100% model conformity to clients requirements.',
                'service_block_id' => 66,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/mep-bim-fabrication-block-7-icon3_66.png',
                'service_block_id' => 66,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.',
                'service_block_id' => 66,
                'type_id' => 1,
            ],

            [
                'name' => 'contact_us_text',
                'value' => 'Utilize the services of one skilled professional to strengthen your team or order an entire project made by a group of specialists.',
                'service_block_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 66,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 66,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 66,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 66,
                'type_id' => 6,
            ],




            [
                'name' => 'block_header',
                'value' => 'Benefits of BIM Fabrication',
                'service_block_id' => 67,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our goal is to save you time and resources.</p>&nbsp;<ul><li><span style="white-space: pre-wrap;">Detect design errors before the construction process begins.</span></li><li><span style="white-space: pre-wrap;">We provide daily or weekly reports. This will improve teamwork among all stakeholders.</span></li><li><span style="white-space: pre-wrap;">Minimize errors, resulting in resource savings.</span></li></ul>&nbsp;<p>We work with general contractors, owners, the entire project subcontractor team, architects and engineers. Our coordinators will help to coordinate your activities and get you to the desired result.</p>',
                'service_block_id' => 67,
                'type_id' => 4,
            ],





            [
                'name' => 'block_header',
                'value' => 'OUR MEP PROJECTS',
                'service_block_id' => 68,
                'type_id' => 1,
            ],
            [
                'name' => 'project_url_1',
                'value' => 'http://localhost/portfolio/reston-gateway-block-c-hotel',
                'service_block_id' => 68,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_2',
                'value' => 'http://localhost/portfolio/the-stacks-part-b',
                'service_block_id' => 68,
                'type_id' => 3,
            ],
            [
                'name' => 'project_url_3',
                'value' => 'http://localhost/portfolio/balfour-at-palisades',
                'service_block_id' => 68,
                'type_id' => 3,
            ],
            [
                'name' => 'button_url',
                'value' => 'http://localhost/contact',
                'service_block_id' => 68,
                'type_id' => 3,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 68,
                'type_id' => 1,
            ],
            [
                'name' => 'text',
                'value' => 'Any questions? We\'re here to help. Leave your question and we\'ll get back to you.',
                'service_block_id' => 68,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'WHAT IS THE MEP FABRICATION SERVICE?',
                'service_block_id' => 69,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>MEP fabrication is the process of creating detailed shop drawings and models for mechanical, electrical, and plumbing systems in construction. It ensures precise installation and coordination of MEP components, improving efficiency and quality.</p>&nbsp;<p>During MEP fabrication, the design and engineering data from the building\'s MEP design are translated into highly accurate fabrication-level models and drawings. These models and drawings contain specific details, dimensions, and installation information needed for manufacturing the components and installing the MEP systems on-site.</p>',
                'service_block_id' => 69,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 70,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-11-icon1_70.png',
                'service_block_id' => 70,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 70,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-11-icon2_70.png',
                'service_block_id' => 70,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 70,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-fabrication-block-11-icon3_70.png',
                'service_block_id' => 70,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 70,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 70,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 71,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/mep-bim-fabrication-block-12-icon1_71.png',
                'service_block_id' => 71,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 72,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 72,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 72,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 72,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 72,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/mep-bim-fabrication-block-13-icon1_72.png',
                'service_block_id' => 72,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/steelwork-design-background-73.webp',
                'service_block_id' => 73,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'Steelwork Design Services',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'Production of high-quality drawings for steel structures, ensuring all customer requirements are met within the specified time frame.',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'Contact us',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 73,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 73,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 73,
                'type_id' => 6,
            ],
            [
                'name' => 'item_header_1',
                'value' => 'Detailed Design Drawings',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_1',
                'value' => 'service_block/steelwork-design-icon1_73.png',
                'service_block_id' => 73,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_2',
                'value' => '3D Drafting, modelling & BIM',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_2',
                'value' => 'service_block/steelwork-design-icon2_73.png',
                'service_block_id' => 73,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_3',
                'value' => 'Steel Design and Detailing',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_3',
                'value' => 'service_block/steelwork-design-icon3_73.png',
                'service_block_id' => 73,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_4',
                'value' => 'TELECOM DESIGN',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_4',
                'value' => 'service_block/steelwork-design-icon4_73.png',
                'service_block_id' => 73,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_5',
                'value' => 'Steel Connection Design',
                'service_block_id' => 73,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_5',
                'value' => 'service_block/steelwork-design-icon5_73.png',
                'service_block_id' => 73,
                'type_id' => 2,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'Steelwork Design Services',
                'service_block_id' => 74,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => null,
                'service_block_id' => 74,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 74,
                'type_id' => 5,
            ],




            [
                'name' => 'block_header',
                'value' => 'OUR DesigN Services',
                'service_block_id' => 75,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>With our help, steel structural projects can progress from concept to completion, producing a robust and cost-effective structure that meets the client\'s needs and complies with the regulations for steel structures in the UK, Europe and the USA.</p>&nbsp;<p>BIMPROVE\'s steel structural engineers, can work with design teams, architects and building contractors to provide the most appropriate steel design solution.</p>&nbsp;<p>Whether you need detailed drawings for a brand new structure, or you want to reinforce or modify an existing structure, BIMPROVE can help.</p>',
                'service_block_id' => 75,
                'type_id' => 4,
            ],





            [
                'name' => 'item_header_1',
                'value' => 'Steel Structure Design Solutions',
                'service_block_id' => 76,
                'type_id' => 1,
            ],
            [
                'name' => 'item_paragraph_1',
                'value' => '<p>Our company specializes in preparing comprehensive drawings for steel structures, from the pre-construction to construction stages. With advanced design techniques, we create precise blueprint designs, construction drawings, and detailed drawings customized to meet client requirements. Our expertise spans across various steel structures, including those for the telecom sector.</p><p><strong>Key areas of focus:</strong></p><ul><li><span style="white-space: pre-wrap;">Any type of new structures.</span></li><li><span style="white-space: pre-wrap;">Reinforcement of existing structures of any complexity.</span></li><li><span style="white-space: pre-wrap;">Structures that are located in hard-to-reach places.</span></li></ul>',
                'service_block_id' => 76,
                'type_id' => 4,
            ],

            [
                'name' => 'item_header_2',
                'value' => '3D modeling of existing situation',
                'service_block_id' => 76,
                'type_id' => 1,
            ],
            [
                'name' => 'item_paragraph_2',
                'value' => '<p>This approach provides an accurate and detailed representation of the current structure, ensuring precise measurements and improved visualization. It enhances communication among stakeholders and helps identify potential issues early, saving time and costs. Additionally, our 3D models allow for simulation and testing, ensuring the reinforcement design is both effective and reliable.</p>',
                'service_block_id' => 76,
                'type_id' => 4,
            ],

            [
                'name' => 'item_header_3',
                'value' => 'Telecom Drafting Services',
                'service_block_id' => 76,
                'type_id' => 1,
            ],
            [
                'name' => 'item_paragraph_3',
                'value' => '<p>Our team specializes in providing end-to-end construction documentation solutions for the telecom sector. We offer a versatile range of services covering three key phases:</p><ul><li><span style="white-space: pre-wrap;">Leasy sketches/Planning drawings.</span></li><li><span style="white-space: pre-wrap;">Detailed design drawings.</span></li><li><span style="white-space: pre-wrap;">As-Built documentation.</span></li></ul>',
                'service_block_id' => 76,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'Benefits of working with us',
                'service_block_id' => 77,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our team works with different types of structures. If necessary, we create or adapt templates for the client, and in the final stage we provide source files with project drawings. We strive for long-term cooperation, monitor quality and adhere to deadlines.</p>&nbsp;<p><strong>Avoid inaccuracies and misunderstandings, we provide 3D model for confirmation at the first stages.</strong></p>&nbsp;<p>You will spend less time on future modifications, thanks to automation and preliminary assessment before the start of cooperation.</p>',
                'service_block_id' => 77,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'Our close collaboration with you results in maximizing the outcome of your project. The experience of the team is matched to achieving the success of your steel design project.',
                'service_block_id' => 77,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 77,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 77,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 77,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 77,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SOFTWARE SKILLS',
                'service_block_id' => 78,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We use specialized analytical and simulation software. Our experts work on your project to ensure cost-effective solutions that do not compromise on quality or safety standards.</p>',
                'service_block_id' => 78,
                'type_id' => 4,
            ],


            [
                'name' => 'item_image_1',
                'value' => 'service_block/steelwork-design-6-icon_1_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Advance Steel',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/steelwork-design-6-icon_2_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Autodesk AutoCAD',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/steelwork-design-6-icon_3_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Autodesk Navisworks',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/steelwork-design-6-icon_4_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Graphisoft Archicad',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/steelwork-design-6-icon_5_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Lumion',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/steelwork-design-6-icon_6_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Revit RECAP',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/steelwork-design-6-icon_7_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'Rhinoceros',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/steelwork-design-6-icon_8_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'Robot structural analysis',
                'service_block_id' => 78,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/steelwork-design-6-icon_9_78.png',
                'service_block_id' => 78,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'SketchUp',
                'service_block_id' => 78,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR PROJECTS',
                'service_block_id' => 79,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_project_url',
                'value' => 'http://localhost/portfolio/steel-structures-with-equipment',
                'service_block_id' => 79,
                'type_id' => 3,
            ],
            [
                'name' => 'the_second_project_url',
                'value' => 'http://localhost/portfolio/steel-tower-with-equipment-supports',
                'service_block_id' => 79,
                'type_id' => 3,
            ],
            [
                'name' => 'the_third_project_url',
                'value' => null,
                'service_block_id' => 79,
                'type_id' => 3,
            ],
            [
                'name' => 'the_fourth_project_url',
                'value' => null,
                'service_block_id' => 79,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_url',
                'value' => 'http://localhost/portfolio',
                'service_block_id' => 79,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_text',
                'value' => 'CHECK ALL PROJECT',
                'service_block_id' => 79,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'What are the steelwork design services?',
                'service_block_id' => 80,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our world is evolving and the construction industry is not standing still with it. New buildings with different designs and shapes are constantly being constructed. But the only thing that has not changed is the metal structure that holds all buildings together.</p>&nbsp;<p>Steel construction is a key part of structures, with frames and piping made from this material being incorporated into all sorts of domestic, commercial and industrial structures.</p>&nbsp;<p>Our team works with different types of structures. If necessary, we create or adapt templates for the client, and in the final stage we provide source files with project drawings. We strive for long-term cooperation, monitor quality and adhere to deadlines.</p>',
                'service_block_id' => 80,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'Our close collaboration with you maximizes the successful outcome of your steel design project.',
                'service_block_id' => 80,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 80,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 80,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 80,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 80,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 81,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon1_81.png',
                'service_block_id' => 81,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 81,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 81,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon2_81.png',
                'service_block_id' => 81,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 81,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 81,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon3_81.png',
                'service_block_id' => 81,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 81,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 81,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 82,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/steelwork-design-block-10-icon1_82.png',
                'service_block_id' => 82,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 83,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 83,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 83,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 83,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 83,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/steelwork-design-block-11-icon1_83.png',
                'service_block_id' => 83,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/bim-content-creation-background-84.webp',
                'service_block_id' => 84,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'BIM CONTENT CREATION SERVICES',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'We save you time. We create Revit/BIM families for your needs of any complexity. A team of 10 people.',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 84,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'DETAILED REVIT FAMILY PRODUCTION',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/bim-content-creation-icon1_84.png',
                'service_block_id' => 84,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'CORRECT SCHEDULES',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/bim-content-creation-icon2_84.png',
                'service_block_id' => 84,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'DIGITAL TWINS',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/bim-content-creation-icon3_84.png',
                'service_block_id' => 84,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'Realistic VISUALISATIONS',
                'service_block_id' => 84,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/bim-content-creation-icon4_84.png',
                'service_block_id' => 84,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 84,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 84,
                'type_id' => 6,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'BIM Content Creation Services',
                'service_block_id' => 85,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => null,
                'service_block_id' => 85,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => '#ecebeb',
                'service_block_id' => 85,
                'type_id' => 5,
            ],




            [
                'name' => 'block_header',
                'value' => null,
                'service_block_id' => 86,
                'type_id' => 1,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/bim-content-creation-image_86.png',
                'service_block_id' => 86,
                'type_id' => 2,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>BIM Content Creation department specializes in developing top-quality Revit families. Our team is dedicated to creating families that are not only visually stunning but also highly functional and optimized for maximum efficiency. We are proud of our commitment to delivering products of the highest quality, with beautiful geometry and unique functionality that truly stands out.</p>&nbsp;<p>Our families are designed to be both easy to use and optimized for fast and reliable operation, allowing you to focus on your project and not worry about technical issues. We also understand that every project is unique, which is why we offer a high degree of flexibility in our services.</p>',
                'service_block_id' => 86,
                'type_id' => 4,
            ],
            [
                'name' => 'background_color',
                'value' => '#ecebeb',
                'service_block_id' => 86,
                'type_id' => 5,
            ],







            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 87,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => null,
                'service_block_id' => 87,
                'type_id' => 4,
            ],


            [
                'name' => 'image',
                'value' => 'service_block/bim-content-creation-block-4-image_87.png',
                'service_block_id' => 87,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => '<p><strong>Exceptional quality: </strong>Our BIM Content Creation department is committed to creating the highest-quality Revit families for our clients.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_2',
                'value' => '<p><strong>Tailored solutions: </strong>We understand that every project is unique, which is why we offer a high degree of flexibility in our services to provide customized solutions that meet your specific needs.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_3',
                'value' => '<p><strong>Expert team: </strong>Our team of highly qualified BIM specialists is dedicated to delivering outstanding results for our clients.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_4',
                'value' => '<p><strong>Streamlined processes: </strong>Our families are designed to be easy to use, with optimized operation that allows you to focus on your project without technical roadblocks.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_5',
                'value' => '<p><strong>Transparent cost estimates: </strong>We provide detailed cost estimates for each project based on your specific requirements.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_6',
                'value' => '<p><strong>Detailed project plan: </strong>We provide a detailed work plan and projected deadlines for each project, ensuring that you’re always up-to date on our progress.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_7',
                'value' => '<p><strong>BIM expertise: </strong>Our team has a strong understanding of BIM standards and how to apply them to projects, ensuring that our families meet industry standards.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_8',
                'value' => '<p><strong>Quality assurance: </strong>We pay a lot of attention to detail and focus on quality control to ensure that the final product meets or exceeds your expectations.</p>',
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_9',
                'value' => null,
                'service_block_id' => 87,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_10',
                'value' => null,
                'service_block_id' => 87,
                'type_id' => 4,
            ],

            [
                'name' => 'contact_us_text',
                'value' => 'Our close collaboration with you results in maximizing the outcome of your project. The experience of the team is matched to achieving the success of your steel design project.',
                'service_block_id' => 87,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 87,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 87,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 87,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 87,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT DO WE PROPOSE?',
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We provide BIM CONTENT CREATION services for disciplines such as Architecture, Structure, MER engineering systems. And also for contractors, building product manufacturers, furniture designers, electrical equipment designers, etc.</p>',
                'service_block_id' => 88,
                'type_id' => 4,
            ],

            [
                'name' => 'item_header_1',
                'value' => 'ARCHITECTURAL BIM CONTENT',
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_1',
                'value' => 'service_block/bim-content-creation-block-5-image1_88.png',
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_2',
                'value' => 'Structural BIM CONTENT',
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_2',
                'value' => 'service_block/bim-content-creation-block-5-image2_88.png',
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_3',
                'value' => 'ANY SPECIAL BIM CONTENT',
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_3',
                'value' => 'service_block/bim-content-creation-block-5-image3_88.png',
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_4',
                'value' => 'MEP (Mechanical, Electrical, Plumbing) BIM CONTENT',
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_4',
                'value' => 'service_block/bim-content-creation-block-5-image4_88.png',
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_5',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_5',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_6',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_6',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => null,
                'service_block_id' => 88,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SCAN TO BIM PROJECTS',
                'service_block_id' => 89,
                'type_id' => 1,
            ],
            [
                'name' => 'family_title_1',
                'value' => 'Furniture Audience Seatings',
                'service_block_id' => 89,
                'type_id' => 1,
            ],
            [
                'name' => 'family_title_2',
                'value' => 'Furniture Meeting Room',
                'service_block_id' => 89,
                'type_id' => 1,
            ],
            [
                'name' => 'family_title_3',
                'value' => 'Doors Sliding Outswing',
                'service_block_id' => 89,
                'type_id' => 1,
            ],




            [
                'name' => 'button_url',
                'value' => '/products/families',
                'service_block_id' => 89,
                'type_id' => 3,
            ],
            [
                'name' => 'button_text',
                'value' => 'VIEW ALL',
                'service_block_id' => 89,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/bim-content-creation-block-9-icon1_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Consultation',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/bim-content-creation-block-9-icon2_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Estimation of the project',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/bim-content-creation-block-9-icon3_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Project setup',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/bim-content-creation-block-9-icon4_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Estimation approval',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/bim-content-creation-block-9-icon5_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Workflow',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/bim-content-creation-block-9-icon6_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'Presentation to the customer',
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/bim-content-creation-block-9-icon7_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => null,
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/bim-content-creation-block-9-icon8_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => null,
                'service_block_id' => 90,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/bim-content-creation-block-9-icon9_90.png',
                'service_block_id' => 90,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => null,
                'service_block_id' => 90,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT IS THE BIM CONTENT CREATION SERVICE?',
                'service_block_id' => 91,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>BIM technology is an indispensable part of the modern world. The AEC industry is developing, and it is impossible to imagine projects without 3D models. However, an efficient and high-quality result can be achieved only with accurate model content. Information is the cornerstone that is valued in BIM. The families created in Revit fill the 3D model with information and make it as efficient and accurate as possible.</p>&nbsp;<p>Our team handles every project with years of experience, a solid strategy, and a personalized approach.</p>',
                'service_block_id' => 91,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'Our close collaboration with you will ensure the most successful outcome of your project in Content Creation in Revit.',
                'service_block_id' => 91,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 91,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 91,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 91,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 91,
                'type_id' => 6,
            ],






            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 92,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/bim-content-creation-benefits-1-92.png',
                'service_block_id' => 92,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 92,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 92,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/bim-content-creation-benefits-2-92.png',
                'service_block_id' => 92,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 92,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 92,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/bim-content-creation-benefits-3-92.png',
                'service_block_id' => 92,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 92,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 92,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 93,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/bim-content-creation-map-92.png',
                'service_block_id' => 93,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 94,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 94,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 94,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 94,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 94,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/bim-content-creation-contact-94.png',
                'service_block_id' => 94,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/software-development-background-95.webp',
                'service_block_id' => 95,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'SOFTWARE DEVELOPMENT SERVICES',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'Specialists in the development of Revit API, Dynamo, Python/C# Add-In. Optimize the design process for business. Cost savings of up to 60%',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'BOOK A MEETING',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 95,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'PYTHON/C#/DYNAMO/SCRIPTING',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/software-development-1-icon1_95.png',
                'service_block_id' => 95,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'DESIGN',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/software-development-1-icon2_95.png',
                'service_block_id' => 95,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'wide API CONNECTIONS',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/software-development-1-icon3_95.png',
                'service_block_id' => 95,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'BUISINESS AUTOMATIONS',
                'service_block_id' => 95,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/software-development-1-icon4_95.png',
                'service_block_id' => 95,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 95,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 95,
                'type_id' => 6,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'Software Development Services',
                'service_block_id' => 96,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => null,
                'service_block_id' => 96,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 96,
                'type_id' => 5,
            ],







            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 97,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => null,
                'service_block_id' => 97,
                'type_id' => 4,
            ],


            [
                'name' => 'image',
                'value' => 'service_block/software-development-3-image_97.png',
                'service_block_id' => 97,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => '<p><strong>Provide support to quickly solve urgent problems.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_2',
                'value' => '<p><strong>Provide detailed planning and drawing schemas to control each step of collaboration.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_3',
                'value' => '<p><strong>Help to optimize business processes.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_4',
                'value' => '<p><strong>Flexible and adaptable approach to meet the unique needs of each project and client.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_5',
                'value' => '<p><strong>Capable of organizing any API connections.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_6',
                'value' => '<p><strong>Strong understanding of BIM standards and how to apply them to projects.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_7',
                'value' => '<p><strong>Team of engineers with deep understanding of the design process.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_8',
                'value' => '<p><strong>Strong attention to detail and focus on quality control to ensure the final product meets or exceeds client expectations.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_9',
                'value' => '<p><strong>Strong ability to communicate and work closely with clients to ensure final result meets their needs.</strong></p>',
                'service_block_id' => 97,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_10',
                'value' => null,
                'service_block_id' => 97,
                'type_id' => 4,
            ],

            [
                'name' => 'button_text',
                'value' => 'DOWNLOAD  PRESENTATION',
                'service_block_id' => 97,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/download-service/software-development',
                'service_block_id' => 97,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#6bdcdb',
                'service_block_id' => 97,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 97,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT DO WE PROPOSE?',
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 4,
            ],

            [
                'name' => 'item_header_1',
                'value' => 'C#/PYTHON ADD-IN DEVELOPMENT',
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_1',
                'value' => 'service_block/software-development-4-image1_98.png',
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Developing custom Add-Ins for Revit to improve efficiency and add new functionality.',
                'service_block_id' => 98,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_2',
                'value' => 'DYNAMO SCRIPTING',
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_2',
                'value' => 'service_block/software-development-4-image2_98.png',
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Creating interactive visual programming interface to automate tasks, access and modify data, and create graphical representations of the model.',
                'service_block_id' => 98,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_3',
                'value' => 'WIDE API CONNECTIONS',
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_3',
                'value' => 'service_block/software-development-4-image3_98.png',
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Integrating Revit with other software and systems.',
                'service_block_id' => 98,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_4',
                'value' => 'SUPPORT AND MAINTENANCE',
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_4',
                'value' => 'service_block/software-development-4-image4_98.png',
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Providing ongoing support and maintenance for developed tools and scripts.',
                'service_block_id' => 98,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_5',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_5',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 1,
            ],

            [
                'name' => 'item_header_6',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_6',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => null,
                'service_block_id' => 98,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'CLIENT SERVICE',
                'service_block_id' => 99,
                'type_id' => 1,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/software-development-image-99.png',
                'service_block_id' => 99,
                'type_id' => 2,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<h3>Support</h3><p>Always by your side, our 24/7 support ensures your journey is smooth and hassle-free, offering expert assistance whenever you need it.</p><h3>Communication</h3><p>Transparent and timely, our communication keeps you in the loop, fostering a strong partnership and deep understanding.</p><h3>Reporting</h3><p>Uncover insights effortlessly with our tailored reports, empowering you to make informed decisions and track your progress.</p><h3>Flexibility</h3><p>Adapting to your evolving needs, we offer customizable solutions that align with your unique requirements.</p><h3>Visualization</h3><p>See the big picture with our intuitive visualizations, turning complex data into actionable insights for confident decision-making.</p>',
                'service_block_id' => 99,
                'type_id' => 4,
            ],
            [
                'name' => 'background_color',
                'value' => '#ecebeb',
                'service_block_id' => 99,
                'type_id' => 5,
            ],







            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/software-development-6-icon1_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Communication',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/software-development-6-icon2_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Researching task',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/software-development-6-icon3_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Documentation development',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/software-development-6-icon4_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Estimation',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/software-development-6-icon5_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'Client User Interface approval',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/software-development-6-icon6_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'UI development',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_7',
                'value' => 'service_block/software-development-6-icon7_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_7',
                'value' => 'BackEnd development',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_8',
                'value' => 'service_block/software-development-6-icon8_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_8',
                'value' => 'QA/QC',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_9',
                'value' => 'service_block/software-development-6-icon9_100.png',
                'service_block_id' => 100,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_9',
                'value' => 'Release & Technical Support',
                'service_block_id' => 100,
                'type_id' => 1,
            ],

            [
                'name' => 'button_text',
                'value' => 'BOOK A MEETING',
                'service_block_id' => 100,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 100,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 100,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 100,
                'type_id' => 6,
            ],




            [
                'name' => 'block_header',
                'value' => 'WHAT IS SOFTWARE DEVELOPMENT SERVICE?',
                'service_block_id' => 101,
                'type_id' => 1,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/software-development-7_101.png',
                'service_block_id' => 101,
                'type_id' => 2,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>The development department of BIMprove is a team of experts who have mastered the art of working with Revit API, Dynamo, and Python/C# Add-In development. Our team is dedicated to assisting our clients in streamlining their design processes and business.</p><p>We aimed to provide complete support and guidance, maintaining transparent communication and regular reporting throughout the process. Our techniques ensure that everyone can comprehend the design with clarity, and our flexibility ensures that we can cater unique needs and requirements.</p>',
                'service_block_id' => 101,
                'type_id' => 4,
            ],









            [
                'name' => 'block_header',
                'value' => 'GEOGRAPHY OF OUR SERVICES',
                'service_block_id' => 102,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/software-development-8_102.png',
                'service_block_id' => 102,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 103,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 103,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 103,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 103,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 103,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/software-development-9_103.png',
                'service_block_id' => 103,
                'type_id' => 2,
            ],
        ]);


        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/bim-structural-engineering-background-104.webp',
                'service_block_id' => 104,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'BIM Structural Engineering Services',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'Tailored Structural Design Services: Leverage Our Expertise And Comprehensive Solutions For Your Project\'s Success',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'Contact us',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 104,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 104,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 104,
                'type_id' => 6,
            ],
            [
                'name' => 'item_header_1',
                'value' => 'Design of Reinforced Concrete Structures',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_1',
                'value' => 'service_block/Design of Reinforced Concrete Structures.png',
                'service_block_id' => 104,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_2',
                'value' => 'Design of Metal Structures',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_2',
                'value' => 'service_block/Design of Metal Structures.png',
                'service_block_id' => 104,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_3',
                'value' => 'Creation and Evaluation of Project Options',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_3',
                'value' => 'service_block/Creation and Evaluation of Project Options.png',
                'service_block_id' => 104,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_4',
                'value' => 'Reconstruction',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_4',
                'value' => 'service_block/Reconstruction.png',
                'service_block_id' => 104,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_5',
                'value' => 'Interdisciplinary Coordination for Comprehensive Design Alignment',
                'service_block_id' => 104,
                'type_id' => 1,
            ],
            [
                'name' => 'item_image_5',
                'value' => 'service_block/Interdisciplinary Coordination for Comprehensive Design Alignment.png',
                'service_block_id' => 104,
                'type_id' => 2,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'BIM Structural Engineering Services',
                'service_block_id' => 105,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => null,
                'service_block_id' => 105,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 105,
                'type_id' => 5,
            ],




            [
                'name' => 'block_header',
                'value' => 'Sub-contracting services for Structural Engineering',
                'service_block_id' => 106,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Our team offers comprehensive <b class="fw-bold">Design solutions for building structures,</b> with a primary focus on <b class="fw-bold">reinforced concrete design.</b> We meet the needs of a wide range of clients, including contractors, developers, architects, and structural engineers.</p>&nbsp;<p>As experts in building structure design, we possess the technical expertise and sufficient resources to solve complex design challenges. For many years, we have been delivering high-quality services, adhering to international industry standards and the specific requirements of our clients.</p>',
                'service_block_id' => 106,
                'type_id' => 4,
            ],






            [
                'name' => 'block_header',
                'value' => 'BIM Structural Engineering Services',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'BIM Modeling and Coordination',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/BIM Modeling and Coordination.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => 'We integrate new structural designs with all project disciplines, ensuring alignment with existing decisions for seamless project execution.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'Design for Seismically Active Zones',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/Design for Seismically Active Zones.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => 'We provide expert structural design for seismic areas, applying the necessary solutions to ensure safety and compliance.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'Design Based on Client Sketches',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/Design Based on Client Sketches.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => 'We develop detailed construction drawings from client or representative sketches, incorporating their vision and creating ready-to-manufacture solutions.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => 'Structural Analysis and Optimization',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/Structural Analysis and Optimization.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => 'We optimize structural designs to align with client needs, ensuring safety, reliability, and cost-effective solutions.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => 'Reinforcement of Existing Structures',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/Reinforcement and Upgrading of Existing Structures.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => 'We optimize structural designs to align with client needs, ensuring safety, reliability, and cost-effective solutions.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => 'Multiple Structural Solutions',
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/Multiple Structural Solutions.png',
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => 'We provide clients with various design options for the same project, offering alternatives in concrete, steel, or hybrid structures to meet their needs.',
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 107,
                'type_id' => 1,
            ],







            [
                'name' => 'block_header',
                'value' => 'Our Design Experience',
                'service_block_id' => 108,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>With over 11 years of experience, we have completed more than 1,000 projects, most of which have been built and are in successful operation.</p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],


            [
                'name' => 'image',
                'value' => 'service_block/software-development-3-image_97.png',
                'service_block_id' => 108,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => '<p><strong>Industrial Framed Buildings and Facilities</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_2',
                'value' => '<p><strong>Tunnels</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_3',
                'value' => '<p><strong>Transportation Structures</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_4',
                'value' => '<p><strong>Multi-Level Pits</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_5',
                'value' => '<p><strong>Silos</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_6',
                'value' => '<p><strong>Retaining Walls</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_7',
                'value' => '<p><strong>Rotary Kilns</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_8',
                'value' => '<p><strong>Precast Structures</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_9',
                'value' => '<p><strong>Storage Tanks for Water and Other Liquids</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_10',
                'value' => '<p><strong>Steel Platforms</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_11',
                'value' => '<p><strong>Railcar Dumpers</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_12',
                'value' => '<p><strong>Steel Staircases</strong></p>',
                'service_block_id' => 108,
                'type_id' => 4,
            ],


            [
                'name' => 'contact_us_header',
                'value' => 'Your Partner in Every New Project',
                'service_block_id' => 108,
                'type_id' => 1,
            ],
            [
                'name' => 'contact_us_paragraph',
                'value' => 'We are ready for your next project and strive to become your trusted partner for years to come!',
                'service_block_id' => 108,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 108,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 108,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 108,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 108,
                'type_id' => 6,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR SOFTWARE SKILLS',
                'service_block_id' => 109,
                'type_id' => 1,
            ],


            [
                'name' => 'item_image_1',
                'value' => 'service_block/Autodesk Revit.png',
                'service_block_id' => 109,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'Autodesk Revit',
                'service_block_id' => 109,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/Autodesk AutoCAD.png',
                'service_block_id' => 109,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'Autodesk AutoCAD',
                'service_block_id' => 109,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/Scad office.png',
                'service_block_id' => 109,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'Scad office',
                'service_block_id' => 109,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/Autodesk Navisworks.png',
                'service_block_id' => 109,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'Autodesk Navisworks',
                'service_block_id' => 109,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>We provide comprehensive BIM services for the design of building structures, offering optimization to reduce costs and timelines, as well as seamless integration with other engineering disciplines. Our team supports you through every phase of the project—from concept to operation—strictly adhering to international standards.</p>&nbsp;<p>Our engineers and BIM specialists have extensive knowledge and experience in international projects. We deliver high-quality and innovative solutions, maintaining a high level of professionalism to efficiently handle tasks of any complexity.</p>&nbsp;<p>We focus on the individual requirements of each client, ensuring flexibility and quick adaptation to changes. By utilizing advanced technologies and precise 3D models, we help you make informed decisions, driving the success of your projects.</p>',
                'service_block_id' => 109,
                'type_id' => 4,
            ],






            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'paragraph',
                'value' => null,
                'service_block_id' => 110,
                'type_id' => 4,
            ],

            [
                'name' => 'item_image_1',
                'value' => 'service_block/digit-1.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_1',
                'value' => 'Data Collection',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_1',
                'value' => 'We gather and analyze all the necessary initial data to fully understand your project requirements.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_2',
                'value' => 'service_block/digit-2.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_2',
                'value' => 'Team Formation and Planning',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_2',
                'value' => 'We assemble a team of our specialists and create a detailed work schedule to ensure project success.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_3',
                'value' => 'service_block/digit-3.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_3',
                'value' => 'Proposal Development',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_3',
                'value' => 'We identify potential challenges and provide solutions to improve project efficiency and optimization.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_4',
                'value' => 'service_block/digit-4.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_4',
                'value' => 'Client Coordination',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_4',
                'value' => 'We coordinate the schedule and conceptual solutions with you to ensure compliance with all requirements.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_5',
                'value' => 'service_block/digit-5.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_5',
                'value' => 'Project Delivery and Feedback',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_5',
                'value' => 'We submit the project for your review and gather your comments and suggestions for further adjustments.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],

            [
                'name' => 'item_image_6',
                'value' => 'service_block/digit-6.png',
                'service_block_id' => 110,
                'type_id' => 2,
            ],
            [
                'name' => 'item_header_6',
                'value' => 'Final Project Version',
                'service_block_id' => 110,
                'type_id' => 1,
            ],
            [
                'name' => 'item_text_6',
                'value' => 'We implement the necessary revisions and deliver the final version of the project, fully ready for implementation.',
                'service_block_id' => 110,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'Benefits of Structural Engineering',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'Experienced Team',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Specialists with years of experience in structural design and BIM modeling for international projects</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_2',
                'value' => 'Comprehensive Approach',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_2',
                'value' => '<p>Integration of all engineering disciplines into a single model for optimal results and efficient collaboration.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_3',
                'value' => 'Cost and Time Optimization',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_3',
                'value' => '<p>We develop solutions that help reduce budgets and accelerate project timelines without compromising quality or reliability.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_4',
                'value' => 'Flexibility and Adaptability',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_4',
                'value' => '<p>We quickly respond to project changes, adapting structural solutions to meet new requirements.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_5',
                'value' => 'Accurate 3D Models',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_5',
                'value' => '<p>High-precision BIM models and detailed drawings ensure clarity and reduce the risk of construction errors.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_6',
                'value' => 'Effective Communication ',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_6',
                'value' => '<p>Regular task reports provide transparency and a complete understanding of project progress.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_7',
                'value' => 'Solving Complex Challenges',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_7',
                'value' => '<p>We find solutions for unique and challenging projects, using advanced technologies and engineering approaches.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_8',
                'value' => 'Support at Every Stage',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_8',
                'value' => '<p>We provide full support from concept development to project completion, ensuring quality guidance at every stage.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_9',
                'value' => 'Long-Term Partnership',
                'service_block_id' => 111,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_9',
                'value' => '<p>We strive for long-term collaboration and are ready to support your future projects, contributing to your success.</p>',
                'service_block_id' => 111,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR PROJECTS',
                'service_block_id' => 112,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_project_url',
                'value' => 'http://localhost/portfolio/framed-commercial-building',
                'service_block_id' => 112,
                'type_id' => 3,
            ],
            [
                'name' => 'the_second_project_url',
                'value' => 'http://localhost/portfolio/railcar-dumper',
                'service_block_id' => 112,
                'type_id' => 3,
            ],
            [
                'name' => 'the_third_project_url',
                'value' => 'http://localhost/portfolio/airport-control-tower',
                'service_block_id' => 112,
                'type_id' => 3,
            ],
            [
                'name' => 'the_fourth_project_url',
                'value' => 'http://localhost/portfolio/industrial-framed-building-for-electrical-rooms',
                'service_block_id' => 112,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_url',
                'value' => 'http://localhost/scan-to-bim-estimates-project',
                'service_block_id' => 112,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 112,
                'type_id' => 1,
            ],




            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 113,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon1_81.png',
                'service_block_id' => 113,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 113,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 113,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon2_81.png',
                'service_block_id' => 113,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 113,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 113,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/steelwork-design-block-9-icon3_81.png',
                'service_block_id' => 113,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 113,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 113,
                'type_id' => 4,
            ],




            [
                'name' => 'block_header',
                'value' => 'WHAT IS THE Structural Engineering SERVICE?',
                'service_block_id' => 114,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Structural Engineering Service involves the analysis, design, and planning of building structures to ensure they are safe, durable, and efficient. It includes creating solutions for both new constructions and the reinforcement or upgrading of existing structures. Our service also integrates multiple engineering disciplines, using advanced tools like BIM to optimize costs, improve timelines, and ensure compliance with all safety and regulatory standards. We provide tailored solutions that meet the specific needs of each project, whether it\'s residential, commercial, or industrial.</p>',
                'service_block_id' => 114,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT COUNTRIES HAVE WE WORKED WITH?',
                'service_block_id' => 115,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/bim_structural_engineering_map.png',
                'service_block_id' => 115,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 116,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 116,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 116,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 116,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 116,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/steelwork-design-block-11-icon1_83.png',
                'service_block_id' => 116,
                'type_id' => 2,
            ],
        ]);



        DB::table('service_items')->insert([
            [
                'name' => 'background_image',
                'value' => 'service_block/scan_to_bim_services_in_uk_1.webp',
                'service_block_id' => 117,
                'type_id' => 2,
            ],
            [
                'name' => 'main_header',
                'value' => 'Scan to BIM Services in UK',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'text_under_the_header',
                'value' => 'A complete solution for your project. Scanning, BIM modeling, As-built',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'MAKE AN ENQUIRY',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/scan-to-bim-estimates-project',
                'service_block_id' => 117,
                'type_id' => 3,
            ],
            [
                'name' => 'the_first_sub_service_header',
                'value' => 'Laser scanning',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/scan_to_bim_services_in_uk_header_1.png',
                'service_block_id' => 117,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_sub_service_header',
                'value' => 'Point cloud registration',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/scan_to_bim_services_in_uk_header_2.png',
                'service_block_id' => 117,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_sub_service_header',
                'value' => 'REVIT MODELLING',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/scan_to_bim_services_in_uk_header_3.png',
                'service_block_id' => 117,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_sub_service_header',
                'value' => 'FACILITY MANAGEMENT',
                'service_block_id' => 117,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/scan_to_bim_services_in_uk_header_4.png',
                'service_block_id' => 117,
                'type_id' => 2,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 117,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 117,
                'type_id' => 6,
            ],





            [
                'name' => 'breadcrumb_item_active_1',
                'value' => 'Scan To Bim',
                'service_block_id' => 118,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_item_active_2',
                'value' => 'Scan To Bim Service In UK',
                'service_block_id' => 118,
                'type_id' => 1,
            ],
            [
                'name' => 'breadcrumb_background_color',
                'value' => null,
                'service_block_id' => 118,
                'type_id' => 5,
            ],




            [
                'name' => 'block_header',
                'value' => 'Scan to BIM Advantages',
                'service_block_id' => 119,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>The most expensive and valuable resource is time. This is especially true for business, when projects need to be realized in a short period of time. Therefore, it is very important for us to help you achieve quality results and on time.</p>&nbsp;<p>Our team of laser scanning experts and 3D BIM modelers will help you realize your projects according to the requirements and deadlines.We are ready to join at any stage of your project for laser scanning, registration of scans, work with coordinate systems, noise cleaning, point cloud export, BIM modeling, and 2D drawing. The required detailing (LOD), criteria, fill and support at every stage are all included in a complete solution for Scan to BIM projects.</p>&nbsp;<p>Our raw data processing and point cloud to BIM modeling conversion services cover architectural, structural, building elements, MEPFP elements. We have no problem working with data from different scanners and E57 or RCP formats. We also include collision detection for projects involving renovation, renovation, modernization or reconstruction.</p>',
                'service_block_id' => 119,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'More about our Scan to BIM Services',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>Comprehensive <strong>Scan to BIM services the United Kingdom</strong> includes scanning your objects according to project requirements, raw data processing and further 3D modeling work on the <strong>Point Cloud.</strong></p>',
                'service_block_id' => 120,
                'type_id' => 4,
            ],

            [
                'name' => 'the_first_item_header',
                'value' => 'Photography',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon1_5.png',
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_text',
                'value' => 'Virtual tours and 360° photography providing additional project value for real estate and other business.',
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_second_item_header',
                'value' => 'Laser Scanning',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon2_5.png',
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_text',
                'value' => 'Laser scanning and raw data processing of any objects regardless of type and complexity.',
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_third_item_header',
                'value' => 'BIM modeling',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon3_5.png',
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_text',
                'value' => 'Creation of 3D BIM-models in Revit by converting the data from the Point Cloud. Parameterization of BIM elements.',
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fourth_item_header',
                'value' => 'As-Built drawings',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon4_5.png',
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fourth_item_text',
                'value' => 'Design of As-built drawings based on 3D BIM models from Revit created by the scanning.',
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_fifth_item_header',
                'value' => 'Progress Reports',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon5_5.png',
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_fifth_item_text',
                'value' => 'Creation of daily project reports. Own reporting system to inform about the progress of the modeling process.',
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_sixth_item_header',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_sixth_item_image',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_sixth_item_text',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],

            [
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 2,
            ],
            [
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 120,
                'type_id' => 1,
            ],


            [
                'name' => 'last_item_header',
                'value' => 'Learn more about our Scan to BIM services',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'MORE',
                'service_block_id' => 120,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 120,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 120,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 120,
                'type_id' => 6,
            ],







            [
                'name' => 'block_header',
                'value' => 'Types of objects we work with',
                'service_block_id' => 121,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>In our 7 years of experience in BIM modeling, we have completed over 2000+ projects from small to large. The team of more than 20 people in Scan to BIM department allows us to work on projects of different levels of complexity. Types of objects:</p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],


            [
                'name' => 'image',
                'value' => 'service_block/software-development-3-image_97.png',
                'service_block_id' => 121,
                'type_id' => 2,
            ],
            [
                'name' => 'item_text_1',
                'value' => '<p><strong>Residential Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_2',
                'value' => '<p><strong>Educational Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_3',
                'value' => '<p><strong>Institutional Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_4',
                'value' => '<p><strong>Historical Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_5',
                'value' => '<p><strong>Business Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_6',
                'value' => '<p><strong>Mercantile Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_7',
                'value' => '<p><strong>Industrial Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_8',
                'value' => '<p><strong>Storages</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_9',
                'value' => '<p><strong>Parkings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_10',
                'value' => '<p><strong>Special Buildings</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_11',
                'value' => '<p><strong>Bridges</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_12',
                'value' => '<p><strong>Roads</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_13',
                'value' => '<p><strong>Transmission towers</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_14',
                'value' => '<p><strong>Radio masts and towers</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],
            [
                'name' => 'item_text_15',
                'value' => '<p><strong>Monuments</strong></p>',
                'service_block_id' => 121,
                'type_id' => 4,
            ],




            [
                'name' => 'image',
                'value' => 'service_block/scan_to_bim_services_in_uk_6.webp',
                'service_block_id' => 122,
                'type_id' => 2,
            ],




            [
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Our <strong>Scan to BIM Modeling</strong> team is skilled in producing accurate 3D BIM models or 2D drawings for design validation, planning, comparison, interference checks, MEP or construction elements demolition or addition, documentation of existing building conditions.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],
            [
                'name' => 'subheader_1',
                'value' => null,
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p>In the <strong>United Kingdom, BIMPROVE</strong> has partnered with <strong>AOP Associates</strong> to provide comprehensive Scan to BIM services.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_2',
                'value' => 'Laser scanning',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_2',
                'value' => '<p>After consultation and discussion of project details, we will scan your objects to convert them into a Point Cloud.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_3',
                'value' => 'Point cloud registration',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_3',
                'value' => '<p>We make registration and cleaning noise to get correct point cloud for our model team. We usually use RCP and E57 formats for modeling.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_4',
                'value' => '3D BIM Modeling',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_4',
                'value' => '<p>In the next stage, our team will start recreating the 3D model from the Point Cloud within the agreed requirements.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],

            [
                'name' => 'subheader_5',
                'value' => 'QA/QC and Report',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_5',
                'value' => '<p>Next, we will fill the BIM model with information (if necessary) and the BIM manager will check the entire model.</p>&nbsp;<p>After these steps, we will provide you with the finished project.</p>',
                'service_block_id' => 123,
                'type_id' => 4,
            ],
            [
                'name' => 'contact_us_text',
                'value' => 'It is very important for us to provide quality services and not to let the client down. Therefore, we are constantly in touch with the client and provide a daily report on the progress of the project. ',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'button_text',
                'value' => 'CONTACT US',
                'service_block_id' => 123,
                'type_id' => 1,
            ],
            [
                'name' => 'button_url',
                'value' => '/contact',
                'service_block_id' => 123,
                'type_id' => 3,
            ],
            [
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 123,
                'type_id' => 5,
            ],
            [
                'name' => 'button_shadow',
                'value' => 'none',
                'service_block_id' => 123,
                'type_id' => 6,
            ],





            [
                'name' => 'block_header',
                'value' => 'OUR SCAN TO BIM PROJECTS',
                'service_block_id' => 124,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_project_url',
                'value' => 'http://localhost/portfolio/ukrainian-metallurgical-plant',
                'service_block_id' => 124,
                'type_id' => 3,
            ],
            [
                'name' => 'the_second_project_url',
                'value' => 'http://localhost/portfolio/industrial-plant-northern-gzk',
                'service_block_id' => 124,
                'type_id' => 3,
            ],
            [
                'name' => 'the_third_project_url',
                'value' => 'http://localhost/portfolio/landscape-of-the-industrial-territory',
                'service_block_id' => 124,
                'type_id' => 3,
            ],
            [
                'name' => 'the_fourth_project_url',
                'value' => 'http://localhost/portfolio/hypermarket-billa',
                'service_block_id' => 124,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_url',
                'value' => 'http://localhost/scan-to-bim-estimates-project',
                'service_block_id' => 124,
                'type_id' => 3,
            ],
            [
                'name' => 'estimation_button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 124,
                'type_id' => 1,
            ],



            [
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 125,
                'type_id' => 1,
            ],

            [
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon1_9.png',
                'service_block_id' => 125,
                'type_id' => 2,
            ],
            [
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 125,
                'type_id' => 1,
            ],
            [
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 125,
                'type_id' => 4,
            ],

            [
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon2_9.png',
                'service_block_id' => 125,
                'type_id' => 2,
            ],
            [
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 125,
                'type_id' => 1,
            ],
            [
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 125,
                'type_id' => 4,
            ],

            [
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon3_9.png',
                'service_block_id' => 125,
                'type_id' => 2,
            ],
            [
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 125,
                'type_id' => 1,
            ],
            [
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 125,
                'type_id' => 4,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT COUNTRIES HAVE WE WORKED WITH?',
                'service_block_id' => 126,
                'type_id' => 1,
            ],
            [
                'name' => 'map_image',
                'value' => 'service_block/scan-to-bim-services-in-uk-map.webp',
                'service_block_id' => 126,
                'type_id' => 2,
            ],



            [
                'name' => 'block_header',
                'value' => 'WHAT IS THE SCAN TO BIM SERVICE?',
                'service_block_id' => 127,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph_1',
                'value' => '<p style="text-align: justify;">Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps create a comprehensive and detailed building model, which can be used for renovation, restoration, or retrofitting purposes. The BIM modeling service is essential in creating a collaborative environment for developing and executing efficient construction projects.</p>&nbsp;<p style="text-align: justify;">The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings of 28%, greater accuracy, and reduced risk of errors by 40%. It helps minimize on-site work and disruptions reduces the chances of rework, and allows for better visualization and analysis of the building\'s structure. Additionally, the 3D BIM models enable stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.</p>',
                'service_block_id' => 127,
                'type_id' => 4,
            ],





            [
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 128,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_1',
                'value' => 'CONTACT US',
                'service_block_id' => 128,
                'type_id' => 1,
            ],
            [
                'name' => 'subheader_2',
                'value' => 'How can we help you?',
                'service_block_id' => 128,
                'type_id' => 1,
            ],
            [
                'name' => 'paragraph',
                'value' => '<p>Do you still have questions? We are glad to answer them. Feel free to contact us. Fill out the form below and we will quickly respond.</p>',
                'service_block_id' => 128,
                'type_id' => 4,
            ],
            [
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                'service_block_id' => 128,
                'type_id' => 8,
            ],
            [
                'name' => 'image',
                'value' => 'service_block/scan-to-bim-block-13-icon1_13.png',
                'service_block_id' => 128,
                'type_id' => 2,
            ],
        ]);
    }
}
