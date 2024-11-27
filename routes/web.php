<?php

// The imported class from testing DB connection (tested so deleted)
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

// Takes 2 parameters - URL and function
Route::get('/', function () {
    // returns the view of welcome.blade.php
    return view('welcome');
});

// dynamic URL - here depends on the product's ID e.g. if user wants to see details for a single product
// {id} = required
// {id?} = optional & have to define the value which is why |= 'all'| is added
Route::get('/product/{id?}', function($id = 'all'){
    $data = [
        1 => 'Apple',
        2 => 'Banana',
        3 => 'Orange'
    ];

    if ($id == 'all'){
        // if no parameter
        // returns all fruits/data (just localhost:8000/product/)
        return $data;
    }
    else{
        // ?? "The fruit is not in the basket" handles if the ID doesn't exist
        return $data[$id] ?? "The fruit is not in the basket";
    }
});
