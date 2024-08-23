<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function user(){
        return view('cadastre-se');
    }
    public function ongs(){
        return view('cadastro-ongs');
    }

    public function login(){
        return view('login');
    }
}
