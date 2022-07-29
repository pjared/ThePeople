<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\EditVideos;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditVideosTest extends TestCase
{
    use DatabaseMigrations;
    /** @test */
    public function the_component_can_render()
    {
        $this->artisan('db:seed');

        $candidate = User::factory()->withCandidate()->create();
        $candidate->assignRole('candidate');
        $this->actingAs($candidate);

        $component = Livewire::test(EditVideos::class)
                        ->set('video.link', 'rickrolled.com')
                        ->call('add_video')
                        ;

        $component->assertStatus(200);
    }
}
