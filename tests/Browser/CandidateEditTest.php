<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CandidateEditTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A test to make sure that the candidate drawer is working
     *
     * @return void
     */
    public function testCandidateDrawer()
    {
        //Seed database for roles
        $this->artisan('db:seed');

        //Create the candidate with an application
        $candidate = User::factory()->withCandidate()->create();

        //Give them the correct role
        $candidate->assignRole('candidate');

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    ->visit('/candidate/preview')
                    //Make sure that the drawer drop down is working
                    ->pressAndWaitFor('Edit Your Profile', .5)
                    ->assertSee('Basic Information')

                    //Click one of the links in the dropdown
                    ->clickLink('Basic Information')
                    ->assertPathIs('/candidate/edit/info')
                    ->assertSee('Bio')

                    ->clickLink('Bio')
                    ->assertPathIs('/candidate/edit/bio')
                    ->assertSee('Controversial Stances')

                    ->clickLink('Controversial Stances')
                    ->assertPathIs('/candidate/edit/stances')
                    ->assertSee('Promises')

                    ->clickLink('Promises')
                    ->assertPathIs('/candidate/edit/promises')
                    ->assertSee('Campaign Videos')

                    ->clickLink('Campaign Videos')
                    ->assertPathIs('/candidate/edit/videos')
                    ->assertSee('Previous Political Positions')

                    ->clickLink('Previous Political Positions')
                    ->assertPathIs('/candidate/edit/positions')
                    ->logout()
                    ;

        });
    }

    /**
     * A test for the candidate to edit their info
     */
    public function testCandidateEditInfo()
    {
        $this->artisan('db:seed');
        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    ->visit('/candidate/edit/info')
                    // ->type()
                    ->logout()
                    ;

        });
    }
}
