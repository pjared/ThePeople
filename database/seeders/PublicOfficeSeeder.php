<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicOfficeSeeder extends Seeder
{
    private $names = [
        "Mayor",
        "President",
    ];

    public function run()
    {
        // "name",
        // "years_per_term",
        // "limit_terms",
        foreach ($this->names as $name) {
            DB::table('publicofficepositions')->insert([
                'name' => $name,
                'years_per_term' => rand(0,4),
                'limit_terms' => rand(0,4),
            ]);
        }
    }
}
