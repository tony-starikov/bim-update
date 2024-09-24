<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceMenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('service_menu_items')->insert([
            [
                'id' => 1,
                'title_en' => 'MEP BIM SERVICES',
                'order' => '10',
            ],
            [
                'id' => 2,
                'title_en' => 'Steelwork Design',
                'order' => '20',
            ],
            [
                'id' => 3,
                'title_en' => 'Scan to BIM',
                'order' => '30',
            ],
            [
                'id' => 4,
                'title_en' => 'BIM modeling',
                'order' => '40',
            ],
            [
                'id' => 5,
                'title_en' => 'BIM content creation',
                'order' => '50',
            ],
            [
                'id' => 6,
                'title_en' => 'Software development',
                'order' => '60',
            ],
        ]);
    }
}
