<?php

namespace App\Filament\Pages;

use App\Models\AboutSection as AboutSectionModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use UnitEnum;

class AboutSection extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-information-circle';
    protected static ?string $title = 'About Us';

    protected static ?string $navigationLabel = null;

    protected static string | UnitEnum | null $navigationGroup = "Web CMS";

    public function getTitle(): Htmlable|string
    {
        return __('about_us');
    }

    protected string $view = 'filament.pages.about-section';

    public $title_en = null;
    public $title_ar = null;
    public $subtitle_en = null;
    public $subtitle_ar = null;
    public $description_en = null;
    public $description_ar = null;
    public $image_main = null;
    public $image_inner = null;

    public function mount(): void
    {
        $about = AboutSectionModel::first();
        if ($about) {
            $this->form->fill([
                'title_en'       => $about->title_en,
                'title_ar'       => $about->title_ar,
                'subtitle_en'    => $about->subtitle_en,
                'subtitle_ar'    => $about->subtitle_ar,
                'description_en' => $about->description_en,
                'description_ar' => $about->description_ar,
                'image_main'          => $about->image_main,
                'image_inner'          => $about->image_inner,
            ]);
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('About Us Page')
                ->schema([
                    TextInput::make('title_en')->label('Title (EN)')->required(),
                    TextInput::make('title_ar')->label('Title (AR)')->required(),
                    TextInput::make('subtitle_en')->label('Subtitle (EN)')->required(),
                    TextInput::make('subtitle_ar')->label('Subtitle (AR)')->required(),

                    Textarea::make('description_en')->label('Description (EN)')->required(),
                    Textarea::make('description_ar')->label('Description (AR)')->required(),

                    FileUpload::make('image_main')
                        ->label('Main Image')
                        ->image()
                        ->directory('about-us-images')
                        ->maxSize(2048)
                        ->disk('public')
                        ->nullable(),

                    FileUpload::make('image_inner')
                        ->label('Image Inner')
                        ->image()
                        ->directory('about-us-images')
                        ->maxSize(2048)
                        ->disk('public')
                        ->nullable(),
                ])
                ->columns(2)
        ];
    }

    public function save(): void
    {
        AboutSectionModel::updateOrCreate(
            ['id' => 1],
            $this->form->getState()
        );

        Notification::make()
            ->title('About Us updated successfully')
            ->success()
            ->send();
    }
}
