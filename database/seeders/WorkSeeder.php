<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            [
                'id' => 1,
                'title' => 'Metallurgy Combine Azovstal',
                'h1' => 'Metallurgy Combine from Ukraine',
                'service' => 'Scan to BIM',
                'slug' => 'metallurgy-combine-azovstal',
                'image' => 'works/Azovstal_1x.webp',
                'image_small' => 'works/Azovstal_small.webp',
                'image_overlay' => 'works/overlay/Azovstal_overlay.webp',
                'content' => '<p><span lang="ru-UA">3D model of part of huge Ukrainian factory Azovstal. The model was created in one month with a team of 4 modelers and 1 Project Manager. As the final result, customer received 2 models with designed views, sheets, and schedules.&nbsp;</span></p>'
            ],
            [
                'id' => 2,
                'title' => 'Northern GZK',
                'h1' => 'Industrial plant - Northern GZK',
                'service' => 'Scan to BIM',
                'slug' => 'northern-gzk',
                'image' => 'works/Northen_CZK_1x.webp',
                'image_small' => 'works/Northen_CZK_small.webp',
                'image_overlay' => 'works/overlay/Northen_CZK_overlay.webp',
                'content' => '<p><span lang="ru-UA">3D model of part of huge Ukrainian factory NGZK. The model was created in one month with a team of 3 modelers and 1 Project Manager. As the final result, the customer received a model with designed views, sheets, and schedules.&nbsp;</span></p>'
            ],
            [
                'id' => 3,
                'title' => 'Landscape 25Ga',
                'h1' => 'Landscape of the industrial territory',
                'service' => 'Scan to BIM',
                'slug' => 'landscape-25ga',
                'image' => 'works/Landscape_1x.webp',
                'image_small' => 'works/Landscape_small.webp',
                'image_overlay' => 'works/overlay/Landscape_overlay.webp',
                'content' => '<p><span lang="ru-UA">3D model of part of a huge industrial territory. The model was created in one month with a team of 2 modelers and 1 Project Manager. As the final result, the customer received a detailed 3D model according to all his requirements.&nbsp;</span></p>'
            ],
            [
                'id' => 4,
                'title' => 'Hypermarket Building',
                'h1' => 'Hypermarket Billa',
                'service' => 'Scan to BIM',
                'slug' => 'hypermarket-building',
                'image' => 'works/Hypermarket_1x.webp',
                'image_small' => 'works/Hypermarket_small.webp',
                'image_overlay' => 'works/overlay/Hypermarket_overlay.webp',
                'content' => '<p><span lang="ru-UA">3D model of part of hypermarket. The model was created in two weeks with a team of 2 modelers and 1 Project Manager. As the final result, a customer received a detailed 3D model with designed views and sheets.&nbsp;</span></p>'
            ],
            [
                'id' => 5,
                'title' => 'Kontorska 15',
                'h1' => 'Residential building Kontorska 15',
                'service' => 'BIM modeling',
                'slug' => 'kontorska-15',
                'image' => 'works/Kontorska_1x.webp',
                'image_small' => 'works/Kontorska_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">3D model of residential building in Kharkiv, Ukraine. It was our conceptual project of new 6 floors building in old historical city area. First two floors must be commercial, after residential floors with flats. In the top floor we have modeled big penthouse flat. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 6,
                'title' => 'Office',
                'h1' => 'Concept: Business office',
                'service' => 'BIM modeling',
                'slug' => 'office',
                'image' => 'works/Office_1x.webp',
                'image_small' => 'works/Office_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">The main idea of shape is to allow sunbeams access for neighbor building and make as much office area as it possible, because of the high price of earth. Lot of office have their own big open terraces. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 7,
                'title' => 'Villa in the forest',
                'h1' => 'Concept: Villa in thr Forest',
                'service' => 'BIM modeling',
                'slug' => 'villa-in-the-forest',
                'image' => 'works/Villa_1x.webp',
                'image_small' => 'works/Villa_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">3D model of residential house for big family. Project contains big living room, 3 bedrooms, 4 bath and Spa zone. We placed big terrace with fireplace and pool. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 8,
                'title' => 'Rooftop',
                'h1' => 'Steel structures with equipment',
                'service' => 'Telecom',
                'slug' => 'rooftop',
                'image' => 'works/Rooftop_1x.webp',
                'image_small' => 'works/Rooftop_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">Modeling of the building by point cloud. Modeling of 2 steel structures with equipment (Antennas, RRU, cabinets) for 3 sectors and cable trays between them. Safety objects. Production drawings&nbsp;</span></p>'
            ],
            [
                'id' => 9,
                'title' => 'Tower',
                'h1' => 'Steel tower with equipment supports',
                'service' => 'Telecom',
                'slug' => 'tower',
                'image' => 'works/Towe_1x.webp',
                'image_small' => 'works/Tower_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">Modeling of the tower with equipment supports at the top. Analytical model. Equipment. Cable trays. Safety objects. The area around the tower&nbsp;</span></p>'
            ],
            [
                'id' => 10,
                'title' => 'Balfour at Palisades',
                'h1' => 'Balfour at Palisades',
                'service' => 'MEP modeling',
                'slug' => 'balfour-at-palisades',
                'image' => 'works/Balfour_at_Palisades.webp',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">Balfour Palisades is a boutique residence designed for discerning seniors who relish tranquility in the city. This was a complex and challenging project that required coordinating HVAC systems, fabricating, creating spool sheets and shop drawings.&nbsp;</span></p>'
            ],
            [
                'id' => 11,
                'title' => 'The Stacks Part B',
                'h1' => 'The Stacks Part B',
                'service' => 'MEP modeling',
                'slug' => 'the-stacks-part-b',
                'image' => 'works/The_Stacks_Part_B.webp',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">The Stacks is an energetic multi-use development in DC set in the heart of the iconic Buzzard Point district. The enormous scale of this project was the biggest challenges that the team faced during fabrication, coordination and production shop drawings. This required a high level of coordination between team members, as well as effective communication with other teams  involved in the project.&nbsp;</span></p>'
            ],
            [
                'id' => 12,
                'title' => 'Reston Gateway Block C Hotel',
                'h1' => 'Reston Gateway Block C Hotel',
                'service' => 'MEP modeling',
                'slug' => 'reston-gateway-block-c-hotel',
                'image' => 'works/Reston_Gateway_Block_C_Hotel.webp',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA">The dual branded AC Hotel and Residence Inn are an integral part of the 4.8 million square feet of new mixed-use development at the north entrance to the Reston Town Center Metro Station. One of the biggest challenges that the team faced was the tight deadlines. Despite this, the team was able to stay focused and organized, and ultimately completed all work.&nbsp;</span></p>'
            ],
        ]);
    }
}
