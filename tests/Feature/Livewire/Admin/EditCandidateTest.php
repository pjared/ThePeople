<?php

namespace Tests\Feature\Livewire\Admin;

use App\Http\Livewire\Admin\EditCandidate;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditCandidateTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(EditCandidate::class);

        $component->assertStatus(200);
    }
}
