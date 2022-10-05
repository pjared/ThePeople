<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\EditBio;
use App\Filament\Widgets\EditPersonalInfo;
use App\Filament\Widgets\EditProfileImage;
use Filament\Pages\Page;

class CandidatePersonalInfo extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static string $view = 'filament.pages.candidate-personal-info';
    protected static ?string $navigationGroup = 'Edit Your Profile';
    protected static ?string $title = 'Candidate Info';
    protected static ?string $navigationLabel = 'Personal Info';

    protected static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasRole('candidate');
    }

    public function mount(): void
    {
        abort_unless(auth()->user()->hasRole('candidate'), 403);
    }

    protected function getHeaderWidgets(): array
    {
        return [
            EditBio::class,
            EditPersonalInfo::class,
            EditProfileImage::class,
        ];
    }

}
