<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Candidate\Application;
use App\Http\Livewire\CandidateApplicationPage;
use App\Models\CandidateApplication;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ApplicationTest extends TestCase
{
    /** @test */
    public function can_make_application() 
    {
        $user = User::factory()->create();
        // $user = User::find(1);
        $this->actingAs($user); //THIS ERROR IS FAKE

        $component = Livewire::test(Application::class)
                ->set('name', 'Jared Pacheco')
                ->set('dob', '11/14/1995')
                ->set('location', 'District 23')
                ->set('office_name', 'Senate')
                ->set('email', 'jared@gmail.com')
                ->set('state', 'Utah')
                ->call('apply');

        //Make sure we created the candidate application
        $candidate_application = CandidateApplication::firstWhere('user_id', $user->id);
        $this->assertTrue($candidate_application->exists());
        $this->assertEquals($candidate_application->user_id, $user->id);
        $this->assertEquals($candidate_application->office_name, 'Senate');

        $component->assertStatus(200);
    }
}
