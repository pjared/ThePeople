<?php

namespace App\Filament\Resources\CandidateRequiredStanceResource\Pages;

use App\Filament\Resources\CandidateRequiredStanceResource;
use App\Filament\Resources\CandidateRequiredStanceResource\Widgets\RequiredStancesOverview;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateRequiredStances extends ManageRecords
{
    protected static string $resource = CandidateRequiredStanceResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RequiredStancesOverview::class,
        ];
    }
}
