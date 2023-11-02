<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\EnlacesController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::prefix('/roles')->group(function () {
    Route::get('/', [RolesController::class, 'index']);
    Route::get('/{id}', [RolesController::class, 'show']);
    Route::post('/', [RolesController::class, 'store']);
    Route::put('/{id}', [RolesController::class, 'update']);
    Route::delete('/{id}', [RolesController::class, 'destroy']);
});

Route::prefix('/personas')->group(function () {
    Route::get('/', [PersonasController::class, 'index']);
    Route::get('/{id}', [PersonasController::class, 'show']);
    Route::post('/', [PersonasController::class, 'store']);
    Route::put('/{id}', [PersonasController::class, 'update']);
    Route::delete('/{id}', [PersonasController::class, 'destroy']);
});

Route::prefix('/paginas')->group(function () {
    Route::get('/', [PaginasController::class, 'index']);
    Route::get('/{id}', [PaginasController::class, 'show']);
    Route::post('/', [PaginasController::class, 'store']);
    Route::put('/{id}', [PaginasController::class, 'update']);
    Route::delete('/{id}', [PaginasController::class, 'destroy']);
});

Route::prefix('/usuarios')->group(function () {
    Route::get('/', [UsuariosController::class, 'index']);
    Route::get('/{id}', [UsuariosController::class, 'show']);
    Route::post('/', [UsuariosController::class, 'store']);
    Route::put('/{id}', [UsuariosController::class, 'update']);
    Route::delete('/{id}', [UsuariosController::class, 'destroy']);
});

Route::prefix('/enlaces')->group(function () {
    Route::get('/', [EnlacesController::class, 'index']);
    Route::get('/{id}', [EnlacesController::class, 'show']);
    Route::post('/', [EnlacesController::class, 'store']);
    Route::put('/{id}', [EnlacesController::class, 'update']);
    Route::delete('/{id}', [EnlacesController::class, 'destroy']);
});

Route::prefix('/bitacora')->group(function () {
    Route::get('/', [BitacoraController::class, 'index']);
    Route::get('/{id}', [BitacoraController::class, 'show']);
    Route::post('/', [BitacoraController::class, 'store']);
    Route::put('/{id}', [BitacoraController::class, 'update']);
    Route::delete('/{id}', [BitacoraController::class, 'destroy']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
