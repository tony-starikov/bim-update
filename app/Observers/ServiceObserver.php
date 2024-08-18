<?php

namespace App\Observers;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;

class ServiceObserver
{
    /**
     * Handle the Service "created" event.
     */
    public function created(Service $service): void
    {
        $services = Service::all()->pluck('order', 'order')->max();
        $service->order = $services + 1;
        $service->order_dump = $services + 1;
        $service->saveQuietly();
    }

    /**
     * Handle the Service "updated" event.
     */
    public function updated(Service $service): void
    {
        $services = Service::all()->where('order', $service->order);

        if ($services->count() == 2) {
            $old_order = $service->order_dump;

            $service->order_dump = $service->order;
            $service->saveQuietly();

            $to_update = $services->where('id', '!=', $service->id)->first();

            $to_update->order = $old_order;
            $to_update->order_dump = $old_order;

            $to_update->saveQuietly();
        }
    }

    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        if ($service->image) {
            if (Storage::disk('public')->exists($service->image)) {
                Storage::disk('public')->delete($service->image);
            }
        }
    }

    /**
     * Handle the Service "restored" event.
     */
    public function restored(Service $service): void
    {
        //
    }

    /**
     * Handle the Service "force deleted" event.
     */
    public function forceDeleted(Service $service): void
    {
        //
    }
}
