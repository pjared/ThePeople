<?php

namespace App\Filament\Widgets;

use App\Models\Candidate;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Widgets\Widget;

class EditPersonalInfo extends Widget implements HasForms
{
    use InteractsWithForms;
    protected static string $view = 'filament.widgets.edit-personal-info';

    public Candidate $candidate;

    public $party_name;
    public $contact_phone_number;
    public $phone_number;
    public $contact_email;
    public $email;
    public $site_link;

    protected $rules = [
        'party_name' => 'nullable|string',
        'contact_phone_number' => 'nullable',
        'phone_number' => 'nullable',
        'contact_email' => 'required|string',
        'email' => 'nullable',
        'site_link' => 'nullable',
    ];

    public function mount(): void
    {
        $this->candidate = Candidate::firstWhere('user_id', auth()->id());

        // dd($this->candidate->party_name);
        $this->form->fill([
            'party_name' => $this->candidate->party_name,
            'contact_phone_number' => $this->candidate->contact_phone_number,
            'phone_number' => $this->candidate->phone_number,
            'contact_email' => $this->candidate->contact_email,
            'email' => $this->candidate->email,
            'site_link' => $this->candidate->site_link,
        ]);
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('party_name')->required(),
            TextInput::make('contact_phone_number'),
            TextInput::make('phone_number'),
            TextInput::make('contact_email')->email()->required(),
            TextInput::make('email')->email(),
            TextInput::make('site_link')->url(),
        ];
    }

    public function save() :void
    {
        $this->candidate->update(
            $this->form->getState(),
        );
    }
}
