<?php

namespace App\Filament\Resources\GroupBallotQuestionsResource\Pages;

use App\Filament\Resources\GroupBallotQuestionsResource;
use Filament\Resources\Pages\ManageRecords;

class ManageGroupBallotQuestions extends ManageRecords
{
    protected static string $resource = GroupBallotQuestionsResource::class;

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
