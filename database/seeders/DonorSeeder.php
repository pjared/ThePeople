<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonorSeeder extends Seeder
{
    private $names = [
        "Jared Pacheco",
        "Lil Dicky",
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->names as $name) {
            DB::table('donors')->insert([
                'name' => $name,
            ]);
        }
    }
}
