<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estimation;

use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Fields\File;
use MoonShine\Fields\Email;
use MoonShine\Fields\Url;
use MoonShine\Actions\FiltersAction;

class EstimationResource extends Resource
{
	public static string $model = Estimation::class;

	public static string $title = 'Estimations';

    public static array $activeActions = ['show', 'delete'];

	public function fields(): array
	{
        return [
            ID::make()->sortable(),
            Email::make('E-mail', 'email'),
            Json::make('Disciplines', 'disciplines')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Project Units', 'units')->hideOnIndex(),
            Text::make('Type of the building', 'type')->hideOnIndex(),
            Text::make('Construction area', 'area')->hideOnIndex(),
            Text::make('Construction height', 'height')->hideOnIndex(),
            Json::make('Incoming data', 'data')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('Incoming Point Cloud', 'cloud')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('Task for modeling', 'task')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('Deliverables', 'deliverables')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Revit version', 'version')->hideOnIndex(),
            Json::make('LOD (Level of Detail)', 'lod')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('LOI (Level of Information)', 'loi')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Project accuracy', 'accuracy')->hideOnIndex(),
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
            Url::make('Project reference', 'reference')->hideOnIndex(),
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
