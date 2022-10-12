<?php

namespace App\Filament\Resources\GroupOrganizerResource\Pages;

use App\Filament\Resources\GroupOrganizerResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageGroupOrganizers extends ManageRecords
{
    protected static string $resource = GroupOrganizerResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
