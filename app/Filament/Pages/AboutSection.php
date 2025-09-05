<?php

namespace App\Filament\Pages;

use App\Models\AboutSection as AboutSectionModel;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class AboutSection extends Page implements HasForms
{
    use InteractsWithForms;

    protected string $view = 'filament.pages.about-section';

    protected static string|null|\UnitEnum $navigationGroup = 'About Us';
    protected static string|null|\BackedEnum $navigationIcon = Heroicon::OutlinedRectangleStack;

    // Form-bound properties
    public $aboutTitle;
    public $aboutSubtitle;
    public $aboutContent;
    public $aboutImage;

    public function mount(): void
    {
        $about = AboutSectionModel::first();

        $this->aboutTitle = $about->title ?? '';
        $this->aboutSubtitle = $about->subtitle ?? '';
        $this->aboutContent = $about->content ?? '';
        $this->aboutImage = $about->image ?? '';

        $this->form->fill([
            'aboutTitle' => $this->aboutTitle,
            'aboutSubtitle' => $this->aboutSubtitle,
            'aboutContent' => $this->aboutContent,
            'aboutImage' => $this->aboutImage,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('aboutTitle')
                ->label('Title')
                ->required(),

            TextInput::make('aboutSubtitle')
                ->label('Subtitle'),

            TextInput::make('aboutContent')
                ->label('Content')
                ->columnSpanFull(),

            FileUpload::make('aboutImage')
                ->label('Right Side Image')
                ->directory('about-page')
                ->image()
                ->maxFiles(1),
        ];
    }

    public function save(): void
    {
        $data = [
            'title' => $this->aboutTitle,
            'subtitle' => $this->aboutSubtitle,
            'content' => $this->aboutContent,
            'image' => $this->aboutImage,
        ];

        $about = AboutSectionModel::first();
        if ($about) {
            $about->update($data);
        } else {
            AboutSectionModel::create($data);
        }

        Notification::make()
            ->title('About section updated successfully!')
            ->success()
            ->send();
    }

}
