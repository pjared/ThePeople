<?php

namespace Tests\Feature\Livewire\Profile;

use App\Http\Livewire\Profile\GetPrecinct;
use Livewire\Livewire;
use Tests\TestCase;

class GetPrecinctTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('Use Dusk?');
        $component = Livewire::test(GetPrecinct::class);

        $component->assertStatus(200);
    }
}
