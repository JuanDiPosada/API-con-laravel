<?php

use App\Http\Controllers\MensajeApiController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('mensajes',[MensajeApiController::class,'index']);

Route::post('mensajes',[MensajeApiController::class,'store']);

Route::put('mensajes/{id}',[MensajeApiController::class,'update']);

Route::delete('mensajes/{id]',[MensajeApiController::class,'delete']);
