<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/rekordy', [UserController::class, 'index']);
Route::post('/rekordy', [UserController::class, 'create']);
Route::get('/rekordy/{id}', [UserController::class, 'read']);
Route::put('/rekordy/{id}', [UserController::class, 'update']);
Route::delete('/rekordy/{id}', [UserController::class, 'delete']);
Route::get('rekordy/{id}/people', [UserController::class, 'getPeople']);
