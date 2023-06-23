<?php

namespace App\Providers;

use App\Models\Post;
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

            MenuItem::make('SEO', new SeoResource())
                ->icon('heroicons.outline.book-open'),
        ]);
    }
}
