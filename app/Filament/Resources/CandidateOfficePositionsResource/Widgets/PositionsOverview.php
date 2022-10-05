<?php

namespace App\Filament\Resources\CandidateOfficePositionsResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class PositionsOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-office-positions-resource.widgets.positions-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
