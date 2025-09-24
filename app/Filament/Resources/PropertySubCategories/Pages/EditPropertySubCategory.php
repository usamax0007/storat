<?php

namespace App\Filament\Resources\PropertySubCategories\Pages;

use App\Filament\Resources\PropertySubCategories\PropertySubCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPropertySubCategory extends EditRecord
{
    protected static string $resource = PropertySubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
