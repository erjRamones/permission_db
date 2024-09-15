<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');

Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

Route::get('/user', [UserController2::class, 'index'])->name('user.index');