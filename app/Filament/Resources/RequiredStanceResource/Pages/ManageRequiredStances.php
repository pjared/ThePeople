<?php

namespace App\Filament\Resources\RequiredStanceResource\Pages;

use App\Filament\Resources\RequiredStanceResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageRequiredStances extends ManageRecords
{
    protected static string $resource = RequiredStanceResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
