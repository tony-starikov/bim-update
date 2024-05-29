<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'id' => 1,
                'name' => 'social_1',
                'info' => 'https://www.linkedin.com/company/bimprove',
                'image' => 'social/linkedin.svg',
            ],
            [
                'id' => 2,
                'name' => 'social_2',
                'info' => 'https://www.instagram.com/bimprove/',
                'image' => 'social/instagram.svg',
            ],
            [
                'id' => 3,
                'name' => 'social_3',
                'info' => 'https://www.facebook.com/bimproveworld',
                'image' => 'social/facebook.svg',
            ],
            [
                'id' => 4,
                'name' => 'social_4',
                'info' => 'https://www.youtube.com/channel/UCV1vjjoglXxiC_t2yH9VD-A',
                'image' => 'social/youtube.svg',
            ],
            [
                'id' => 5,
                'name' => 'phone',
                'info' => '+447490493720',
                'image' => '',
            ],
            [
                'id' => 6,
                'name' => 'email',
                'info' => 'info@bim-prove.com',
                'image' => '',
            ],
        ]);
    }
}
