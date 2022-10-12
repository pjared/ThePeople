<?php

namespace App\Filament\Resources\CandidateOpinionResource\Pages;

use App\Filament\Resources\CandidateOpinionResource;
use App\Filament\Resources\CandidateOpinionResource\Widgets\CandidateOpinionOverview;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidateOpinions extends ManageRecords
{
    protected static string $resource = CandidateOpinionResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make()
                ->after(function () {
                    $this->emit('itemAdded');
                }),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CandidateOpinionOverview::class,
        ];
    }
}
