<?php

namespace App\Filament\Resources\CandidatePromiseResource\Widgets;

use Filament\Widgets\Widget;

class PromiseOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-promise-resource.widgets.promise-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
    }
}
