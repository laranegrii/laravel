<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhesAnimal extends Controller
{
    // cameCase
    function DetalhesAnimal(){
        return view('detalhes-animal');
    }
}
