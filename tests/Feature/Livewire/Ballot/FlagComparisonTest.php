<?php

namespace Tests\Feature\Livewire\Ballot;

use App\Http\Livewire\Ballot\FlagComparison;
use App\Models\Ballot;
use App\Models\User;
use Livewire\Livewire;
use Tests\TestCase;

class FlagComparisonTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('Use Dusk?');
        $ballot = Ballot::factory()->create();
        $this->actingAs(User::factory()->create());
        $component = Livewire::test(FlagComparison::class, ['ballot' => $ballot]);

        $component->assertStatus(200);
    }
}
