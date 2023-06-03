<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImobiliariaController;
use App\Http\Controllers\ImovelController;



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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//usuario
Route::get('/user', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'create']);
Route::delete('/user', [UserController::class, 'destroy']);


//imobiliaria
Route::get('/imobiliaria', [ImobiliariaController::class, 'index']);
Route::get('/imobiliaria/{id}', [ImobiliariaController::class, 'show']);
Route::post('/imobiliaria', [ImobiliariaController::class, 'create']);

//Imovel
Route::get('/categoria_imoveis/{id_imobi}', [ImovelController::class, 'index']);
Route::get('/imovel/{id_imovel}', [ImovelController::class, 'show']);
Route::post('/imovel', [ImovelController::class, 'store']);




