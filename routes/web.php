<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Database configuration and Fetch Data
|--------------------------------------------------------------------------
|---Laravel Start with DB----
|   Config database
|   Checkout Database
|   Import DB Class
|   Fetch Data from mysql
|   Interview Question
|
|---COMMAND ::: php artisan make:------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UsersController::class, 'index']);

