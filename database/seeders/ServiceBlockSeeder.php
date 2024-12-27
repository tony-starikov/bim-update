<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_blocks')->insert([

//            scan_to_bim
            [
                'id' => 1,
                'service_id' => 3,
                'type_id' => 1,
                'name' => 'scan_to_bim_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 2,
                'service_id' => 3,
                'type_id' => 2,
                'name' => 'breadcrumbs',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 3,
                'service_id' => 3,
                'type_id' => 3,
                'name' => 'scan_to_bim_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 4,
                'service_id' => 3,
                'type_id' => 4,
                'name' => 'scan_to_bim_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 5,
                'service_id' => 3,
                'type_id' => 5,
                'name' => 'scan_to_bim_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 6,
                'service_id' => 3,
                'type_id' => 6,
                'name' => 'scan_to_bim_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 7,
                'service_id' => 3,
                'type_id' => 7,
                'name' => 'scan_to_bim_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 8,
                'service_id' => 3,
                'type_id' => 8,
                'name' => 'scan_to_bim_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 9,
                'service_id' => 3,
                'type_id' => 9,
                'name' => 'scan_to_bim_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 10,
                'service_id' => 3,
                'type_id' => 10,
                'name' => 'scan_to_bim_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 11,
                'service_id' => 3,
                'type_id' => 11,
                'name' => 'scan_to_bim_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 12,
                'service_id' => 3,
                'type_id' => 12,
                'name' => 'scan_to_bim_12',
                'order' => 12,
                'order_dump' => 12,
            ],
            [
                'id' => 13,
                'service_id' => 3,
                'type_id' => 13,
                'name' => 'scan_to_bim_13',
                'order' => 13,
                'order_dump' => 13,
            ],

//            mep_coordination
            [
                'id' => 14,
                'service_id' => 1,
                'type_id' => 14,
                'name' => 'mep_coordination_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 15,
                'service_id' => 1,
                'type_id' => 15,
                'name' => 'mep_coordination_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 16,
                'service_id' => 1,
                'type_id' => 16,
                'name' => 'mep_coordination_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 17,
                'service_id' => 1,
                'type_id' => 17,
                'name' => 'mep_coordination_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 18,
                'service_id' => 1,
                'type_id' => 18,
                'name' => 'mep_coordination_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 19,
                'service_id' => 1,
                'type_id' => 19,
                'name' => 'mep_coordination_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 20,
                'service_id' => 1,
                'type_id' => 20,
                'name' => 'mep_coordination_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 21,
                'service_id' => 1,
                'type_id' => 21,
                'name' => 'mep_coordination_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 22,
                'service_id' => 1,
                'type_id' => 22,
                'name' => 'mep_coordination_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 23,
                'service_id' => 1,
                'type_id' => 23,
                'name' => 'mep_coordination_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 24,
                'service_id' => 1,
                'type_id' => 24,
                'name' => 'mep_coordination_11',
                'order' => 11,
                'order_dump' => 11,
            ],


