<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => "Jared Pacheco",
            'email' => 'pjared870@gmail.com',
            'password' => Hash::make('password'),
        ]);

        $this->call([
            UserSeeder::class, //!PROD
            RoleSeeder::class,

            LawsSeeder::class, //!PROD
            LocationSeeder::class,
            PoliticalPartySeeder::class, 
            PublicOfficeSeeder::class, //!PROD
            OpinionsSeeder::class, //!PROD
            ControversialOpinionsSeeder::class,
            BallotOpinionsSeeder::class, //!PROD

            CandidateSeeder::class, //!PROD
            CandidateInfoSeeder::class, //!PROD
            CandidateOfficePositionsSeeder::class, //!PROD
            CandidateStanceSeeder::class, //!PROD
            CandidateApplicationSeeder::class, //!PROD
            RunningCandidatesSeeder::class,  //!PROD
            BallotSeeder::class, //!PROD

            BadgeSeeder::class,
            CandidateBadgeSeeder::class, //!PROD
        ]);
    }
}
