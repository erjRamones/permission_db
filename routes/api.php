<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DBLibraryController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->prefix('libraries')->group(function () {
    Route::get('/{modeltype}', [DBLibraryController::class, 'index']);
});
