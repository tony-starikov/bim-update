<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PluginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plugins')->insert([
            [
                'title_en' => 'Auto Join In View',
                'description_en' => "
                    Automatic join all elements of selected categories within the active view. This process eliminates overlapping or intersecting elements.
                ",
                'video_url' => 'https://www.youtube.com/embed/PkCfyuYJ6PM',
                'image' => 'plugins/AutoJoinInView.jpg',
                'logo' => 'plugins/AutoJoinInView.png',
                'file' => 'plugins/AutoJoinInView_D2.6.1_R21.zip',
                'slug' => 'auto-join-in-view'
            ],
            [
                'title_en' => 'Columns To Grids Intersection',
                'description_en' => "
                    Isolating columns in the active view that are not placed on the grids' intersection. This script can help architects, engineers, and other professionals.
                ",
                'video_url' => 'https://www.youtube.com/embed/wzEeTXwmarU',
                'image' => 'plugins/ColumnsToGridsIntersection.jpg',
                'logo' => 'plugins/ColumnsToGridsIntersection.png',
                'file' => 'plugins/ColumnsToGridsIntersection_D2.6.1_R21.zip',
                'slug' => 'columns-to-grids-intersection'
            ],
            [
                'title_en' => 'Align MEP',
                'description_en' => "
                    Automate the process of relocating MEP elements with a selected distance. This script can help architects, engineers, and other professionals.
                ",
                'video_url' => 'https://www.youtube.com/embed/1MO65376abU',
                'image' => 'plugins/AlignMEP.jpg',
                'logo' => 'plugins/AlignMEP.png',
                'file' => 'plugins/AlignMEP_D2.6.1_R21.zip',
                'slug' => 'align-mep'
            ],
        ]);
    }
}
