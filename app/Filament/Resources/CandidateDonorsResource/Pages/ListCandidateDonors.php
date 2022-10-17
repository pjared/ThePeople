<?php

namespace App\Filament\Resources\CandidateDonorsResource\Pages;

use App\Filament\Resources\CandidateDonorsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCandidateDonors extends ListRecords
{
    protected static string $resource = CandidateDonorsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
