<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CampoController;

Route::post('/campos', [CampoController::class, 'create']);
Route::get('/campos', [CampoController::class, 'getAll']);
Route::get('/campos/{id}', [CampoController::class, 'getById']);
Route::put('/campos/{id}', [CampoController::class, 'update']);
Route::delete('/campos/{id}', [CampoController::class, 'destroy']);
