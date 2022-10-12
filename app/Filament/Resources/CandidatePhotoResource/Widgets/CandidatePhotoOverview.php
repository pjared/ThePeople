<?php

namespace App\Filament\Resources\CandidatePhotoResource\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Contracts\View\View;

class CandidatePhotoOverview extends Widget
{
    protected static string $view = 'filament.resources.candidate-photo-resource.widgets.candidate-photo-overview';

    public $candidate;

    protected int | string | array $columnSpan = 'full';
    protected $listeners = ['itemAdded' => '$refresh'];

    public function render(): View
    {
        $this->candidate = auth()->user()->candidate;

        return parent::render();
    }
}
