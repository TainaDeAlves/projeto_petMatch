<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function pets(){
        return view('admin.pets.index');
    }
}
