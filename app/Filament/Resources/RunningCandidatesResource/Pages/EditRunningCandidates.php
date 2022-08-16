<?php

namespace App\Filament\Resources\RunningCandidatesResource\Pages;

use App\Filament\Resources\RunningCandidatesResource;
use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateRequiredStance;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditRunningCandidates extends EditRecord
{
    protected static string $resource = RunningCandidatesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function () {
                    $required_stances = CandidateRequiredStance::where('candidate_id', $this->data['candidate_id'])->get();
                    foreach($required_stances as $required_stance) {
                        $required_stance->delete();
                    }
                })
        ];
    }

    private $old_ballot_id;

    protected function beforeSave(): void
    {
        $this->old_ballot_id = $this->data['ballot_id'];
    }

    protected function afterSave(): void
    {
        //Check to see if the ballot has changed on save
        if($this->old_ballot_id == $this->data['ballot_id']) {
            //The ballot has not changed. There is nothing to do here
            return;
        }

        //Get the ballot
        $ballot = Ballot::find($this->data['ballot_id']);

        //Delete all of the old required stances for the candidate
        $required_stances = CandidateRequiredStance::where('candidate_id', $this->data['candidate_id'])->get();
        foreach($required_stances as $required_stance) {
            $required_stance->delete();
        }

        //We need to add the required stances for each opinion in the ballot
        Log::info('Changing the required stance for the candidate');
        foreach($ballot->opinions as $opinion) {
            foreach($opinion->required_stances as $required_stance) {
                $crs = new CandidateRequiredStance();
                $crs->required_stance_id = $required_stance->id;
                $crs->candidate_id = $this->data['candidate_id'];
                $crs->save();
            }
        }
    }

}
