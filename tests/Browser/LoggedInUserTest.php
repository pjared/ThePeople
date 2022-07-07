<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoggedInUserTest extends DuskTestCase
{

    public function testCandidatePage() {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(2))
                    //Press the candidate opinion reasoing
                    ->visit('/candidate/profile/2')
                    ->pressAndWaitFor('SHOW CANDIDATE REASONING', .5)
                    ->assertSee('I think this because...')
                    //Press the campaign donors
                    ->pressAndWaitFor('Campaign Donors', .5)
                    ->assertSee('Name:')
                    //Close the donors bar
                    ->pressAndWaitFor('Campaign Donors')
                    //Press the Previous Positions
                    ->pressAndWaitFor('Previous Positions in Public Office', .5)
                    ->assertSee('Mayor')
                    //Close the dropdown
                    ->pressAndWaitFor('Previous Positions in Public Office')
                    //Press the Other Opinions
                    ->pressAndWaitFor('Other Opinions', .5)
                    ->assertSee('Jared')
                    //Close the dropdown
                    ->pressAndWaitFor('Other Opinions');
        });
    }
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testBallotToCandidate()
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(2))
                    //Visit the home link
                    ->visit('/')
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
