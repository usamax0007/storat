<?php

namespace App\Filament\Resources\PropertyPlans;

use App\Filament\Resources\PropertyPlans\Pages\CreatePropertyPlan;
use App\Filament\Resources\PropertyPlans\Pages\EditPropertyPlan;
use App\Filament\Resources\PropertyPlans\Pages\ListPropertyPlans;
use App\Filament\Resources\PropertyPlans\Schemas\PropertyPlanForm;
use App\Filament\Resources\PropertyPlans\Tables\PropertyPlansTable;
use App\Models\PropertyPlan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PropertyPlanResource extends Resource
{
    protected static ?string $model = PropertyPlan::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string | UnitEnum | null $navigationGroup = 'Properties';
    protected static ?string $label = 'Subscription Plans';
    protected static ?string $recordTitleAttribute = 'PropertyPlan';

    public static function form(Schema $schema): Schema
    {
        return PropertyPlanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PropertyPlansTable::configure($table);
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
            'index' => ListPropertyPlans::route('/'),
            'create' => CreatePropertyPlan::route('/create'),
            'edit' => EditPropertyPlan::route('/{record}/edit'),
        ];
    }
}
