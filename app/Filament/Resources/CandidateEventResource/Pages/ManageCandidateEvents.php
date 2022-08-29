<?php

namespace App\Filament\Resources\CandidateEventResource\Pages;

use App\Filament\Resources\CandidateEventResource;
use App\Filament\Resources\CandidateEventResource\Widgets\CandidateEventOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateEvents extends ManageRecords
{
    protected static string $resource = CandidateEventResource::class;

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
            CandidateEventOverview::class
        ];
    }
}
