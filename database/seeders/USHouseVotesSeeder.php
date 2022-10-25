<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\CandidateVote;
use App\Models\Law;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class USHouseVotesSeeder extends Seeder
{
    public $votes = [
        "H.R. 4521" => [
            "Burgess Owens" => "nay",
            "John Curtis" => "nay",
            "Blake Moore" => "nay",
            "Chris Stewart" => "nay"
        ],
        "H.R. 7776" => [
            "Burgess Owens" => "yea",
            "John Curtis" => "yea",
            "Blake Moore" => "yea",
            "Chris Stewart" => "yea"
        ],
        "H.R. 3684" => [
            "Burgess Owens" => "nay",
            "John Curtis" => "nay",
            "Blake Moore" => "nay",
            "Chris Stewart" => "nay"
        ],
        "H.R. 5376" => [
            "Burgess Owens" => "nay",
            "John Curtis" => "nay",
            "Blake Moore" => "nay",
            "Chris Stewart" => "nay"
        ],
        "H.R. 1799" => [
            "Burgess Owens" => "yea",
            "John Curtis" => "yea",
            "Blake Moore" => "yea",
            "Chris Stewart" => "yea"
        ],
        "H.R. 7691" => [
            "Burgess Owens" => "yea",
            "John Curtis" => "yea",
            "Blake Moore" => "yea",
            "Chris Stewart" => "yea"
        ],
        "H.R. 3967" => [
            "Burgess Owens" => "nay",
            "John Curtis" => "nay",
            "Blake Moore" => "nay",
            "Chris Stewart" => "nay"
        ],
        "H.R. 6833" => [
            "Burgess Owens" => "nay",
            "John Curtis" => "nay",
            "Blake Moore" => "nay",
            "Chris Stewart" => "nay"
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->votes as $law_name => $candidate_votes) {
            $law = Law::firstWhere('bill_id', $law_name);
            if (! $law) {
                echo 'Could not find ' . $law_name . '\n';
                continue;
            }
            foreach($candidate_votes as $candidate_name => $vote) {
                $candidate = Candidate::firstWhere('name', $candidate_name);
                if (! $candidate) {
                    echo 'Could not find ' . $candidate_name . '\n';
                    continue;
                }
                CandidateVote::create([
                    'candidate_id' => $candidate->id,
                    'law_id' => $law->id,
                    'vote' => $vote,
                ]);
            }

        }
    }
}
