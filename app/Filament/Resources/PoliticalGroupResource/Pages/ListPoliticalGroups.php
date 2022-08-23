<?php

namespace App\Filament\Resources\PoliticalGroupResource\Pages;

use App\Filament\Resources\PoliticalGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPoliticalGroups extends ListRecords
{
    protected static string $resource = PoliticalGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
