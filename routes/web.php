<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - What is middleware?
|--------------------------------------------------------------------------
|---Laravel Middleware----
|   What is middleware?
|   Middleware Type
|   Make Middleware
|   Apply Middleware
|   Interview Question
|
|---COMMAND ::: php artisan make:middleware checkAge------
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post("users", [UsersController::class, 'getData']);
Route::view("users", "users");
Route::view("home", "home");
Route::view("noaccess", "noaccess");

