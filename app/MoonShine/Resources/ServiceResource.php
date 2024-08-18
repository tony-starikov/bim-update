<?php

namespace App\MoonShine\Resources;

use App\Models\ServiceBlock;
use App\Models\ServiceMenuItem;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

use MoonShine\Fields\File;
use MoonShine\Fields\HasMany;
use MoonShine\Fields\Image;
use MoonShine\Fields\Number;
use MoonShine\Fields\Select;
use MoonShine\Fields\Slug;
use MoonShine\Fields\SwitchBoolean;
use MoonShine\Fields\Text;
use MoonShine\Resources\Resource;
use MoonShine\Fields\ID;
use MoonShine\Actions\FiltersAction;

class ServiceResource extends Resource
{
	public static string $model = Service::class;

	public static string $title = 'Services';

	public static array $with  = [
        'blocks',
    ];

    public static string $orderField = 'order'; // Поле сортировки по умолчанию

    public static string $orderType = 'ASC'; // Тип сортировки по умолчанию

	public function fields(): array
	{
		return [
		    ID::make()->sortable(),
            Text::make('Title', 'title_en')->sortable()->required(),
            Text::make('Description', 'description_en')->sortable()->required()->hideOnIndex(),
            Image::make('Image', 'image')
                ->disk('public')
                ->dir('service')
                ->keepOriginalFileName()
                ->allowedExtensions(['jpg', 'png', 'webp'])
                ->removable()
                ->hideOnIndex(),
            Slug::make('Slug')->from('title_en')->unique()->hint('You can leave this field empty it will generate automatically from title.'),
            File::make('Presentation', 'presentation')->disk('public')->dir('presentations')->allowedExtensions(['pdf'])->hideOnIndex()->removable(),
            SwitchBoolean::make('Show Page', 'show_page')->onValue(1)->offValue(0)->autoUpdate(true),
            SwitchBoolean::make('Show On The Main Page', 'show_on_main_page')->onValue(1)->offValue(0)->autoUpdate(true),
            Select::make('Main Page Order', 'order')
                ->options(
                    Service::all()->pluck('order', 'order')->sort()->all()
                )->hideOnCreate(),
            Select::make('Menu Item', 'service_menu_item_id')->nullable()->options(
                ServiceMenuItem::all()->pluck('title_en', 'id')->toArray()
            )->hideOnIndex(),

            HasMany::make('Blocks', 'blocks', new ServiceBlockResource())
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
