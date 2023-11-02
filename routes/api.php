<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('roles', RolesController::class);

Route::apiResource('personas', PersonasController::class);

Route::apiResource('paginas', PaginasController::class);

Route::apiResource('usuarios', UsuariosController::class);

Route::apiResource('enlaces', EnlacesController::class);

Route::apiResource('bitacora', BitacoraController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
