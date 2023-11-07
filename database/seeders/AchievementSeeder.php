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
                'title_en' => '7',
                'subtitle_en' => 'YEARS EXPERIENCE',
                'image' => 'achievements/achievement_3-min.png',
            ],
            [
                'title_en' => '1100+',
                'subtitle_en' => 'COMPLETED PROJECTS',
                'image' => 'achievements/achievement_4-min.png',
            ],
            [
                'title_en' => '80%',
                'subtitle_en' => 'CLIENTS STAY WITH US',
                'image' => 'achievements/achievement_2-min.png',
            ],
            [
                'title_en' => '500+',
                'subtitle_en' => 'DESIGNED FAMILIES',
                'image' => 'achievements/achievement_6-min.png',
            ],
        ]);
    }
}
