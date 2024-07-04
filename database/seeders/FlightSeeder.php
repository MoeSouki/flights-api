<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::factory()->count(50)->create()->each(function ($flight) {
            $passengerIds = Passenger::inRandomOrder()->limit(rand(1, 10))->pluck('id');
            $flight->passengers()->attach($passengerIds);
        });
    }
}