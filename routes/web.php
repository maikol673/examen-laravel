<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soldado/{id}', [ConsultasController::class, 'soldado']);
Route::get('/soldados', [ConsultasController::class, 'soldados']);
Route::get('/servicio/{id}', [ConsultasController::class, 'servicio']);
Route::get('/cuartel/{id}', [ConsultasController::class, 'cuartel']);
Route::get('/cuarteles', [ConsultasController::class, 'cuarteles']);



