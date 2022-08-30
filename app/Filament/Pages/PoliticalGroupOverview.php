<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class PoliticalGroupOverview extends Page implements HasForms
{
    use InteractsWithForms;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.political-group-overview';

    public $group;
    public $photo;
    public $badge_photo;

    public $party_name;
    public $contact_phone_number;
    public $phone_number;
    public $contact_email;
    public $email;
    public $site_link;

    protected $rules = [
        // 'name' => 'nullable|string',
        'description' => 'nullable|string',
        'phone_number' => 'nullable',
        'contact_email' => 'required|string',
        'email' => 'nullable',
        'site_link' => 'nullable',
    ];


    protected static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('organizer') || auth()->user()->hasRole('organizerAdmin');
    }

    public function mount(): void
    {
        $this->group = auth()->user()->manages_political_groups->first();
        // dd( , $this->group->profile_photo_url);
        abort_unless(auth()->user()->hasRole('organizer') || auth()->user()->hasRole('organizerAdmin'), 403);

        $this->form->fill([
            'description' => $this->group->description,
            'phone_number' => $this->group->phone_number,
            'contact_email' => $this->group->contact_email,
            'email' => $this->group->email,
            'site_link' => $this->group->site_link,
        ]);
    }

    /**
     * Candidates are going to upload a photo.
     * The catch is, they don't know how to even use a computer. I would be surprised if a candidate
     * could tell me what image metadata is. So we're going to strip that for them.
     */
    public function update_photo()
    {
        // 2 Levels of validation. Make sure that it's an image first
        $this->validate([
            'photo' => 'image',
        ]);
        //Now lets run it through and optimizer
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($this->photo->getRealPath());

        // Now lets make sure that it's less than a mb
        $this->validate([
            'photo' => 'max:1024'
        ]);
        if (isset($this->photo)) {
            $this->group->updateProfilePhoto($this->photo);
        }
    }

    public function update_badge()
    {
        // 2 Levels of validation. Make sure that it's an image first
        $this->validate([
            'badge_photo' => 'image',
        ]);
        //Now lets run it through and optimizer
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($this->badge_photo->getRealPath());

        // Now lets make sure that it's less than a mb
        $this->validate([
            'badge_photo' => 'max:1024'
        ]);
        if (isset($this->badge_photo)) {
            // dd('here');
            $photo = $this->badge_photo;
            tap($this->group->badge_url, function ($previous) use ($photo) {
                $this->group->forceFill([
                    'badge_url' => $photo->storePublicly(
                        'badge-photos', ['disk' => 'public']
                    ),
                ])->save();

                if ($previous) {
                    Storage::disk('public')->delete($previous);
                }
            });
        }
    }

    public function deleteProfilePhoto() {
        $this->group->deleteProfilePhoto($this->photo);
    }

    protected function getFormSchema(): array
    {
        return [
            Textarea::make('description'),
            TextInput::make('phone_number'),
            TextInput::make('contact_email')->email()->required(),
            TextInput::make('email')->email(),
            TextInput::make('site_link')->url(),
        ];
    }

    public function save() :void
    {
        $this->group->update(
            $this->form->getState(),
        );
    }
}
