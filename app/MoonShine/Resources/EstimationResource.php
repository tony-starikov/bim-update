<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\Estimation;

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
            Text::make('Disciplines', 'disciplines')->hideOnIndex(),
            Text::make('Project Units', 'units')->hideOnIndex(),
            Text::make('Project language', 'language')->hideOnIndex(),
            Text::make('Type of the building', 'type')->hideOnIndex(),
            Text::make('Construction area', 'area')->hideOnIndex(),
            Text::make('Construction height', 'height')->hideOnIndex(),
            Text::make('Incoming data', 'data')->hideOnIndex(),
            Text::make('Incoming Point Cloud', 'incoming_point_cloud')->hideOnIndex(),
            Text::make('Task for modeling', 'task_for_modeling')->hideOnIndex(),
            Text::make('Revit version', 'revit_version')->hideOnIndex(),
            Text::make('LOD (Level of Detail)', 'lod')->hideOnIndex(),
            Text::make('LOI (Level of Information)', 'loi')->hideOnIndex(),
            Text::make('Project accuracy', 'project_accuracy')->hideOnIndex(),
            Text::make('Deliverables', 'deliverables')->hideOnIndex(),
            Text::make('Comment', 'comment')->hideOnIndex(),
            Url::make('Project reference', 'reference')->hideOnIndex(),
            File::make('Files', 'files')
                ->disk('public')
                ->dir('upload')
                ->multiple()
                ->removable()
                ->hideOnIndex()
                ->keepOriginalFileName(),
            Url::make('Link to the drive', 'cloud_link')->hideOnIndex(),
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
