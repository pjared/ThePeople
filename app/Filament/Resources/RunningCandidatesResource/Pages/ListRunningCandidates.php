<?php

namespace App\Filament\Resources\RunningCandidatesResource\Pages;

use App\Filament\Resources\RunningCandidatesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRunningCandidates extends ListRecords
{
    protected static string $resource = RunningCandidatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
