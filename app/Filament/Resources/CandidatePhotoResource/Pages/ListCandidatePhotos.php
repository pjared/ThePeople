<?php

namespace App\Filament\Resources\CandidatePhotoResource\Pages;

use App\Filament\Resources\CandidatePhotoResource;
use App\Filament\Resources\CandidatePhotoResource\Widgets\CandidatePhotoOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCandidatePhotos extends ListRecords
{
    protected static string $resource = CandidatePhotoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            CandidatePhotoOverview::class
        ];
    }
}
