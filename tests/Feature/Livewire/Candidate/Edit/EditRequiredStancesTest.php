<?php

namespace Tests\Feature\Livewire\Candidate;

use App\Http\Livewire\Candidate\EditRequiredStances;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditRequiredStancesTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(EditRequiredStances::class);

        $component->assertStatus(200);
    }
}
