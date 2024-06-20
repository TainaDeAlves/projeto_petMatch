<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasEstaticaController extends Controller
{
    public function sobreNos(){
        return view("sobre-nos");
    }
}
