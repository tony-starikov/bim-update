<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

use MoonShine\Decorations\Block;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Slug;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class WorkResource extends Resource
{
	public static string $model = Work::class;

	public static string $title = 'Works';

    public static string $orderField = 'id'; // Поле сортировки по умолчанию

    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),

            Block::make([
                Text::make('Title', 'title')->sortable()->required(),
                Slug::make('Slug')->from('title')->unique()->hint('You can leave this field empty it will generate automatically from title.'),
                Text::make('Service', 'service')->sortable()->required(),
                TinyMce::make('Content')->hideOnIndex(),
                Image::make('Files', 'images')
                    ->disk('public')
                    ->dir('works_images')
                    ->multiple()
                    ->removable()
                    ->hideOnIndex()
                    ->keepOriginalFileName(),
                Image::make('Image')->disk('public')->dir('works')->removable(),
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
