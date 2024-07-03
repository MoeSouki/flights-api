<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passenger>
 */
class PassengerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'password' => bcrypt($this->faker->password),
            'date_of_birth' => $this->faker->date(),
            'passport_expiry_date' => $this->faker->date($format = 'Y-m-d', $max = '30-01-01'),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}