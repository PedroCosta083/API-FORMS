<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampoController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\TipoCampoController;
use App\Http\Controllers\OpcoesCampoController;

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

Route::post('/tipo', [TipoCampoController::class, 'create']);
Route::get('/tipos', [TipoCampoController::class, 'getAll']);
Route::get('/tipo/{id}', [TipoCampoController::class, 'getById']);
Route::put('/tipo/{id}', [TipoCampoController::class, 'update']);
Route::delete('/tipo/{id}', [TipoCampoController::class, 'destroy']);


Route::post('/opcao', [OpcoesCampoController::class, 'create']);
Route::get('/opcoes', [OpcoesCampoController::class, 'getAll']);
Route::get('/opcao/{id}', [OpcoesCampoController::class, 'getById']);
Route::put('/opcao/{id}', [OpcoesCampoController::class, 'update']);
Route::delete('/opcao/{id}', [OpcoesCampoController::class, 'destroy']);
