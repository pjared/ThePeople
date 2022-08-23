<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class GroupOrganizerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_organizers')->insert([
            'user_id' => 1,
            'political_group_id' => 1,
        ]);
        $user = User::firstWhere('email', "pjared870@gmail.com");
        $user->assignRole('organizerAdmin');
    }
}
