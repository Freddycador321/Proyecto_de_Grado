<?php

use App\Http\Controllers\ArbitroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\EquipoJugadorController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\UserController;
use App\Models\equipo_jugador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [AuthController::class,'authenticate']);
Route::apiResource('/usuario', UserController::class);
Route::apiResource('/arbitro', ArbitroController::class);
Route::apiResource('/jugador', JugadorController::class);
Route::apiResource('/equipo', EquipoController::class);
Route::apiResource('/equipo_jugador', EquipoJugadorController::class);
Route::apiResource('/club', ClubController::class);
Route::apiResource('/categoria', CategoriaController::class);

Route::middleware('auth:api')->group(function(){
    
    Route::post('/logout',[\App\Http\Controllers\AuthController::class, 'logout']);
    //Route::post('user',[AuthController::class,'getAuthenticatedUser']);
    //Route::apiResource('/usuario', UsuarioController::class);
    //Route::apiResource('/venta', VentaController::class);
    //Route::put('/producto/actualizar/{id}', [ProductoController::class,'actualizarstok']);
});

