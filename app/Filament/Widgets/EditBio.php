<?php

namespace App\Filament\Widgets;

use App\Models\Candidate;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\Widget;

class EditBio extends Widget implements HasForms
{
    use InteractsWithForms;
    protected static string $view = 'filament.widgets.edit-bio';
    protected int | string | array $columnSpan = 'full';

    public Candidate $candidate;

    public $bio;

    public static function canView(): bool
    {
        if(auth()->user()->candidate) {
            return true;
        }
        return false;
    }

    public function mount(): void
    {
        // dd(Candidate::firstWhere('user_id', auth()->id()), auth()->id());
        $this->candidate = Candidate::firstWhere('user_id', auth()->id());

        $this->form->fill([
            'bio' => $this->candidate->bio,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            Textarea::make('bio'),
        ];
    }

    public function save() :void
    {
        $this->candidate->update(
            $this->form->getState(),
        );
    }
}
