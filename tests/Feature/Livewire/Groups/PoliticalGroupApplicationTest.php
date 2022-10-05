<?php

namespace Tests\Feature\Livewire\Groups;

use App\Http\Livewire\Groups\GroupApplication;
use Livewire\Livewire;
use Tests\TestCase;

class GroupApplicationTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('Use Dusk?');
        $component = Livewire::test(GroupApplication::class);

        $component->assertStatus(200);
    }
}
