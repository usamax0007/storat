<?php

namespace App\Filament\Resources\HeroSections;

use App\Filament\Resources\HeroSections\Pages\CreateHeroSection;
use App\Filament\Resources\HeroSections\Pages\EditHeroSection;
use App\Filament\Resources\HeroSections\Pages\ListHeroSections;
use App\Filament\Resources\HeroSections\Schemas\HeroSectionForm;
use App\Filament\Resources\HeroSections\Tables\HeroSectionsTable;
use App\Models\HeroSection;
use BackedEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class HeroSectionResource extends Resource
{
    protected static ?string $model = HeroSection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'HeroSection';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                TextInput::make('subtitle_en')
                    ->label('Subtitle English')
                    ->maxLength(255),
                TextInput::make('subtitle_ar')
                    ->label('Subtitle Arabic')
                    ->maxLength(255),

                TextInput::make('title_en')
                    ->label('Title English')
                    ->maxLength(255)
                    ->required(),

                TextInput::make('title_ar')
                    ->label('Title Arabic')
                    ->maxLength(255)
                    ->required(),

                Textarea::make('description_en')
                    ->label('Description English')
                    ->rows(3)
                    ->columnSpanFull(),
                Textarea::make('description_ar')
                    ->label('Description Arabic')
                    ->rows(3)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Background Image')
                    ->directory('hero-sections')
                    ->image()
                    ->imageEditor()
                    ->required(),

                TextInput::make('button_text_en')
                    ->label('Button Text English')
                    ->maxLength(255),

                TextInput::make('button_text_ar')
                    ->label('Button Text English')
                    ->maxLength(255),

                TextInput::make('button_link')
                    ->label('Button Link')
                    ->url(),
                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                ImageColumn::make('image')->label('Image'),
                TextColumn::make('title_en')->searchable()->sortable(),
                TextColumn::make('subtitle_en')->searchable(),
                TextColumn::make('button_text_en'),
                TextColumn::make('button_link')->url(true),
                ToggleColumn::make('is_active')->label('Active'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                TernaryFilter::make('is_active')
                    ->label('Active Status'),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
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
            'index' => ListHeroSections::route('/'),
            'create' => CreateHeroSection::route('/create'),
            'edit' => EditHeroSection::route('/{record}/edit'),
        ];
    }
}
