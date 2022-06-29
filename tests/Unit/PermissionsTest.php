<?php

namespace Tests\Unit;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class PermissionsTest extends TestCase
{
    private $admin_links = [
        '/admin/',
        '/admin/candidate-approve',
        '/admin/candidate-assignment',
        '/admin/create-ballot',
        '/admin/candidate-links',
        // '/admin/',
    ];

    private $candidate_links = [
        '/candidate/edit',
        // '/candidate/',
    ];

    private $default_links = [
        '/',
        '/ballot/1', // {{id}}
        '/apply',
        '/candidate/profile/1', //{id}
        // '/permalink', //{permalink}
        // '/',
    ];

    /**
     * Make sure that basic users cannot access any pages with roles
     *
     * @return void
     */
    public function test_default_user_permissions()
    {
        $user = User::factory()->create();
 
        foreach($this->admin_links as $link) {
            $response = $this->actingAs($user)
                ->get($link)
                ->assertStatus(403);
        }

        foreach($this->default_links as $link) {
            $response = $this->actingAs($user)
                ->get($link)
                ->assertStatus(200);
        }
        
        // $this->assertTrue(true);
    }

    /**
     * Make sure admin can access all links
     *
     * @return void
     */
    public function test_admin_user_permissions()
    {
        $user = User::factory()->create();
        $user->assignRole('admin');

        foreach($this->admin_links as $link) {
            echo $link;
            $response = $this->actingAs($user)
                ->get($link)
                ->assertStatus(200);
        }
    }

    /**
     * Make sure that candidate users cannot access all pages except admin
     *
     * @return void
     */
    public function test_candidate_user_permissions()
    {
        $user = User::factory()->create();
        // $candidate_role = Role::firstWhere('name', 'candidate');
        $user->assignRole('candidate');

        DB::table('candidates')->insert([
            'name' => $user->name,
            'user_id' => $user->id,
            'dob' => Carbon::today()->subYear(rand(25, 55)),
            'signup_date' => Carbon::today()->subDays(rand(0, 365)),
            'bio' => "", 
            'party_id' => rand(1,3),
            'image_id' => strval(rand(1,3)), 
            'state' => 'Utah',
            'contact_email' => "pjared@gmail.com",
            'political_leaning' => 'Centrist',
        ]);

        //Make sure candidates can access their links
        foreach($this->candidate_links as $link) {
            $response = $this->actingAs($user)
                ->get($link)
                ->assertStatus(200);
        }

        //Candidates should not be able to access admin links
        foreach($this->admin_links as $link) {
            $response = $this->actingAs($user)
                ->get($link)
                ->assertStatus(403);
        }

        DB::table('candidates')->where('user_id', $user->id)->delete();
    }
}
