<?php

namespace App\Filament\Resources\CandidatePromiseResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

class PromiseOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-promise-resource.widgets.promise-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
