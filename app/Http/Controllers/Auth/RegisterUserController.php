<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view("auth.register");
    }


    public function store(Request $request)
    {
        $request->validate([
            "name" => ["required", "string", "min:3"],
            "email" => ["required", "email", "unique:users,email"],
            "password" => ["required", "string", "min:6"]
        ]);

        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        Auth::login($user);

        return redirect("/ideas/index");
    }
}
