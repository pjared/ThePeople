<?php

namespace Tests\Browser;

use App\Models\Ballot;
use App\Models\Candidate;

class TestUtils
{
    public static function candidate_with_ballot_and_user()
    {
        $candidate = Candidate::factory()->create();
        $ballot = Ballot::factory()->create();
        $candidate->ballot_id = $ballot->id;
        $candidate->show = true;
        $candidate->save();
        return $candidate;
    }
}
