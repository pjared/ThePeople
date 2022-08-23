<?php

namespace App\Filament\Resources\PoliticalGroupCandidatesResource\Pages;

use App\Filament\Resources\PoliticalGroupCandidatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePoliticalGroupCandidates extends ManageRecords
{
    protected static string $resource = PoliticalGroupCandidatesResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
