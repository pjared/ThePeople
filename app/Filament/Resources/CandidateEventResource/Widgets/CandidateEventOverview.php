<?php

namespace App\Filament\Resources\CandidateEventResource\Widgets;

use Filament\Widgets\Widget;

class CandidateEventOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-event-resource.widgets.candidate-event-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
    }
}
