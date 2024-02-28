<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{
    use HasFactory;
    public static function find($no){
    if (!file_exists($path=resource_path("posts/{$no}.html"))){
        throw new ModelNotFoundException();
    }
    return cache()->remember("post/{num}",450, fn() =>file_get_contents($path));
    }
}
