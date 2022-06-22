<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => "Basic User",
        //     'email' => 'comnnrep@comnrep.com',
        //     'password' => Hash::make('pas@#(sword)11'),
        // ]);

        /* Other seeders
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
            DB::table('users')->insert([
                'name' => "Jared Pacheco",
                'email' => 'pjared870@gmail.com',
                'password' => Hash::make('password'),
            ]);
        */

        User::factory()->create([
            'name' => "Jared Pacheco",
            'email' => 'pjared870@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        for($i = 0; $i < 10; $i++) {
            User::factory()->create();
        }
        
    }
}
