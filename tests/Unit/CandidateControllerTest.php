<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PoliticianControllerTest extends TestCase
{
    /**
     * A test to make sure that the get politician method gets correct view and data.
     *
     * @return void
     */
    public function test_get_ballot_method()
    {
        echo('Testing politican get method');
        $response = $this->call('GET', '/candidate/0');
        $response->assertStatus(200);

        printf("\n\t" . 'Checking for correct view');
        $response->assertViewIs('candidate.page');

        echo("\n\t" . 'Checking for correct data');
        $response->assertViewHas('candidate');

        echo("\n" . 'Done with testing politician get' . "\n\n");
    }
}
