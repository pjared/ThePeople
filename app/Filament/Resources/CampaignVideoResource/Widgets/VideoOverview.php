<?php

namespace App\Filament\Resources\CampaignVideoResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class VideoOverview extends Widget
{
    protected static string $view = 'filament.resources.campaign-video-resource.widgets.video-overview';
    protected int | string | array $columnSpan = 'full';
    protected $listeners = ['itemAdded' => '$refresh'];

    public $candidate;

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
