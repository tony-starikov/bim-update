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

//	public static array $activeActions = ['show', 'edit'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Block::make([
                Text::make('Title', 'title_en')->sortable()->required(),
                Slug::make('Slug')->from('title_en')->unique()->hint('You can leave this field empty it will generate automatically from title.'),
                Text::make('Author', 'author')->sortable()->required()->hideOnIndex(),
                Image::make('Background image', 'bg_image')->disk('public')->dir('posts')->removable()->hideOnIndex(),
                Text::make('Date', 'date')->sortable()->hint('Month, Day, Year - Time')->hideOnIndex(),
                TinyMce::make('Content')->hideOnIndex(),
                Image::make('Image')->disk('public')->dir('posts')->removable()->hideOnIndex(),
                Image::make('Banner Header', 'banner_header')->disk('public')->dir('posts/banners')->removable()->hideOnIndex(),
                Text::make('Banner Header URL', 'banner_header_url')->hideOnIndex(),
                Image::make('Banner Footer', 'banner_footer')->disk('public')->dir('posts/banners')->removable()->hideOnIndex(),
                Url::make('Banner Footer URL', 'banner_footer_url')->hideOnIndex(),
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
