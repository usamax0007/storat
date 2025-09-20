<?php

namespace App\Filament\Resources\Properties\Schemas;

use App\Models\PropertyCategory;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PropertyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
               Section::make('Details')
                ->schema([
                    Select::make('category_id')
                        ->label('Category')
                        ->options(PropertyCategory::pluck('name_en', 'id'))
                        ->searchable()
                        ->required(),

                    TextInput::make('name')->required(),
                    TextInput::make('title'),
                    TextInput::make('price')->numeric(),
                    TextInput::make('beds')->numeric()->default(0),
                    TextInput::make('bathrooms')->numeric()->default(0),
                    TextInput::make('surface'),
                    Toggle::make('terrace'),
                    Toggle::make('lift'),
                    TextInput::make('location'),
                    TextInput::make('latitude')->numeric(),
                    TextInput::make('longitude')->numeric(),
                    Textarea::make('description'),
                    TextInput::make('notes'),
                    TextInput::make('call'),
                    TextInput::make('whatsapp'),
                    TextInput::make('email')->email(),
                    FileUpload::make('video')
                        ->directory('properties/videos')
                        ->acceptedFileTypes(['video/mp4', 'video/avi', 'video/mov', 'video/webm'])
                        ->maxSize(102400) // 100MB
                        ->label('Property Video')
                        ->disk('public'),
                    FileUpload::make('floor_plans')->label('Floor plans (documents)')
                        ->multiple()
                        ->disk('public')
                        ->directory('properties/floor-plans')
                        ->acceptedFileTypes(['application/pdf','image/*']),
                    FileUpload::make('images')
                        ->multiple()
                        ->image()
                        ->disk('public')
                        ->directory('properties/images')
                        ->reorderable(),
                ])->columns(2)->columnSpanFull(),

            ]);
    }
}
