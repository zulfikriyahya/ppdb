<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin');
});

// Route::get('/chatbot', function () {
//     return view('chatbot');
// });
