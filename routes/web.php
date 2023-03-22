<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Form Validation
|--------------------------------------------------------------------------
|---Laravel Form Validation----
|   Use Validation
|   Show error massage
|   Error with every field
|   Interview Question
|
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("users", [UsersController::class, 'getData']);
Route::view("login", "users");
