<?php

namespace App\Filament\Resources\GroupApplicationResource\Pages;

use App\Filament\Resources\GroupApplicationResource;
use Filament\Resources\Pages\ListRecords;

class ListGroupApplications extends ListRecords
{
    protected static string $resource = GroupApplicationResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
