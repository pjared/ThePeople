<?php

namespace Tests\Feature\Livewire\Ballot;

use App\Http\Livewire\Ballot\FlagComparison;
use Livewire\Livewire;
use Tests\TestCase;

class FlagComparisonTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(FlagComparison::class);

        $component->assertStatus(200);
    }
}
