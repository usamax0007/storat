<?php

namespace App\Filament\Resources\PropertyCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PropertyCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name_en')->label('Category Name (English)'),
                TextInput::make('name_ar')->label('Category Name (Arabic)'),
            ]);
    }
}
