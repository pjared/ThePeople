<?php

namespace App\Filament\Resources\CandidatePhotoResource\Pages;

use App\Filament\Resources\CandidatePhotoResource;
use App\Filament\Resources\CandidatePhotoResource\Widgets\CandidatePhotoOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCandidatePhotos extends ManageRecords
{
    protected static string $resource = CandidatePhotoResource::class;

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
            CandidatePhotoOverview::class
        ];
    }
}
