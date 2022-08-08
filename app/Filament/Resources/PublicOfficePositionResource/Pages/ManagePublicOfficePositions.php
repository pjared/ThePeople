<?php

namespace App\Filament\Resources\PublicOfficePositionResource\Pages;

use App\Filament\Resources\PublicOfficePositionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePublicOfficePositions extends ManageRecords
{
    protected static string $resource = PublicOfficePositionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
