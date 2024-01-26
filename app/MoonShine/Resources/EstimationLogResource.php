<?php

namespace App\MoonShine\Resources;

use Illuminate\Database\Eloquent\Model;
use App\Models\EstimationLog;

use MoonShine\Fields\Email;
use MoonShine\Fields\Text;
use MoonShine\Fields\Date;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class EstimationLogResource extends Resource
{
	public static string $model = EstimationLog::class;

	public static string $title = 'Estimation-Logs';

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Email::make('E-mail', 'email'),
            Text::make('Name', 'name'),
            Date::make('Creation date', 'created_at')->withTime()
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
