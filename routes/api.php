<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\AuthController;

// Menu publik: tidak memerlukan token
Route::get('/menu', [MenuController::class, 'index']);

Route::get('/menu/{id}', [MenuController::class, 'show'])
    ->whereNumber('id');

// Login admin: tidak memerlukan token
Route::post('/admin/login', [AuthController::class, 'login']);

// Operasi yang hanya boleh dilakukan admin yang sudah login
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/admin/logout', [AuthController::class, 'logout']);

    Route::post('/menu', [MenuController::class, 'store']);

    Route::put('/menu/{id}', [MenuController::class, 'update'])
        ->whereNumber('id');

    Route::delete('/menu/{id}', [MenuController::class, 'destroy'])
        ->whereNumber('id');
});