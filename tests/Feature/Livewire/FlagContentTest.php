<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\FlagContent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class FlagContentTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(FlagContent::class);

        $component->assertStatus(200);
    }
}