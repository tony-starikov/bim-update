<?php

namespace App\Providers;

use App\Models\Estimation;
use App\Models\EstimationMep;
use App\Models\EstimationMepShort;
use App\Models\EstimationScanShort;
use App\Models\Post;
use App\MoonShine\Resources\EstimationMepResource;
use App\MoonShine\Resources\EstimationMepShortResource;
use App\MoonShine\Resources\EstimationResource;
use App\MoonShine\Resources\EstimationScanShortResource;
use App\MoonShine\Resources\PostResource;
use App\MoonShine\Resources\SeoResource;
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
//            MenuGroup::make('moonshine::ui.resource.system', [
//                MenuItem::make('moonshine::ui.resource.admins_title', new MoonShineUserResource())
//                    ->translatable()
//                    ->icon('users'),
//                MenuItem::make('moonshine::ui.resource.role_title', new MoonShineUserRoleResource())
//                    ->translatable()
//                    ->icon('bookmark'),
//            ])->translatable(),

//            MenuGroup::make('Blog', [
//
//            ])->icon('heroicons.book-open'),
            MenuItem::make('Posts', new PostResource())
                ->icon('heroicons.outline.book-open')
                ->badge(fn() => Post::query()->count()),

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

            MenuItem::make('SEO', new SeoResource())
                ->icon('heroicons.outline.book-open'),
        ]);
    }
}
