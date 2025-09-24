<?php

namespace App\Filament\Resources\PropertySubCategories;

use App\Filament\Resources\PropertySubCategories\Pages\CreatePropertySubCategory;
use App\Filament\Resources\PropertySubCategories\Pages\EditPropertySubCategory;
use App\Filament\Resources\PropertySubCategories\Pages\ListPropertySubCategories;
use App\Filament\Resources\PropertySubCategories\Schemas\PropertySubCategoryForm;
use App\Filament\Resources\PropertySubCategories\Tables\PropertySubCategoriesTable;
use App\Models\PropertySubCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PropertySubCategoryResource extends Resource
{
    protected static ?string $model = PropertySubCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $label = 'Sub Category';
    protected static ?int $navigationSort = 3;
    protected static string|null|\UnitEnum $navigationGroup = 'Properties';

    protected static ?string $recordTitleAttribute = 'PropertySubCategory';

    public static function form(Schema $schema): Schema
    {
        return PropertySubCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PropertySubCategoriesTable::configure($table);
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
            'index' => ListPropertySubCategories::route('/'),
            'create' => CreatePropertySubCategory::route('/create'),
            'edit' => EditPropertySubCategory::route('/{record}/edit'),
        ];
    }
}
