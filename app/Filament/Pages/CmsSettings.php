<?php

namespace App\Filament\Pages;

use App\Models\CmsSetting;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Schemas\Components\Section;

class CmsSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-cog';
    protected string $view = 'filament.pages.cms-settings';
    protected static ?string $title = 'CMS Settings';

    public $phone1;
    public $phone2;
    public $phone3;
    public $email1;
    public $email2;
    public $address;
    public $instagram;
    public $linkedin;
    public $facebook;
    public $twitter;

    public function mount(): void
    {
        $settings = CmsSetting::first();
        if ($settings) {
            $this->fill($settings->toArray());
        }
    }

    protected function getFormSchema(): array
    {
        return [
         Section::make('Impact Page')
        ->schema([
            TextInput::make('phone1')->label('Phone 1')->tel(),
            TextInput::make('phone2')->label('Phone 2')->tel(),
            TextInput::make('phone3')->label('Phone 3')->tel(),
            TextInput::make('email1')->label('Email 1')->email(),
            TextInput::make('email2')->label('Email 2')->email(),
            TextInput::make('address')->label('Address'),
            TextInput::make('instagram')->label('Instagram URL'),
            TextInput::make('linkedin')->label('LinkedIn URL'),
            TextInput::make('facebook')->label('Facebook URL'),
            TextInput::make('twitter')->label('Twitter URL'),
        ])->columns(2)
        ];
    }

    public function save()
    {
        CmsSetting::updateOrCreate(
            ['id' => 1],
            $this->form->getState()
        );

        Notification::make()
            ->title('CMS Settings updated successfully')
            ->success()
            ->send();
    }
}
