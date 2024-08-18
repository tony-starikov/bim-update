<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ItemType;

use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ItemTypeResource extends Resource
{
	public static string $model = ItemType::class;

	public static string $title = 'ItemTypes';

    public string $titleField = 'name';

    public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Text::make('Name', 'name')->sortable()->readonly()->required(),
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
