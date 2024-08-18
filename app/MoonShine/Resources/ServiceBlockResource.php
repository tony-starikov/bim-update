<?php

namespace App\MoonShine\Resources;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceBlock;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ServiceBlockResource extends Resource
{
	public static string $model = ServiceBlock::class;

	public static string $title = 'ServiceBlocks';

    public static array $with  = [
        'items',
    ];

    public static string $orderField = 'order'; // Поле сортировки по умолчанию

    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию

	public function fields(): array
	{
        $orders = [];

        if ($this->getItem()) {
            $orders = $this->getItem()->service()->first()->blocks->pluck('order', 'order')->sort()->all();
        }

        return [
            ID::make()->sortable(),
            Text::make('name')->required(),
            Select::make('Page Order', 'order')
                ->options(
                    $orders
                )->sortable()->hideOnCreate(),
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
