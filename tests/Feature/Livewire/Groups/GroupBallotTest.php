<?php

namespace Tests\Feature\Livewire\Groups;

use App\Http\Livewire\Groups\GroupBallot;
use Livewire\Livewire;
use Tests\TestCase;

class GroupBallotTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(GroupBallot::class);

        $component->assertStatus(200);
    }
}
