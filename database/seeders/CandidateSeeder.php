<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateSeeder extends Seeder
{
    private $names = [
        "Jared Pacheco",
        "Gandalf",
        "Ivan Fyodorvich",
        "Cthulhu"
    ];

    /**
     * Run the candidates seeds.
     *
     * @return void
     */
    public function run()
    {        
        foreach ($this->names as $name) {
            DB::table('candidates')->insert([
                'name' => $name,
                'age' => rand(20,55),
                'year' => 2022,
                'party_id' => rand(1,3),
                'position_of_office_id' => rand(1,4),
                'image_id' => strval(rand(1,3)), 
            ]);
        }
    }
}
