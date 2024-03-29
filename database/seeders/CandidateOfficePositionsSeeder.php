<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidateOfficePositionsSeeder extends Seeder
{
    private $location_names = [
        'State',
        'City',
        'County',
    ];

    private $position_names = [
        'Mayor',
        'President',
        'Senator',
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
                'candidate_id' => rand(5, 9),
                // 'office_id' => rand(1,4),
                // 'location_id' => rand(1,2),
                // 'location_type' => $this->location_names[rand(0,2)],
                'position_name' => $this->position_names[rand(0,2)],
                'description' => "A description",
                'year_start' => Carbon::today()->subYear(rand(25, 55))->format('Y'),
                'year_end' => Carbon::today()->subYear(rand(25, 55))->format('Y'),
            ]);
        }
    }
}
