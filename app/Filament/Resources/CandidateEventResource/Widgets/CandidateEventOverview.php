<?php

namespace App\Filament\Resources\CandidateEventResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

class CandidateEventOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-event-resource.widgets.candidate-event-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
