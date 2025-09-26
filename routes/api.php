<?php

use App\Http\Controllers\JogadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/jogadores', [JogadorController::class, 'index']);
Route::get('/jogadores/{id}', [JogadorController::class, 'show']);
Route::post('/jogadores', [JogadorController::class, 'store']);
Route::put('/jogadores', [JogadorController::class, 'update']);
Route::delete('/jogadores/{id}', [JogadorController::class, 'delete']);