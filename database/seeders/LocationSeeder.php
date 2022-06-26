<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    private $state_names = [
        "Alabama",
        "Alaska",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Connecticut",
        "Delaware",
        "Florida",
        "Georgia",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Iowa",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Jersey",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Ohio",
        "Oklahoma",
        "Oregon",
        "Pennsylvania",
        "Rhode Island",
        "South Carolina",
        "South Dakota",
        "Tennessee",
        "Texas",
        // "Utah",
        "Vermont",
        "Virginia",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming"
    ];

    private $county_names = [
        "Los Angeles",
        "Utah",
    ];

    private $city_names = [
        // "Provo",
        "Whittier",
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TODO: Might need to read a file for the county and city names
        //TODO: Need to make the file with a wikipedia parser 

        DB::table('locations')->insert([
            'name' => 'Provo',
            'type' => 'city',
            'population' => rand(1, 10000),
            'opinion_type_id' => 1,
        ]);

        DB::table('locations')->insert([
            'name' => 'Utah',
            'type' => 'state',
            'population' => rand(1, 10000),
            'opinion_type_id' => 1,
        ]);
        foreach ($this->state_names as $name) {
            DB::table('locations')->insert([
                'name' => $name,
                'type' => 'state',
                'population' => rand(1, 10000),
                'opinion_type_id' => 1,
            ]);
        }

        foreach ($this->county_names as $name) {
            DB::table('locations')->insert([
                'name' => $name,
                'type' => 'county',
                'population' => rand(1, 10000),
                'opinion_type_id' => 1,
            ]);
        }
        
        foreach ($this->city_names as $name) {
            DB::table('locations')->insert([
                'name' => $name,
                'type' => 'city',
                'population' => rand(1, 10000),
                'opinion_type_id' => 1,
            ]);
        }
    }
}
