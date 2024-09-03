<?php

use App\Http\Controllers\AdoteController;
use App\Http\Controllers\User;
use App\Http\Controllers\CadastrosController;
use App\Http\Controllers\PaginasEstaticaController;
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

Route::get("/login", [CadastrosController::class, "login"])->name('login');




Route::get("/sobre-nos", [PaginasEstaticaController::class, "sobreNos"])->name('sobreNos');
Route::get('/faq',[PaginasEstaticaController::class,'faq'])->name('faq');
Route::get("/politica" , [PaginasEstaticaController::class, "politica"])->name('politica');
Route::get("/contribuir", [PaginasEstaticaController::class, "contribuir"])->name('contribuir');
Route::get("/contato", [PaginasEstaticaController::class, "contato"])->name('contato');


//admin pets
 Route::get("/adminpet/visualizar", [PetsController::class,"show"])->name("pet.visualizar");
 
 Route::post("/adminpet/store", [PetsController::class,"store"])->name("pet.store");
 Route::get("/adminpet/pdate", [PetsController::class,"update"])->name("pet.update");
 Route::get("admin/index",[PetsController::class, "index"])->name("index");
 Route::get("/pets", [PetsController::class, "create"])->name('pets');

//   admin usuario 
Route::get("/admin/usuarios/index",[UsuarioController::class,"index"])->name("admin.usuarios.index");
Route::get("/admin/usuarios/editar",[UsuarioController::class, "edit"])->name("admin.usuarios.editar");
Route::get("/admin/usuarios/visualizar", [UsuarioController::class, "show"])->name("admin.usuarios.visualizar");
Route::get("/admin/usuarios/cadastrar", [UsuarioController::class, 'create'])->name("admin.usuarios.cadastrar");
Route::post("/admin/cadastrarsalvar",[UsuarioController::class, "store"])->name("cadastrosalvo");

