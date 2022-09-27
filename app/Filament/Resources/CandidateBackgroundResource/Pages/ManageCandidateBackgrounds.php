<?php

namespace App\Filament\Resources\CandidateBackgroundResource\Pages;

use App\Filament\Resources\CandidateBackgroundResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateBackgrounds extends ManageRecords
{
    protected static string $resource = CandidateBackgroundResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
