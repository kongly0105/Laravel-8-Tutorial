<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Submit HTML Form
|--------------------------------------------------------------------------
|---Laravel HTML Form----
|   Make HTML Form
|   Make Controller
|   Route view and Post
|   Get Form Data
|   Interview Question
|
|---Create controller ::: php artisan make:controller UsersController :::----
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("users", [UsersController::class, 'getData']);
Route::view("login", "users");
