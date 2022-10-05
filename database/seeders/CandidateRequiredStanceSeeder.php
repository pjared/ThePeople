<?php

namespace Database\Seeders;

use App\Models\Ballot;
use App\Models\BallotOpinions;
use App\Models\ControversialOpinion;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateRequiredStanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ballot_opinions = BallotOpinions::where('controversial_opinion_id', 3)->get();

        //This can be hard coded as i'm only doing it for one
        $opinion_required_stances = ControversialOpinion::find(3)->required_stances;

        foreach($ballot_opinions as $ballot_opinion) {
            $candidates = Ballot::find($ballot_opinion->ballot_id)->all_candidates;
            foreach($candidates as $candidate) {
                foreach($opinion_required_stances as $required_stance) {
                    DB::table('candidate_required_stances')->insert([
                        'required_stance_id' => $required_stance->id,
                        'candidate_id' => $candidate->id,
                    ]);
                }
            }
        }
    }
}
