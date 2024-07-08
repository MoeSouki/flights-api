<?php

namespace App\Http\Controllers\Api;

use App\Models\Passenger;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassengersController extends Controller
{
    public function index(Request $request)
    {
        $query = Passenger::query();
        if ($request->has('first_name')) {
            $query->where('first_name', 'like', '%' . $request->input('first_name') . '%');

        }

        if ($request->has('last_name')) {
            $query->where('last_name', 'like', '%' . $request->input('last_name') . '%');
        }

        if ($request->has('email')) {
            $query->where('email', 'like', '%' . $request->input('email') . '%');
        }

        if ($request->has('date_of_birth')) {
            $query->whereDate('date_of_birth', $request->input('date_of_birth'));
        }
        if ($request->has('passport_expiry_date')) {
            $query->whereDate('passport_expiry_date', $request->input('passport_expiry_date'));
        }

        if ($request->has('sort_by') && $request->has('sort_order')) {
            $query->orderBy($request->input('sort_by'), $request->input('sort_order'));
        } elseif ($request->has('sort_by')) {
            $query->orderBy($request->input('sort_by'), 'asc');
        }


        $passengers = $query->paginate(10);

        return response()->json($passengers);
    }
}