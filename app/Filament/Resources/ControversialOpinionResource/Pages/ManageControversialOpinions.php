<?php

namespace App\Filament\Resources\ControversialOpinionResource\Pages;

use App\Filament\Resources\ControversialOpinionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageControversialOpinions extends ManageRecords
{
    protected static string $resource = ControversialOpinionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
