<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\AlternativeController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalculateController;
use Illuminate\Auth\Middleware\Authenticate;

Auth::routes();

// without auth
Route::post('/process', [ProcessController::class, 'index'])->name('process');
Route::get('/', [ProcessController::class, 'welcome'])->name('welcome');
Route::get('/university', [ProcessController::class, 'university'])->name('university');





// with auth
Route::resource('location', LocationController::class)->middleware('auth');
Route::resource('criteria', CriteriaController::class)->middleware('auth');
Route::resource('alternative', AlternativeController::class)->middleware('auth');
Route::resource('user', UserController::class)->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::post('/logout2', [HomeController::class, 'logout'])->middleware('auth');

Route::get('/dataAnalyst', [CalculateController::class, 'index'])->name('dataAnalyst');
Route::post('/dataAnalyst_calculation', [CalculateController::class, 'calculation'])->name('dataAnalyst_calculation');
