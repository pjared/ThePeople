<?php

namespace App\Filament\Resources\CandidateDonorsResource\Pages;

use App\Filament\Resources\CandidateDonorsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCandidateDonors extends EditRecord
{
    protected static string $resource = CandidateDonorsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
