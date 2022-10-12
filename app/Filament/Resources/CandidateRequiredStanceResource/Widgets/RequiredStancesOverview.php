<?php

namespace App\Filament\Resources\CandidateRequiredStanceResource\Widgets;

use Filament\Widgets\Widget;

class RequiredStancesOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-required-stance-resource.widgets.required-stances-overview';

    public $candidate;
    public $opinions;

    protected int | string | array $columnSpan = 'full';

    //Cannot emit from resource, so this will stay as is
    // protected $listeners = ['itemAdded' => '$refresh'];

    // public function render(): View
    // {
    //     $this->candidate = auth()->user()->candidate;

    //     return parent::render();
    // }

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
        $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
    }
}
