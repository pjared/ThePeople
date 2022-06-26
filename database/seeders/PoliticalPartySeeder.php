<?php

namespace Database\Seeders;

use App\Models\PoliticalParty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliticalPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = [
            "Republican",
            "Democrat",
            "Independant"
        ];

        foreach($names as $name) {
            $party = new PoliticalParty();
            $party->name = $name;
            $party->save();
        }
    }
}
