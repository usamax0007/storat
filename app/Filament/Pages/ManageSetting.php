<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;

class ManageSetting extends Page
{
    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Settings';
    protected static ?string $title = 'Update Settings';
    protected static string|null|\UnitEnum $navigationGroup = 'Setting';

    protected string $view = 'filament.pages.manage-setting';

    public ?array $data = [];

    public ?Setting $setting = null;

    public function mount(): void
    {
        $this->setting = Setting::first();

        $this->form->fill([
            'price' => $this->setting?->price,
            'advertisement_price' => $this->setting?->advertisement_price,
            'top_ten_advertisement_price' => $this->setting?->top_ten_advertisement_price,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->required(),

                TextInput::make('advertisement_price')
                    ->label('Advertisement Price')
                    ->numeric()
                    ->required(),

                TextInput::make('top_ten_advertisement_price')
                    ->label('Top 10 Advertisement Price')
                    ->numeric()
                    ->required(),
            ])
            ->statePath('data');
    }

    public function update(): void
    {
        $state = $this->form->getState();

        if ($this->setting) {
            $this->setting->update($state);
        } else {
            $this->setting = Setting::create($state);
        }

        Notification::make()
            ->title('Settings updated successfully!')
            ->success()
            ->send();
    }
}
