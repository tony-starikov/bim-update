<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menu_items')->insert([
            [
                'item_name' => 'Home',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Services',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Portfolio',
                'show_status' => '1',
            ],
            [
                'item_name' => 'About',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Blog',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Products',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Team',
                'show_status' => '1',
            ],
            [
                'item_name' => 'Career',
                'show_status' => '0',
            ],
        ]);
    }
}
