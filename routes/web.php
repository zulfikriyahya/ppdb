<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('ppdb');
});

// Route::get('/chatbot', function () {
//     return view('chatbot');
// });
