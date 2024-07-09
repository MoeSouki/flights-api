<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class FlightsController extends Controller
{
    public function index()
    {
        $flights = QueryBuilder::for(Flight::class)
            ->allowedFilters([AllowedFilter::exact('id'), 'number', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time'])
            ->allowedSorts(['id', 'number', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time'])
            ->paginate(100);


        return response()->json($flights);

    }
}