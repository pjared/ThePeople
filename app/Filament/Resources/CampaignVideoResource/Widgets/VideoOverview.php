<?php

namespace App\Filament\Resources\CampaignVideoResource\Widgets;

use Filament\Widgets\Widget;

class VideoOverview extends Widget
{
    protected static string $view = 'filament.resources.campaign-video-resource.widgets.video-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
    }
}
