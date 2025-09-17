<?php

namespace App\Filament\Resources\Customers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CustomerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->label('Name'),
                TextInput::make('email')->label('Email'),
                TextInput::make('phone')->label('phone'),
                TextInput::make('password')->label('password')->password(),
            ]);
    }
}
