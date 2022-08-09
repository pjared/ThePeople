<?php

namespace App\Filament\Resources\CampaignVideoResource\Pages;

use App\Filament\Resources\CampaignVideoResource;
use App\Filament\Resources\CampaignVideoResource\Widgets\VideoOverview;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCampaignVideos extends ManageRecords
{
    protected static string $resource = CampaignVideoResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            VideoOverview::class
        ];
    }
}
