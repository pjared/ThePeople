<?php

namespace Tests\Feature\Livewire\Candidate\Edit;

use App\Http\Livewire\Candidate\Edit\EditBio;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EditBioTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        dd(User::find(1));
        $this->actingAs(User::find(1));
        $component = Livewire::test(EditBio::class);

        $component->assertStatus(200);
    }
}
