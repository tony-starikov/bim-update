<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceItem;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Code;
use MoonShine\Fields\File;
use MoonShine\Fields\Image;
use MoonShine\Fields\Select;
use MoonShine\Fields\Text;
use MoonShine\Fields\TinyMce;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Url;
use MoonShine\Fields\Color;

class ServiceItemResource extends Resource
{
	public static string $model = ServiceItem::class;

	public static string $title = 'ServiceItems';

    public static array $with  = [
        'type',
    ];

    public static array $activeActions = ['show', 'edit'];

    public static string $orderField = 'id'; // Поле сортировки по умолчанию

    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию

	public function fields(): array
	{
        if ($this->getItem() !== null) {
            $item_info = $this->getItem()->toArray();
            $item_type = $item_info['type_id'];

            if ($item_type == 1) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Text::make('Value', 'value')->sortable()->hideOnIndex(),
                ];
            } elseif ($item_type == 2) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Image::make('Image', 'value')
                        ->disk('public')
                        ->dir('service_block')
                        ->keepOriginalFileName()
                        ->allowedExtensions(['jpg', 'png', 'webp'])
                        ->removable()
                        ->hideOnIndex(),
                ];
            } elseif ($item_type == 3) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Url::make('Url', 'value')->hideOnIndex(),
                ];
            }elseif ($item_type == 4) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    TinyMce::make('Content', 'value')->hideOnIndex(),
                ];
            } elseif ($item_type == 5) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Color::make('Color', 'value')->hideOnIndex(),
                ];
            } elseif ($item_type == 6) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Select::make('Shadow', 'value')->options([
                        'none' => 'none',
                        'sm' => 'sm',
                        'lg' => 'lg',
                    ])->hideOnIndex(),
                ];
            } elseif ($item_type == 7) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    File::make('File', 'value')
                        ->disk('public')
                        ->dir('service_block')
                        ->keepOriginalFileName()
                        ->allowedExtensions(['pdf'])
                        ->removable()
                        ->hideOnIndex(),
                ];
            }elseif ($item_type == 8) {
                return [
                    ID::make()->sortable(),
                    Text::make('Name', 'name')->sortable()->readonly()->required(),
                    Code::make('Script', 'value')
                        ->language('html')
                        ->lineNumbers()
                        ->hideOnIndex(),
                ];
            }
        }

        return [
            ID::make()->sortable(),
            Text::make('Name', 'name')->sortable()->readonly()->required(),
            BelongsTo::make('Type', 'type_id', new ItemTypeResource())->readonly()->showOnIndex(),
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
