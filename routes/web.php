<?php

use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


Route::get('/{name}', [App\Http\Controllers\TestController::class, 'index'])->name('home');
