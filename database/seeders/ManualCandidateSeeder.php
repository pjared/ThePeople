<?php

namespace Database\Seeders;

use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManualCandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $candidate = Candidate::factory()->create();

        $candidate->user_id = null;
        $candidate->save();

        DB::table('manual_candidates')->insert([
            'candidate_id' => $candidate->id,
            'note' => rand(1,4),
        ]);

        //Add the candidate to other ballot
        // DB::table('running_candidates')->insert([
        //     'ballot_id' => 2, // only 1-4, since 4 offices
        //     'candidate_id' => $candidate->id,
        //     'show' => true,
        // ]);
    }
}
