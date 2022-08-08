<?php

namespace App\Filament\Resources\BallotResource\Pages;

use App\Filament\Resources\BallotResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBallots extends ManageRecords
{
    protected static string $resource = BallotResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
