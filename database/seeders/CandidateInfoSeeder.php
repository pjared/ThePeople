<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateInfoSeeder extends Seeder
{
    private $video_names = [
        'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        'https://www.youtube.com/watch?v=gs-11No8JJ0'
    ];

    private $donor_names = [
        'Big Jared',
        'Standard Roblox',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  "name" | "website" | "amount",

        foreach ($this->donor_names as $name) {
            DB::table('donors')->insert([
                'name' => $name,
                'amount' => rand(1, 10000)
            ]);
        }

        //  candidate_id | donor_id
        $num_candidates = 4;
        /*
            "name" | "candidate_id" | "politician_id" | "link_found" | "is_controversial",
            "candidate_id" | "name" | "stance" | "link",

        */
        for($i = 1; $i <= $num_candidates; ++$i) {
            DB::table('campaign_videos')->insert([
                'candidate_id' => rand(5, $num_candidates + 5),
                'link' => $this->video_names[rand(0,1)],
            ]);
        }

        /*
        Schema::create('candidate_donor', function (Blueprint $table) {
            $table->integer('candidate_id');
            $table->integer('donor_id');
        });
        */
        foreach ($this->donor_names as $name) {
            for($i = 1; $i <= $num_candidates; ++$i) {
                DB::table('candidate_donor')->insert([
                    'candidate_id' => rand(5, $num_candidates + 5),
                    'donor_id' => rand(1, 2)
                ]);
            }
        }

        for($i = 5; $i <= $num_candidates + 5; ++$i) {
            DB::table('candidate_promises')->insert([
                'candidate_id' => $i,
                'promise' => 'Free Money',
                'plan' => 'Inflate Everything',
            ]);
            DB::table('candidate_promises')->insert([
                'candidate_id' => $i,
                'promise' => 'MORE Free Money',
                'plan' => "Do you have a source on that?

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
