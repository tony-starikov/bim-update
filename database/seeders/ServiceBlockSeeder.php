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
        ]);
    }
}
