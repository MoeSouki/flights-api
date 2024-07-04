<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departureTime = $this->faker->dateTimeBetween(now(), '+1 month');


        return [
            'number' => $this->faker->regexify('[A-Z]{2}[0-9]{3}'),
            'departure_city' => $this->faker->city(),
            'arrival_city' => $this->faker->city(),
            'departure_time' => $departureTime,
            'arrival_time' => $this->faker->dateTimeInInterval($departureTime, '+1 days'),
        ];
    }
}