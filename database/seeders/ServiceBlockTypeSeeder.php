<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceBlockTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_block_types')->insert([
            [
                'id' => 1,
                'name' => 'scan_to_bim_1',
            ],
            [
                'id' => 2,
                'name' => 'scan_to_bim_2',
            ],
            [
                'id' => 3,
                'name' => 'scan_to_bim_3',
            ],
            [
                'id' => 4,
                'name' => 'scan_to_bim_4',
            ],
            [
                'id' => 5,
                'name' => 'scan_to_bim_5',
            ],
            [
                'id' => 6,
                'name' => 'scan_to_bim_6',
            ],
            [
                'id' => 7,
                'name' => 'scan_to_bim_7',
            ],
            [
                'id' => 8,
                'name' => 'scan_to_bim_8',
            ],
            [
                'id' => 9,
                'name' => 'scan_to_bim_9',
            ],
            [
                'id' => 10,
                'name' => 'scan_to_bim_10',
            ],
            [
                'id' => 11,
                'name' => 'scan_to_bim_11',
            ],
            [
                'id' => 12,
                'name' => 'scan_to_bim_12',
            ],
            [
                'id' => 13,
                'name' => 'scan_to_bim_13',
            ],
            [
                'id' => 14,
                'name' => 'mep_coordination_1',
            ],
            [
                'id' => 15,
                'name' => 'mep_coordination_2',
            ],
            [
                'id' => 16,
                'name' => 'mep_coordination_3',
            ],
            [
                'id' => 17,
                'name' => 'mep_coordination_4',
            ],
            [
                'id' => 18,
                'name' => 'mep_coordination_5',
            ],
            [
                'id' => 19,
                'name' => 'mep_coordination_6',
            ],
            [
                'id' => 20,
                'name' => 'mep_coordination_7',
            ],
            [
                'id' => 21,
                'name' => 'mep_coordination_8',
            ],
            [
                'id' => 22,
                'name' => 'mep_coordination_9',
            ],
            [
                'id' => 23,
                'name' => 'mep_coordination_10',
            ],
            [
                'id' => 24,
                'name' => 'mep_coordination_11',
            ],
            [
                'id' => 25,
                'name' => 'telecom_design_1',
            ],
            [
                'id' => 26,
                'name' => 'telecom_design_2',
            ],
            [
                'id' => 27,
                'name' => 'telecom_design_3',
            ],
            [
                'id' => 28,
                'name' => 'telecom_design_4',
            ],
            [
                'id' => 29,
                'name' => 'telecom_design_5',
            ],
            [
                'id' => 30,
                'name' => 'telecom_design_6',
            ],
            [
                'id' => 31,
                'name' => 'telecom_design_7',
            ],
            [
                'id' => 32,
                'name' => 'telecom_design_8',
            ],
            [
                'id' => 33,
                'name' => 'telecom_design_9',
            ],
            [
                'id' => 34,
                'name' => 'telecom_design_10',
            ],
            [
                'id' => 35,
                'name' => 'telecom_design_11',
            ],
            [
                'id' => 36,
                'name' => 'mep_bim_modeling_1',
            ],
            [
                'id' => 37,
                'name' => 'mep_bim_modeling_2',
            ],
            [
                'id' => 38,
                'name' => 'mep_bim_modeling_3',
            ],
            [
                'id' => 39,
                'name' => 'mep_bim_modeling_4',
            ],
            [
                'id' => 40,
                'name' => 'mep_bim_modeling_5',
            ],
            [
                'id' => 41,
                'name' => 'mep_bim_modeling_6',
            ],
            [
                'id' => 42,
                'name' => 'mep_bim_modeling_7',
            ],
            [
                'id' => 43,
                'name' => 'mep_bim_modeling_8',
            ],
            [
                'id' => 44,
                'name' => 'mep_bim_modeling_9',
            ],
            [
                'id' => 45,
                'name' => 'mep_bim_modeling_10',
            ],
            [
                'id' => 46,
                'name' => 'mep_bim_modeling_11',
            ],
            [
                'id' => 47,
                'name' => 'mep_bim_modeling_12',
            ],
            [
                'id' => 48,
                'name' => 'mep_bim_modeling_13',
            ],
            [
                'id' => 49,
                'name' => 'mep_bim_coordination_6',
            ],
            [
                'id' => 50,
                'name' => 'mep_bim_fabrication_7',
            ],
            [
                'id' => 51,
                'name' => 'steelwork_design_1',
            ],
            [
                'id' => 52,
                'name' => 'steelwork_design_4',
            ],
            [
                'id' => 53,
                'name' => 'steelwork_design_6',
            ],
            [
                'id' => 54,
                'name' => 'bim_content_creation_3',
            ],
            [
                'id' => 55,
                'name' => 'bim_content_creation_4',
            ],
            [
                'id' => 56,
                'name' => 'bim_content_creation_5',
            ],
            [
                'id' => 57,
                'name' => 'bim_content_creation_6',
            ],
            [
                'id' => 58,
                'name' => 'software_development_3',
            ],
            [
                'id' => 59,
                'name' => 'software_development_5',
            ],
            [
                'id' => 60,
                'name' => 'software_development_6',
            ],
            [
                'id' => 61,
                'name' => 'software_development_7',
            ],
            [
                'id' => 62,
                'name' => 'bim_structural_engineering_5',
            ],
            [
                'id' => 63,
                'name' => 'bim_structural_engineering_6',
            ],
            [
                'id' => 64,
                'name' => 'bim_structural_engineering_7',
            ],
            [
                'id' => 65,
                'name' => 'bim_structural_engineering_8',
            ],
        ]);
    }
}
