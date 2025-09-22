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
    protected static string|null|\UnitEnum $navigationGroup = "Web CMS";

    protected static ?string $recordTitleAttribute = 'Service';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('title_en')
                    ->label('Service Title English')
                    ->required()
                    ->maxLength(255),

                TextInput::make('title_ar')
                    ->label('Service Title Arabic')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sub_title_en')
                    ->label('Service Sub Title English')
                    ->required()
                    ->maxLength(255),
                TextInput::make('sub_title_ar')
                    ->label('Service Sub Title Arabic')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->maxLength(255),

                Textarea::make('description_en')
                    ->label('Service Description English')
                    ->rows(4)
                    ->required(),
                Textarea::make('description_ar')
                    ->label('Service Description Arabic')
                    ->rows(4)
                    ->required(),

                FileUpload::make('icon')
                    ->label('Icon')
                    ->image()
                    ->imagePreviewHeight('100')
                    ->disk('public')
                    ->directory('services')
                    ->nullable(),

                FileUpload::make('image')
                    ->label('image')
                    ->image()
                    ->disk('public')
                    ->directory('services')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                ImageColumn::make('icon')->label('Icon')->circular(),
                TextColumn::make('title_en')->label('Title')->searchable(),
                TextColumn::make('sub_title_en')->label('Sub Title')->searchable(),
                TextColumn::make('description_en')->label('Description')->limit(50),
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
