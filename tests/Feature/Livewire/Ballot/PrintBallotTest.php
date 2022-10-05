<?php

namespace Tests\Feature\Livewire\Ballot;

use App\Http\Livewire\Ballot\PrintBallot;
use Livewire\Livewire;
use Tests\TestCase;

class PrintBallotTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('Use Dusk?');
        $component = Livewire::test(PrintBallot::class);

        $component->assertStatus(200);
    }
}
