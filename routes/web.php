<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Route middleware
|--------------------------------------------------------------------------
|---Laravel Route Middleware----
|   What is Route middleware?
|   Make Middleware
|   Register It
|   Apply Middleware
|   Interview Question
|
|---COMMAND ::: php artisan make:middleware checkAge------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::view("users", "users")->middleware('protectedPage');
Route::view("home", "home");
Route::view("noaccess", "noaccess");

