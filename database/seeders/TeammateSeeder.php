<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeammateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teammates')->insert([
            [
                'name_en' => 'Vitaliy',
                'surname_en' => 'Vinogradov',
                'position_en' => 'CEO',
                'image' => 'teammates/Vitaly_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/vitaliy-vynogradov/',
            ],
            [
                'name_en' => 'Kseniya',
                'surname_en' => 'Kutsenko',
                'position_en' => 'Director of Scan to BIM',
                'image' => 'teammates/Kseniya_1x_2.png',
                'linkedin_url' => 'https://www.linkedin.com/in/kseniya-kutsenko-0ab737216/',
            ],
            [
                'name_en' => 'Anton',
                'surname_en' => 'Yakushenko',
                'position_en' => 'Director of Telecommunications Design',
                'image' => 'teammates/Anton_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/anton-yakushenko-81b951214/',
            ],
            [
                'name_en' => 'Nikita',
                'surname_en' => 'Snizhko',
                'position_en' => 'Director of development department',
                'image' => 'teammates/Nikita_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/nikita-snizhko/',
            ],
            [
                'name_en' => 'Yurii',
                'surname_en' => 'Kupshinskiy',
                'position_en' => 'Project Manager',
                'image' => 'teammates/Yurii_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/yurii-kupchynskyi-0a634b217/',
            ],
            [
                'name_en' => 'Denis',
                'surname_en' => 'Moshenskyi',
                'position_en' => 'Director of MEP Coordination and Fabrication department',
                'image' => 'teammates/Denis_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/denys-moshenskyi/',
            ],
            [
                'name_en' => 'Olga',
                'surname_en' => 'Vynogradova',
                'position_en' => 'Director of Operations',
                'image' => 'teammates/Olga_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/olgavynogradova/',
            ],
            [
                'name_en' => 'Tetiana',
                'surname_en' => 'Budko',
                'position_en' => 'Project Manager',
                'image' => 'teammates/Tetiana_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/tetiana-budko-885959249/',
            ],
            [
                'name_en' => 'Renata',
                'surname_en' => 'Symonian',
                'position_en' => 'Project Manager',
                'image' => 'teammates/Renata_1x.png',
                'linkedin_url' => 'https://www.linkedin.com/in/renata-symonian-994a27249/',
            ],
        ]);
    }
}
