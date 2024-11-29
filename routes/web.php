<?php

// The imported class from testing DB connection (tested so deleted)
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

// Takes 2 parameters - URL and function
Route::get('/', function () {
    // returns the view of welcome.blade.php
    return view('welcome');
});


