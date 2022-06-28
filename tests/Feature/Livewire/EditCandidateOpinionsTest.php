<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\EditCandidateOpinions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditCandidateOpinionsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestSkipped('REWORK NEEDED');
        
        $component = Livewire::test(EditCandidateOpinions::class);

        $component->assertStatus(200);
    }
}