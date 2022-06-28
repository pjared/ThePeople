<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CandidateOpinions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CandidateOpinionsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(CandidateOpinions::class);

        $component->assertStatus(200);
    }
}
