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
    public function run()
    {
        $flights = Flight::factory()->count(50)->create();

        $passengers = Passenger::all();

        foreach ($passengers as $passenger) {
            $numFlights = rand(1, 3);

            $selectedFlights = $flights->random($numFlights);

            $passenger->flights()->attach($selectedFlights);
        }
    }
}