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
                'id' => 1,
                'name' => 'background_image',
                'value' => 'service_block/scan-to-bim-background-new_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'id' => 2,
                'name' => 'main_header',
                'value' => 'SCAN TO BIM SERVICES',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'text_under_the_header',
                'value' => 'Guarantee of models quality. Daily reports. 3D modeling by Point Cloud specialists with over 7 years of experience in all disciplines.',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'button_url',
                'value' => 'https://bim-prove.com/scan-to-bim-estimates-project',
                'service_block_id' => 1,
                'type_id' => 3,
            ],
            [
                'id' => 6,
                'name' => 'the_first_sub_service_header',
                'value' => 'Point cloud registration',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon1_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'id' => 8,
                'name' => 'the_second_sub_service_header',
                'value' => 'BIM MODELING',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon2_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'id' => 10,
                'name' => 'the_third_sub_service_header',
                'value' => 'FACILITY MANAGEMENT',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 11,
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon3_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'id' => 12,
                'name' => 'the_fourth_sub_service_header',
                'value' => 'AS-BUILT SERVICES',
                'service_block_id' => 1,
                'type_id' => 1,
            ],
            [
                'id' => 13,
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/scan-to-bim-icon4_1.webp',
                'service_block_id' => 1,
                'type_id' => 2,
            ],
            [
                'id' => 14,
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 1,
                'type_id' => 5,
            ],
            [
                'id' => 15,
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 1,
                'type_id' => 6,
            ],


            [
                'id' => 16,
                'name' => 'breadcrumb_item_active',
                'value' => 'Scan To Bim Service',
                'service_block_id' => 2,
                'type_id' => 1,
            ],

            [
                'id' => 17,
                'name' => 'block_header',
                'value' => 'What advantages you will get',
                'service_block_id' => 3,
                'type_id' => 1,
            ],
            [
                'id' => 18,
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> offer precise parametric <b class="fw-bold">As-built BIM Models</b> and 2D CAD Models showcasing details like pipes, walls, slabs, roof plans, facades, and landscapes within and around the building.</p>',
                'service_block_id' => 3,
                'type_id' => 4,
            ],
            [
                'id' => 19,
                'name' => 'paragraph_2',
                'value' => '<p>Our <b class="fw-bold">Point Cloud</b> to <b class="fw-bold">BIM Modeling Services</b> deliver models ranging from LOD 100 to 350, encompassing Architectural, Structural, Site, MEPFP Elements. We also include Clash Detection for projects involving Renovation, Refurbishment, Retrofit, or Reconstruction.</p>',
                'service_block_id' => 3,
                'type_id' => 4,
            ],

            [
                'id' => 20,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon1_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 21,
                'name' => 'the_first_item_header',
                'value' => '3D Content Creation',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 22,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon2_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 23,
                'name' => 'the_second_item_header',
                'value' => 'HIGH QUALITY',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 24,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon3_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 25,
                'name' => 'the_third_item_header',
                'value' => 'ADHERENCE TO DEADLINES',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 26,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon4_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 27,
                'name' => 'the_fourth_item_header',
                'value' => 'Tasks solving',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 28,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon5_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 29,
                'name' => 'the_fifth_item_header',
                'value' => 'Project adjustmnent',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 30,
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon6_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 31,
                'name' => 'the_sixth_item_header',
                'value' => 'Communication',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 32,
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon7_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 33,
                'name' => 'the_seventh_item_header',
                'value' => 'Certified team',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 34,
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-3-icon8_3.png',
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 35,
                'name' => 'the_eighth_item_header',
                'value' => 'Work process organization',
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 36,
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 3,
                'type_id' => 2,
            ],
            [
                'id' => 37,
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 3,
                'type_id' => 1,
            ],

            [
                'id' => 38,
                'name' => 'file_to_download',
                'value' => 'service_block/scan-to-bim_4.pdf',
                'service_block_id' => 4,
                'type_id' => 7,
            ],
            [
                'id' => 39,
                'name' => 'button_text',
                'value' => 'DOWNLOAD PRESENTATION',
                'service_block_id' => 4,
                'type_id' => 1,
            ],
            [
                'id' => 40,
                'name' => 'button_color',
                'value' => '#6bdcdb',
                'service_block_id' => 4,
                'type_id' => 5,
            ],
            [
                'id' => 41,
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 4,
                'type_id' => 6,
            ],



            [
                'id' => 42,
                'name' => 'block_header',
                'value' => 'More about our Scan to BIM Services',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 43,
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> (also known as Point Cloud <b class="fw-bold">BIM Modeling services</b>) are suitable for Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.</p>',
                'service_block_id' => 5,
                'type_id' => 4,
            ],

            [
                'id' => 44,
                'name' => 'the_first_item_header',
                'value' => 'BIM modeling',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 45,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon1_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 46,
                'name' => 'the_first_item_text',
                'value' => 'Creation of 3D Revit BIM-model by tracing the data from the Point Cloud. Parameterization of BIM elements.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 47,
                'name' => 'the_second_item_header',
                'value' => 'As-built drawings',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 48,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon2_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 49,
                'name' => 'the_second_item_text',
                'value' => 'Design of As-built drawings based on 3D BIM models from Revit created by the scanning.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 50,
                'name' => 'the_third_item_header',
                'value' => 'QA\QC',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 51,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon3_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 52,
                'name' => 'the_third_item_text',
                'value' => 'Checking of 3D BIM model accuracy, building and engineering logic, elements clashing.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 53,
                'name' => 'the_fourth_item_header',
                'value' => 'Progress Reports',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 54,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon4_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 55,
                'name' => 'the_fourth_item_text',
                'value' => 'Creation of every day project reports. Own reporting system to inform about the progress of the modeling process.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 56,
                'name' => 'the_fifth_item_header',
                'value' => 'Export to other formats',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 57,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon5_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 58,
                'name' => 'the_fifth_item_text',
                'value' => 'Export the Revit model in the format you need: IFC, NWC, NWF, DWG, PDF, DGN, FBX, STEP, SKP',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 59,
                'name' => 'the_sixth_item_header',
                'value' => 'Our Software skills',
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 60,
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-5-icon6_5.png',
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 61,
                'name' => 'the_sixth_item_text',
                'value' => 'The main program for creating 3D BIM models is Revit. But our team is also proficient in other programs: AutoCAD, ArchiCAD, SketchUp, Navisworks.',
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 62,
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 63,
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 64,
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 65,
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 66,
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 67,
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],

            [
                'id' => 68,
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],
            [
                'id' => 69,
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 2,
            ],
            [
                'id' => 70,
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 5,
                'type_id' => 1,
            ],



            [
                'id' => 71,
                'name' => 'block_header',
                'value' => 'WE HAVE EXPERIENCE AND EXPERTISE IN THE FIELDS:',
                'service_block_id' => 6,
                'type_id' => 1,
            ],
            [
                'id' => 72,
                'name' => 'paragraph_1',
                'value' => '<p>Our top priorities: <b class="fw-bold">quality, accuracy and logic</b>. Our experience includes developing parametric 3D BIM and 2D CAD models. We work with all disciplines: Architectural, Structural, Mechanical, Electrical, Plumbing, Fire Protection, Site.</p>',
                'service_block_id' => 6,
                'type_id' => 4,
            ],


            [
                'id' => 73,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon1_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 74,
                'name' => 'the_first_item_header',
                'value' => 'Residential Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 75,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon2_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 76,
                'name' => 'the_second_item_header',
                'value' => 'Educational Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 77,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon3_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 78,
                'name' => 'the_third_item_header',
                'value' => 'Institutional Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 79,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon4_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 80,
                'name' => 'the_fourth_item_header',
                'value' => 'Historical Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 81,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon5_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 82,
                'name' => 'the_fifth_item_header',
                'value' => 'Business Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 83,
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon6_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 84,
                'name' => 'the_sixth_item_header',
                'value' => 'Mercantile Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 85,
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon7_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 86,
                'name' => 'the_seventh_item_header',
                'value' => 'Industrial Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 87,
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon8_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 88,
                'name' => 'the_eighth_item_header',
                'value' => 'Storages',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 89,
                'name' => 'the_ninth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon9_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 90,
                'name' => 'the_ninth_item_header',
                'value' => 'Parkings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 91,
                'name' => 'the_tenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon10_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 92,
                'name' => 'the_tenth_item_header',
                'value' => 'Special Buildings',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 93,
                'name' => 'the_eleventh_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon11_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 94,
                'name' => 'the_eleventh_item_header',
                'value' => 'Bridges',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 95,
                'name' => 'the_twelfth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon12_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 96,
                'name' => 'the_twelfth_item_header',
                'value' => 'Roads',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 97,
                'name' => 'the_thirteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon13_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 98,
                'name' => 'the_thirteenth_item_header',
                'value' => 'Transmission towers',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 99,
                'name' => 'the_fourteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon14_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 100,
                'name' => 'the_fourteenth_item_header',
                'value' => 'Monuments',
                'service_block_id' => 6,
                'type_id' => 1,
            ],

            [
                'id' => 101,
                'name' => 'the_fifteenth_item_image',
                'value' => 'service_block/scan-to-bim-block-6-icon15_6.png',
                'service_block_id' => 6,
                'type_id' => 2,
            ],
            [
                'id' => 102,
                'name' => 'the_fifteenth_item_header',
                'value' => 'Site',
                'service_block_id' => 6,
                'type_id' => 1,
            ],



            [
                'id' => 103,
                'name' => 'block_header',
                'value' => 'HOW DO WE WORK?',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 104,
                'name' => 'paragraph_1',
                'value' => '<p>Our <b class="fw-bold">Scan to BIM Modeling</b> team is skilled in producing accurate 3D BIM models or 2D drawings for purposes such as design validation, planning, comparison, interference checks, MEP or construction elements demolition or addition, documentation of existing building conditions.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],

            [
                'id' => 105,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon1_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 106,
                'name' => 'the_first_item_header',
                'value' => 'CONSULTATION',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 107,
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>Receiving the task by email, project our <a href="/scan-to-bim-estimates-project" class="text-secondary">estimation form</a>, or during the meeting.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 109,
                'name' => 'the_first_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 110,
                'name' => 'the_first_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'id' => 111,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon2_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 112,
                'name' => 'the_second_item_header',
                'value' => 'PROJECT ESTIMATION',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 113,
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>Estimation of the project and creation of an offer within 24 hours. We can create 3D model only by the Point Cloud or add information from the drawings. We use your company template or ours. If you need, we can create Revit template according to your needs and requirements.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 114,
                'name' => 'the_second_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 115,
                'name' => 'the_second_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'id' => 116,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon3_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 117,
                'name' => 'the_third_item_header',
                'value' => 'ESTIMATION APPROVAL',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 118,
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>Discussion of estimation with the client & commercial offer approval.</p><p>We create 3D models in LOD 100 - 350 and using Autodesk Revit versions 2019/2020/2021/2022/2023/2024.</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 119,
                'name' => 'the_third_item_paragraph_2',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 120,
                'name' => 'the_third_item_paragraph_3',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'id' => 121,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon4_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 122,
                'name' => 'the_fourth_item_header',
                'value' => 'PROJECT SETUP',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 123,
                'name' => 'the_fourth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 124,
                'name' => 'the_fourth_item_paragraph_2',
                'value' => '<p>- The creation of chats and dashboard</p><p>- Deadline setting</p><p>- Team meeting</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 125,
                'name' => 'the_fourth_item_paragraph_3',
                'value' => '<p>- Sorting and processing incoming information</p><p>- Setting up the template for work</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'id' => 126,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon5_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 127,
                'name' => 'the_fifth_item_header',
                'value' => 'WORKFLOW',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 128,
                'name' => 'the_fifth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 129,
                'name' => 'the_fifth_item_paragraph_2',
                'value' => '<p>- BIM and 3D modeling</p><p>- Preparation of drawings and schedules</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 130,
                'name' => 'the_fifth_item_paragraph_3',
                'value' => '<p>- Step-by-step project review</p><p>- Daily/weekly reports or meetings with the client</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],


            [
                'id' => 131,
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-7-icon6_7.png',
                'service_block_id' => 7,
                'type_id' => 2,
            ],
            [
                'id' => 132,
                'name' => 'the_sixth_item_header',
                'value' => 'MODEL PUBLISHING',
                'service_block_id' => 7,
                'type_id' => 1,
            ],
            [
                'id' => 133,
                'name' => 'the_sixth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 134,
                'name' => 'the_sixth_item_paragraph_2',
                'value' => '<p>- QA\QC in Revit or Navisworks</p><p>- Adding missing elements and corrections after QA\QC</p><p>- Purging unused elements, deleting working views</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],
            [
                'id' => 135,
                'name' => 'the_sixth_item_paragraph_3',
                'value' => '<p>- Delivering model to the client</p><p>- Getting feedback and approval from the client</p><p>- Receiving payment</p>',
                'service_block_id' => 7,
                'type_id' => 4,
            ],



            [
                'id' => 136,
                'name' => 'block_header',
                'value' => 'OUR SCAN TO BIM PROJECTS',
                'service_block_id' => 8,
                'type_id' => 1,
            ],
            [
                'id' => 137,
                'name' => 'the_first_project_url',
                'value' => 'http://localhost/portfolio/metallurgy-combine-from-ukraine',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'id' => 138,
                'name' => 'the_second_project_url',
                'value' => 'http://localhost/portfolio/industrial-plant-northern-gzk',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'id' => 139,
                'name' => 'the_third_project_url',
                'value' => 'http://localhost/portfolio/landscape-of-the-industrial-territory',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'id' => 140,
                'name' => 'the_fourth_project_url',
                'value' => 'http://localhost/portfolio/hypermarket-billa',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'id' => 141,
                'name' => 'estimation_button_url',
                'value' => 'http://localhost/scan-to-bim-estimates-project',
                'service_block_id' => 8,
                'type_id' => 3,
            ],
            [
                'id' => 142,
                'name' => 'estimation_button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 8,
                'type_id' => 1,
            ],



            [
                'id' => 143,
                'name' => 'block_header',
                'value' => 'OUR BENEFITS',
                'service_block_id' => 9,
                'type_id' => 1,
            ],

            [
                'id' => 144,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon1_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'id' => 145,
                'name' => 'the_first_item_header',
                'value' => 'REVIEWING',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'id' => 146,
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],

            [
                'id' => 147,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon2_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'id' => 148,
                'name' => 'the_second_item_header',
                'value' => 'DEVELOPMENT',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'id' => 149,
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],

            [
                'id' => 150,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-9-icon3_9.png',
                'service_block_id' => 9,
                'type_id' => 2,
            ],
            [
                'id' => 151,
                'name' => 'the_third_item_header',
                'value' => 'ORGANIZATION',
                'service_block_id' => 9,
                'type_id' => 1,
            ],
            [
                'id' => 152,
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                'service_block_id' => 9,
                'type_id' => 4,
            ],



            [
                'id' => 153,
                'name' => 'block_header',
                'value' => 'WHAT IS THE SCAN TO BIM SERVICE?',
                'service_block_id' => 10,
                'type_id' => 1,
            ],
            [
                'id' => 154,
                'name' => 'paragraph_1',
                'value' => '<p style="text-align: justify;">Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps create a comprehensive and detailed building model, which can be used for renovation, restoration, or retrofitting purposes. The BIM modeling service is essential in creating a collaborative environment for developing and executing efficient construction projects.</p><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;">The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings of 28%, greater accuracy, and reduced risk of errors by 40%. It helps minimize on-site work and disruptions reduces the chances of rework, and allows for better visualization and analysis of the building\'s structure. Additionally, the 3D BIM models enable stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.</p>',
                'service_block_id' => 10,
                'type_id' => 4,
            ],



            [
                'id' => 155,
                'name' => 'block_header',
                'value' => 'COUNTRIES WE WORKED WITH',
                'service_block_id' => 11,
                'type_id' => 1,
            ],
            [
                'id' => 156,
                'name' => 'map_image',
                'value' => 'service_block/scan-to-bim-block-11-icon1_11.png',
                'service_block_id' => 11,
                'type_id' => 2,
            ],



            [
                'id' => 157,
                'name' => 'block_header',
                'value' => 'FREQUENTLY ASKED QUESTIONS',
                'service_block_id' => 12,
                'type_id' => 1,
            ],

            [
                'id' => 158,
                'name' => 'the_first_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon1_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 159,
                'name' => 'the_first_item_header',
                'value' => 'What are the benefits of scan to BIM service?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 160,
                'name' => 'the_first_item_paragraph_1',
                'value' => '<p>Scan to BIM service offers several benefits, such as accurate and detailed documentation of existing conditions, improved project planning and coordination, reduced construction time and costs, and enhanced facility management. Scan to BIM service can also help to identify potential clashes or design issues early on, minimizing rework and changes during the construction phase. Overall, scan to BIM service can lead to more efficient and cost-effective project delivery.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 161,
                'name' => 'the_second_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon2_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 162,
                'name' => 'the_second_item_header',
                'value' => 'What is Level of detail (LOD)?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 163,
                'name' => 'the_second_item_paragraph_1',
                'value' => '<p>Level of Design / Development / Detail (LOD) is the overall state of your information model at a particular point in its design process. This includes not only graphical objects, but also the data associated with the objects. Your model should develop over time from a very coarse design to the record drawings and as-builts. This process has been distilled down into five distinct categories as formalized in the AIA E202 contract document. We create BIM models by the Point Cloud in LODs: 100, 200, 300, 350. <a href="/post/what-is-lod-level-of-detail-in-bim" class="text-dark">Learn more about Level of Detail in our article.</a></p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 164,
                'name' => 'the_third_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon3_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 165,
                'name' => 'the_third_item_header',
                'value' => 'How long does it take to complete a project?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 166,
                'name' => 'the_third_item_paragraph_1',
                'value' => '<p>The duration of a Scan to BIM modeling depends on several factors such as the complexity of the project, the scope of work, the size of the area to be scanned, and the accuracy required. Typically, a scan to BIM project can take anywhere from a from few days to 1-2 months.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 167,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon4_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 168,
                'name' => 'the_fourth_item_header',
                'value' => 'What results will you get by using our service?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 169,
                'name' => 'the_fourth_item_paragraph_1',
                'value' => '<p>The deliverables of a Scan to BIM service can vary depending on the requirements of the project. However, some common deliverables include 3D BIM models, 2D drawings, point clouds, clash detection reports, and as-built documentation. These deliverables can be used for various purposes such as construction planning, facility management, and renovation projects.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 170,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon5_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 171,
                'name' => 'the_fifth_item_header',
                'value' => 'What types of projects can 3D modeling be helpful for?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 172,
                'name' => 'the_fifth_item_paragraph_1',
                'value' => '<p>Scan to BIM service can benefit a wide range of projects, including those in the architecture, engineering, and construction industries. Some examples include renovation and retrofit projects, heritage preservation, building information modeling, and plant design and construction.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 173,
                'name' => 'the_sixth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon6_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 174,
                'name' => 'the_sixth_item_header',
                'value' => 'Who will benefit from our Point Cloud BIM modeling services?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 175,
                'name' => 'the_sixth_item_paragraph_1',
                'value' => '<p>With 7 years of BIM modeling experience, our team has extensive knowledge with a variety of clients. BIM modeling services (also known as Scan to BIM) are suitable for company types such as Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 176,
                'name' => 'the_seventh_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon7_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 177,
                'name' => 'the_seventh_item_header',
                'value' => 'Why Choose Our Scan to BIM Services?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 178,
                'name' => 'the_seventh_item_paragraph_1',
                'value' => '<p>BIMprove employs Point Cloud specialists, BIM modelers and CAD drafters who can accurately process Point Cloud data, then create a 3D BIM models with the required LOD, and create 2D drawings with dimensions, annotations and overlay layers if required. We guarantee on-time delivery: Accurate point cloud reproduction / 3D BIM models with the required LOD level from 100 to 350 / 2D drawings with required data.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 179,
                'name' => 'the_eighth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon8_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 180,
                'name' => 'the_eighth_item_header',
                'value' => 'What is As-built?',
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 181,
                'name' => 'the_eighth_item_paragraph_1',
                'value' => '<p>An As-built drawing is a drawing that we, as a digital construction contractor, create after the successful completion of a project based on BIM models. Construction workers typically compare the construction drawing to the original drawings and specifications created at the beginning of the project. These are required documents on every construction project.</p>',
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 182,
                'name' => 'the_ninth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon9_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 183,
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 184,
                'name' => 'the_ninth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 4,
            ],

            [
                'id' => 185,
                'name' => 'the_tenth_item_image',
                'value' => 'service_block/scan-to-bim-block-12-icon10_12.png',
                'service_block_id' => 12,
                'type_id' => 2,
            ],
            [
                'id' => 186,
                'name' => 'the_tenth_item_header',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 1,
            ],
            [
                'id' => 187,
                'name' => 'the_tenth_item_paragraph_1',
                'value' => null,
                'service_block_id' => 12,
                'type_id' => 4,
            ],



            [
                'id' => 188,
                'name' => 'block_header',
                'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES',
                'service_block_id' => 13,
                'type_id' => 1,
            ],
            [
                'id' => 189,
                'name' => 'script',
                'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="36e8ffcfd59d981ac14ebb11c74e5a169f998a7a9419bd84afbb87074fba57e4"></script>',
                'service_block_id' => 13,
                'type_id' => 8,
            ],
            [
                'id' => 190,
                'name' => 'image',
                'value' => 'service_block/scan-to-bim-block-13-icon1_13.webp',
                'service_block_id' => 13,
                'type_id' => 2,
            ],




            [
                'id' => 191,
                'name' => 'background_image',
                'value' => 'service_block/mep-bim-modeling-background_36.webp',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'id' => 192,
                'name' => 'main_header',
                'value' => 'MEP BIM MODELING SERVICES',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 193,
                'name' => 'text_under_the_header',
                'value' => 'Utilize the services of one skilled professional to strengthen your team or order the entire project to be completed by a group of specialists.',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 194,
                'name' => 'button_text',
                'value' => 'ESTIMATE YOUR PROJECT',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 195,
                'name' => 'button_url',
                'value' => '/mep-estimates-project',
                'service_block_id' => 36,
                'type_id' => 3,
            ],
            [
                'id' => 196,
                'name' => 'the_first_sub_service_header',
                'value' => 'MEP MODELING',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 197,
                'name' => 'the_first_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon1_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'id' => 198,
                'name' => 'the_second_sub_service_header',
                'value' => 'BIM COORDINATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 199,
                'name' => 'the_second_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon2_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'id' => 200,
                'name' => 'the_third_sub_service_header',
                'value' => 'FABRICATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 201,
                'name' => 'the_third_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon3_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'id' => 202,
                'name' => 'the_fourth_sub_service_header',
                'value' => 'SHOP DRAWINGS CREATION',
                'service_block_id' => 36,
                'type_id' => 1,
            ],
            [
                'id' => 203,
                'name' => 'the_fourth_sub_service_image',
                'value' => 'service_block/mep-bim-modeling-icon4_36.png',
                'service_block_id' => 36,
                'type_id' => 2,
            ],
            [
                'id' => 204,
                'name' => 'button_color',
                'value' => '#43aeb6',
                'service_block_id' => 36,
                'type_id' => 5,
            ],
            [
                'id' => 205,
                'name' => 'button_shadow',
                'value' => 'lg',
                'service_block_id' => 36,
                'type_id' => 6,
            ],


            [
                'id' => 206,
                'name' => 'breadcrumb_item_active_1',
                'value' => 'MEP Services',
                'service_block_id' => 37,
                'type_id' => 1,
            ],
            [
                'id' => 207,
                'name' => 'breadcrumb_item_active_2',
                'value' => 'MEP Bim Modeling Service',
                'service_block_id' => 37,
                'type_id' => 1,
            ],



            [
                'id' => 208,
                'name' => 'block_header',
                'value' => 'MEP sub-contractor Services',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 209,
                'name' => 'paragraph_1',
                'value' => '<p>MEP drawings and MEP coordination are integral elements of any construction project. Whatever your goal is whether it\'s a new building or the renovation of an existing building, you will need to prepare drawings and a required a 3D model for BIM.</p><p style="text-align: justify;">&nbsp;</p><p>Our MEP BIM coordination and modeling department specializes in the development of an accurate and detailed MEP models and drawings.</p>',
                'service_block_id' => 38,
                'type_id' => 4,
            ],

            [
                'id' => 210,
                'name' => 'the_first_item_header',
                'value' => 'BIM Coordination',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 211,
                'name' => 'the_first_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon1_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 212,
                'name' => 'the_first_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 213,
                'name' => 'the_second_item_header',
                'value' => 'MEP Modeling',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 214,
                'name' => 'the_second_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon2_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 215,
                'name' => 'the_second_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 216,
                'name' => 'the_third_item_header',
                'value' => 'Drawings creation',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 217,
                'name' => 'the_third_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon3_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 218,
                'name' => 'the_third_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 219,
                'name' => 'the_fourth_item_header',
                'value' => 'MEP Fabrication',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 220,
                'name' => 'the_fourth_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon4_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 221,
                'name' => 'the_fourth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 222,
                'name' => 'the_fifth_item_header',
                'value' => 'MEP Families Creation',
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 223,
                'name' => 'the_fifth_item_image',
                'value' => 'service_block/mep-bim-modeling-block-3-icon5_38.png',
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 224,
                'name' => 'the_fifth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 225,
                'name' => 'the_sixth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 226,
                'name' => 'the_sixth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 227,
                'name' => 'the_sixth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 228,
                'name' => 'the_seventh_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 229,
                'name' => 'the_seventh_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 230,
                'name' => 'the_seventh_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 231,
                'name' => 'the_eighth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 232,
                'name' => 'the_eighth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 233,
                'name' => 'the_eighth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],

            [
                'id' => 234,
                'name' => 'the_ninth_item_header',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
            [
                'id' => 235,
                'name' => 'the_ninth_item_image',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 2,
            ],
            [
                'id' => 236,
                'name' => 'the_ninth_item_text',
                'value' => null,
                'service_block_id' => 38,
                'type_id' => 1,
            ],
        ]);
    }
}
