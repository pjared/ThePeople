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
        User::create([
            'name' => "Jared Pacheco",
            'email' => 'pjared870@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        for($i = 0; $i < 10; $i++) {
            User::factory()->create();
        }
        
    }
}
