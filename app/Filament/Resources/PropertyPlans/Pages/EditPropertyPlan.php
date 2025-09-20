<?php

namespace App\Filament\Resources\PropertyPlans\Pages;

use App\Filament\Resources\PropertyPlans\PropertyPlanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPropertyPlan extends EditRecord
{
    protected static string $resource = PropertyPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
