<?php

namespace App\Filament\Pages;

use App\Models\ImpactPage;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Schemas\Components\Section;

class ImpactPageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-document-text';
    protected string $view = 'filament.pages.impact-page-settings';
    protected static ?string $title = 'Impact Page';

    public ?string $title_en = null;
    public ?string $title_ar = null;
    public ?string $description_en = null;
    public ?string $description_ar = null;
    public $image = null;

    public function mount(): void
    {
        $impact = ImpactPage::first();
        if ($impact) {
            $this->form->fill([
                'title_en'       => $impact->title_en,
                'title_ar'       => $impact->title_ar,
                'description_en' => $impact->description_en,
                'description_ar' => $impact->description_ar,
                'image'          => $impact->image, // ✅ load single file path
            ]);
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Impact Page')
                ->schema([
                    TextInput::make('title_en')
                        ->label('Title (EN)')
                        ->required(),

                    TextInput::make('title_ar')
                        ->label('Title (AR)')
                        ->required(),

                    TextInput::make('description_en')
                        ->label('Description (EN)')
                        ->required(),

                    TextInput::make('description_ar')
                        ->label('Description (AR)')
                        ->required(),

                    FileUpload::make('image')
                        ->label('Image')
                        ->image()
                        ->directory('impact-images')
                        ->maxSize(2048)
                        ->nullable(),
                ])
                ->columns(2)

        ];
    }

    public function save(): void
    {
        ImpactPage::updateOrCreate(
            ['id' => 1],
            $this->form->getState()
        );

        Notification::make()
            ->title('Impact Page updated successfully')
            ->success()
            ->send();
    }
}
