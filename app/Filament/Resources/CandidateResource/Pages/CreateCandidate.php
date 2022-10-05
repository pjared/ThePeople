<?php

namespace App\Filament\Resources\CandidateResource\Pages;

use App\Filament\Resources\CandidateResource;
use App\Mail\CandidateBallotAssigned;
use App\Models\Ballot;
use App\Models\CandidateRequiredStance;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class CreateCandidate extends CreateRecord
{
    protected static string $resource = CandidateResource::class;

    protected function afterCreate(): void
    {
        if(! $this->data['ballot_id']) {
            return;
        }

        //Get the candidate model
        $candidate = $this->record;
        //Get the ballot model

        $ballot = Ballot::find($this->data['ballot_id']);

        //We need to add the required stances for each opinion in the ballot
        Log::info('Adding the required stance to the new candidate');
        foreach($ballot->opinions as $opinion) {
            foreach($opinion->required_stances as $required_stance) {
                $crs = new CandidateRequiredStance();
                $crs->required_stance_id = $required_stance->id;
                $crs->candidate_id = $candidate->id;
                $crs->save();
            }
        }

        //Email the candidate that they have been assigned to a ballot.
        Log::info('Mailing the candidate that they have a ballot');

        if($candidate->user) {
            Mail::to($candidate->user)->send(new CandidateBallotAssigned($ballot->office->name . ', ' . $ballot->location->name));
        }
    }
}
