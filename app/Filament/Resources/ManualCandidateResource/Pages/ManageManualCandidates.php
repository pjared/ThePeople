<?php

namespace App\Filament\Resources\ManualCandidateResource\Pages;

use App\Filament\Resources\ManualCandidateResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageManualCandidates extends ManageRecords
{
    protected static string $resource = ManualCandidateResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
