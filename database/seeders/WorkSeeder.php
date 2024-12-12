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
                'title' => 'A Ukrainian metallurgical plant',
                'slug' => 'ukrainian-metallurgical-plant',
                'service' => 'Scan to BIM',
                'department' => 'scan-to-bim',
                'image' => 'works/metallurgy-combine-from-ukraine.webp',
                'images' => '["works_images\/Metallurgy_Combine_from_Ukraine_Type_1.webp","works_images\/Metallurgy_Combine_from_Ukraine_Type_2.webp","works_images\/Metallurgy_Combine_from_Ukraine_Type_3.webp","works_images\/Metallurgy_Combine_from_Ukraine_Type_4.webp","works_images\/Metallurgy_Combine_from_Ukraine_Type_5.webp","works_images\/Metallurgy_Combine_from_Ukraine_Type_6.webp"]',
                'image_small' => 'works/Azovstal_small.webp',
                'image_overlay' => 'works/overlay/Azovstal_overlay.webp',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 300<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">38950m2</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Structure, MEPF</span></span></p><p><span lang="ru-UA">3D model of part of huge Ukrainian factory Azovstal. The model was created in one month with a team of 4 modelers and 1 Project Manager. As the final result, customer received 2 models with designed views, sheets, and schedules.&nbsp;</span></p>'
            ],
            [
                'id' => 2,
                'title' => 'Industrial plant - Northern GZK',
                'slug' => 'industrial-plant-northern-gzk',
                'service' => 'Scan to BIM',
                'department' => 'scan-to-bim',
                'image' => 'works/Industrial plant Northern GZK Type.webp',
                'images' => '["works_images\/Industrial plant Northern GZK.webp","works_images\/Industrial plant Northern GZK Type 1.webp","works_images\/Industrial plant Northern GZK Type 2.webp"]',
                'image_small' => 'works/Northen_CZK_small.webp',
                'image_overlay' => 'works/overlay/Northen_CZK_overlay.webp',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 300<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">32100m2</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Structure, MEPF</span></span></p><p><span lang="ru-UA">3D model of part of huge Ukrainian factory NGZK. The model was created in one month with a team of 3 modelers and 1 Project Manager. As the final result, the customer received a model with designed views, sheets, and schedules.&nbsp;</span></p>'
            ],
            [
                'id' => 3,
                'title' => 'Landscape of the industrial territory',
                'slug' => 'landscape-of-the-industrial-territory',
                'service' => 'Scan to BIM',
                'department' => 'scan-to-bim',
                'image' => 'works/Landscape of the industrial territory 1.webp',
                'images' => '["works_images\/Landscape of the industrial territory Type 1.webp","works_images\/Landscape of the industrial territory Type 2.webp"]',
                'image_small' => 'works/Landscape_small.webp',
                'image_overlay' => 'works/overlay/Landscape_overlay.webp',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 300<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">250000m2</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Topography, Exterior of Buildings</span></span></p><p><span lang="ru-UA">3D model of part of a huge industrial territory. The model was created in one month with a team of 2 modelers and 1 Project Manager. As the final result, the customer received a detailed 3D model according to all his requirements.&nbsp;</span></p>'
            ],
            [
                'id' => 4,
                'title' => 'Hypermarket Billa',
                'slug' => 'hypermarket-billa',
                'service' => 'Scan to BIM',
                'department' => 'scan-to-bim',
                'image' => 'works/Hypermarket Billa Type 1.1.webp',
                'images' => '["works_images\/Hypermarket Billa.webp","works_images\/Hypermarket Billa Type 1.webp","works_images\/Hypermarket Billa Type 2.1.webp","works_images\/Hypermarket Billa Type 2.webp","works_images\/Hypermarket Billa Type 3.webp","works_images\/Hypermarket Billa Type 4.webp","works_images\/Hypermarket Billa Type 5.webp","works_images\/Hypermarket Billa Type 6.webp"]',
                'image_small' => 'works/Hypermarket_small.webp',
                'image_overlay' => 'works/overlay/Hypermarket_overlay.webp',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 300<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">7340m2</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Architecture, Structure, MEPF</span></span></p><p><span lang="ru-UA">3D model of part of hypermarket. The model was created in two weeks with a team of 2 modelers and 1 Project Manager. As the final result, a customer received a detailed 3D model with designed views and sheets.&nbsp;</span></p>'
            ],
            [
                'id' => 5,
                'title' => 'Residential building Kontorska 15',
                'slug' => 'residential-building-kontorska-15',
                'service' => 'BIM modeling',
                'department' => '',
                'image' => 'works/Kontorska_1x.webp',
                'images' => '',
                'image_small' => 'works/Kontorska_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 300<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">2100m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">6</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Residential Building</span></span></p><p><span lang="ru-UA">3D model of residential building in Kharkiv, Ukraine. It was our conceptual project of new 6 floors building in old historical city area. First two floors must be commercial, after residential floors with flats. In the top floor we have modeled big penthouse flat. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 6,
                'title' => 'Concept: Business office',
                'slug' => 'concept-business-office',
                'service' => 'BIM modeling',
                'department' => '',
                'image' => 'works/Office_1x.webp',
                'images' => '',
                'image_small' => 'works/Office_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 350<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">1400m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">6</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Residential Building</span></span></p><p><span lang="ru-UA">The main idea of shape is to allow sunbeams access for neighbor building and make as much office area as it possible, because of the high price of earth. Lot of office have their own big open terraces. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 7,
                'title' => 'Concept: Villa in thr Forest',
                'slug' => 'concept-villa-in-the-forest',
                'service' => 'BIM modeling',
                'department' => '',
                'image' => 'works/Villa_1x.webp',
                'images' => '',
                'image_small' => 'works/Villa_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 350<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">170m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">1</span><br></span></p><p><span lang="ru-UA"><span style="white-space: pre-wrap;"><strong>Disciplines:</strong> Residential Building</span></span></p><p><span lang="ru-UA">3D model of residential house for big family. Project contains big living room, 3 bedrooms, 4 bath and Spa zone. We placed big terrace with fireplace and pool. We produced Architecture model, some renders and drawings for presentation.&nbsp;</span></p>'
            ],
            [
                'id' => 8,
                'title' => 'Steel structures with equipment',
                'slug' => 'steel-structures-with-equipment',
                'service' => 'Telecom design',
                'department' => '',
                'image' => 'works/Steel structures with equipment.webp',
                'images' => '["works_images\/Steel structures with equipment Type 1.webp","works_images\/Steel structures with equipment Type 2.webp","works_images\/Steel structures with equipment Type 3.webp","works_images\/Steel structures with equipment Type 4.webp","works_images\/Steel structures with equipment Type 5.webp","works_images\/Steel structures with equipment Type 6.webp","works_images\/Steel structures with equipment Type 7.webp"]',
                'image_small' => 'works/Rooftop_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Time:</span></strong> 55h<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Structure LOD:</span></strong> <span style="white-space: pre-wrap;">500</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Equipment LOD:</span></strong> <span style="white-space: pre-wrap;">500</span><br></span></p><p><span lang="ru-UA">Modeling of the building by point cloud. Modeling of 2 steel structures with equipment (Antennas, RRU, cabinets) for 3 sectors and cable trays between them. Safety objects. Production drawings&nbsp;</span></p>'
            ],
            [
                'id' => 9,
                'title' => 'Steel tower with equipment supports',
                'slug' => 'steel-tower-with-equipment-supports',
                'service' => 'Telecom design',
                'department' => '',
                'image' => 'works/Steel tower with equipment supports.webp',
                'images' => '["works_images\/Steel tower with equipment supports Type 1.webp","works_images\/Steel tower with equipment supports Type 2.webp","works_images\/Steel tower with equipment supports Type 3.webp","works_images\/Steel tower with equipment supports Type 4.webp","works_images\/Steel tower with equipment supports Type 5.webp","works_images\/Steel tower with equipment supports Type 6.webp","works_images\/Steel tower with equipment supports Type 7.webp","works_images\/Steel tower with equipment supports Type 8.webp"]',
                'image_small' => 'works/Tower_small.webp',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Time:</span></strong> 43h<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Structure LOD:</span></strong> <span style="white-space: pre-wrap;">400</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Equipment LOD:</span></strong> <span style="white-space: pre-wrap;">500</span><br></span></p><p><span lang="ru-UA">Modeling of the tower with equipment supports at the top. Analytical model. Equipment. Cable trays. Safety objects. The area around the tower&nbsp;</span></p>'
            ],
            [
                'id' => 10,
                'title' => 'Balfour at Palisades',
                'slug' => 'balfour-at-palisades',
                'service' => 'MEP modeling',
                'department' => '',
                'image' => 'works/Balfour at Palisades.webp',
                'images' => '["works_images\/Balfour at Palisades Type 1.webp","works_images\/Balfour at Palisades Type 2.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 350<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">16200m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">6</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Disciplines:</span></strong> <span style="white-space: pre-wrap;">Residential Building</span><br></span></p><p><span lang="ru-UA">Balfour Palisades is a boutique residence designed for discerning seniors who relish tranquility in the city. This was a complex and challenging project that required coordinating HVAC systems, fabricating, creating spool sheets and shop drawings.&nbsp;</span></p>'
            ],
            [
                'id' => 11,
                'title' => 'The Stacks Part B',
                'slug' => 'the-stacks-part-b',
                'service' => 'MEP modeling',
                'department' => '',
                'image' => 'works/Stacks_B_3.webp',
                'images' => '["works_images\/The_Stacks.webp","works_images\/Stacks_B_1.webp","works_images\/Stacks_B_2.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 350<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">40830m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">15</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Disciplines:</span></strong> <span style="white-space: pre-wrap;">Residential Building</span><br></span></p><p><span lang="ru-UA">The Stacks is an energetic multi-use development in DC set in the heart of the iconic Buzzard Point district. The enormous scale of this project was the biggest challenges that the team faced during fabrication, coordination and production shop drawings. This required a high level of coordination between team members, as well as effective communication with other teams  involved in the project.&nbsp;</span></p>'
            ],
            [
                'id' => 12,
                'title' => 'Reston Gateway Block C Hotel',
                'slug' => 'reston-gateway-block-c-hotel',
                'service' => 'MEP modeling',
                'department' => '',
                'image' => 'works/Reston_Gateway_Block_C_Hotel.webp',
                'images' => '',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">LOD:</span></strong> 350<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Area:</span></strong> <span style="white-space: pre-wrap;">28000m2</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Floors:</span></strong> <span style="white-space: pre-wrap;">16</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Disciplines:</span></strong> <span style="white-space: pre-wrap;">Residential Building</span><br></span></p><p><span lang="ru-UA">The dual branded AC Hotel and Residence Inn are an integral part of the 4.8 million square feet of new mixed-use development at the north entrance to the Reston Town Center Metro Station. One of the biggest challenges that the team faced was the tight deadlines. Despite this, the team was able to stay focused and organized, and ultimately completed all work.&nbsp;</span></p>'
            ],
            [
                'id' => 13,
                'title' => 'Special structure with camouflage for installation of telecom equipment',
                'slug' => 'special-structure-with-camouflage-for-installation-of-telecom-equipment',
                'service' => 'Telecom design',
                'department' => '',
                'image' => 'works/special-structure-with-camouflage.webp',
                'images' => '["works_images\/Special structure with camouflage for installation of telecom equipment_02.webp","works_images\/Special structure with camouflage for installation of telecom equipment_03.webp","works_images\/Special structure with camouflage for installation of telecom equipment_04.webp", "works_images\/Special structure with camouflage for installation of telecom equipment_05.webp", "works_images\/Special structure with camouflage for installation of telecom equipment_06.webp", "works_images\/Special structure with camouflage for installation of telecom equipment_07.webp", "works_images\/Special structure with camouflage for installation of telecom equipment_08.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Time spent:</span></strong> 30<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Single parts:</span></strong> <span style="white-space: pre-wrap;">85</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Assemblies:</span></strong> <span style="white-space: pre-wrap;">25</span><br></span></p><p><span lang="ru-UA">A 3D model with structural drawings for a special structure with camouflage for installation of telecom equipment was produced based on a site survey and a stability calculation report. The drawing package includes all necessary global views, sections, assemblies, and single parts&nbsp;</span></p>'
            ],
            [
                'id' => 14,
                'title' => 'Special structure for installation of telecom equipment',
                'slug' => 'special-structure-for-installation-of-telecom-equipment',
                'service' => 'Telecom design',
                'department' => '',
                'image' => 'works/special-structure.webp',
                'images' => '["works_images\/Special structure for installation of telecom equipment_02.webp","works_images\/Special structure for installation of telecom equipment_03.webp","works_images\/Special structure for installation of telecom equipment_04.webp", "works_images\/Special structure for installation of telecom equipment_05.webp", "works_images\/Special structure for installation of telecom equipment_06.webp", "works_images\/Special structure for installation of telecom equipment_07.webp", "works_images\/Special structure for installation of telecom equipment_08.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Time spent:</span></strong> 25<br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Single parts:</span></strong> <span style="white-space: pre-wrap;">72</span><br></span></p><p><span lang="ru-UA"><strong><span style="white-space: pre-wrap;">Assemblies:</span></strong> <span style="white-space: pre-wrap;">24</span><br></span></p><p><span lang="ru-UA">A 3D model with structural drawings for a special structure for installation of telecom equipment was produced based on a site survey and a stability calculation report. The drawing package includes all necessary global views, sections, assemblies, and single parts.&nbsp;</span></p>'
            ],
            [
                'id' => 15,
                'title' => 'Framed Commercial Building',
                'slug' => 'framed-commercial-building',
                'service' => 'BIM Structural Engineering',
                'department' => '',
                'image' => 'works/framed-commercial-building-1.webp',
                'images' => '["works_images\/framed-commercial-building-2.webp","works_images\/framed-commercial-building-3.webp", "works_images\/framed-commercial-building-4.webp", "works_images\/framed-commercial-building-5.webp", "works_images\/framed-commercial-building-6.webp", "works_images\/framed-commercial-building-7.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p dir="ltr"><strong>LOD</strong>: 300&nbsp;</p><p dir="ltr"><strong>Area</strong>: -&nbsp;</p><p dir="ltr"><strong>Disciplines</strong>: Structural&nbsp;</p><p>This modern commercial building features three levels of underground parking and nine above-ground floors, maximizing space use in an urban environment. The structure consists of a reinforced concrete frame with two shear cores for stability under horizontal and vertical loads. At the client&rsquo;s request, additional floors were successfully added using steel floor beams, showcasing the flexibility and adaptability of the design. The structural solutions ensure efficient land use, as well as safety and durability in operation.</p>'
            ],
            [
                'id' => 16,
                'title' => 'Railcar Dumper',
                'slug' => 'railcar-dumper',
                'service' => 'BIM Structural Engineering',
                'department' => '',
                'image' => 'works/railcar-dumper-1.webp',
                'images' => '["works_images\/railcar-dumper-2.webp","works_images\/railcar-dumper-3.webp", "works_images\/railcar-dumper-4.webp", "works_images\/railcar-dumper-5.webp", "works_images\/railcar-dumper-6.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p dir="ltr"><strong>LOD</strong>: 300&nbsp;</p><p dir="ltr"><strong>Area</strong>: 20.300 m x 34.250 m&nbsp;</p><p dir="ltr"><strong>Disciplines</strong>: Structural&nbsp;</p><p>The railcar dumper is a monolithic reinforced concrete pit located in a seismically active area, designed for unloading and transporting production materials. Due to space constraints and the need to minimize the excavation size, large cantilever beams were implemented to support railcar loads and ensure structural stability. Considering the high groundwater level, external waterproofing was applied to ensure durability. The walls are 0.8 m thick, with reinforcements up to 1.4 m at equipment support points and cantilever locations. The structure features a monolithic foundation slab with a pile base, distributing loads across 435 precast concrete piles. The bottom elevation is -13.650 m.</p>'
            ],
            [
                'id' => 17,
                'title' => 'Airport Control Tower',
                'slug' => 'airport-control-tower',
                'service' => 'BIM Structural Engineering',
                'department' => '',
                'image' => 'works/airport-control-tower-1.webp',
                'images' => '["works_images\/airport-control-tower-2.webp","works_images\/airport-control-tower-3.webp", "works_images\/airport-control-tower-4.webp", "works_images\/airport-control-tower-5.webp", "works_images\/airport-control-tower-6.webp", "works_images\/airport-control-tower-7.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p dir="ltr"><strong>LOD</strong>: 300&nbsp;</p><p dir="ltr"><strong>Area</strong>: -&nbsp;</p><p dir="ltr"><strong>Disciplines</strong>: Structural&nbsp;</p><p>The airport control tower is a six-level structure with an observation deck and technical rooms for air traffic control. The main frame is made of reinforced concrete, ensuring the structure’s strength and stability. The tower’s foundation consists of bored piles, effectively distributing vertical loads and providing stability on challenging soils, particularly in high wind conditions. The upper section is designed to provide full panoramic visibility, essential for airport operations. The use of modern BIM technologies ensured high precision and coordination at every stage of design and construction, delivering a reliable and long-lasting solution for airport infrastructure.</p>'
            ],
            [
                'id' => 18,
                'title' => 'Industrial Framed Building for Electrical Rooms',
                'slug' => 'industrial-framed-building-for-electrical-rooms',
                'service' => 'BIM Structural Engineering',
                'department' => '',
                'image' => 'works/industrial-framed-building-for-electrical-rooms-1.webp',
                'images' => '["works_images\/industrial-framed-building-for-electrical-rooms-2.webp","works_images\/industrial-framed-building-for-electrical-rooms-3.webp", "works_images\/industrial-framed-building-for-electrical-rooms-4.webp", "works_images\/industrial-framed-building-for-electrical-rooms-5.webp", "works_images\/industrial-framed-building-for-electrical-rooms-6.webp", "works_images\/industrial-framed-building-for-electrical-rooms-7.webp"]',
                'image_small' => '',
                'image_overlay' => '',
                'content' => '<p dir="ltr"><strong>LOD</strong>: 300&nbsp;</p><p dir="ltr"><strong>Area</strong>: -&nbsp;</p><p dir="ltr"><strong>Disciplines</strong>: Structural&nbsp;</p><p>This three-story industrial building is designed to house electrical equipment at a newly constructed metallurgical plant. Located in a seismically active zone with an 8-point seismic rating, the building’s frame utilizes a rigid and braced frame structure, ensuring high stability and operational safety. The brick walls serve solely as enclosures, reducing the risk of damage from seismic forces. The monolithic foundation slab evenly distributes loads, enhancing stability on complex soil conditions. The building is intended for temporary use by maintenance personnel and contains no sanitary or living facilities.</p>'
            ],
        ]);
    }
}
