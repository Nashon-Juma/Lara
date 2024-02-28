<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/post', function () {
    return view('index');
});


Route::get('post/{num}', function ($no) {
    $path=__DIR__."/../resources/posts/{$no}.html";
    ddd($path);
    if (!file_exists($path)){
        return view('404');
    }
    $post=file_get_contents($path);
    return view('post',['post'=>$post]);
})->whereAlpha('num');





