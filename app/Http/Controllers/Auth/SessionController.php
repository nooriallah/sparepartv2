<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            "email" => "required|email",
            "password" => "required|string|min:4"
        ]);

        if (Auth::attempt($validate)) {
            $request->session()->regenerate();

            return redirect("/ideas/index");
        } else {
            return back()->withErrors([
                "email" => "The credentials are not in our rows",
            ]);
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect("/login");
    }
}
