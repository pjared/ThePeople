<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\EditPromises;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditPromisesTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function the_component_can_render()
    {
        $this->artisan('db:seed');

        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');
        $this->actingAs($candidate);
        $component = Livewire::test(EditPromises::class)
                        ->set('promise.promise', 'Free Cupbop')
                        ->set('promise.plan', 'Money')
                        ->call('add_promise');

        $component->assertStatus(200);
    }
}
