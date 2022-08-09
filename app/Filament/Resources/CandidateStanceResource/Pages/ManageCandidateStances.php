<?php

namespace App\Filament\Resources\CandidateStanceResource\Pages;

use App\Filament\Resources\CandidateStanceResource;
use App\Filament\Resources\CandidateStanceResource\Widgets\StanceOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateStances extends ManageRecords
{
    protected static string $resource = CandidateStanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            StanceOverview::class
        ];
    }
}
