<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController2;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('acc.index');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('acc.authenticate');

Route::group(['middleware' => ['auth','role:Admin']], function(){
    
    Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RoleController::class, 'store'])->name('roles.store');

    // Route::get('/user', [UserController2::class, 'index'])->name('user.index');
    // Route::get('/user/{id}/edit', [UserController2::class, 'edit'])->name('assignUser.edit');
    // Route::post('/user/{id}', [UserController2::class, 'update'])->name('assignUser.update');

});

Route::group(['middleware' => ['auth','role:Supervisor|Admin']], function(){
    Route::get('/user', [UserController2::class, 'index'])->name('user.index');
    Route::get('/user/{id}/edit', [UserController2::class, 'edit'])->name('assignUser.edit');
    Route::post('/user/{id}', [UserController2::class, 'update'])->name('assignUser.update')->middleware('permission:Update');
});

