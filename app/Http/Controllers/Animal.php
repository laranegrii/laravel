<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animal extends Controller
{
    // cameCase
    function animal(){
        return view('animal');
    }
}
