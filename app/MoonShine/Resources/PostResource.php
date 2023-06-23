<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use MoonShine\Decorations\Block;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

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
                Text::make('Date', 'date')->sortable()->hint('Month, Day, Year - Time'),
                TinyMce::make('Content')->hideOnIndex(),
                Image::make('Image')->disk('public')->dir('posts')->removable(),
                Image::make('Background image', 'bg_image')->disk('public')->dir('posts')->removable(),
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
