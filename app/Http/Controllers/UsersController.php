<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class UsersController extends Controller
{
    function getData()
    {
       return UserModel::all();
    }
}
