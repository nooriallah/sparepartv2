<?php

use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\Route;

// Showing all ideas
Route::get('/ideas/index', [IdeaController::class, 'index']);


Route::get('/ideas/create', [IdeaController::class, 'create']);
Route::post("/ideas/add", [IdeaController::class, "store"]);
Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
Route::get("/ideas/{idea}/edit", [IdeaController::class, "edit"]);
Route::patch("/ideas/{idea}/update", [IdeaController::class, "update"]);
Route::delete("/ideas/{idea}/delete", [IdeaController::class, "delete"]);
