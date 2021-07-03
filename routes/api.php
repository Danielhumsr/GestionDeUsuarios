<?php

use App\Http\Controllers\AutenticarUsuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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


Route::post('/registrar', [AutenticarUsuario::class, 'register']);
Route::post('/login', [AutenticarUsuario::class, 'login']);


Route::middleware('auth:samctum')->group(function(){
    Route::get('/user', [AutenticarUsuario::class, 'user']);
    Route::get('/logout', [AutenticarUsuario::class, 'logout']);

});


