<?php

namespace App\Filament\Resources\CandidatePromiseResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class PromiseOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-promise-resource.widgets.promise-overview';
    protected int | string | array $columnSpan = 'full';
    protected $listeners = ['itemAdded' => '$refresh'];

    public $candidate;

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
