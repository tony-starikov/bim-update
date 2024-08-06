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
        if ($serviceBlock->type->name === 'scan_to_bim_1') {
            Storage::disk('public')->copy('service_default/scan-to-bim-background-new.webp', 'service_block/scan-to-bim-background-new_' . $serviceBlock->id . '.webp');
            ServiceItem::create(['name' => 'background_image', 'value' => 'service_block/scan-to-bim-background-new_' . $serviceBlock->id . '.webp', 'service_block_id' => $serviceBlock->id, 'type_id' => 2])->save();

            ServiceItem::create(['name' => 'main_header', 'value' => 'SCAN TO BIM SERVICES', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'text_under_the_header', 'value' => 'Guarantee of models quality. Daily reports. 3D modeling by Point Cloud specialists with over 7 years of experience in all disciplines.', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
            ServiceItem::create(['name' => 'button_text', 'value' => 'ESTIMATE YOUR PROJECT', 'service_block_id' => $serviceBlock->id, 'type_id' => 1])->save();
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
        }
    }

    /**
     * Handle the ServiceBlock "updated" event.
     */
    public function updated(ServiceBlock $serviceBlock): void
    {
        //
    }

    /**
     * Handle the ServiceBlock "deleted" event.
     */
    public function deleted(ServiceBlock $serviceBlock): void
    {
        //
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
