<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimais extends Controller
{
    // cameCase
    function listarAnimais(){
        return view('listar-animal');
    }
}
