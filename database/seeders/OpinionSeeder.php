<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpinionSeeder extends Seeder
{
    private $names = [
        "Pro Jared",
        "Anti Jared",
        "Anti Remote",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 
            "name",
            "candidate_id",
            "politician_id",
            "article_link",
            "is_controversial",
        */
        foreach ($this->names as $name) {
            DB::table('opinions')->insert([
                'name' => $name,
                'candidate_id' => rand(1,1),
                'is_controversial' => rand(1,1)
            ]);
        }
    }
}
