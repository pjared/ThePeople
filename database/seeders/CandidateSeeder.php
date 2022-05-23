<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    private $names = [
        "Jared Pacheco",
        "Lil Dicky",
    ];

    /**
     * Run the candidates seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed candidates, political-candidacies, donors
        /*
        "party_id",
        "position_of_office_id", //The position they are running for
        "year",
        "name",
        "age",
        */
        foreach ($this->names as $name) {
            
            DB::table('candidates')->insert([
                'name' => $name,
                'age' => rand(20,55),
                'year' => 2022,
                'party_id' => rand(0,1),
                'position_of_office_id' => rand(0,1),
                'image_id' => strval(rand(0,2)), 
            ]);
        }

        /*
        "politician_id",
        "candidate_id",
        */

        /*
        "politician_id",
        "public_office_id",
        "location_id",
        "location_type",
        */
    }
}
