<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\PublicOfficePosition;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ballot>
 */
class BallotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "location_id" => Location::factory(),
            "office_id" => PublicOfficePosition::factory(),
            "voting_date" => now(),
        ];
    }
}
