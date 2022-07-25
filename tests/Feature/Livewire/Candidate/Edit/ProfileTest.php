<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\CandidateEditProfile;
use App\Http\Livewire\CandidateProfile;
use App\Models\Ballot;
use App\Models\Candidate;
use App\Models\CandidateStance;
use App\Models\RunningCandidates;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Livewire\Livewire;
use Tests\TestCase;

class CandidateProfileTest extends TestCase
{

    /** @test */
    public function can_create_profile() 
    {
        $this->markTestIncomplete('REWORK NEEDED');

        $user = User::factory()->create();
        $user->assignRole('candidate');
        $this->actingAs($user); //THIS ERROR IS FAKE
        //TODO GIVE THE USER CANDIDATE PRIVELIDGE

        Storage::fake('avatars');
        $file = UploadedFile::fake()->image('avatar.png');

        $opinion_vals = ['25','75','50','100','0'];
        Livewire::test(CandidateProfile::class)
            ->set('photo', $file) //TODO: Get photo
            ->set('dob', '11/14/1995')
            ->set('pol_leaning', 'moderate')
            ->set('sub_pol_leaning', 'libertarian')
            // ->set('political_party_id', '2')
            ->set('office_level', 'state')
            ->set('location', 'Utah')
            ->set('office_name', 'Senate')
            ->set('email', 'jared@gmail.com')
            ->set('bio', 'I\'m Jared')
            ->set('opinion_vals', $opinion_vals)
            // ->set('location', 'Utah')
            ->call('save');

        //Make sure we created the candidate
        $candidate = Candidate::firstWhere('user_id', $user->id);
        $this->assertTrue($candidate->exists());

        //Make sure we created the running candidate
        $running_candidate = RunningCandidates::firstWhere('candidate_id', $candidate->id);
        $this->assertTrue($running_candidate->exists());
        $this->assertEquals($running_candidate->ballot_id, 4);
        $this->assertEquals($running_candidate->candidate_id, $candidate->id);
        
        $ballot = Ballot::find($running_candidate->ballot_id);
        //Have to do ID's, for some reason assertEquals($ballot, $candidate->ballot) bugs out
        $this->assertEquals($ballot->id, $candidate->ballot->id);

        //Make sure stances were created
        $candidate_stances = CandidateStance::where('candidate_id', $candidate->id)->get();
        echo $candidate_stances->count();
        $this->assertEquals($candidate_stances->count(), 5);
        $index = 0;
        foreach($candidate_stances as $candidate_stance) {
            $this->assertEquals($candidate_stance->value, $opinion_vals[$index]);
            $index++;
        }

        $component->assertStatus(200);
    }

    /** @test */
    public function the_component_can_render()
    {
        $this->markTestIncomplete('ADD NECESSARY DATA');

        $this->actingAs(User::factory()->create());
        $component = Livewire::test(CandidateEditProfile::class);

        $component->assertStatus(200);
    }
}
