<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ApplyForCandidateTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * Tests to make sure that the person has verified their email and set up 2FA
     */
    public function testVerifiedUser()
    {
        $this->markTestIncomplete('Need to make factory for approved user');

        //Create a user
        $user = User::factory()->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    //Go to the profile page
                    ->visit('/user/profile')
                    //See the application button and click on it
                    ->assertSee('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    ->press('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    //Make sure that we've changed the path
                    ->assertPathIs('/apply')
                    //Fill in the form
                    ->type('name', 'Squilliam Fancyson')
                    ->type('state', 'Utah')
                    ->type('office_name', 'Utah Senate')
                    ->type('location', 'District 23')
                    ->type('email', 'pjared870@gmail.com')
                    ->type('phone_number', '1234567890')
                    ->typeSlowly('dob', '06')
                    ->appendSlowly('dob', '10')
                    ->appendSlowly('dob', '1990')
                    //Apply and wait for page to update
                    ->press('APPLY')
                    ->pause(500)
                    //Make sure that we can see that we have a status
                    ->assertSee('The current status is:')
                    ->assertSee('submitted')
                    ;
        });
    }

    /**
     * Tests a user coming to the site, loggin in and applying to become a candidate
     *
     * @return void
     */
    public function testNavigateApplyForCandidate()
    {
        $this->markTestIncomplete('Need to make factory for approved user');
        //Create a user
        $user = User::factory()->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    //Go to the profile page
                    ->visit('/user/profile')
                    //See the application button and click on it
                    ->assertSee('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    ->press('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    //Make sure that we've changed the path
                    ->assertPathIs('/apply')
                    //Fill in the form
                    ->type('name', 'Squilliam Fancyson')
                    ->type('state', 'Utah')
                    ->type('office_name', 'Utah Senate')
                    ->type('location', 'District 23')
                    ->type('email', 'pjared870@gmail.com')
                    ->type('phone_number', '1234567890')
                    ->typeSlowly('dob', '06')
                    ->appendSlowly('dob', '10')
                    ->appendSlowly('dob', '1990')
                    //Apply and wait for page to update
                    ->press('APPLY')
                    ->pause(500)
                    //Make sure that we can see that we have a status
                    ->assertSee('The current status is:')
                    ->assertSee('submitted')
                    ;
        });
    }
}
