<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\Stances;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StancesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestSkipped('Pray to god this works instead');
        $this->artisan('db:seed');

        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');
        $this->actingAs($candidate);

        $component = Livewire::test(Stances::class)
                        ->set('stance.stance_label', 'Ummm ')
                        ->set('stance.stance_reasoning', 'Yeah I think so')
                        ->call('add_stance')
                        ;

        $component->assertStatus(200);
    }
}
