<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pages')->insert([
            [
                'name' => 'main',
                'canonical' => 'https://bim-prove.com',
            ],
            [
                'name' => 'contact',
                'canonical' => 'https://bim-prove.com/contact',
            ],
            [
                'name' => 'thank-you-page',
                'canonical' => 'https://bim-prove.com/thank-you-page',
            ],
            [
                'name' => 'blog',
                'canonical' => 'https://bim-prove.com/blog',
            ],
            [
                'name' => 'plugins',
                'canonical' => 'https://bim-prove.com/products/plugins',
            ],
            [
                'name' => 'families',
                'canonical' => 'https://bim-prove.com/products/families',
            ],
            [
                'name' => 'scan-to-bim-estimates-project',
                'canonical' => 'https://bim-prove.com/scan-to-bim-estimates-project',
            ],
            [
                'name' => 'estimates-project-scan-to-bim',
                'canonical' => 'https://bim-prove.com/estimates-project-scan-to-bim',
            ],
            [
                'name' => 'mep-estimates-project',
                'canonical' => 'https://bim-prove.com/mep-estimates-project',
            ],
            [
                'name' => 'estimates-project-mep',
                'canonical' => 'https://bim-prove.com/estimates-project-mep',
            ],
            [
                'name' => 'portfolio',
                'canonical' => 'https://bim-prove.com/portfolio',
            ],
            [
                'name' => 'services',
                'canonical' => 'https://bim-prove.com/services',
            ],

//            [
//                'name' => 'policy',
//                'canonical' => '',
//            ],
        ]);
    }
}
