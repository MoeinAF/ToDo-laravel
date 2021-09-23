<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $users = User::query()->create([
            "name" => $request->get('name', 'NO_NAME'),
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->route('index')
            ->with('name', $users->name);
    }

    public function index()
    {
        $users = User::all();
        return view('index')
            ->with('users', $users);
    }
}
