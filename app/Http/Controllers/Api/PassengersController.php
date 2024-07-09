<?php

namespace App\Http\Controllers\Api;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedFilter;

class PassengersController extends Controller
{
    public function index()
    {
        $passengers = QueryBuilder::for(Passenger::class)
            ->defaultSort('-id')
            ->allowedFilters([AllowedFilter::exact('id'), 'first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
            ->allowedSorts(['id', 'first_name', 'last_name', 'email', 'date_of_birth', 'passport_expiry_date'])
            ->paginate(100);


        return response()->json($passengers);

    }
}