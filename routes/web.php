<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('admin/calon-siswas/create');
});
// Route::get('/chatbot', function () {
//     return view('chatbot');
// });
