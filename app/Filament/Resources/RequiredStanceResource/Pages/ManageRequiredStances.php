<?php

namespace App\Filament\Resources\RequiredStanceResource\Pages;

use App\Filament\Resources\RequiredStanceResource;
use App\Models\BallotOpinions;
use App\Models\Candidate;
use App\Models\CandidateRequiredStance;
use App\Models\ControversialOpinion;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Support\Facades\Log;

class ManageRequiredStances extends ManageRecords
{
    protected static string $resource = RequiredStanceResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    protected function afterCreate(): void
    {
        Log::info('Adding the required stance to each candidate');

        //Get the controversial opinion this applies to
        $opinion = ControversialOpinion::find($this->data['controversial_opinion_id']);

        //Get all ballot opinions that have this opinon ID
        $ballot_opinions = BallotOpinions::where($opinion->id)->get;
        foreach($ballot_opinions as $ballot_opinion) {
            //Get the running candidates on that ballot
            $candidates = Candidate::where('ballot_id', $ballot_opinion->ballot_id)->get;
            //Add the required stance for each of those running candidatas
            foreach($candidates as $candidate) {
                $crs = new CandidateRequiredStance();
                $crs->required_stance_id = $this->data['id'];
                $crs->candidate_id = $candidate->id;
                $crs->save();
            }
        }
    }
}
