<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CandidateApplicationPage;
use App\Models\CandidateApplication;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CandidateApplicationPageTest extends TestCase
{
    /** @test */
    public function can_make_application() 
    {
        $user = User::factory()->create();
        // $user = User::find(1);
        $this->actingAs($user); //THIS ERROR IS FAKE

        $component = Livewire::test(CandidateApplicationPage::class)
                ->set('name', 'Jared Pacheco')
                ->set('dob', '11/14/1995')
                ->set('location', 'Utah')
                ->set('office_name', 'Senate')
                ->set('email', 'jared@gmail.com')
                ->call('apply');

        //Make sure we created the candidate application
        $candidate_applicatoin = CandidateApplication::firstWhere('user_id', $user->id);
        $this->assertTrue($candidate_applicatoin->exists());
        $this->assertEquals($candidate_applicatoin->user_id, $user->id);
        $this->assertEquals($candidate_applicatoin->office_level, 'state');

        $component->assertStatus(200);
    }
}
