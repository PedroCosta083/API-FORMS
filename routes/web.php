<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampoController;

Route::post('/campo', [CampoController::class, 'create']);
Route::get('/campos', [CampoController::class, 'getAll']);
Route::get('/campo/{id}', [CampoController::class, 'getById']);
Route::put('/campo/{id}', [CampoController::class, 'update']);
Route::delete('/campo/{id}', [CampoController::class, 'destroy']);


Route::post('/formulario', [FormularioController::class, 'create']);
Route::get('/formularios', [FormularioController::class, 'getAll']);
Route::get('/formulario/{id}', [FormularioController::class, 'getById']);
Route::put('/formulario/{id}', [FormularioController::class, 'update']);
Route::delete('/formulario/{id}', [FormularioController::class, 'destroy']);

Route::post('/tipo', [FormularioController::class, 'create']);
Route::get('/tipos', [FormularioController::class, 'getAll']);
Route::get('/tipo/{id}', [FormularioController::class, 'getById']);
Route::put('/tipo/{id}', [FormularioController::class, 'update']);
Route::delete('/tipo/{id}', [FormularioController::class, 'destroy']);


Route::post('/opcao', [FormularioController::class, 'create']);
Route::get('/opcoes', [FormularioController::class, 'getAll']);
Route::get('/opcao/{id}', [FormularioController::class, 'getById']);
Route::put('/opcao/{id}', [FormularioController::class, 'update']);
Route::delete('/opcao/{id}', [FormularioController::class, 'destroy']);
