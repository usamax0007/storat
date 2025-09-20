<?php

namespace App\Filament\Resources\PropertyPlans\Pages;

use App\Filament\Resources\PropertyPlans\PropertyPlanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPropertyPlans extends ListRecords
{
    protected static string $resource = PropertyPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
