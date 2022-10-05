<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RequiredStanceSeeder extends Seeder
{
    private $required_stance_labels = [
        'Firearm Capability Restrictions',
        'Firearm Background Check',
    ];
    private $required_stance_descriptions = [
        'The candidate should talk about what they believe should be the limits for what restrictions should apply to a firearm
            Examples of this may include: magazine capacity, whether a firearm can be fully automatic, or the legality of weapon modifications',
        'The candidate should put down what they believe should be the qualifications for purchasing a firearm',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //We're going to create this for gun control since it's easy
        foreach($this->required_stance_labels as $i => $required_label) {
            DB::table('required_stances')->insert([
                'controversial_opinion_id' => 3,
                'label' => $required_label,
                'description' => $this->required_stance_descriptions[$i],
            ]);
        }
    }
}
