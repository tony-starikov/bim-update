<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('item_types')->insert([
            [
                'id' => 1,
                'name' => 'text',
            ],
            [
                'id' => 2,
                'name' => 'image',
            ],
            [
                'id' => 3,
                'name' => 'url',
            ],
            [
                'id' => 4,
                'name' => 'text_editor',
            ],
        ]);
    }
}
