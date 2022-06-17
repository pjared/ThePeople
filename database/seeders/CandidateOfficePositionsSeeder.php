<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateOfficePositionsSeeder extends Seeder
{
    private $location_names = [
        'State',
        'City',
        'County',
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $num_politicians = 4;
        for($i = 1; $i <= $num_politicians; ++$i) {
            DB::table('candidate_office_positions')->insert([
                'candidate_id' => rand(1,2),
                'office_id' => rand(1,4),
                'location_id' => rand(1,2),
                'location_type' => $this->location_names[rand(0,2)],
                'year_start' => Carbon::today()->subYear(rand(25, 55)),
                'year_end' => Carbon::today()->subYear(rand(25, 55))
            ]);
        }
    }
}
