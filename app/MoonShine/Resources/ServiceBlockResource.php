<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceBlock;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ServiceBlockResource extends Resource
{
	public static string $model = ServiceBlock::class;

	public static string $title = 'ServiceBlocks';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('name')->required(),
            SwitchBoolean::make('Show', 'show_status')
                ->onValue(1)
                ->offValue(0)
                ->autoUpdate(true),
            BelongsTo::make('Type', 'type_id', 'name'),
            BelongsTo::make('Service', 'service_id', 'title_en'),

            HasMany::make('Items', 'items', new ServiceItemResource())
                ->resourceMode()
                ->hideOnIndex(),
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
