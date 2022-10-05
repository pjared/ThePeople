<?php

namespace Database\Seeders;

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
            for($i = 5; $i <= 5 + $num_candidates; ++$i) {
                DB::table('candidate_stances')->insert([
                    'candidate_id' => $i,
                    'controversial_opinion_id' => $j,
                    'stance_label' => "Club Jared",
                    'stance_reasoning' => "The Most Exclusive Club in the World",
                ]);
                DB::table('candidate_stances')->insert([
                    'candidate_id' => $i,
                    'controversial_opinion_id' => $j,
                    'stance_label' => "Roblox > Minecraft",
                    'stance_reasoning' => "Do you have a source on that?

                    Source?

                    A source. I need a source.

                    Sorry, I mean I need a source that explicitly states your argument. This is just tangential to the discussion.

                    No, you can't make inferences and observations from the sources you've gathered. Any additional comments from you MUST be a subset of the information from the sources you've gathered.

                    You can't make normative statements from empirical evidence.

                    Do you have a degree in that field?

                    A college degree? In that field?

                    Then your arguments are invalid.

                    No, it doesn't matter how close those data points are correlated. Correlation does not equal causation.

                    Correlation does not equal causation.

                    CORRELATION. DOES. NOT. EQUAL. CAUSATION.

                    You still haven't provided me a valid source yet.

                    Nope, still haven't.

                    I just looked through all 308 pages of your user history, figures I'm debating a glormpf supporter. A moron.",
                ]);
            }
        }
    }
}
