<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoonshineUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('moonshine_users')->insert([
            [
                'id' => 1,
                'moonshine_user_role_id' => 1,
                'email' => 'bi.denis.work@gmail.com',
                'password' => '$2y$10$pntwxXHHol48aw.vQjhlcO1JK5cpHb8DbH.J7anKxyGHwhVQbgaF6',
                'name' => 'Admin_1',
            ],
        ]);
    }
}
