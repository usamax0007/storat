<?php

namespace App\Filament\Resources\PropertySubCategories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PropertySubCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('property_category_id')
                    ->relationship('category', 'name_en')
                    ->required()
                    ->label('Category'),

                TextInput::make('name_en')
                    ->required()
                    ->maxLength(255)
                    ->label('Name (English)'),

                TextInput::make('name_ar')
                    ->required()
                    ->maxLength(255)
                    ->label('Name (Arabic)'),
            ]);
    }
}
