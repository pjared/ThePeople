<?php

namespace App\Filament\Resources\CandidateEventResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class CandidateEventOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-event-resource.widgets.candidate-event-overview';
    protected int | string | array $columnSpan = 'full';
    protected $listeners = ['itemAdded' => '$refresh'];

    public $candidate;

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
