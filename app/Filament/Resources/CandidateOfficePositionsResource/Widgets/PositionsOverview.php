<?php

namespace App\Filament\Resources\CandidateOfficePositionsResource\Widgets;

use Filament\Widgets\Widget;

class PositionsOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-office-positions-resource.widgets.positions-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
    }
}
