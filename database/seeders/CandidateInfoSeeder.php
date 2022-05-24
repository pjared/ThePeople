<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateInfoSeeder extends Seeder
{
    private $donor_names = [
        "Big Jared",
        "Standard Music",
    ];

    private $opinion_names = [
        "Pro Jared",
        "Anti Jared",
        "Anti Remote",
        "Roblox > Minecraft",
        "Programming==Coding",
        "JS is a real language",
        "Variables should be in HTML"
    ];

    private $video_names = [
        'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
        'https://www.youtube.com/watch?v=gs-11No8JJ0'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  "name" | "website" | "amount"

        foreach ($this->donor_names as $name) {
            DB::table('donors')->insert([
                'name' => $name,
                'amount' => rand(1, 10000)
            ]);
        }

        //  candidate_id | donor_id
        $num_candidates = 4;

        /* 
            "name" | "candidate_id" | "politician_id" | "link_found" | "is_controversial"
        */
        foreach ($this->opinion_names as $name) {
            $controversial = rand(0,1);
            for($i = 0; $i < $num_candidates; ++$i) {
                DB::table('opinions')->insert([
                    'name' => $name,
                    'candidate_id' => $i,
                    'link' => "www.google.com",
                    'is_controversial' => $controversial
                ]);
            }
        }

        /* 
        Schema::create('campaign_videos', function (Blueprint $table) {
            $table->integer('candidate_id');
            $table->string('link');
        });
        */
        for($i = 0; $i < $num_candidates * 3; ++$i) {
            DB::table('campaign_videos')->insert([
                'candidate_id' => rand(1,7),
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
            for($i = 1; $i < $num_candidates; ++$i) {
                DB::table('candidate_donor')->insert([
                    'candidate_id' => rand(1,7),
                    'donor_id' => rand(1, 2)
                ]);
            }
        }
    }
}
