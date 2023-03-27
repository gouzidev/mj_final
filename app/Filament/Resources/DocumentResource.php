<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DocumentResource\Pages;
use App\Filament\Resources\DocumentResource\RelationManagers;
use App\Models\Category;
use App\Models\Document;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\ComponentContainer;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("title")->required(),
                FileUpload::make('file')->acceptedFileTypes(['application/pdf'])->maxSize(2048)->disk('public')->directory('docs'),
                FileUpload::make('thumbnail')->image()->maxSize(2048)->disk('public')->directory('images')->enableDownload(),
                Select::make("category_id")
                    ->relationship("category", 'category_name')
                    ->options(Category::all()->pluck('category_name', 'id')->toArray())
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("title"),
                TextColumn::make('categories.category_name'),
                ImageColumn::make("thumbnail")->disk('public')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
