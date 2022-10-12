<?php

namespace App\Filament\Resources\CandidateEducationResource\Pages;

use App\Filament\Resources\CandidateEducationResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateEducation extends ManageRecords
{
    protected static string $resource = CandidateEducationResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
