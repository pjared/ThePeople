<?php

namespace App\Filament\Resources\BallotPrecinctResource\Pages;

use App\Filament\Resources\BallotPrecinctResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBallotPrecincts extends ManageRecords
{
    protected static string $resource = BallotPrecinctResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
