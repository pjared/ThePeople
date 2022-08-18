<?php

namespace App\Filament\Resources\CandidatePhotoResource\Pages;

use App\Filament\Resources\CandidatePhotoResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCandidatePhoto extends EditRecord
{
    protected static string $resource = CandidatePhotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
