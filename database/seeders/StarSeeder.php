<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stars')->insert([
            [
                'title_en' => 'Highing quality',
                'description_en' => 'Forget about problems in the project: violation of deadlines and poor quality, etc.',
                'image' => 'stars/star_image_1.png',
                'image_small' => 'stars/small_star_image_1.svg',
                'image_big' => 'stars/big_quality.png',
            ],
            [
                'title_en' => 'Communication and reporting',
                'description_en' => 'Customized managers for every project. Daily/weekly reports.',
                'image' => 'stars/star_image_2.png',
                'image_small' => 'stars/small_star_image_2.svg',
                'image_big' => 'stars/big_communication.png',
            ],
            [
                'title_en' => 'Non-standard tasks solutions',
                'description_en' => 'Our experience and expertise provide solutions to unique and complex challenges.',
                'image' => 'stars/star_image_3.png',
                'image_small' => 'stars/small_star_image_3.svg',
                'image_big' => 'stars/big_solutions.png',
            ],
            [
                'title_en' => 'Quick project adjustment',
                'description_en' => 'Operational response to changes in the project. Quick and seamless adjustments.',
                'image' => 'stars/star_image_4.png',
                'image_small' => 'stars/small_star_image_4.svg',
                'image_big' => 'stars/big_adjustment.png',
            ],
            [
                'title_en' => 'Efficient workflow',
                'description_en' => 'Efficiency in everything. A properly configured workflow that minimizes project risks.',
                'image' => 'stars/star_image_5.png',
                'image_small' => 'stars/small_star_image_5.svg',
                'image_big' => 'stars/big_help.png',
            ],
            [
                'title_en' => 'Contact',
                'description_en' => 'Contact',
                'image' => ' ',
                'image_small' => ' ',
                'image_big' => ' ',
            ],
        ]);
    }
}
