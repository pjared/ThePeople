<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            LocationSeeder::class,
            CandidateSeeder::class,
            PartySeeder::class,
            PublicOfficeSeeder::class,
            CandidateInfoSeeder::class,
            PrevPoliticianInfoSeeder::class,
            LawsSeeder::class,

            UserSeeder::class,
            RunningCandidatesSeeder::class, 
            BallotSeeder::class,
            OpinionsSeeder::class,
        ]);
    }
}
