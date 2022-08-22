<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Livewire\WithFileUploads;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class EditProfileImage extends Widget
{
    use WithFileUploads;

    protected static string $view = 'filament.widgets.edit-profile-image';

    public $photo;
    public $candidate;

    public function mount() {
        $this->candidate = auth()->user()->candidate;
    }

    public static function canView(): bool
    {
        if(auth()->user()->candidate) {
            return true;
        }
        return false;
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
            auth()->user()->candidate->updateProfilePhoto($this->photo);
            // auth()->user()->updateProfilePhoto($this->photo);
        }
    }

    public function deleteProfilePhoto() {
        // auth()->user()->deleteProfilePhoto($this->photo);
        auth()->user()->candidate->updateProfilePhoto($this->photo);
    }
}
