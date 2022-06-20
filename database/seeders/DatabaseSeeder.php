<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            // TeamsSeeder::class,
            RoleSeeder::class,

            LawsSeeder::class,
            LocationSeeder::class,
            PartySeeder::class,
            PublicOfficeSeeder::class,
            OpinionsSeeder::class,
            ControversialOpinionsSeeder::class,

            CandidateSeeder::class,
            CandidateInfoSeeder::class,
            CandidateOfficePositionsSeeder::class,
            CandidateStanceSeeder::class,
            RunningCandidatesSeeder::class, 
            BallotSeeder::class,            
        ]);
    }
}
