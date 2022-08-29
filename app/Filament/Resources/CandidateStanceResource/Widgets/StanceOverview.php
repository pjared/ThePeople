<?php

namespace App\Filament\Resources\CandidateStanceResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

class StanceOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-stance-resource.widgets.stance-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;
    public $opinions;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;
        $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
        return parent::render();
    }

    // public function mount()
    // {
    //     $this->candidate = auth()->user()->candidate;
    //     $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
    // }
}
