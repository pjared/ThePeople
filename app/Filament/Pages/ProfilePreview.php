<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ProfilePreview extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-search';

    protected static string $view = 'filament.pages.profile-preview';
    // protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $title = 'Profile Preview';
    protected static ?string $navigationLabel = 'Profile Preview';

    protected static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('candidate');
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->hasRole('candidate'), 403);
    }
}