//            telecom_design
            [
                'id' => 25,
                'service_id' => 2,
                'type_id' => 25,
                'name' => 'telecom_design_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 26,
                'service_id' => 2,
                'type_id' => 26,
                'name' => 'telecom_design_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 27,
                'service_id' => 2,
                'type_id' => 27,
                'name' => 'telecom_design_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 28,
                'service_id' => 2,
                'type_id' => 28,
                'name' => 'telecom_design_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 29,
                'service_id' => 2,
                'type_id' => 29,
                'name' => 'telecom_design_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 30,
                'service_id' => 2,
                'type_id' => 30,
                'name' => 'telecom_design_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 31,
                'service_id' => 2,
                'type_id' => 31,
                'name' => 'telecom_design_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 32,
                'service_id' => 2,
                'type_id' => 32,
                'name' => 'telecom_design_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 33,
                'service_id' => 2,
                'type_id' => 33,
                'name' => 'telecom_design_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 34,
                'service_id' => 2,
                'type_id' => 34,
                'name' => 'telecom_design_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 35,
                'service_id' => 2,
                'type_id' => 35,
                'name' => 'telecom_design_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 36,
                'service_id' => 7,
                'type_id' => 36,
                'name' => 'mep_bim_modeling_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 37,
                'service_id' => 7,
                'type_id' => 37,
                'name' => 'mep_bim_modeling_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 38,
                'service_id' => 7,
                'type_id' => 38,
                'name' => 'mep_bim_modeling_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 39,
                'service_id' => 7,
                'type_id' => 39,
                'name' => 'mep_bim_modeling_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 40,
                'service_id' => 7,
                'type_id' => 40,
                'name' => 'mep_bim_modeling_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 41,
                'service_id' => 7,
                'type_id' => 41,
                'name' => 'mep_bim_modeling_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 42,
                'service_id' => 7,
                'type_id' => 42,
                'name' => 'mep_bim_modeling_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 43,
                'service_id' => 7,
                'type_id' => 43,
                'name' => 'mep_bim_modeling_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 44,
                'service_id' => 7,
                'type_id' => 44,
                'name' => 'mep_bim_modeling_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 45,
                'service_id' => 7,
                'type_id' => 45,
                'name' => 'mep_bim_modeling_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 46,
                'service_id' => 7,
                'type_id' => 46,
                'name' => 'mep_bim_modeling_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 47,
                'service_id' => 7,
                'type_id' => 47,
                'name' => 'mep_bim_modeling_12',
                'order' => 12,
                'order_dump' => 12,
            ],
            [
                'id' => 48,
                'service_id' => 7,
                'type_id' => 48,
                'name' => 'mep_bim_modeling_13',
                'order' => 13,
                'order_dump' => 13,
            ],




            [
                'id' => 49,
                'service_id' => 8,
                'type_id' => 36,
                'name' => 'mep_bim_coordination_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 50,
                'service_id' => 8,
                'type_id' => 37,
                'name' => 'mep_bim_coordination_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 51,
                'service_id' => 8,
                'type_id' => 38,
                'name' => 'mep_bim_coordination_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 52,
                'service_id' => 8,
                'type_id' => 44,
                'name' => 'mep_bim_coordination_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 53,
                'service_id' => 8,
                'type_id' => 39,
                'name' => 'mep_bim_coordination_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 54,
                'service_id' => 8,
                'type_id' => 49,
                'name' => 'mep_bim_coordination_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 55,
                'service_id' => 8,
                'type_id' => 10,
                'name' => 'mep_bim_coordination_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 56,
                'service_id' => 8,
                'type_id' => 45,
                'name' => 'mep_bim_coordination_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 57,
                'service_id' => 8,
                'type_id' => 46,
                'name' => 'mep_bim_coordination_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 58,
                'service_id' => 8,
                'type_id' => 47,
                'name' => 'mep_bim_coordination_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 59,
                'service_id' => 8,
                'type_id' => 48,
                'name' => 'mep_bim_coordination_11',
                'order' => 11,
                'order_dump' => 11,
            ],




            [
                'id' => 60,
                'service_id' => 9,
                'type_id' => 36,
                'name' => 'mep_bim_fabrication_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 61,
                'service_id' => 9,
                'type_id' => 37,
                'name' => 'mep_bim_fabrication_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 62,
                'service_id' => 9,
                'type_id' => 10,
                'name' => 'mep_bim_fabrication_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 63,
                'service_id' => 9,
                'type_id' => 38,
                'name' => 'mep_bim_fabrication_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 64,
                'service_id' => 9,
                'type_id' => 44,
                'name' => 'mep_bim_fabrication_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 65,
                'service_id' => 9,
                'type_id' => 10,
                'name' => 'mep_bim_fabrication_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 66,
                'service_id' => 9,
                'type_id' => 50,
                'name' => 'mep_bim_fabrication_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 67,
                'service_id' => 9,
                'type_id' => 10,
                'name' => 'mep_bim_fabrication_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 68,
                'service_id' => 9,
                'type_id' => 45,
                'name' => 'mep_bim_fabrication_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 69,
                'service_id' => 9,
                'type_id' => 10,
                'name' => 'mep_bim_fabrication_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 70,
                'service_id' => 9,
                'type_id' => 46,
                'name' => 'mep_bim_fabrication_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 71,
                'service_id' => 9,
                'type_id' => 47,
                'name' => 'mep_bim_fabrication_12',
                'order' => 12,
                'order_dump' => 12,
            ],
            [
                'id' => 72,
                'service_id' => 9,
                'type_id' => 48,
                'name' => 'mep_bim_fabrication_13',
                'order' => 13,
                'order_dump' => 13,
            ],




            [
                'id' => 73,
                'service_id' => 10,
                'type_id' => 51,
                'name' => 'steelwork_design_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 74,
                'service_id' => 10,
                'type_id' => 37,
                'name' => 'steelwork_design_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 75,
                'service_id' => 10,
                'type_id' => 10,
                'name' => 'steelwork_design_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 76,
                'service_id' => 10,
                'type_id' => 52,
                'name' => 'steelwork_design_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 77,
                'service_id' => 10,
                'type_id' => 39,
                'name' => 'steelwork_design_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 78,
                'service_id' => 10,
                'type_id' => 53,
                'name' => 'steelwork_design_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 79,
                'service_id' => 10,
                'type_id' => 8,
                'name' => 'steelwork_design_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 80,
                'service_id' => 10,
                'type_id' => 39,
                'name' => 'steelwork_design_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 81,
                'service_id' => 10,
                'type_id' => 46,
                'name' => 'steelwork_design_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 82,
                'service_id' => 10,
                'type_id' => 47,
                'name' => 'steelwork_design_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 83,
                'service_id' => 10,
                'type_id' => 48,
                'name' => 'steelwork_design_11',
                'order' => 11,
                'order_dump' => 11,
            ],




            [
                'id' => 84,
                'service_id' => 5,
                'type_id' => 36,
                'name' => 'bim_content_creation_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 85,
                'service_id' => 5,
                'type_id' => 37,
                'name' => 'bim_content_creation_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 86,
                'service_id' => 5,
                'type_id' => 54,
                'name' => 'bim_content_creation_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 87,
                'service_id' => 5,
                'type_id' => 55,
                'name' => 'bim_content_creation_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 88,
                'service_id' => 5,
                'type_id' => 56,
                'name' => 'bim_content_creation_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 89,
                'service_id' => 5,
                'type_id' => 57,
                'name' => 'bim_content_creation_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 90,
                'service_id' => 5,
                'type_id' => 43,
                'name' => 'bim_content_creation_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 91,
                'service_id' => 5,
                'type_id' => 39,
                'name' => 'bim_content_creation_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 92,
                'service_id' => 5,
                'type_id' => 46,
                'name' => 'bim_content_creation_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 93,
                'service_id' => 5,
                'type_id' => 47,
                'name' => 'bim_content_creation_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 94,
                'service_id' => 5,
                'type_id' => 48,
                'name' => 'bim_content_creation_11',
                'order' => 11,
                'order_dump' => 11,
            ],




            [
                'id' => 95,
                'service_id' => 6,
                'type_id' => 36,
                'name' => 'software_development_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 96,
                'service_id' => 6,
                'type_id' => 37,
                'name' => 'software_development_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 97,
                'service_id' => 6,
                'type_id' => 58,
                'name' => 'software_development_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 98,
                'service_id' => 6,
                'type_id' => 56,
                'name' => 'software_development_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 99,
                'service_id' => 6,
                'type_id' => 59,
                'name' => 'software_development_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 100,
                'service_id' => 6,
                'type_id' => 60,
                'name' => 'software_development_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 101,
                'service_id' => 6,
                'type_id' => 61,
                'name' => 'software_development_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 102,
                'service_id' => 6,
                'type_id' => 47,
                'name' => 'software_development_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 103,
                'service_id' => 6,
                'type_id' => 48,
                'name' => 'software_development_9',
                'order' => 9,
                'order_dump' => 9,
            ],








            [
                'id' => 104,
                'service_id' => 11,
                'type_id' => 51,
                'name' => 'bim_structural_engineering_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 105,
                'service_id' => 11,
                'type_id' => 37,
                'name' => 'bim_structural_engineering_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 106,
                'service_id' => 11,
                'type_id' => 10,
                'name' => 'bim_structural_engineering_3',
                'order' => 3,
                'order_dump' => 3,
            ],




            [
                'id' => 107,
                'service_id' => 11,
                'type_id' => 5,
                'name' => 'bim_structural_engineering_4',
                'order' => 4,
                'order_dump' => 4,
            ],




            [
                'id' => 108,
                'service_id' => 11,
                'type_id' => 62,
                'name' => 'bim_structural_engineering_5',
                'order' => 5,
                'order_dump' => 5,
            ],




            [
                'id' => 109,
                'service_id' => 11,
                'type_id' => 63,
                'name' => 'bim_structural_engineering_6',
                'order' => 6,
                'order_dump' => 6,
            ],


            [
                'id' => 110,
                'service_id' => 11,
                'type_id' => 64,
                'name' => 'bim_structural_engineering_7',
                'order' => 7,
                'order_dump' => 7,
            ],


            [
                'id' => 111,
                'service_id' => 11,
                'type_id' => 65,
                'name' => 'bim_structural_engineering_8',
                'order' => 8,
                'order_dump' => 8,
            ],

            [
                'id' => 112,
                'service_id' => 11,
                'type_id' => 8,
                'name' => 'bim_structural_engineering_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 113,
                'service_id' => 11,
                'type_id' => 46,
                'name' => 'bim_structural_engineering_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 114,
                'service_id' => 11,
                'type_id' => 10,
                'name' => 'bim_structural_engineering_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 115,
                'service_id' => 11,
                'type_id' => 47,
                'name' => 'bim_structural_engineering_12',
                'order' => 12,
                'order_dump' => 12,
            ],
            [
                'id' => 116,
                'service_id' => 11,
                'type_id' => 48,
                'name' => 'bim_structural_engineering_13',
                'order' => 13,
                'order_dump' => 13,
            ],




            [
                'id' => 117,
                'service_id' => 12,
                'type_id' => 36,
                'name' => 'scan_to_bim_services_in_uk_1',
                'order' => 1,
                'order_dump' => 1,
            ],
            [
                'id' => 118,
                'service_id' => 12,
                'type_id' => 37,
                'name' => 'scan_to_bim_services_in_uk_2',
                'order' => 2,
                'order_dump' => 2,
            ],
            [
                'id' => 119,
                'service_id' => 12,
                'type_id' => 10,
                'name' => 'scan_to_bim_services_in_uk_3',
                'order' => 3,
                'order_dump' => 3,
            ],
            [
                'id' => 120,
                'service_id' => 12,
                'type_id' => 66,
                'name' => 'scan_to_bim_services_in_uk_4',
                'order' => 4,
                'order_dump' => 4,
            ],
            [
                'id' => 121,
                'service_id' => 12,
                'type_id' => 67,
                'name' => 'scan_to_bim_services_in_uk_5',
                'order' => 5,
                'order_dump' => 5,
            ],
            [
                'id' => 122,
                'service_id' => 12,
                'type_id' => 68,
                'name' => 'scan_to_bim_services_in_uk_6',
                'order' => 6,
                'order_dump' => 6,
            ],
            [
                'id' => 123,
                'service_id' => 12,
                'type_id' => 69,
                'name' => 'scan_to_bim_services_in_uk_7',
                'order' => 7,
                'order_dump' => 7,
            ],
            [
                'id' => 124,
                'service_id' => 12,
                'type_id' => 8,
                'name' => 'scan_to_bim_services_in_uk_8',
                'order' => 8,
                'order_dump' => 8,
            ],
            [
                'id' => 125,
                'service_id' => 12,
                'type_id' => 46,
                'name' => 'scan_to_bim_services_in_uk_9',
                'order' => 9,
                'order_dump' => 9,
            ],
            [
                'id' => 126,
                'service_id' => 12,
                'type_id' => 47,
                'name' => 'scan_to_bim_services_in_uk_10',
                'order' => 10,
                'order_dump' => 10,
            ],
            [
                'id' => 127,
                'service_id' => 12,
                'type_id' => 10,
                'name' => 'scan_to_bim_services_in_uk_11',
                'order' => 11,
                'order_dump' => 11,
            ],
            [
                'id' => 128,
                'service_id' => 12,
                'type_id' => 13,
                'name' => 'scan_to_bim_services_in_uk_12',
                'order' => 12,
                'order_dump' => 12,
            ],
        ]);
    }
}
