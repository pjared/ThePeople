<?php

namespace App\Filament\Resources\PoliticalGroupEventsResource\Pages;

use App\Filament\Resources\PoliticalGroupEventsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePoliticalGroupEvents extends ManageRecords
{
    protected static string $resource = PoliticalGroupEventsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
