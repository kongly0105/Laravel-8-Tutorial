<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Laravel 8 Tutorial - Model
|--------------------------------------------------------------------------
|---Laravel Model with DB----
|   What is model
|   Make Model
|   Fetch Data from Model
|   Show Data
|   Interview Question
|
|---COMMAND ::: php artisan migrate------
|---COMMAND ::: php artisan make:model UserModel------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', [UsersController::class, 'getData']);
