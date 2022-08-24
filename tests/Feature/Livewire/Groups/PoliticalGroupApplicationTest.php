<?php

namespace Tests\Feature\Livewire\Groups;

use App\Http\Livewire\Groups\GroupApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class GroupApplicationTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(GroupApplication::class);

        $component->assertStatus(200);
    }
}
