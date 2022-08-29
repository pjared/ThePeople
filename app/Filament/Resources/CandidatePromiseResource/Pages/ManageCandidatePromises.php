<?php

namespace App\Filament\Resources\CandidatePromiseResource\Pages;

use App\Filament\Resources\CandidatePromiseResource;
use App\Filament\Resources\CandidatePromiseResource\Widgets\PromiseOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidatePromises extends ManageRecords
{
    protected static string $resource = CandidatePromiseResource::class;

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
            PromiseOverview::class
        ];
    }
}
