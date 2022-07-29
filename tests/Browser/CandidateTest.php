<?php

namespace Tests\Browser;

use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\RunningCandidates;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CandidateTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A test to make sure that when a candidate does not have a ballot that we've assigned to them, they will not be able to show
     *
     * @return void
     */
    public function testCandidateWithoutBallot()
    {
        //Seed database for roles
        $this->artisan('db:seed');

        //Create the candidate with an application
        $candidate = User::factory()->withCandidate()->create();

        //Give them the correct role
        $candidate->assignRole('candidate');

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    //Go to the profile page
                    ->visit('/candidate/preview')
                    ->assertSee('We have not placed you on a ballot yet.')
                    ->logout()
                    ;
        });
    }

    public function testCandidateWithBallot()
    {
        //Seed database for roles
        $this->artisan('db:seed');

        //Create a running candidate
        $running_candidate = RunningCandidates::factory()->create();
        $candidate = $running_candidate->candidate->user;
        //Give them the correct role
        $candidate->assignRole('candidate');

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    //Go to the profile page
                    ->visit('/candidate/preview')
                    ->assertSee('Show my profile on the ballot')
                    ;
        });
    }
}
