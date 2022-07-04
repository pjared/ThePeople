<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\AdminEditOpinions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AdminEditOpinionsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(AdminEditOpinions::class);

        $component->assertStatus(200);
    }
}
