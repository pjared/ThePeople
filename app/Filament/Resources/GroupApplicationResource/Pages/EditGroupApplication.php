<?php

namespace App\Filament\Resources\GroupApplicationResource\Pages;

use App\Filament\Resources\GroupApplicationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupApplication extends EditRecord
{
    protected static string $resource = GroupApplicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
