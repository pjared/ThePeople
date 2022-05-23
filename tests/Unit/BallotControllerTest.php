<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class BallotControllerTest extends TestCase
{
    /**
     * A test to make sure that the get ballot method gets correct view and data.
     *
     * @return void
     */
    public function test_get_ballot_method()
    {
        echo('Testing ballet get method');
        $response = $this->call('POST', '/ballot', ['location' => 'Utah', 'location_type' => 'state', 'office' => 'Mayor']);
        $response->assertStatus(200);

        printf("\n\t" . 'Checking for correct view');
        $response->assertViewIs('ballot.index');

        echo("\n\t" . 'Checking for correct data');
        $response->assertViewHas('candidates');

        echo("\n" . 'Done with testing ballot get' . "\n\n");
    }
}
