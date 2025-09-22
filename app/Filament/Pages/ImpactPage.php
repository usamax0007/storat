<?php

namespace App\Filament\Pages;

use App\Models\ImpactPage as ImpactPageModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Illuminate\Contracts\Support\Htmlable;

class ImpactPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $title = 'Our Impact';
    protected static ?string $navigationLabel = null;
    protected static string|null|\UnitEnum $navigationGroup = "Web CMS";


    protected string $view = 'filament.pages.impact-page';

    public $title_en = null;
    public $title_ar = null;
    public $description_en = null;
    public $description_ar = null;
    public $image = null;

    public function getTitle(): Htmlable|string
    {
        return __('our_impact');
    }

    public function mount(): void
    {
        $impact = ImpactPageModel::first();
        if ($impact) {
            $this->form->fill([
                'title_en'       => $impact->title_en,
                'title_ar'       => $impact->title_ar,
                'description_en' => $impact->description_en,
                'description_ar' => $impact->description_ar,
                'image'          => $impact->image,
            ]);
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Impact Page')
                ->schema([
                    TextInput::make('title_en')->label('Title (EN)')->required(),
                    TextInput::make('title_ar')->label('Title (AR)')->required(),
                    Textarea::make('description_en')->label('Description (EN)')->required(),
                    Textarea::make('description_ar')->label('Description (AR)')->required(),

                    FileUpload::make('image')
                        ->label('Impact Image')
                        ->image()
                        ->directory('impact-images')
                        ->maxSize(2048)
                        ->disk('public')
                        ->nullable(),
                ])
                ->columns(2)
        ];
    }

    public function save(): void
    {
        ImpactPageModel::updateOrCreate(
            ['id' => 1],
            $this->form->getState()
        );

        Notification::make()
            ->title('Impact Page updated successfully')
            ->success()
            ->send();
    }
}
