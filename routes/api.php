<?php
use App\Http\Controllers\PetApiController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api pet

Route::get('pets',[PetApiController::class, 'index']);
Route::post('pets/cadastrar',[PetApiController::class, 'store']);
Route::get('pets/visualizar/{id}',[PetApiController::class, 'show']);
Route::put('pets/atualizar/{id}',[PetApiController::class, 'update']);
Route::delete('pets/delete/{id}',[PetApiController::class, 'delete']);