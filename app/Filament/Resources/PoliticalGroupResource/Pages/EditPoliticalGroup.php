<?php

namespace App\Filament\Resources\PoliticalGroupResource\Pages;

use App\Filament\Resources\PoliticalGroupResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPoliticalGroup extends EditRecord
{
    protected static string $resource = PoliticalGroupResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
