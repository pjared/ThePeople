<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'add candidates']);
        Permission::create(['name' => 'remove candidates']);

        $admin_role = Role::create(['name' => 'admin']);
        $admin_role->givePermissionTo('remove candidates');
        $admin_role->givePermissionTo('add candidates');

        Permission::create(['name' => 'edit candidate profile']);
        Permission::create(['name' => 'create candidates']);

        $candidate_role = Role::create(['name' => 'candidate']);
        $candidate_role->givePermissionTo('edit candidate profile');
        $candidate_role->givePermissionTo('create candidates');

        Permission::create(['name' => 'edit group profile']);
        Permission::create(['name' => 'control group profile']);

        $organizer_role = Role::create(['name' => 'organizer']);
        $organizer_role->givePermissionTo('edit group profile');

        $organizerAdmin_role = Role::create(['name' => 'organizerAdmin']);
        $organizerAdmin_role->givePermissionTo('control group profile');

        $user = User::firstWhere('email', "pjared870@gmail.com");
        $user->assignRole($admin_role);
    }
}
