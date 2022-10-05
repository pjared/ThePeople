<?php

namespace App\Filament\Resources\CandidateApplicationResource\Pages;

use App\Filament\Resources\CandidateApplicationResource;
use Filament\Resources\Pages\ListRecords;

class ListCandidateApplications extends ListRecords
{
    protected static string $resource = CandidateApplicationResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
