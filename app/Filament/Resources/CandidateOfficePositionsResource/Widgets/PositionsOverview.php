<?php

namespace App\Filament\Resources\CandidateOfficePositionsResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

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
