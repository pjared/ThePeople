<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::create(['name' => 'admin']);
        $admin_permissions = Permission::create([
            'name' => 'Add Candidates', 
            'name' => 'Remove Candidates',
        ]);
        $admin_permissions->assignRole($admin_role);

        $candidate_role = Role::create(['name' => 'candidate']);
        $candidates_permissions = Permission::create([
            'name' => 'Edit Candidate Profile',
            'name' => 'Create Candidate Profile'
        ]);
        $candidates_permissions->assignRole($candidate_role);

        $user = User::firstWhere('email', "pjared870@gmail.com");
        $user->assignRole('admin');
    }
}
