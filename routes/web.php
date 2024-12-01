<?php

use App\Http\Middleware\First;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;

Route::view('/first', 'first')->name('first');

Route::get('/loop-test/{num}/{name}', [TestController::class, 'loop'])->name('loop.test');

Route::resource('product', ProductController::class, ['names' => 'product']);

