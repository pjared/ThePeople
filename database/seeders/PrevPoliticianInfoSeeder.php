<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrevPoliticianInfoSeeder extends Seeder
{
    private $location_names = [
        'State',
        'City',
        'County',
    ];

    /**
     * Seeds politician office positions and candidacies.
     *
     * @return void
     */
    public function run()
    {
        // "politician_id" | "public_office_id" | "location_id" | "location_type" | "year_start" | "year_end"
        $num_politicians = 4;
        for($i = 1; $i <= $num_politicians; ++$i) {
            DB::table('politician_office_positions')->insert([
                'politician_id' => rand(1,2),
                'public_office_id' => rand(1,7),
                'location_id' => rand(1,2),
                'location_type' => $this->location_names[rand(0,2)],
                'year_start' => rand(0,10),
                'year_end' => rand(10,100)
            ]);
        }

        /*
        Schema::create('political_candidacies', function (Blueprint $table) {
            $table->integer('politician_id')->unsigned();
            $table->integer('candidate_id')->unsigned();
        });
        */
        for ($i = 1; $i <= $num_politicians; $i++) {
            DB::table('candidate_politician')->insert([
                'politician_id' => $i,
                'candidate_id' => $i,
            ]);
        }
    }
}
