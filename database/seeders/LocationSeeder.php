<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class LocationSeeder extends Seeder
{
    private $state_names = [
        "California",
        "Utah",
    ];

    private $county_names = [
        "Los Angeles",
        "Utah",
    ];

    private $city_names = [
        "Provo",
        "Whittier",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->state_names as $name) {
            DB::table('states')->insert([
                'name' => $name,
                'population' => rand(0, 10000),
            ]);
        }

        foreach ($this->county_names as $name) {
            DB::table('counties')->insert([
                'name' => $name,
                'population' => rand(0, 10000),
                'state_id' => rand(0,1)
            ]);
        }
        
        foreach ($this->city_names as $name) {
            DB::table('cities')->insert([
                'name' => $name,
                'population' => rand(0, 10000),
                'county_id' => rand(0,1)
            ]);
        }
    }
}
