<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function vu($no) {
        //find a post by it holder and return it's view
        $path=__DIR__."/../resources/posts/{$no}.html";
        if (!file_exists($path)){
            return view('404');
        }
        $post = cache()->remember("post/{num}",450, fn() =>file_get_contents($path));

        return view('post',['post'=>$post]);
    }
}
