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
Route::get("/admin/pets/index",[PetsController::class, "index"])->name("admin.pets.index");
 Route::get("/admin/pets/visualizar", [PetsController::class,"show"])->name("admin.pets.visualizar");
 Route::post("/admin/pets/cadastrar/salvar", [PetsController::class,"store"])->name("admin.pets.cadastrar.salvar");
 Route::put("/admin/pets/editar", [PetsController::class,"update"])->name("admin.pets.editar");
 Route::get("/admin/pets/editar", [PetsController::class,"update"])->name("admin.pets.editar");
 Route::get("/admin/pets/cadastrar", [PetsController::class, "create"])->name('admin.pets.cadastrar');
 Route::delete("/admin/pets/delete", [PetsController::class, "destroy"])->name('admin.pets.delete');
 

//   admin usuario 
Route::get("/admin/usuarios/index",[UsuarioController::class,"index"])->name("admin.usuarios.index");
Route::get("/admin/usuarios/editar/{id}",[UsuarioController::class, "edit"])->name("admin.usuarios.editar");
Route::get("/admin/usuarios/cadastrar", [UsuarioController::class, 'create'])->name("admin.usuarios.cadastrar");
Route::get("/admin/usuarios/visualizar/{id}", [UsuarioController::class, "show"])->name("admin.usuarios.visualizar");
Route::post("/admin/usuarios/cadastrarsalvar",[UsuarioController::class, "store"])->name("cadastrosalvo");
Route::delete("/admin/usuarios/deletar/{id}", [UsuarioController::class,"destroy"])->name("delete.user"); 
Route::put('admin/usuarios/editar/{id}',[UsuarioController::class, 'update'])->name('usuario.update');
