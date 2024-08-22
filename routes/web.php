<?php

use App\Http\Controllers\AdoteController;
use App\Http\Controllers\User;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\PaginasEstaticaController;
use App\Http\Controllers\PetsAdminController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/ongsParceiras',[SiteController::class,'ongsParceiras'])->name('ongsParceiras');


Route::get("/adote", [AdoteController::class, "adote"])->name('adote');
Route::get("/perfil", [AdoteController::class, "perfil"])->name('perfil');

Route::get("/usuario",[CadastrosController::class,'user'])->name('usuario');
Route::get("/ongs", [CadastrosController::class, "ongs"])->name('ongs');
Route::get("/pets", [CadastrosController::class, "pets"])->name('pets');
Route::get("/login", [CadastrosController::class, "login"])->name('login');




Route::get("/sobre-nos", [PaginasEstaticaController::class, "sobreNos"])->name('sobreNos');
Route::get('/faq',[PaginasEstaticaController::class,'faq'])->name('faq');
Route::get("/politica" , [PaginasEstaticaController::class, "politica"])->name('politica');
Route::get("/contribuir", [PaginasEstaticaController::class, "contribuir"])->name('contribuir');
Route::get("/contato", [PaginasEstaticaController::class, "contato"])->name('contato');


//admin pets
 Route::get("/adminpet/visualizar", [PetsAdminController::class,"show"])->name("pet.visualizar");
 Route::get("admin/index",[PetsController::class, "pets"])->name("index");


 //admin Usuario

 Route::get("/admin/usuarios/visualizar", [UsuarioController::class,"show"])->name("admin.usuarios.visualizar");
 Route::get("/admin/usuarios/index", [UsuarioController::class,"index"])->name("admin.usuarios.index");