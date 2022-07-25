<?php

namespace Tests\Feature\Livewire\Candidate;

use App\Http\Livewire\Candidate\Preview;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class PreviewTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(Preview::class);

        $component->assertStatus(200);
    }
}
