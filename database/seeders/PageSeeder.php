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
                'id' => 1,
                'name' => 'main',
            ],
            [
                'id' => 2,
                'name' => 'blog',
            ],
            [
                'id' => 3,
                'name' => 'contacts',
            ],
            [
                'id' => 4,
                'name' => 'products',
            ],
            [
                'id' => 5,
                'name' => 'families',
            ],
            [
                'id' => 6,
                'name' => 'policy',
            ],
        ]);
    }
}
