<?php

use App\Http\Controllers\AdoteController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class,'home']);

Route::get("/adote", [AdoteController::class, "adote"]);