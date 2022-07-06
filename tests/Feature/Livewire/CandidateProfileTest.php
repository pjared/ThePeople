<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CandiateProfile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CandiateProfileTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $component = Livewire::test(CandiateProfile::class);

        $component->assertStatus(200);
    }
}
