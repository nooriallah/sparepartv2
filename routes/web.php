<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

// Showing all ideas
Route::get('/ideas/index', function () {
    $ideas = Idea::all();

    return view('idea.index', compact('ideas'));
});


// Adding idea
Route::get('/ideas/create', function () {
    return view("idea.create");
});

// Storing idea
Route::post("/ideas/add", function () {
    Idea::create([
        'note' => request("note"),
        'status' => 'pending',
    ]);
    return redirect('/ideas/index');
});

// Showing single idea
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view("idea.show", compact("idea"));
});

// Editing an Idea
Route::get("/ideas/{idea}/edit", function (Idea $idea) {
    return view("idea.edit", compact("idea"));
});

// Updating Idea
Route::patch("/ideas/{idea}/update", function (Idea $idea) {
    $idea->update([
        'note' => request('note'),
        'status' => 'pending',
    ]);

    return redirect("/ideas/$idea->id");
});

// Destroy idea
Route::delete("/ideas/{idea}/delete", function (Idea $idea) {
    $idea->delete();

    return redirect("ideas/index");
});
