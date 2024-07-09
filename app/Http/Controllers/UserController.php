<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($request->input('password')),
        ]);

        return response()->json($user, 201);
    }


    public function update(Request $request, User $user)
    {
        $validationData = $request->validate([
            'name' => 'string|max:255',
            'email' => 'unique:users,email,',
            'password' => 'string|min:6'
        ]);

        if ($request->has('name')) {
            $user->name = $request->input('name', $user->name);
        }
        if ($request->has('email')) {
            $user->email = $request->input('email', $user->email);
        }
        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        $user->save();

        return response()->json($user, 200);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}