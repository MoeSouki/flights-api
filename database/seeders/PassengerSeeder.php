<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Passenger::factory()->count(200)->create();

    }
}