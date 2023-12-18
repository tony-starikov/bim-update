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
                'logo' => 'plugins/AutoJoinInView.png',
                'file' => 'plugins/AutoJoinInView_D2.6.1_R21.zip',
                'slug' => 'auto-join-in-view'
            ],
            [
                'title_en' => 'Columns To Grids Intersection',
                'description_en' => "
                    Isolating columns in the active view that are not placed on the grids' intersection. This script can help architects, engineers, and other professionals.
                ",
                'logo' => 'plugins/ColumnsToGridsIntersection.png',
                'file' => 'plugins/ColumnsToGridsIntersection_D2.6.1_R21.zip',
                'slug' => 'columns-to-grids-intersection'
            ],
            [
                'title_en' => 'Align MEP',
                'description_en' => "
                    Automate the process of relocating MEP elements with a selected distance. This script can help architects, engineers, and other professionals.
                ",
                'logo' => 'plugins/AlignMEP.png',
                'file' => 'plugins/AlignMEP_D2.6.1_R21.zip',
                'slug' => 'align-mep'
            ],
            [
                'title_en' => 'Wall Attachment Verifier',
                'description_en' => "
                    Verifies the connection of walls to roofs and floors in Revit models. This script identifies and isolates walls not correctly attached, aiding in easy inspection and correction.
                ",
                'logo' => 'plugins/wall-attachment-verifier.webp',
                'file' => 'plugins/BP_WallAttachmentVerifier_D2.6.1_R21.zip',
                'slug' => 'wall-attachment-verifier'
            ],
            [
                'title_en' => 'Batch Import DWGs',
                'description_en' => "
                    Automates the import of multiple DWG files into Revit views. This script enables the quick and consistent loading of numerous drawings, significantly reducing manual effort and time.
                ",
                'logo' => 'plugins/batch-import-dwgs.webp',
                'file' => 'plugins/BP_BatchImportDWGs_D2.6.1_R21.zip',
                'slug' => 'batch-import-dwgs'
            ],
            [
                'title_en' => 'Wall Core Grid Matcher',
                'description_en' => "
                    Evaluates structural core layers in selected wall types against Revit grid lines. This script detects and isolates walls and grids where the centerlines of structural core layers fail to align with grid lines.
                ",
                'logo' => 'plugins/wall-core-grid-matcher.webp',
                'file' => 'plugins/BP_WallCoreCLvsGrids_D2.6.1_R21.zip',
                'slug' => 'wall-core-grid-matcher'
            ],
        ]);
    }
}
