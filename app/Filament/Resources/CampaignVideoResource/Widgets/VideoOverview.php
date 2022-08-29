<?php

namespace App\Filament\Resources\CampaignVideoResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

class VideoOverview extends Widget
{
    protected static string $view = 'filament.resources.campaign-video-resource.widgets.video-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
