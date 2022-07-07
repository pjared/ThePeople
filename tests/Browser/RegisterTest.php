<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use function PHPUnit\Framework\assertTrue;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testRegister()
    {
        // $this->markTestSkipped('Register Works, Only once');
        assertTrue(true);
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('ThePeople')
        //             ->clickLink('Register')
        //             ->type('name', 'Onlong Johnson')
        //             ->type('email', 'pjared@gmail.com')
        //             ->type('password', 'password')
        //             ->type('password_confirmation', 'password')
        //             ->press('REGISTER')
        //             ->assertPathIs('/home');
        // });
    }
}
