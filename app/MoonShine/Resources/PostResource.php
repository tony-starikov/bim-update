<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Decorations\Block;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\CKEditor\Fields\CKEditor;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Url;

class PostResource extends Resource
{
	public static string $model = Post::class;

	public static string $title = 'Posts';

    public static string $orderField = 'id'; // Поле сортировки по умолчанию

    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию

//	public static array $activeActions = ['show', 'edit'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Block::make([
                Text::make('Title', 'title_en')->sortable()->required(),
                Url::make('Canonical URL', 'canonical')->required()->hideOnIndex(),
                Slug::make('Slug')->from('title_en')->unique()->hint('You can leave this field empty it will generate automatically from title.'),
                Text::make('Author', 'author')->sortable()->required()->hideOnIndex(),
                Url::make('Author URL', 'author_url')->hideOnIndex(),
                Image::make('Main Image', 'image')->disk('public')->dir('posts')->removable()->hideOnIndex(),
                Image::make('Background image', 'bg_image')->disk('public')->dir('posts')->removable()->hideOnIndex(),
                Text::make('Date', 'date')->sortable()->hint('Month, Day, Year - Time')->hideOnIndex(),
                TinyMce::make('Content')->hideOnIndex(),
                Image::make('Banner Header', 'banner_header')->disk('public')->dir('posts/banners')->removable()->hideOnIndex(),
                Text::make('Banner Header URL', 'banner_header_url')->hideOnIndex(),
                Image::make('Banner Footer', 'banner_footer')->disk('public')->dir('posts/banners')->removable()->hideOnIndex(),
                Image::make('Banner Footer Small', 'banner_footer_small')->disk('public')->dir('posts/banners')->removable()->hideOnIndex(),
                Text::make('Banner Footer URL', 'banner_footer_url')->hideOnIndex(),
            ]),

        ];
	}

	public function rules(Model $item): array
	{
	    return [];
    }

    public function search(): array
    {
        return ['id'];
    }

    public function filters(): array
    {
        return [];
    }

    public function actions(): array
    {
        return [
            FiltersAction::make(trans('moonshine::ui.filters')),
        ];
    }
}
