<?php

// The imported class from testing DB connection (tested so deleted)
use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Takes 2 parameters - URL and function
Route::get('/', function () {
    // Returns the view of welcome.blade.php
    return view('welcome');
})->middleware(First::class); // registering the middleware in the route directly instead of in kernel file

// if URL isn't localhost:8000?token=verified
Route::Get('/noaccess', function(){
    return 'You do not have the access in this application.';
})->name('noaccess');

