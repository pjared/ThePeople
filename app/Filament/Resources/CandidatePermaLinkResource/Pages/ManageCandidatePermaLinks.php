<?php

namespace App\Filament\Resources\CandidatePermaLinkResource\Pages;

use App\Filament\Resources\CandidatePermaLinkResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidatePermaLinks extends ManageRecords
{
    protected static string $resource = CandidatePermaLinkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
