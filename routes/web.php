<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;


Route::get('/', function () {
    return view('welcome');
});


// Alternatives
Route::get('/altv-index', function () {
    return view('admin.alternatives.index');
});

// Criteria
Route::get('/criteria-index', function () {
    return view('admin.criteria.index');
});

// User Admin
Route::get('/user-index', function () {
    return view('admin.users.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// CRUD
Route::resource('location', LocationController::class);
