<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\EstimationMepShort;

use MoonShine\Fields\Email;
use MoonShine\Fields\File;
use MoonShine\Fields\Json;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class EstimationMepShortResource extends Resource
{
	public static string $model = EstimationMepShort::class;

	public static string $title = 'Estimation-Mep-Shorts';

    public static array $activeActions = ['show', 'delete'];

    public function fields(): array
    {
        return [
            ID::make()->sortable(),
            Email::make('E-mail', 'email'),
            Json::make('Disciplines', 'disciplines')->keyValue('#', 'Value')->hideOnIndex(),
            Json::make('Services', 'services')->keyValue('#', 'Value')->hideOnIndex(),
            Text::make('LOD (Level of Detail)', 'lod')->hideOnIndex(),
            Text::make('Project duration', 'duration')->hideOnIndex(),
            Json::make('Deliverables', 'deliverables')->keyValue('#', 'Value')->hideOnIndex(),
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
