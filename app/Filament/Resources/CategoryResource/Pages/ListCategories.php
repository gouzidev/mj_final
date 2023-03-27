<?php

namespace App\Filament\Resources\CategoryResource\Pages;
use Filament\Tables;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\CategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
