<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    // use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('ThePeople')
                    ->clickLink('Log in')
                    ->type('email', 'pjared870@gmail.com')
                    ->type('password', 'password')
                    ->press('LOG IN')
                    ->assertPathIs('/home');
        });
    }
}
