<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Flag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FlagTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('ADD NECESSARY DATA');
        $component = Livewire::test(Flag::class);

        $component->assertStatus(200);
    }
}
