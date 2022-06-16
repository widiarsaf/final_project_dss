<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\AlternativeController;


Route::get('/', [HomeController::class, 'index']);




// User Admin
Route::get('/user-index', function () {
    return view('admin.users.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// CRUD
Route::resource('location', LocationController::class);
Route::resource('criteria', CriteriaController::class);
Route::resource('alternative', AlternativeController::class);
