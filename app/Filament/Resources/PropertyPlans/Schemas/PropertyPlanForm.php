<?php

namespace App\Filament\Resources\PropertyPlans\Schemas;

use App\Models\Property;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput as Input;
use Filament\Schemas\Schema;

class PropertyPlanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_en')->label('Subscription Plan Name (English)')->required(),
                TextInput::make('name_ar')->label('Subscription Plan Name (Arabic)'),
                TextInput::make('price')->label('Subscription Plan Price')->numeric()->required(),
                Repeater::make('description')
                    ->label('Subscription Plan Points')
                    ->schema([
                        TextInput::make('en')->label('Point (English)')->required(),
                        TextInput::make('ar')->label('Point (Arabic)')->required(),
                    ])
                    ->columnSpanFull()
                    ->columns(2)
                    ->collapsible()
                    ->default([])
                    ->createItemButtonLabel('Add Point'),

            ]);
    }
}
