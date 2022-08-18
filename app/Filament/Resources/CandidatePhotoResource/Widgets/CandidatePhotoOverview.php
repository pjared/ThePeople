<?php

namespace App\Filament\Resources\CandidatePhotoResource\Widgets;

use Filament\Widgets\Widget;

class CandidatePhotoOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-photo-resource.widgets.candidate-photo-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    public function mount()
    {
        $this->candidate = auth()->user()->candidate;
    }
}
