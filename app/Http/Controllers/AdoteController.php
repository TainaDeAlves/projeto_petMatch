<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoteController extends Controller
{
    public function adote(){
         return view("adote-um-amigo");
    }

    public function perfil(){
        return view("perfilpet");
    }
}
