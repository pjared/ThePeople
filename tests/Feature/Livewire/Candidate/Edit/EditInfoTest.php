<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\EditInfo;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditInfoTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function the_component_can_render()
    {
        $this->artisan('db:seed');

        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');
        $this->actingAs($candidate);


        /*
        candidate.party_name' => 'nullable|string',
        'candidate.contact_phone_number' => 'nullable',
        'candidate.phone_number' => 'nullable',
        'candidate.contact_email' => 'required|string',
        'candidate.email' => 'nullable',
        'candidate.site_link' => 'nullable',
         */
        $component = Livewire::test(EditInfo::class)
                        ->set('candidate.party_name', 'Repub')
                        ->set('candidate.contact_email', 'pjared@gmail.com')
                        // ->set('candidate.party_name')
                        // ->set('candidate.party_name')
                        // ->set('candidate.party_name')
                        // ->set('candidate.party_name')
                        ->call('save_info')
                        ;



        $component->assertStatus(200);
    }
}
