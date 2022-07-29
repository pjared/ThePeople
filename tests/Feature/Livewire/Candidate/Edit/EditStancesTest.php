<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\EditStances;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditStancesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function the_component_can_render()
    {
        $this->artisan('db:seed');

        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');
        $this->actingAs($candidate);
        $component = Livewire::test(EditStances::class)
                        ->set('candidate.bio', 'MMMM CHEZBURGERS')
                        ->call('save_bio')
                        ;

        $component->assertStatus(200);
    }
}
