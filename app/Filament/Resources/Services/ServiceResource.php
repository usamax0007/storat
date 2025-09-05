<?php

namespace App\Filament\Resources\Services;

use App\Filament\Resources\Services\Pages\CreateService;
use App\Filament\Resources\Services\Pages\EditService;
use App\Filament\Resources\Services\Pages\ListServices;
use App\Filament\Resources\Services\Schemas\ServiceForm;
use App\Filament\Resources\Services\Tables\ServicesTable;
use App\Models\Service;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Service';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('title')
                    ->label('Service Title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sub_title')
                    ->label('Service Sub Title')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Service Description')
                    ->rows(4)
                    ->required(),

                FileUpload::make('icon')
                    ->label('Icon')
                    ->image()
                    ->imagePreviewHeight('100')
                    ->directory('service-icons')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                ImageColumn::make('icon')->label('Icon')->circular(),
                TextColumn::make('title')->label('Title')->searchable(),
                TextColumn::make('sub_title')->label('Sub Title')->searchable(),
                TextColumn::make('description')->label('Description')->limit(50),
            ]);
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
            'index' => ListServices::route('/'),
            'create' => CreateService::route('/create'),
            'edit' => EditService::route('/{record}/edit'),
        ];
    }
}
