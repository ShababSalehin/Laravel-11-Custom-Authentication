<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Register
// Route::get("register", [AuthController::class, "register"])->name("register");
// Route::post("register", [AuthController::class, "register"])->name("register");

Route::group([
    "middleware" => ["guest"]
], function(){

    Route::match(["get", "post"], "register", [AuthController::class, "register"])->name("register");

    // Login
    //Route::get("login", [AuthController::class, "login"])->name("login");
    Route::match(["get", "post"], "login", [AuthController::class, "login"])->name("login");
});

Route::group([
    "middleware" => ["auth"]
], function(){

    // Dashboard
    Route::get("dashboard", [AuthController::class, "dashboard"])->name("dashboard");

    // Profile
    //Route::get("profile", [AuthController::class, "profile"])->name("profile");
    Route::match(["get", "post"], "profile", [AuthController::class, "profile"])->name("profile");

    // Logout
    Route::get("logout", [AuthController::class, "logout"])->name("logout");
});
