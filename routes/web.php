<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/post', function () {
    $posts=Post::all();
    return view('post',['posts'=>$posts]);
});


Route::get('post/{holder}', function ($no) {
    //find a post by it holder and return it's view
    return view('post',[
        'post'=>Post::find($no)
    ]);
})->whereAlpha('holder');





