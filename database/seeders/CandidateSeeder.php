<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'dob' => Carbon::today()->subYear(rand(25, 55))->format('d/m/Y'),
                'signup_date' => Carbon::today()->subDays(rand(0, 365)),
                'party_id' => rand(1,3),
                'image_id' => strval(rand(1,3)), 
                'state' => 'Utah',
                'contact_email' => "pjared@gmail.com",
                'political_leaning' => 'Centrist',
            ]);
        }
    }
}
