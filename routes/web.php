<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Group middleware?
|--------------------------------------------------------------------------
|---Laravel Group Middleware----
|   What is Group middleware?
|   Make Middleware
|   Register It
|   Apply Middleware
|   Interview Question
|
|---COMMAND ::: php artisan make:middleware checkAge------
*/



// Route::post("users", [UsersController::class, 'getData']);

Route::view("home", "home");
Route::view("noaccess", "noaccess");

Route::group(['middleware' => ['protectedPage']], function() {
    Route::view("users", "users");
    Route::get('/', function () {
        return view('welcome');
    });
});
