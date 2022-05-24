<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PoliticianSeeder extends Seeder
{
    private $names = [
        "Jared Pacheco",
        "Gandalf",
        "Ivan Fyodorvich",
        "Cthulhu"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        Schema::create('politicians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('other_info');
            $table->integer('home_city_id')
        });
        */
        foreach ($this->names as $name) {
            DB::table('politicians')->insert([
                'name' => $name,
            ]);
        }
    }
}
