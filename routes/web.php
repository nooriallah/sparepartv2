<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\IdeaController;
use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Home Route
 Route::get('/', [IdeaController::class, 'index']);
 Route::get('/ideas/index', [IdeaController::class, 'index']);

// Showing all ideas
Route::middleware("auth")->group(function () {
   
    Route::get('/ideas/create', [IdeaController::class, 'create']);
    Route::post("/ideas/add", [IdeaController::class, "store"]);
    Route::get('/ideas/{idea}', [IdeaController::class, 'show']);
    Route::get("/ideas/{idea}/edit", [IdeaController::class, "edit"]);
    Route::patch("/ideas/{idea}/update", [IdeaController::class, "update"]);
    Route::delete("/ideas/{idea}/delete", [IdeaController::class, "destroy"]);

    Route::delete("/logout", [SessionController::class, "destroy"]);
});
// Authentication route
Route::get("/register", [RegisterUserController::class, "create"])->middleware("guest");
Route::post("/register", [RegisterUserController::class, "store"])->middleware("guest");

Route::get("/login", [SessionController::class, "create"])->middleware("guest");
Route::post("/login", [SessionController::class, "store"])->middleware("guest");
