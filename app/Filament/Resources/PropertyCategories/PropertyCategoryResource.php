<?php

namespace App\Filament\Resources\PropertyCategories;

use App\Filament\Resources\PropertyCategories\Pages\CreatePropertyCategory;
use App\Filament\Resources\PropertyCategories\Pages\EditPropertyCategory;
use App\Filament\Resources\PropertyCategories\Pages\ListPropertyCategories;
use App\Filament\Resources\PropertyCategories\Schemas\PropertyCategoryForm;
use App\Filament\Resources\PropertyCategories\Tables\PropertyCategoriesTable;
use App\Models\PropertyCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PropertyCategoryResource extends Resource
{
    protected static ?string $model = PropertyCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $label = 'Category';
    protected static string | UnitEnum | null $navigationGroup = 'Properties';
    protected static ?string $recordTitleAttribute = 'PropertyCategory';

    public static function form(Schema $schema): Schema
    {
        return PropertyCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PropertyCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPropertyCategories::route('/'),
            'create' => CreatePropertyCategory::route('/create'),
            'edit' => EditPropertyCategory::route('/{record}/edit'),
        ];
    }
}
