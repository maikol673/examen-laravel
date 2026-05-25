<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultasController;

Route::get('/', function () {
    return view('welcome');
});


// RUTAS QUE TENIA EL QUIZ 

// Route::get('/soldado/{id}', [ConsultasController::class, 'soldado']);
// Route::get('/soldados', [ConsultasController::class, 'soldados']);
// Route::get('/servicio/{id}', [ConsultasController::class, 'servicio']);
// Route::get('/cuartel/{id}', [ConsultasController::class, 'cuartel']);
// Route::get('/cuarteles', [ConsultasController::class, 'cuarteles']);


// RUTAS ACTUALIZADAS sin {id}

Route::get('/soldado', [ConsultasController::class, 'soldado']);
Route::get('/cuartel', [ConsultasController::class, 'cuartel']);
Route::get('/servicio', [ConsultasController::class, 'servicio']);
Route::get('/cuerpo', [ConsultasController::class, 'armyCorp']);
Route::get('/compañia', [ConsultasController::class, 'company']);



