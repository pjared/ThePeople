<?php

namespace Tests\Browser;

use App\Models\Location;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testUserIsAdmin()
    {
        $this->artisan('db:seed');
        $user = User::factory()->create();

        $user->assignRole('admin');
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/home')
                    ->assertSee('Admin')
                    ->clickLink('Admin')
                    ->assertPathIs('/admin');
        });
    }

    /**
     * This test will test the Create a location, office, and ballot admin tab
     */
    public function testBallotCreation()
    {
        $this->markTestIncomplete('Need to account for tabs');
        $this->artisan('db:seed');
        $user = User::factory()->create();
        $user->assignRole('admin');

        //TODO: I should probable assert to make sure that these new models exist (they should appear in the view)
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/admin/create-ballot')
                    //Need to create a location first
                    ->assertSee('Create a Location')
                    //Create a location without a state
                    ->type('new_location_state', '')
                    ->type('new_location_name', 'Utah')
                    ->type('new_location_type', 'state')
                    ->pressAndWaitFor('create_location', .5)

                    //Create a location with a states
                    ->type('new_location_state', 'Utah')
                    ->type('new_location_name', 'District 23')
                    ->type('new_location_type', 'district')
                    ->press('create_location')
                    ->pause(300)

                    //Now we're going to create an office
                    ->assertSee('Create an office')
                    // Create one with term limits
                    ->type('new_position_limit', '2')
                    ->type('new_position_years', '4')
                    ->type('new_position_name', 'Senate')
                    ->press('create_office')
                    ->pause(300)

                    // Create one without term limits
                    ->type('new_position_years', '4')
                    ->type('new_position_name', 'Senate')
                    ->press('create_office')
                    ->pause(300)

                    //Now let's create a ballot
                    ->assertSee('Create a Ballot')
                    ->type('new_ballot_office', '4')
                    ->type('new_ballot_location', 'Senate')
                    ->type('new_ballot_date', 'Senate')
                    ->pressAndWaitFor('create_ballot', .5)
                    ;
        });
    }

    /**
     * This test will cover the "Create Opinions" admin tab
     */
    public function testCreateOpinions()
    {
        $this->artisan('db:seed'); //Need to seed the admin role
        $user = User::factory()->create();
        $user->assignRole('admin');

        //TODO: I should probable assert to make sure that these new models exist (they should appear in the view)
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/admin/opinions/create')
                    //Need to create a location first
                    ->assertSee('Create a new opinion')

                    //Create a new opinion
                    ->type('new_opinion_description', 'The Candidate should show support')
                    ->type('new_opinion_name', 'War in Ukraine')
                    ->type('new_opinion_votes', '0')
                    ->press('add_opinion')
                    ->pause(300)
                    ;
        });
    }

    /**
     * This test will test the Candidate Ballot Assignment
     */
    // public function testBallotAssignment()
    // {

    // }
}
