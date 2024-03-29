<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicOfficeSeeder extends Seeder
{
    private $names = [
        "Mayor",
        "Governor",
        "House",
        "US Senate",
    ];

    /**
     * Seeds Public office positions
     */
    public function run()
    {
        // "name",
        // "years_per_term",
        // "limit_terms",
        foreach ($this->names as $name) {
            DB::table('public_office_positions')->insert([
                'name' => $name,
                'years_per_term' => rand(1,4),
                'limit_terms' => rand(1,4),
            ]);
        }
    }
}
