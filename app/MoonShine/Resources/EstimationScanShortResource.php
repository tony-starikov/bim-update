<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\EstimationScanShort;

use MoonShine\Fields\Email;
use MoonShine\Fields\File;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Fields\Url;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class EstimationScanShortResource extends Resource
{
	public static string $model = EstimationScanShort::class;

	public static string $title = 'EstimationScanShorts';

    public static array $activeActions = ['show', 'delete'];

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Email::make('E-mail', 'email'),
            Json::make('Disciplines', 'disciplines')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Type of the building', 'type')->hideOnIndex(),
            Text::make('Construction area', 'area')->hideOnIndex(),
            Text::make('Construction height', 'height')->hideOnIndex(),
            Json::make('Task for modeling', 'task')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('LOD (Level of Detail)', 'lod')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Project accuracy', 'accuracy')->hideOnIndex(),
            Text::make('Project currency', 'currency')->hideOnIndex(),
            Text::make('Start and Finish', 'start')->hideOnIndex(),
            Text::make('Address', 'address')->hideOnIndex(),
            Url::make('Link to a Google map', 'link')->hideOnIndex(),
            Text::make('Comment', 'comment')->hideOnIndex(),
            File::make('Files', 'files')
                ->disk('public')
                ->dir('upload')
                ->multiple()
                ->removable()
                ->hideOnIndex()
                ->keepOriginalFileName(),
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
