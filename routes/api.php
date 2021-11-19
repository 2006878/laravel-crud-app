<?php

use App\Http\Controller\PaisController;
use App\Http\Controller\UniversidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/paises/{name?}', [PaisController::class, 'index']);
Route::get('/paises/{id}', [PaisController::class, 'show']);
Route::post('/paises/{name?}', [PaisController::class, 'store']);
Route::put('/paises/{name?}', [PaisController::class, 'update']);
Route::delete('/paises/{name?}', [PaisController::class, 'destroy']);

Route::get('/universidades', [UniversidadeController::class, 'index']);
Route::get('/universidades/{id}', [UniversidadeController::class, 'show']);
Route::post('/universidades', [UniversidadeController::class, 'store']);
Route::put('/universidades', [UniversidadeController::class, 'update']);
Route::delete('/universidades', [UniversidadeController::class, 'destroy']);
