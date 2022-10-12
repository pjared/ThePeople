<?php

namespace App\Filament\Resources\PoliticalGroupResource\Pages;

use App\Filament\Resources\PoliticalGroupResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPoliticalGroups extends ListRecords
{
    protected static string $resource = PoliticalGroupResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
