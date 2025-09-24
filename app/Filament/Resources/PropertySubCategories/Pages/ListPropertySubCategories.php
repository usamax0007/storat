<?php

namespace App\Filament\Resources\PropertySubCategories\Pages;

use App\Filament\Resources\PropertySubCategories\PropertySubCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPropertySubCategories extends ListRecords
{
    protected static string $resource = PropertySubCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
