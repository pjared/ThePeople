<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YoutubeVidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create the office (locations are seeded)
        DB::table('public_office_positions')->insert([
            'name' => 'State Congress',
            'years_per_term' => 2,
            'limit_terms' => rand(1,4),
        ]);

        //Make a ballot
        DB::table('ballots')->insert([
            'location_id' => 2,
            'office_id' => 1,
            'voting_date' => Carbon::now()->addWeeks(rand(1, 52))->format('Y-m-d')
        ]);

        //Add opinions to that ballot
        for($j = 1; $j <= 5; ++$j) {
            DB::table('ballot_opinion')->insert([
                'ballot_id' => 1,
                'controversial_opinion_id' => $j,
            ]);
        }

        //Add myself to candidate
        DB::table('candidates')->insert([
            'name' => "Jared Pacheco",
            'dob' => Carbon::today()->subYear(rand(25, 55)),
            'signup_date' => Carbon::today()->subDays(rand(0, 365)),
            'bio' => "",
            'party_name' => 'Club Jared',
            'user_id' => 1,
            'state' => 'Utah',
            'contact_email' => "pjared@gmail.com",
        ]);
        User::find(1)->assignRole('candidate');

        //Add myself to ballot
        // DB::table('running_candidates')->insert([
        //     'ballot_id' => 1, // only 1-4, since 4 offices
        //     'candidate_id' => 1,
        //     'show' => false,
        // ]);
    }
}
