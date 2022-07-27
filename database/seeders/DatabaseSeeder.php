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

        //Seed for production & local
        $this->call([
            RoleSeeder::class,
            LocationSeeder::class,
            PoliticalPartySeeder::class, 
            ControversialOpinionsSeeder::class,
            BadgeSeeder::class,
        ]);

        //Seed for only local
        if(env('APP_ENV') == 'local') {
            $this->call([
                UserSeeder::class, //!PROD
                LawsSeeder::class, //!PROD
                PublicOfficeSeeder::class, //!PROD
                OpinionsSeeder::class, //!PROD
                BallotOpinionsSeeder::class, //!PROD
    
                CandidateSeeder::class, //!PROD
                CandidateInfoSeeder::class, //!PROD
                CandidateOfficePositionsSeeder::class, //!PROD
                CandidateStanceSeeder::class, //!PROD
                CandidateApplicationSeeder::class, //!PROD
                RunningCandidatesSeeder::class,  //!PROD
                BallotSeeder::class, //!PROD
    
                CandidateBadgeSeeder::class, //!PROD
            ]);
        }   
    }
}
