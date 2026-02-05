<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
    $users = ['Juan', 'Maria', 'Pedro'];
    return view('users', compact('users'));
}
}

