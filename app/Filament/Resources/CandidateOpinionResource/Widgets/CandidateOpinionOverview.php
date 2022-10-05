<?php

namespace App\Filament\Resources\CandidateOpinionResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class CandidateOpinionOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-opinion-resource.widgets.candidate-opinion-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
