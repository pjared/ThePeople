<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\Stances;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StancesTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Stances::class);

        $component->assertStatus(200);
    }
}
