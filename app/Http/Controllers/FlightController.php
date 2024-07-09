<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class FlightController extends Controller
{
    public function index()
    {
        $flights = QueryBuilder::for(Flight::class)
            ->with('passengers')
            ->defaultSort('-updated_at')
            ->allowedFilters([AllowedFilter::exact('id'), 'number', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time'])
            ->allowedSorts(['id', 'number', 'departure_city', 'arrival_city', 'departure_time', 'arrival_time'])
            ->paginate(100);


        return response()->json($flights);

    }
    public function show(Flight $flight)
    {
        return response()->json($flight->load('passengers'));
    }
}