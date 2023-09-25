<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\EstimationMep;

use MoonShine\Fields\Email;
use MoonShine\Fields\File;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class EstimationMepResource extends Resource
{
	public static string $model = EstimationMep::class;

	public static string $title = 'Estimation-Mep';

    public static array $activeActions = ['show', 'delete'];

	public function fields(): array
	{
		return [
            ID::make()->sortable(),
            Email::make('E-mail', 'email'),
            Text::make('Type of the building', 'type')->hideOnIndex(),
            Text::make('Project language', 'language')->hideOnIndex(),
            Text::make('Project Units', 'units')->hideOnIndex(),
            Json::make('Disciplines', 'disciplines')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('Services', 'services')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('LOD (Level of Detail)', 'lod')->hideOnIndex(),
            Json::make('Incoming data', 'data')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Revit version', 'version')->hideOnIndex(),
            Json::make('Coordination software', 'coordinationSoftware')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('Fabrication software', 'fabrication_software')->hideOnIndex(),
            Text::make('Project duration', 'duration')->hideOnIndex(),
            Text::make('Required number of draftsmen', 'draftsmen')->hideOnIndex(),
            Text::make('Required number of modelers', 'modelers')->hideOnIndex(),
            Text::make('Required number of coordinators', 'coordinators')->hideOnIndex(),
            Text::make('Required number of managers', 'managers')->hideOnIndex(),
            Json::make('Deliverables', 'deliverables')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('In the absence of initial data or answers from the customer, the contractor has the right to independently indicate the delivery of the project for the number of downtime days.', 'downtime')->hideOnIndex(),
            Text::make('Possibility of making independent technical decisions by the performer.', 'decisions')->hideOnIndex(),
            Text::make('Providing models and / or reports to control the work process.', 'reports')->hideOnIndex(),
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
