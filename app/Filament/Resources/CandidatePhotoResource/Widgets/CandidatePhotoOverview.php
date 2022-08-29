<?php

namespace App\Filament\Resources\CandidatePhotoResource\Widgets;

use Illuminate\Contracts\View\View;
use Filament\Widgets\Widget;

class CandidatePhotoOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-photo-resource.widgets.candidate-photo-overview';
    protected int | string | array $columnSpan = 'full';

    public $candidate;

    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
