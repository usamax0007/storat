<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use App\Models\MobileCms as MobileCmsModel;
use Filament\Schemas\Components\Section;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use UnitEnum;


class MobileCms extends Page implements HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $title = 'Mobile CMS';

    protected string $view = 'filament.pages.mobile-cms';
    protected static string | UnitEnum | null $navigationGroup = 'Mobile Cms';

    protected static ?string $navigationLabel = 'CMS';


    protected static string|null|\BackedEnum $navigationIcon = Heroicon::OutlinedRectangleStack;



    public $privacy_policy = ['en' => '', 'ar' => ''];
    public $terms_conditions = ['en' => '', 'ar' => ''];
    public $about_us = ['en' => '', 'ar' => ''];
    public $support_email;
    public $support_whatsapp;
    public $support_website;
    public $support_instagram;
    public $support_facebook;
    public $support_twitter;
    public $support_threads;
    public $support_linkedin;

    public function mount(): void
    {
        $settings = MobileCmsModel::first();
        if ($settings) {
            $this->fill($settings->toArray());
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Section::make('Content')
                ->schema([
                    Textarea::make('privacy_policy.en')->label('Privacy Policy (EN)'),
                    Textarea::make('privacy_policy.ar')->label('Privacy Policy (AR)'),
                    Textarea::make('terms_conditions.en')->label('Terms & Conditions (EN)'),
                    Textarea::make('terms_conditions.ar')->label('Terms & Conditions (AR)'),
                    Textarea::make('about_us.en')->label('About Us (EN)'),
                    Textarea::make('about_us.ar')->label('About Us (AR)'),
                ]),

            Section::make('Support')
                ->schema([
                    TextInput::make('support_email')->label('Email'),
                    TextInput::make('support_whatsapp')->label('Whatsapp'),
                    TextInput::make('support_website')->label('Website'),
                    TextInput::make('support_instagram')->label('Instagram'),
                    TextInput::make('support_facebook')->label('Facebook'),
                    TextInput::make('support_twitter')->label('Twitter'),
                    TextInput::make('support_threads')->label('Threads'),
                    TextInput::make('support_linkedin')->label('LinkedIn'),
                ]),
        ];
    }

    public function save()
    {
        MobileCmsModel::updateOrCreate(['id' => 1], $this->form->getState());
        Notification::make()
            ->success()
            ->title('Mobile CMS updated successfully.')
            ->send();
    }
}
