<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CandidateProfile;
use Livewire\Livewire;
use Tests\TestCase;

class CandiateProfileTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('ADD NECESSARY DATA');
        $component = Livewire::test(CandidateProfile::class);

        $component->assertStatus(200);
    }
}
