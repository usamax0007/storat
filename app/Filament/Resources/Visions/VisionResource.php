<?php

namespace App\Filament\Resources\Visions;

use App\Filament\Resources\Visions\Pages\CreateVision;
use App\Filament\Resources\Visions\Pages\EditVision;
use App\Filament\Resources\Visions\Pages\ListVisions;
use App\Filament\Resources\Visions\Schemas\VisionForm;
use App\Filament\Resources\Visions\Tables\VisionsTable;
use App\Models\Vision;
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

class VisionResource extends Resource
{
    protected static ?string $model = Vision::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Vision';

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
                TextInput::make('description_en')
                    ->label('Service Description English')
                    ->required(),
                TextInput::make('description_ar')
                    ->label('Service Description Arabic')
                    ->required(),
                FileUpload::make('image')->label('image')->image(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('title_en')
                ->label('Service Title'),
                TextColumn::make('description_en')
                ->label('Service Description'),
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
            'index' => ListVisions::route('/'),
            'create' => CreateVision::route('/create'),
            'edit' => EditVision::route('/{record}/edit'),
        ];
    }
}
