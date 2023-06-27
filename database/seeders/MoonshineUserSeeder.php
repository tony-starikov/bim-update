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
                'email' => 'admin@mail.com',
                'password' => '$2y$10$81cnEluwP.qr9WN33WMMMe70f0xjMvC.5iZ6Dm8KEqEhnRRa4I8eW',
                'name' => 'Admin',
            ],
        ]);
    }
}
