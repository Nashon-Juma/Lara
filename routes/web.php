<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/post{$i}', function ($i) {
    return view('posts/'.$i);
});




