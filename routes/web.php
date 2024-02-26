<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('post', function ($post) {
    return view('post/one',[
    $post="hello world"
])->with('$post',$post);
});




