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
                'image' => 'families/Communication-Device_LineArray.jpg',
                'file' => 'families/communication_device_line_array.zip',
            ],
            [
                'title_en' => 'Furniture Audience Seatings',
                'slug' => 'furniture-audience-seatings',
                'description_en' => "",
                'image' => 'families/Furniture_Audience-Seatings.jpg',
                'file' => 'families/furniture_audience_seatings.zip',
            ],
            [
                'title_en' => 'Smoke Detector',
                'slug' => 'smoke-detector',
                'description_en' => "",
                'image' => 'families/Smoke-Detector.jpg',
                'file' => 'families/smoke_detector.zip',
            ],
            [
                'title_en' => 'Doors Sliding Outswing',
                'slug' => 'doors-sliding-outswing',
                'description_en' => "",
                'image' => 'families/Doors_Sliding_Outswing_Series-9950.jpg',
                'file' => 'families/Doors_Sliding_Outswing_Series-9950.zip',
            ],
            [
                'title_en' => 'Duct Accessories Plastic',
                'slug' => 'duct-accessories-plastic',
                'description_en' => "",
                'image' => 'families/Duct-Accessories_Plastic-dryer-vent-box-with-trim-ring_DBX1000.jpg',
                'file' => 'families/Duct-Accessories_Plastic-dryer-vent-box-with-trim-ring_DBX1000.zip',
            ],
            [
                'title_en' => 'Electronics Networking Catalyst',
                'slug' => 'electronics-networking-catalyst',
                'description_en' => "",
                'image' => 'families/Electronics_Networking_Catalyst-9410-switch.jpg',
                'file' => 'families/Electronics_Networking_Catalyst-9410-switch.zip',
            ],
            [
                'title_en' => 'Engineering Infrastructure Parking Barrier',
                'slug' => 'engineering-infrastructure-parking-barrier',
                'description_en' => "",
                'image' => 'families/Engineering-Infrastructure_Parking-barrier.jpg',
                'file' => 'families/Engineering-Infrastructure_Parking-barrier.zip',
            ],
            [
                'title_en' => 'Furniture Meeting Room',
                'slug' => 'furniture-meeting-room',
                'description_en' => "",
                'image' => 'families/Furniture_Meeting-Room.jpg',
                'file' => 'families/Furniture_Meeting-Room.zip',
            ],
            [
                'title_en' => 'HVAC Fireplace Gas Stove',
                'slug' => 'hvac-fireplace-gas-stove',
                'description_en' => "",
                'image' => 'families/HVAC_Fireplace_Gas-Stove.jpg',
                'file' => 'families/HVAC_Fireplace_Gas-Stove.zip',
            ],
            [
                'title_en' => 'HVAC Fireplaces Gas Fireplace',
                'slug' => 'hvac-fireplaces-gas-fireplace',
                'description_en' => "",
                'image' => 'families/HVAC_Fireplaces_Gas-Fireplace.jpg',
                'file' => 'families/HVAC_Fireplaces_Gas-Fireplace.zip',
            ],
            [
                'title_en' => 'Loading Equipment Level Roto',
                'slug' => 'loading-equipment-level-roto',
                'description_en' => "",
                'image' => 'families/Loading-Equipment_Level-Roto.jpg',
                'file' => 'families/Loading-Equipment_Level-Roto.zip',
            ],
            [
                'title_en' => 'Windows Opening Hinge Series',
                'slug' => 'windows-opening-hinge-series',
                'description_en' => "",
                'image' => 'families/Windows_Opening-Hinge_Series-515.jpg',
                'file' => 'families/Windows_Opening-Hinge_Series-515.zip',
            ],
        ]);
    }
}
