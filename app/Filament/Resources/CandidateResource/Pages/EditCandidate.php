<?php

namespace App\Filament\Resources\CandidateResource\Pages;

use App\Filament\Resources\CandidateResource;
use App\Jobs\UpdateBallotCache;
use App\Jobs\UpdateCandidateAndBallotSearches;
use App\Models\Ballot;
use App\Models\CandidateRequiredStance;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Log;

class EditCandidate extends EditRecord
{
    protected static string $resource = CandidateResource::class;

    public $old_ballot_id;
    public $old_show;

    protected function getActions(): array
    {
        return [
            DeleteAction::make()
                ->before(function () {
                    $required_stances = CandidateRequiredStance::where('candidate_id', $this->record->id)->get();
                    foreach($required_stances as $required_stance) {
                        $required_stance->delete();
                    }
                }),
        ];
    }

    protected function afterFill(): void
    {
        $this->old_ballot_id = $this->data['ballot_id'];
        $this->old_show = $this->data['show'];
    }

    protected function afterSave(): void
    {
        //Get the ballot
        $ballot = Ballot::find($this->data['ballot_id']);

        // Update ballot cache if show has changed
        if($this->old_show != $this->data['show']) {
            //Call for the ballot caching update
            UpdateBallotCache::dispatch($ballot);

            //Call Job to update seaches
            UpdateCandidateAndBallotSearches::dispatch($this->data['id'], $this->data['show'])->afterCommit();

            //Update the old show variable
            $this->old_show = $this->data['show'];
        }

        //Check to see if the ballot has changed on save
        if($this->old_ballot_id == $this->data['ballot_id']) {
            //The ballot has not changed. There is nothing to do here
            return;
        }
        //Update the old ballot ID
        $this->old_ballot_id = $this->data['ballot_id'];

        //Delete all of the old required stances for the candidate
        $required_stances = CandidateRequiredStance::where('candidate_id', $this->data['id'])->get();
        foreach($required_stances as $required_stance) {
            $required_stance->delete();
        }

        //We need to add the required stances for each opinion in the ballot
        Log::info('Changing the required stance for the candidate');
        foreach($ballot->opinions as $opinion) {
            foreach($opinion->required_stances as $required_stance) {
                $crs = new CandidateRequiredStance();
                $crs->required_stance_id = $required_stance->id;
                $crs->candidate_id = $this->data['id'];
                $crs->save();
            }
        }
    }
}
