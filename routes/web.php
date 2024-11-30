<?php

use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::view('/first', 'first');

Route::view('/about', 'about');

Route::view('/contact', 'contact');
