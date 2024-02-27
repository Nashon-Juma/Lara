<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('post/{no}', function ($no) {
    $post=file_get_contents(__DIR__."/../resources/posts/{ $no }.html");
    return view('post',['post'=>$post]);
});



