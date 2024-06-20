<?php

use App\Http\Controllers\AdoteController;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\PaginasEstaticaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class,'home']);

Route::get("/adote", [AdoteController::class, "adote"]);
Route::get("/usuario",[CadastrosController::class,'user']);

Route::get("/ongs", [CadastrosController::class, "ongs"]);
Route::get("/pets", [CadastrosController::class, "pets"]);
Route::get("/sobre-nos", [PaginasEstaticaController::class, "sobre-nos"]);

