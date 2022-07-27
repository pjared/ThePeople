<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

/**
 * These are the same tests as the loggedInUser, but just without the user part
 */
class VisitorTest extends DuskTestCase
{
    use DatabaseMigrations;

    public function testCandidatePage() 
    {
        if(env('APP_ENV') != 'local') {
            $this->markTestSkipped('Not local ENV');
        }
        $this->artisan('db:seed');

        $this->browse(function (Browser $browser) {
            $browser->visit('/candidate/profile/2')
                    ->assertSee('Club Jared')
                    // ->pressAndWaitFor('Club Jared', .5)
                    // ->assertSee('The Most Exclusive')
                    //Press the campaign donors (Commented out since not all have them)
                    // ->pressAndWaitFor('Campaign Donors', .5)
                    // ->assertSee('Name:')
                    //Close the donors bar
                    // ->pressAndWaitFor('Campaign Donors')
                    //Press the Previous Positions
                    ->pressAndWaitFor('Previous Political Positions', .5)
                    ->assertSee('Mayor')
                    //Close the dropdown
                    ->pressAndWaitFor('Previous Political Positions')
                    //Press the Other Opinions
                    ->pressAndWaitFor('Other Opinions', .5)
                    ->assertSee('Jared')
                    //Close the dropdown
                    ->pressAndWaitFor('Other Opinions');
        });
    }

    public function testBallotToCandidate()
    {
        if(env('APP_ENV') != 'local') {
            $this->markTestSkipped('Not local ENV');
        }
        $this->artisan('db:seed');

        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('ThePeople')
                    ->assertSee('Governor, Utah')
                    //Click on the Utah Governor Ballot
                    ->clickLink('Governor, Utah')
                    ->assertPathBeginsWith('/ballot')
                    ->assertSee('UTAH GOVERNOR')
                    //Make sure we can see a candidate
                    ->assertSee('Lord Macbeth')
                    //Click on one of the candiates
                    ->clickLink('More about Gandalf')
                    ->assertPathBeginsWith('/candidate/profile')
                    ->assertSee('Gandalf');
        });
    }
}
