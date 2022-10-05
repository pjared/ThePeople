<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminApproveCandidateTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAcceptAndPlaceCandidate()
    {
        $this->markTestSkipped('Pre-Filament');
        //Seed for admin privs
        $this->artisan('db:seed');
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        //Create the candidate with an application
        $candidate = User::factory()->withCandidateApplication()->create();

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    //Go to the profile page
                    ->visit('/user/profile')
                    //See the dashboard button and click on it
                    ->assertSee('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    ->press('ARE YOU A CANDIDATE? CLICK HERE TO APPLY FOR A PROFILE')
                    ->pause(500)
                    //Make sure we've gone to the preview page
                    ->assertPathIs('/apply')
                    ->assertSee('The current status is:')
                    ->assertSee('submitted')
                    ->logout()
                    ;
        });

        $this->browse(function (Browser $first) use ($admin, $candidate) {
            $first->loginAs($admin)
                    ->visit('/admin/candidate/approve')
                    ->assertSee('List of Applications')
                    ->assertSee('Name: ' . $candidate->name)
                    // ->screenshot('accept_candidate')
                    ->press('Accept-' . $candidate->id)
                    ->logout()
                    ;
        });

        $this->browse(function (Browser $first) use ($candidate) {
            $first->loginAs($candidate)
                    //Go to the profile page
                    ->visit('/user/profile')
                    //See the dashboard button and click on it
                    ->assertSee('GO TO CANDIDATE DASHBOARD')
                    ->press('GO TO CANDIDATE DASHBOARD')
                    ->pause(500)
                    //Make sure we've gone to the preview page
                    ->assertPathIs('/candidate/preview')
                    ->assertSee('Name:')
                    ->assertSee($candidate->name)
                    ->assertSee('Edit Your Profile')
                    ->logout()
                    ;
        });
    }
}
