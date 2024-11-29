<?php

// The imported class from testing DB connection (tested so deleted)
use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;



// Takes 2 parameters - URL and function
Route::get('/', [TestController::class, 'index']);

// if URL isn't localhost:8000?token=verified
Route::Get('/noaccess', [TestController::class, 'noaccess'])->name('noaccess');

