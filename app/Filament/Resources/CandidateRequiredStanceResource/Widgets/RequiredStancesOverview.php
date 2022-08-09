<?php

namespace App\Filament\Resources\CandidateRequiredStanceResource\Widgets;

use Filament\Widgets\Widget;

class RequiredStancesOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-required-stance-resource.widgets.required-stances-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;
    public $opinions;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
        $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
    }
}
