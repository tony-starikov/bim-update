<?php

namespace App\Observers;

use App\Models\ServiceBlock;
use App\Models\ServiceItem;
use Illuminate\Support\Facades\Storage;

class ServiceBlockObserver
{
    /**
     * Handle the ServiceBlock "created" event.
     */
    public function created(ServiceBlock $serviceBlock): void
    {
        $max_block_order = $serviceBlock->service()->first()->blocks->pluck('order', 'order')->max();

        $serviceBlock->order = $max_block_order + 1;
        $serviceBlock->order_dump = $max_block_order + 1;
        $serviceBlock->saveQuietly();

        if ($serviceBlock->type->name === 'scan_to_bim_1') {
            Storage::disk('public')->copy('service_default/scan-to-bim-background-new.webp', 'service_block/scan-to-bim-background-new_' . $serviceBlock->id . '.webp');
            ServiceItem::create(['name' => 'background_image', 'value' => 'service_block/scan-to-bim-background-new_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'main_header', 'value' => 'SCAN TO BIM SERVICES', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'text_under_the_header', 'value' => 'Guarantee of models quality. Daily reports. 3D modeling by Point Cloud specialists with over 7 years of experience in all disciplines.', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_text', 'value' => 'ESTIMATE YOUR PROJECT', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_color', 'value' => '#43aeb6', 'service_block_id' => $serviceBlock->id, 'type_id' => 5])->save();
            ServiceItem::create(['name' => 'button_shadow', 'value' => 'lg', 'service_block_id' => $serviceBlock->id, 'type_id' => 6])->save();
            ServiceItem::create(['name' => 'button_url', 'value' => 'https://www.google.com/', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();

            ServiceItem::create(['name' => 'the_first_sub_service_header', 'value' => 'Point cloud registration', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-icon1.webp', 'service_block/scan-to-bim-icon1_'. $serviceBlock->id .'.webp');
            ServiceItem::create(['name' => 'the_first_sub_service_image', 'value' => 'service_block/scan-to-bim-icon1_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_second_sub_service_header', 'value' => 'BIM MODELING', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-icon2.webp', 'service_block/scan-to-bim-icon2_'. $serviceBlock->id .'.webp');
            ServiceItem::create(['name' => 'the_second_sub_service_image', 'value' => 'service_block/scan-to-bim-icon2_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_third_sub_service_header', 'value' => 'FACILITY MANAGEMENT', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-icon3.webp', 'service_block/scan-to-bim-icon3_'. $serviceBlock->id .'.webp');
            ServiceItem::create(['name' => 'the_third_sub_service_image', 'value' => 'service_block/scan-to-bim-icon3_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourth_sub_service_header', 'value' => 'AS-BUILT SERVICES', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-icon4.webp', 'service_block/scan-to-bim-icon4_'. $serviceBlock->id .'.webp');
            ServiceItem::create(['name' => 'the_fourth_sub_service_image', 'value' => 'service_block/scan-to-bim-icon4_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_2') {
            ServiceItem::create(['name' => 'breadcrumb_item_active', 'value' => 'Scan To Bim Service' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_3') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'What advantages you will get' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> offer precise parametric <b class="fw-bold">As-built BIM Models</b> and 2D CAD Models showcasing details like pipes, walls, slabs, roof plans, facades, and landscapes within and around the building.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_2',
                    'value' => '<p>Our <b class="fw-bold">Point Cloud</b> to <b class="fw-bold">BIM Modeling Services</b> deliver models ranging from LOD 100 to 350, encompassing Architectural, Structural, Site, MEPFP Elements. We also include Clash Detection for projects involving Renovation, Refurbishment, Retrofit, or Reconstruction.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon1.png', 'service_block/scan-to-bim-block-3-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_header', 'value' => '3D Content Creation', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon2.png', 'service_block/scan-to-bim-block-3-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'HIGH QUALITY', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon3.png', 'service_block/scan-to-bim-block-3-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'ADHERENCE TO DEADLINES', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon4.png', 'service_block/scan-to-bim-block-3-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'Tasks solving', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon5.png', 'service_block/scan-to-bim-block-3-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'Project adjustmnent', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon6.png', 'service_block/scan-to-bim-block-3-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => 'Communication', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon7.png', 'service_block/scan-to-bim-block-3-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_seventh_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_seventh_item_header', 'value' => 'Certified team', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon8.png', 'service_block/scan-to-bim-block-3-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_eighth_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_eighth_item_header', 'value' => 'Work process organization', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-3-icon9.png', 'service_block/scan-to-bim-block-3-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_ninth_item_image', 'value' => 'service_block/scan-to-bim-block-3-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_ninth_item_header', 'value' => 'Test', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_4') {
            Storage::disk('public')->copy('service_default/scan-to-bim.pdf', 'service_block/scan-to-bim_'. $serviceBlock->id .'.pdf');
            ServiceItem::create(['name' => 'file_to_download', 'value' => 'service_block/scan-to-bim_'. $serviceBlock->id .'.pdf', 'service_block_id' => $serviceBlock->id, 'type_id' => 7])->save();

            ServiceItem::create(['name' => 'button_text', 'value' => 'DOWNLOAD PRESENTATION' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_color', 'value' => '#6bdcdb' , 'service_block_id' => $serviceBlock->id, 'type_id' => 5])->save();
            ServiceItem::create(['name' => 'button_shadow', 'value' => 'lg' , 'service_block_id' => $serviceBlock->id, 'type_id' => 6])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_5') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'More about our Scan to BIM Services' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>Our <b class="fw-bold">Scan to BIM Services</b> (also known as Point Cloud <b class="fw-bold">BIM Modeling services</b>) are suitable for Laser Scanning Companies, Architectural Design Companies, Surveyors, MEP Engineering Companies, Property Owners, and General Contractors or Construction Management Companies.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'BIM modeling' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon1.png', 'service_block/scan-to-bim-block-5-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_text', 'value' => 'Creation of 3D Revit BIM-model by tracing the data from the Point Cloud. Parameterization of BIM elements.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'As-built drawings' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon2.png', 'service_block/scan-to-bim-block-5-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_text', 'value' => 'Design of As-built drawings based on 3D BIM models from Revit created by the scanning.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'QA\QC' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon3.png', 'service_block/scan-to-bim-block-5-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_text', 'value' => 'Checking of 3D BIM model accuracy, building and engineering logic, elements clashing.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'Progress Reports' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon4.png', 'service_block/scan-to-bim-block-5-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fourth_item_text', 'value' => 'Creation of every day project reports. Own reporting system to inform about the progress of the modeling process.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'Export to other formats' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon5.png', 'service_block/scan-to-bim-block-5-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fifth_item_text', 'value' => 'Export the Revit model in the format you need: IFC, NWC, NWF, DWG, PDF, DGN, FBX, STEP, SKP' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => 'Our Software skills' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon6.png', 'service_block/scan-to-bim-block-5-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_sixth_item_text', 'value' => 'The main program for creating 3D BIM models is Revit. But our team is also proficient in other programs: AutoCAD, ArchiCAD, SketchUp, Navisworks.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_seventh_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon7.png', 'service_block/scan-to-bim-block-5-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_seventh_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_seventh_item_text', 'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_eighth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon8.png', 'service_block/scan-to-bim-block-5-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_eighth_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_eighth_item_text', 'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_ninth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-5-icon9.png', 'service_block/scan-to-bim-block-5-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_ninth_item_image', 'value' => 'service_block/scan-to-bim-block-5-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_ninth_item_text', 'value' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_6') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'WE HAVE EXPERIENCE AND EXPERTISE IN THE FIELDS:' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>Our top priorities: <b class="fw-bold">quality, accuracy and logic</b>. Our experience includes developing parametric 3D BIM and 2D CAD models. We work with all disciplines: Architectural, Structural, Mechanical, Electrical, Plumbing, Fire Protection, Site.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'Residential Buildings' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'Educational Buildings' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'Institutional Buildings' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_seventh_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_seventh_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_eighth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_eighth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_ninth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_ninth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_tenth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon10_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_tenth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon10_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_eleventh_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon11_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_eleventh_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon11_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_twelfth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon12_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_twelfth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon12_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_thirteenth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon13_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_thirteenth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon13_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourteenth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon14_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourteenth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon14_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fifteenth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/scan-to-bim-block-6-icon.png', 'service_block/scan-to-bim-block-6-icon15_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifteenth_item_image', 'value' => 'service_block/scan-to-bim-block-6-icon15_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_7') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'HOW DO WE WORK?' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>Our <b class="fw-bold">Scan to BIM Modeling</b> team is skilled in producing accurate 3D BIM models or 2D drawings for purposes such as design validation, planning, comparison, interference checks, MEP or construction elements demolition or addition, documentation of existing building conditions.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon1.png', 'service_block/scan-to-bim-block-7-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon2.png', 'service_block/scan-to-bim-block-7-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon3.png', 'service_block/scan-to-bim-block-7-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon4.png', 'service_block/scan-to-bim-block-7-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_fourth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_fourth_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_fourth_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon5.png', 'service_block/scan-to-bim-block-7-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_fifth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_fifth_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_fifth_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-7-icon6.png', 'service_block/scan-to-bim-block-7-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => 'service_block/scan-to-bim-block-7-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => 'Test' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_sixth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_sixth_item_paragraph_2',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
            ServiceItem::create(
                [
                    'name' => 'the_sixth_item_paragraph_3',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_8') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'OUR SCAN TO BIM PROJECTS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_first_project_url', 'value' => 'http://localhost/portfolio/metallurgy-combine-from-ukraine', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'the_second_project_url', 'value' => 'http://localhost/portfolio/industrial-plant-northern-gzk', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'the_third_project_url', 'value' => 'http://localhost/portfolio/landscape-of-the-industrial-territory', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'the_fourth_project_url', 'value' => 'http://localhost/portfolio/hypermarket-billa', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();

            ServiceItem::create(['name' => 'estimation_button_url', 'value' => 'http://localhost/scan-to-bim-estimates-project', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();

            ServiceItem::create(['name' => 'estimation_button_text', 'value' => 'ESTIMATE YOUR PROJECT' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_9') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'OUR BENEFITS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon1.png', 'service_block/scan-to-bim-block-9-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-9-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'REVIEWING' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_1',
                    'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon2.png', 'service_block/scan-to-bim-block-9-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-9-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'DEVELOPMENT' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_1',
                    'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon3.png', 'service_block/scan-to-bim-block-9-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-9-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'ORGANIZATION' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_1',
                    'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_10') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'WHAT IS THE SCAN TO BIM SERVICE?' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p style="text-align: justify;">Scan to BIM (Building Information Modeling) service is a process of capturing accurate and detailed measurements of an existing building or structure through 3D laser scanning technology. The scanned data is then used to create a digital representation of the building in BIM software. This process helps create a comprehensive and detailed building model, which can be used for renovation, restoration, or retrofitting purposes. The BIM modeling service is essential in creating a collaborative environment for developing and executing efficient construction projects.</p><p style="text-align: justify;">&nbsp;</p><p style="text-align: justify;">The Scan to BIM service offers several benefits over traditional methods of surveying, which include time and cost savings of 28%, greater accuracy, and reduced risk of errors by 40%. It helps minimize on-site work and disruptions reduces the chances of rework, and allows for better visualization and analysis of the building\'s structure. Additionally, the 3D BIM models enable stakeholders to identify potential issues and conflicts early in the project lifecycle, leading to more effective decision-making and problem-solving.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_11') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'COUNTRIES WE WORKED WITH' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-11-icon1.png', 'service_block/scan-to-bim-block-11-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'map_image', 'value' => 'service_block/scan-to-bim-block-11-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

        } elseif ($serviceBlock->type->name === 'scan_to_bim_12') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'FREQUENTLY ASKED QUESTIONS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon1.png', 'service_block/scan-to-bim-block-12-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon2.png', 'service_block/scan-to-bim-block-12-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon3.png', 'service_block/scan-to-bim-block-12-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon4.png', 'service_block/scan-to-bim-block-12-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_fourth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon5.png', 'service_block/scan-to-bim-block-12-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_fifth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon6.png', 'service_block/scan-to-bim-block-12-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_sixth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon7.png', 'service_block/scan-to-bim-block-12-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_seventh_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_seventh_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_seventh_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon8.png', 'service_block/scan-to-bim-block-12-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_eighth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_eighth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_eighth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon9.png', 'service_block/scan-to-bim-block-12-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_ninth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_ninth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_ninth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-12-icon10.png', 'service_block/scan-to-bim-block-12-icon10_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_tenth_item_image', 'value' => 'service_block/scan-to-bim-block-12-icon10_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_tenth_item_header', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_tenth_item_paragraph_1',
                    'value' => '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'scan_to_bim_13') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-13-icon1.webp', 'service_block/scan-to-bim-block-13-icon1_'. $serviceBlock->id .'.webp');
            ServiceItem::create(['name' => 'image', 'value' => 'service_block/scan-to-bim-block-13-icon1_'. $serviceBlock->id .'.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(
                [
                    'name' => 'script',
                    'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="36e8ffcfd59d981ac14ebb11c74e5a169f998a7a9419bd84afbb87074fba57e4"></script>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 8
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_1') {
            Storage::disk('public')->copy('service_default/mep-bim-modeling-background.webp', 'service_block/mep-bim-modeling-background_' . $serviceBlock->id . '.webp');
            ServiceItem::create(['name' => 'background_image', 'value' => 'service_block/mep-bim-modeling-background_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'main_header', 'value' => 'MEP BIM MODELING SERVICES', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'text_under_the_header', 'value' => 'Utilize the services of one skilled professional to strengthen your team or order the entire project to be completed by a group of specialists.', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_text', 'value' => 'ESTIMATE YOUR PROJECT', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_color', 'value' => '#43aeb6', 'service_block_id' => $serviceBlock->id, 'type_id' => 5])->save();
            ServiceItem::create(['name' => 'button_shadow', 'value' => 'lg', 'service_block_id' => $serviceBlock->id, 'type_id' => 6])->save();
            ServiceItem::create(['name' => 'button_url', 'value' => 'https://www.google.com/', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();

            ServiceItem::create(['name' => 'the_first_sub_service_header', 'value' => 'MEP MODELING', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-icon1.png', 'service_block/mep-bim-modeling-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_sub_service_image', 'value' => 'service_block/mep-bim-modeling-icon1_' . $serviceBlock->id . '.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_second_sub_service_header', 'value' => 'BIM COORDINATION', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-icon2.png', 'service_block/mep-bim-modeling-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_sub_service_image', 'value' => 'service_block/mep-bim-modeling-icon2_' . $serviceBlock->id . '.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_third_sub_service_header', 'value' => 'FABRICATION', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-icon3.png', 'service_block/mep-bim-modeling-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_sub_service_image', 'value' => 'service_block/mep-bim-modeling-icon3_' . $serviceBlock->id . '.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourth_sub_service_header', 'value' => 'SHOP DRAWINGS CREATION', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-icon4.png', 'service_block/mep-bim-modeling-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_sub_service_image', 'value' => 'service_block/mep-bim-modeling-icon4_' . $serviceBlock->id . '.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_2') {
            ServiceItem::create(['name' => 'breadcrumb_item_active_1', 'value' => 'MEP Services' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'breadcrumb_item_active_2', 'value' => 'MEP Bim Modeling Service' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_3') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'MEP sub-contractor Services' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>MEP drawings and MEP coordination are integral elements of any construction project. Whatever your goal is whether it\'s a new building or the renovation of an existing building, you will need to prepare drawings and a required a 3D model for BIM.</p><p style="text-align: justify;">&nbsp;</p><p>Our MEP BIM coordination and modeling department specializes in the development of an accurate and detailed MEP models and drawings.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'BIM Coordination' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-3-icon1.png', 'service_block/mep-bim-modeling-block-3-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/mep-bim-modeling-block-3-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'MEP Modeling' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-3-icon2.png', 'service_block/mep-bim-modeling-block-3-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/mep-bim-modeling-block-3-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'Drawings creation' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-3-icon3.png', 'service_block/mep-bim-modeling-block-3-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/mep-bim-modeling-block-3-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => 'MEP Fabrication' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-3-icon4.png', 'service_block/mep-bim-modeling-block-3-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/mep-bim-modeling-block-3-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fourth_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_fifth_item_header', 'value' => 'MEP Families Creation' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-3-icon5.png', 'service_block/mep-bim-modeling-block-3-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fifth_item_image', 'value' => 'service_block/mep-bim-modeling-block-3-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_fifth_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_sixth_item_header', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_sixth_item_image', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_sixth_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_seventh_item_header', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_seventh_item_image', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_seventh_item_text', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_eighth_item_header', 'value' => null , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_eighth_item_image', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_eighth_item_text', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_ninth_item_header', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_ninth_item_image', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_ninth_item_text', 'value' => null, 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_4') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'Benefits of hiring our experts' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>We create 3D models and drawings in disciplines such as mechanical, fire protection and plumbing. You will receive BIM models according to project conditions and requirements - schematic design, design documents and construction documents.</p>&nbsp;<p>We provide MEP BIM models in the desired Revit versions - 2019/20/21/22/23/24 and in 3D Revit, DWG and IFC format (as required). We work with any LOD 100-500.</p>&nbsp;<p>We specialize in MEP outsourcing services, delivering precise 3D MEP models to MEP contractors, consultants, construction companies, design-build companies, and component manufacturers. Enhance efficiency in optimizing the design, detailing, quantity, fabrication, and installation of MEP building systems.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'contact_us_text', 'value' => 'Utilize the services of one skilled professional to strengthen your team or order an entire project made by a group of specialists.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'button_text', 'value' => 'CONTACT US', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_color', 'value' => '#43aeb6', 'service_block_id' => $serviceBlock->id, 'type_id' => 5])->save();
            ServiceItem::create(['name' => 'button_shadow', 'value' => 'none', 'service_block_id' => $serviceBlock->id, 'type_id' => 6])->save();
            ServiceItem::create(['name' => 'button_url', 'value' => 'https://www.google.com/', 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_5') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'Disciplines we work with' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>We help you prepare a complete package of design data for the design phase. We create accurate component drawings, analyze them and create 3D models. The finished data is compiled into a detailed report.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'HVAC systems' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_first_item_text', 'value' => 'This includes heating, ventilation and air conditioning systems and air ducts.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'Plumbing Systems' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_second_item_text', 'value' => 'This includes the sanitary sewerage system, garbage disposals, pipelines and their placement.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'Fire protection system' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_third_item_text', 'value' => 'This includes converting a detailed fire sprinkler design into a 3D fire protection model.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_6') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'MORE ABOUT OUR MEP SERVICES' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'subheader_1', 'value' => '3D MEP Modeling' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_1',
                    'value' => '<p>We can offer modeling primary coordination of MEP systems “from scratch” by design drawings for such disciplines: HVAC, Plumbing, Electrical, Fire Protection.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'subheader_2', 'value' => 'Fabrication' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_2',
                    'value' => '<p>Using CAMduct or SysQue software our team are capable to implement Fabrication of MEP systems according to technical information provided by customer. HVAC and Fire Protection are our main directions in this field.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'subheader_3', 'value' => 'Coordination process' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_3',
                    'value' => '<p>At this stage we have two main objectives: find and solve all interdisciplinary clashes which occur, optimize MEP systems routing to achieve a balance between system efficiency  and its  moderate  cost.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            ServiceItem::create(['name' => 'subheader_4', 'value' => 'Drawings creation' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'paragraph_4',
                    'value' => '<p>During the drawings creation process we always try to represent all required information about MEP components and optimize them to make drawings not only informative but convenient in usage.</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_7') {
            ServiceItem::create(['name' => 'the_first_item_header', 'value' => '7' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_first_item_subheader', 'value' => 'YEARS EXPERIENCE' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-7-icon1.png', 'service_block/mep-bim-modeling-block-7-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/mep-bim-modeling-block-7-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_second_item_header', 'value' => '110+' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_second_item_subheader', 'value' => 'COMPLETED PROJECTS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-7-icon2.png', 'service_block/mep-bim-modeling-block-7-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/mep-bim-modeling-block-7-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_third_item_header', 'value' => '80%' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_third_item_subheader', 'value' => 'CLIENTS STAY WITH US' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-7-icon3.png', 'service_block/mep-bim-modeling-block-7-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/mep-bim-modeling-block-7-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'the_fourth_item_header', 'value' => '500+' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'the_fourth_item_subheader', 'value' => 'DESIGNED FAMILIES' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-7-icon4.png', 'service_block/mep-bim-modeling-block-7-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_fourth_item_image', 'value' => 'service_block/mep-bim-modeling-block-7-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_8') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'HOW DO WE WORK?' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'item_text_1', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon1.png', 'service_block/mep-bim-modeling-block-8-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_1', 'value' => 'service_block/mep-bim-modeling-block-8-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_2', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon2.png', 'service_block/mep-bim-modeling-block-8-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_2', 'value' => 'service_block/mep-bim-modeling-block-8-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_3', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon3.png', 'service_block/mep-bim-modeling-block-8-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_3', 'value' => 'service_block/mep-bim-modeling-block-8-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_4', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon4.png', 'service_block/mep-bim-modeling-block-8-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_4', 'value' => 'service_block/mep-bim-modeling-block-8-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_5', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon5.png', 'service_block/mep-bim-modeling-block-8-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_5', 'value' => 'service_block/mep-bim-modeling-block-8-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_6', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon6.png', 'service_block/mep-bim-modeling-block-8-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_6', 'value' => 'service_block/mep-bim-modeling-block-8-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_7', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon7.png', 'service_block/mep-bim-modeling-block-8-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_7', 'value' => 'service_block/mep-bim-modeling-block-8-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_8', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon8.png', 'service_block/mep-bim-modeling-block-8-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_8', 'value' => 'service_block/mep-bim-modeling-block-8-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_9', 'value' => 'Lorem Ipsum is simply dummy text.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-8-icon9.png', 'service_block/mep-bim-modeling-block-8-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_9', 'value' => 'service_block/mep-bim-modeling-block-8-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_9') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'OUR SOFTWARE SKILLS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'item_text_1', 'value' => 'Autodesk Revit' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon1.png', 'service_block/mep-bim-modeling-block-9-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_1', 'value' => 'service_block/mep-bim-modeling-block-9-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_2', 'value' => 'Autodesk AutoCAD' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon2.png', 'service_block/mep-bim-modeling-block-9-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_2', 'value' => 'service_block/mep-bim-modeling-block-9-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_3', 'value' => 'Revizto' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon3.png', 'service_block/mep-bim-modeling-block-9-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_3', 'value' => 'service_block/mep-bim-modeling-block-9-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_4', 'value' => 'Fabrication CAMduct' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon4.png', 'service_block/mep-bim-modeling-block-9-icon4_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_4', 'value' => 'service_block/mep-bim-modeling-block-9-icon4_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_5', 'value' => 'Autodesk Navisworks' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon5.png', 'service_block/mep-bim-modeling-block-9-icon5_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_5', 'value' => 'service_block/mep-bim-modeling-block-9-icon5_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_6', 'value' => 'Graphisoft Arhicad' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon6.png', 'service_block/mep-bim-modeling-block-9-icon6_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_6', 'value' => 'service_block/mep-bim-modeling-block-9-icon6_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_7', 'value' => 'SysQue' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon7.png', 'service_block/mep-bim-modeling-block-9-icon7_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_7', 'value' => 'service_block/mep-bim-modeling-block-9-icon7_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_8', 'value' => 'BIMcollab' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon8.png', 'service_block/mep-bim-modeling-block-9-icon8_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_8', 'value' => 'service_block/mep-bim-modeling-block-9-icon8_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'item_text_9', 'value' => 'Autodesk ReCap' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            Storage::disk('public')->copy('service_default/mep-bim-modeling-block-9-icon9.png', 'service_block/mep-bim-modeling-block-9-icon9_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'item_image_9', 'value' => 'service_block/mep-bim-modeling-block-9-icon9_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_10') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'OUR MEP PROJECTS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            ServiceItem::create(['name' => 'project_url_1', 'value' => 'http://localhost/portfolio/reston-gateway-block-c-hotel' , 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'project_url_2', 'value' => 'http://localhost/portfolio/the-stacks-part-b' , 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'project_url_3', 'value' => 'http://localhost/portfolio/balfour-at-palisades' , 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();

            ServiceItem::create(['name' => 'button_url', 'value' => 'http://localhost/contact' , 'service_block_id' => $serviceBlock->id, 'type_id' => 3])->save();
            ServiceItem::create(['name' => 'button_text', 'value' => 'CONTACT US' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'text', 'value' => 'Any questions? We\'re here to help. Leave your question and we\'ll get back to you.' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_11') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'OUR BENEFITS' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon1.png', 'service_block/mep-bim-modeling-block-11-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_first_item_image', 'value' => 'service_block/mep-bim-modeling-block-11-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_first_item_header', 'value' => 'REVIEWING' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_first_item_paragraph_1',
                    'value' => '<p>- Verification using BIMprove Add-In or check-list</p><p>- Checking the 3D model against engineering logic</p><p>- Reviewing drawings by customer requirements</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon2.png', 'service_block/mep-bim-modeling-block-11-icon2_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_second_item_image', 'value' => 'service_block/mep-bim-modeling-block-11-icon2_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_second_item_header', 'value' => 'DEVELOPMENT' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_second_item_paragraph_1',
                    'value' => '<p>- Continuous development of Add-In and Dynamo Scripts</p><p>- Development and constant updating of the template</p><p>- Developing parametric families</p><p>- Creating our own database</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-9-icon3.png', 'service_block/mep-bim-modeling-block-11-icon3_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'the_third_item_image', 'value' => 'service_block/mep-bim-modeling-block-11-icon3_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();
            ServiceItem::create(['name' => 'the_third_item_header', 'value' => 'ORGANIZATION' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(
                [
                    'name' => 'the_third_item_paragraph_1',
                    'value' => '<p>- Unique project management technologies</p><p>- Individual approach in communication with the client</p><p>- Continuous analysis of the finished work</p>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 4
                ]
            )->save();
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_12') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'GEOGRAPHY OF OUR SERVICES' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-11-icon1.png', 'service_block/mep-bim-modeling-block-12-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'map_image', 'value' => 'service_block/mep-bim-modeling-block-12-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_13') {
            ServiceItem::create(['name' => 'block_header', 'value' => 'UNLOCK THE FULL POTENTIAL OF OUR SERVICES' , 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();

            Storage::disk('public')->copy('service_default/scan-to-bim-block-13-icon1.png', 'service_block/mep-bim-modeling-block-13-icon1_'. $serviceBlock->id .'.png');
            ServiceItem::create(['name' => 'image', 'value' => 'service_block/mep-bim-modeling-block-13-icon1_'. $serviceBlock->id .'.png', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(
                [
                    'name' => 'script',
                    'value' => '<script src="//web.webformscr.com/apps/fc3/build/loader.js" async sp-form-id="ef9276b1dfe6bd5d2b711696c5bd46e4c08feb4f8a0a0a5c3cf0fd60e0eee9b5"></script>',
                    'service_block_id' => $serviceBlock->id,
                    'type_id' => 8
                ]
            )->save();
        }
    }

    /**
     * Handle the ServiceBlock "updated" event.
     */
    public function updated(ServiceBlock $serviceBlock): void
    {
        $blocks = $serviceBlock->service()->first()->blocks->where('order', $serviceBlock->order);

        if ($blocks->count() == 2) {
            $old_order = $serviceBlock->order_dump;

            $serviceBlock->order_dump = $serviceBlock->order;
            $serviceBlock->saveQuietly();

            $to_update = $blocks->where('id', '!=', $serviceBlock->id)->first();

            $to_update->order = $old_order;
            $to_update->order_dump = $old_order;

            $to_update->saveQuietly();
        }
    }

    /**
     * Handle the ServiceBlock "deleting" event.
     */
    public function deleting(ServiceBlock $serviceBlock)
    {
        if ($serviceBlock->type->name === 'scan_to_bim_1') {
            if ($serviceBlock->items->where('name', 'background_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'background_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'background_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_3') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_4') {
            if ($serviceBlock->items->where('name', 'file_to_download')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'file_to_download')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'file_to_download')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_5') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_6') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eleventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eleventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eleventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_twelfth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_twelfth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_twelfth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_thirteenth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_thirteenth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_thirteenth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourteenth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourteenth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourteenth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifteenth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifteenth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifteenth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_7') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_9') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_11') {
            if ($serviceBlock->items->where('name', 'map_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'map_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'map_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'scan_to_bim_12') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_tenth_item_image')->first()->value);
                }
            }
        }  elseif ($serviceBlock->type->name === 'scan_to_bim_13') {
            if ($serviceBlock->items->where('name', 'image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_1') {
            if ($serviceBlock->items->where('name', 'background_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'background_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'background_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_sub_service_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_sub_service_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_3') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fifth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_sixth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_seventh_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_eighth_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_ninth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_7') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_fourth_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_8') {
            if ($serviceBlock->items->where('name', 'item_image_1')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_1')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_1')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_2')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_2')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_2')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_3')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_3')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_3')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_4')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_4')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_4')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_5')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_5')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_5')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_6')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_6')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_6')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_7')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_7')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_7')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_8')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_8')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_8')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_9')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_9')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_9')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_9') {
            if ($serviceBlock->items->where('name', 'item_image_1')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_1')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_1')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_2')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_2')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_2')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_3')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_3')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_3')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_4')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_4')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_4')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_5')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_5')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_5')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_6')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_6')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_6')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_7')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_7')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_7')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_8')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_8')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_8')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'item_image_9')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'item_image_9')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'item_image_9')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_11') {
            if ($serviceBlock->items->where('name', 'the_first_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_first_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_first_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_second_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_second_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_second_item_image')->first()->value);
                }
            }

            if ($serviceBlock->items->where('name', 'the_third_item_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'the_third_item_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'the_third_item_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_12') {
            if ($serviceBlock->items->where('name', 'map_image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'map_image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'map_image')->first()->value);
                }
            }
        } elseif ($serviceBlock->type->name === 'mep_bim_modeling_13') {
            if ($serviceBlock->items->where('name', 'image')->first()->value) {
                if (Storage::disk('public')->exists($serviceBlock->items->where('name', 'image')->first()->value)) {
                    Storage::disk('public')->delete($serviceBlock->items->where('name', 'image')->first()->value);
                }
            }
        }
    }

    /**
     * Handle the ServiceBlock "restored" event.
     */
    public function restored(ServiceBlock $serviceBlock): void
    {
        //
    }

    /**
     * Handle the ServiceBlock "force deleted" event.
     */
    public function forceDeleted(ServiceBlock $serviceBlock): void
    {
        //
    }
}
