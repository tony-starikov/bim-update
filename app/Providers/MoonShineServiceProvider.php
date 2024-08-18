<?php

namespace App\Providers;

use App\Models\Estimation;
use App\Models\EstimationLog;
use App\Models\EstimationMep;
use App\Models\EstimationMepShort;
use App\Models\EstimationScanShort;
use App\Models\Post;
use App\Models\Service;
use App\Models\ServiceBlock;
use App\Models\ServiceItem;
use App\Models\ServiceMenuItem;
use App\Models\Work;
use App\MoonShine\Resources\EstimationLogResource;
use App\MoonShine\Resources\EstimationMepResource;
use App\MoonShine\Resources\EstimationMepShortResource;
use App\MoonShine\Resources\EstimationResource;
use App\MoonShine\Resources\EstimationScanShortResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\SeoResource;
use App\MoonShine\Resources\ServiceBlockResource;
use App\MoonShine\Resources\ServiceItemResource;
use App\MoonShine\Resources\ServiceMenuItemResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\WorkResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\MoonShine;
use MoonShine\Menu\MenuGroup;
use MoonShine\Menu\MenuItem;
use MoonShine\Resources\MoonShineUserResource;
use MoonShine\Resources\MoonShineUserRoleResource;

class MoonShineServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        app(MoonShine::class)->menu([

            MenuGroup::make('Services', [
                MenuItem::make('Service Menu Items', new ServiceMenuItemResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => ServiceMenuItem::query()->count()),

                MenuItem::make('Service Pages', new ServiceResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => Service::query()->count()),

                MenuItem::make('Service Blocks', new ServiceBlockResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => ServiceBlock::query()->count()),

                MenuItem::make('Service Block Items', new ServiceItemResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => ServiceItem::query()->count()),
            ]),

            MenuGroup::make('Estimation', [
                MenuItem::make('Estimation-Scan', new EstimationResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => Estimation::query()->count()),

                MenuItem::make('Estimation-Scan-Short', new EstimationScanShortResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => EstimationScanShort::query()->count()),

                MenuItem::make('Estimation-Mep', new EstimationMepResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => EstimationMep::query()->count()),

                MenuItem::make('Estimation-Mep-Short', new EstimationMepShortResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => EstimationMepShort::query()->count()),

                MenuItem::make('Estimation-Log', new EstimationLogResource())
                    ->icon('heroicons.outline.book-open')
                    ->badge(fn() => EstimationLog::query()->count()),
            ]),

            MenuItem::make('Posts', new PostResource())
                ->icon('heroicons.outline.book-open')
                ->badge(fn() => Post::query()->count()),

            MenuItem::make('Portfolio', new WorkResource())
                ->icon('heroicons.outline.book-open')
                ->badge(fn() => Work::query()->count()),

            MenuItem::make('SEO', new SeoResource())
                ->icon('heroicons.outline.book-open'),
        ]);
    }
}
