<?php

namespace App\Filament\Resources\CandidateApplicationResource\Pages;

use App\Filament\Resources\CandidateApplicationResource;
use App\Models\Candidate;
use App\Models\User;
use Carbon\Carbon;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditCandidateApplication extends EditRecord
{
    protected static string $resource = CandidateApplicationResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        //Check to see if the user has an existing candidate model
        if(! is_null(Candidate::firstWhere('user_id', $this->data['user_id']))) {
            return;
        }

        //Check to see that the candidate has actually been accepted
        if($this->data['status'] != 'accepted') {
            return;
        }
        //Assign them candidate role
        $user = User::find($this->data['user_id']);
        $user->assignRole('candidate');

        Log::info('Creating the candidate');
        $candidate = new Candidate();
        $candidate->name = $this->data['name'];
        $candidate->contact_email = $this->data['email'];
        $candidate->bio = "";
        $candidate->dob = $this->data['dob'];
        $candidate->signup_date = Carbon::parse($this->data['created_at']);
        $candidate->state = $this->data['state'];
        $candidate->contact_phone_number = $this->data['phone_number'];
        $candidate->user_id = $user->id;
        $candidate->party_name = 'Independent';
        $candidate->save();
    }
}
