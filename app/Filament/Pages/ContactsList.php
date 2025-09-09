<?php

namespace App\Filament\Pages;

use App\Models\Contact;
use Filament\Pages\Page;
use Filament\Tables;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use Illuminate\Database\Eloquent\Builder;

class ContactsList extends Page implements HasTable
{
    use InteractsWithTable;

    protected static string|null|\BackedEnum $navigationIcon = 'heroicon-o-users';
    protected string $view = 'filament.pages.contacts-list';
    protected static ?string $title = 'Contacts';
    protected static string|null|\UnitEnum $navigationGroup = 'Forms';

    // Define the table
    protected function getTableQuery(): Builder
    {
        return Contact::query();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('id')->sortable(),
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('email')->searchable(),
            Tables\Columns\TextColumn::make('development_type'),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ];
    }

    protected function getTableActions(): array
    {
        return []; // remove actions
    }

    protected function getTableBulkActions(): array
    {
        return []; // remove bulk actions
    }
}
