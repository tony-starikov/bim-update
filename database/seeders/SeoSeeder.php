<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seo')->insert([
            [
                'id' => 1,
                'url' => '/',
                'title' => 'Main | BIMprove',
                'description' => 'Description',
                'keywords' => 'Keywords',
                'text' => '',
            ],
        ]);
    }
}
