<?php

namespace App\Filament\Resources\BallotOpinionsResource\Pages;

use App\Filament\Resources\BallotOpinionsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBallotOpinions extends ManageRecords
{
    protected static string $resource = BallotOpinionsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
