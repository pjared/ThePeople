<?php

namespace App\Filament\Resources\CandidateOfficePositionsResource\Pages;

use App\Filament\Resources\CandidateOfficePositionsResource;
use App\Filament\Resources\CandidateOfficePositionsResource\Widgets\PositionsOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateOfficePositions extends ManageRecords
{
    protected static string $resource = CandidateOfficePositionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->after(function () {
                    $this->emit('itemAdded');
                }),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PositionsOverview::class
        ];
    }
}
