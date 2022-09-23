<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
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
            'voter_precinct' => 'OR341',
            // Un-comment for local
            // 'email_verified_at' => now(),
            // 'two_factor_confirmed_at' => now(),
            // 'two_factor_secret' => 'secret',
            // 'two_factor_recovery_codes' => encrypt(json_encode(Collection::make(['secret'])->all()))
        ]);

        //Seed for production & local
        $this->call([
            RoleSeeder::class,
            LocationSeeder::class,
            PoliticalPartySeeder::class,
            ControversialOpinionsSeeder::class,

            // ProvoOremBallotSeeder::class,
            // USHouseSeeder::class,
            // USSenateSeeder::class,
            // UTSenateSeeder::class,
            // UTHouseSeeder::class,
            // PrecinctBallotSeeder::class,
        ]);

        //Seed for only local
        if(env('APP_ENV') == 'local') {
            $this->call([
                UserSeeder::class, //!PROD
                LawsSeeder::class, //!PROD
                PublicOfficeSeeder::class, //!PROD
                CandidateOpinionsSeeder::class, //!PROD
                BallotOpinionsSeeder::class, //!PROD

                CandidateSeeder::class, //!PROD
                CandidateInfoSeeder::class, //!PROD
                CandidateOfficePositionsSeeder::class, //!PROD
                CandidateStanceSeeder::class, //!PROD
                CandidateApplicationSeeder::class, //!PROD
                BallotSeeder::class, //!PROD

                CandidateBadgeSeeder::class, //!PROD

                UserFlagSeeder::class,
                ManualCandidateSeeder::class,
                CommentSeeder::class,
                CandidateEventSeeder::class,

                RequiredStanceSeeder::class, //!PROD
                CandidateRequiredStanceSeeder::class,

                PoliticalGroupSeeder::class,
                PoliticalGroupEventsSeeder::class,
                PoliticalGroupCandidatesSeeder::class,
                GroupBallotQuestionsSeeder::class,
                GroupOrganizerSeeder::class,
            ]);
        }
    }
}
