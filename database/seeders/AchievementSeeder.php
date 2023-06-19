<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievements')->insert([
            [
                'title_en' => '60+',
                'subtitle_en' => 'CONTENTED CUSTOMERS',
                'image' => 'achievements/achievement_1.png',
            ],
            [
                'title_en' => '80%',
                'subtitle_en' => 'CLIENTS STAY WITH US',
                'image' => 'achievements/achievement_2.png',
            ],
            [
                'title_en' => '7',
                'subtitle_en' => 'YEARS EXPERIENCE',
                'image' => 'achievements/achievement_3.png',
            ],
            [
                'title_en' => '1100+',
                'subtitle_en' => 'COMPLETED PROJECTS',
                'image' => 'achievements/achievement_4.png',
            ],
            [
                'title_en' => '35+',
                'subtitle_en' => 'SKILLED EMPLOYEES',
                'image' => 'achievements/achievement_5.png',
            ],
            [
                'title_en' => '500+',
                'subtitle_en' => 'DESIGNED FAMILIES',
                'image' => 'achievements/achievement_6.png',
            ],
        ]);
    }
}
