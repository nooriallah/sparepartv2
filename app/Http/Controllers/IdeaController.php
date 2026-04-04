<?php

namespace App\Http\Controllers;

use App\Http\Requests\IdeaRequest;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $ideas = Idea::all();
        // $ideas = Idea::query()->where(["user_id" => Auth::user()->id])->get();
        // $ideas = Idea::where("user_id", Auth::user()->id)->get();

        // Using elequent
        $ideas = Auth::user()->ideas;


        return view('idea.index', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("idea.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(IdeaRequest $request)
    {
        $request->validate([
            "note" => ["required", "min:10"],
        ]);

        // Using elequent
        Auth::user()->ideas()->create([
            'note' => request("note"),
        ]);

        // Idea::create([
        //     "user_id" => Auth::user()->id,
        //     'note' => request("note"),

        // ]);

        return redirect('/ideas/index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        Gate::authorize("view", $idea);

        return view("idea.show", compact("idea"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        return view("idea.edit", compact("idea"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Idea $idea)
    {
        Gate::authorize("view", $idea);

        $idea->update([
            "note" => $request->input("note"),
            'status' => 'pending',
        ]);

        return redirect("/ideas/$idea->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect("ideas/index");
    }
}
