<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasEstaticaController extends Controller
{
    public function sobreNos(){
        return view("sobre-nos");
    }
    public function faq(){
        return view('faq');
    }

    public function politica(){
        return view("politica");
    }

    public function contribuir(){
        return view("contribucao");
    }
}
