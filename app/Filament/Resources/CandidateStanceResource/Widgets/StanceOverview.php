<?php

namespace App\Filament\Resources\CandidateStanceResource\Widgets;

use Filament\Widgets\Widget;

class StanceOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-stance-resource.widgets.stance-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;
    public $opinions;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
        $this->opinions = $this->candidate->ballot ? $this->candidate->ballot->opinions : [];
    }
}
