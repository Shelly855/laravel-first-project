<?php

// The imported class from testing DB connection (tested so deleted)
use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



// Takes 2 parameters - URL and function
Route::get('/', [TestController::class, 'index']);

// if URL isn't localhost:8000?token=verified
Route::get('/noaccess', [TestController::class, 'noaccess'])->name('noaccess');

// ['names' => 'post'] = route name
// Partial resource route
// To create only show and create, replace 'except' with 'only'
Route::resource('post', App\Http\Controllers\ResourceController::class, ['names' => 'post', 'except'

=> ['show', 'create']]); // If we don't need these two (use except)

