<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceMenuItem;

use MoonShine\Fields\Number;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ServiceMenuItemResource extends Resource
{
	public static string $model = ServiceMenuItem::class;

	public static string $title = 'ServiceMenuItems';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Title', 'title_en')->sortable()->required(),
            Number::make('Order', 'order')
                ->min(0)
                ->max(10000000),
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
