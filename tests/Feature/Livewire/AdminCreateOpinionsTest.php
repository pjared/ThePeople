<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\AdminCreateOpinions;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AdminCreateOpinionsTest extends TestCase
{
    /** @test */
    public function the_component_can_render()
    {
        $user = User::factory()->create();
        $user->assignRole('admin');
        $this->actingAs($user); //THIS ERROR IS FAKE

        $component = Livewire::test(AdminCreateOpinions::class)
                        ->set('new_opinion.name', 'New Opinion')
                        ->set('new_opinion.description', 'A description')
                        ->set('new_opinion.first_side', 'First Side')
                        ->set('new_opinion.second_side', 'Second Side')
                        ->set('new_opinion.votes', 10000)
                        ->set('new_opinion.type_id', '1')
                        ->call('add_opinion');

        $component->assertStatus(200);
    }
}
