<?php

namespace App\Http\Controllers\Api;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;

class PassengersController extends Controller
{
    public function index(Request $request)
    {
        $passengers = QueryBuilder::for(Passenger::class)
            ->allowedFilters(['first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
            ->allowedSorts(['first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
            ->paginate(10);

        return response()->json($passengers);

    }
}