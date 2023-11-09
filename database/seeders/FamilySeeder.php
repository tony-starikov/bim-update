<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('families')->insert([
            [
                'title_en' => 'Communication Device LineArray',
                'slug' => 'communication-device-line-array',
                'description_en' => "",
                'image' => 'families/communication_device_line_array.jpg',
                'file' => 'families/communication_device_line_array.zip',
            ],
            [
                'title_en' => 'Furniture Audience Seatings',
                'slug' => 'furniture-audience-seatings',
                'description_en' => "",
                'image' => 'families/furniture_audience_seatings.jpg',
                'file' => 'families/furniture_audience_seatings.zip',
            ],
            [
                'title_en' => 'Smoke Detector',
                'slug' => 'smoke-detector',
                'description_en' => "",
                'image' => 'families/smoke_detector.jpg',
                'file' => 'families/smoke_detector.zip',
            ],
        ]);
    }
}
