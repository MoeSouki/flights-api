<?php

namespace App\Http\Controllers\Api;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassengersController extends Controller
{
    public function index()
    {
        $passengers = Passenger::paginate(10);

        return response()->json($passengers);
    }
}