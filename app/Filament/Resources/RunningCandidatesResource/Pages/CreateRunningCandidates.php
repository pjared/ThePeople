<?php

namespace App\Filament\Resources\RunningCandidatesResource\Pages;

use App\Filament\Resources\RunningCandidatesResource;
use App\Mail\CandidateBallotAssigned;
use App\Models\Ballot;
use App\Models\Candidate;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CreateRunningCandidates extends CreateRecord
{
    protected static string $resource = RunningCandidatesResource::class;

    protected function afterCreate(): void
    {
        //Email the candidate that they have been assigned to a ballot.
        Log::info('Mailing the candidate that they have a ballot');
        $candidate = Candidate::find($this->data['candidate_id']);
        $ballot = Ballot::find($this->data['ballot_id']);
        if($candidate->user) {
            Mail::to($candidate->user)->send(new CandidateBallotAssigned($ballot->office->name . ', ' . $ballot->location->name));
        }
    }
}
