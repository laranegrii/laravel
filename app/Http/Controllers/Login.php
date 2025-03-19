<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // cameCase
    function login(){
        return view('login');
    }
}
