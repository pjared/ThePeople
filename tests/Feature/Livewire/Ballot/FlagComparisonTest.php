<?php

namespace Tests\Feature\Livewire\Ballot;

use App\Http\Livewire\Ballot\FlagComparison;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
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
