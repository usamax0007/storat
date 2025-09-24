<?php

namespace App\Filament\Pages;

use App\Models\BannerImage as BannerImageModel;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use UnitEnum;

class BannerImage extends Page
{
    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Update Banner';
     protected static string | UnitEnum | null $navigationGroup = "Banners";
    protected static ?string $title = 'Banner';

    protected string $view = 'filament.pages.banner-image';

    // This is where Filament v4 keeps the form state
    public ?array $data = [];

    public ?BannerImageModel $banner = null;

    public function mount(): void
    {
        $this->banner = BannerImageModel::first();

        $this->form->fill([
            'image' => $this->banner?->image,
        ]);
    }

    // In v4 you define the form like this
    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                FileUpload::make('image')
                    ->label('Banner Image')
                    ->directory('banners')
                    ->image()
                    ->required(),
            ])
            ->statePath('data');
    }

    public function update(): void
    {
        $state = $this->form->getState();

        if ($this->banner) {
            $this->banner->update($state);
        } else {
            $this->banner = BannerImageModel::create($state);
        }

        Notification::make()
            ->title('Banner updated successfully!')
            ->success()
            ->send();
    }
}
