<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RunningCandidatesSeeder extends Seeder
{
    private $names = [
        "Mayor",
        "Presidente",
        "El Jefe",
        "Plebian",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            Currently there are 4 default candidates & 4 offices in the seeded data.
            This will seed a random # between 2-4 of candidates for each office
        */
        $random_candidates_num = [];
        $random_candidates_num[1] = rand(2,4);
        $random_candidates_num[2] = rand(10,33) % 2 + 2;
        $random_candidates_num[3] = rand(3,5) - 1;
        $random_candidates_num[4] = rand(0,2) + 2;

        // for($i = 1; $i <= 4; $i++) {
        //     //Get a random # of candidates to participate in a race
        //     $num_candidates = $random_candidates_num[$i];
        //     for($j = 0; $j < 4; $j++) {
        //         DB::table('running_candidates')->insert([
        //             'ballot_id' => $i, // only 1-4, since 4 offices
        //             'candidate_id' => 1 + $j,
        //             'show' => true,
        //         ]);
        //     }
        // }
        for($j = 1; $j <= 4; $j++) {
            DB::table('running_candidates')->insert([
                'ballot_id' => 1, // only 1-4, since 4 offices
                'candidate_id' => $j,
                'show' => true,
            ]);
        }

        //Adds myself as a candidate to second ballot
        DB::table('running_candidates')->insert([
            'ballot_id' => 2, // only 1-4, since 4 offices
            'candidate_id' => 5,
            'show' => true,
        ]);
    }
}
