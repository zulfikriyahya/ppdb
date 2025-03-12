<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin');
});

// Route::get('/', function () {
//     return view('welcome');
// });
