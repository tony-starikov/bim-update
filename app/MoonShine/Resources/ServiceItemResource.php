<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\ServiceItem;

use MoonShine\Fields\BelongsTo;
use MoonShine\Fields\Image;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;
use MoonShine\Fields\Url;

class ServiceItemResource extends Resource
{
	public static string $model = ServiceItem::class;

	public static string $title = 'ServiceItems';

	public function fields(): array
	{
        if ($this->getItem() !== null) {
            $item_info = $this->getItem()->toArray();
            $item_type = $item_info['type_id'];

            if ($item_type == 1) {
                return [
                    ID::make()->sortable()->hideOnIndex(),
                    Text::make('Name', 'name')->sortable()->required(),
                    Text::make('Value', 'value')->sortable()->hideOnIndex(),
                ];
            } elseif ($item_type == 2) {
                return [
                    ID::make()->sortable()->hideOnIndex(),
                    Text::make('Name', 'name')->sortable()->required(),
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
                    ID::make()->sortable()->hideOnIndex(),
                    Text::make('Name', 'name')->sortable()->required(),
                    Url::make('Url', 'value')->hideOnIndex(),
                ];
            }
        }

        return [
            ID::make()->sortable()->hideOnIndex(),
            Text::make('Name', 'name')->sortable()->required(),
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
