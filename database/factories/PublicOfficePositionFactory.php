<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublicOfficePosition>
 */
class PublicOfficePositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->sentence(2),
            "years_per_term" => rand(0, 4),
            "limit_terms" => rand(0,4),
        ];
    }
}
