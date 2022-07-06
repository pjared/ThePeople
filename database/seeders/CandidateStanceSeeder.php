<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateStanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'candidate_id' | 'controversial_stance_id' | 'info' | 'link'
        //candidate_stances
        $num_candidates = 4;
        $num_cont_opins = 5;

        for($j = 1; $j <= $num_cont_opins; ++$j) {
            for($i = 1; $i <= $num_candidates; ++$i) {
                DB::table('candidate_stances')->insert([
                    'candidate_id' => $i,
                    'value' => rand(0, 10) * 10,
                    'info' => "I think this because...",
                    'controversial_opinion_id' => $j,
                    'link' => "www.google.com",
                ]);
            }
        }
    }
}
