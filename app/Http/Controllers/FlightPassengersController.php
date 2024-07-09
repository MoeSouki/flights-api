<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightPassengersController extends Controller
{
    public function index(Flight $flight)
    {
        $passengers = $flight->passengers()->get();
        return response()->json($passengers);
    }
}