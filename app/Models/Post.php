<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post extends Model
{
    use HasFactory;
    public static function Onn(){
        $files= File::files(resource_path("posts/"));
        return array_map(fn($file)=>$file->getContents(),$files);
    }

    public static function find($no){
    if (!file_exists($path=resource_path("posts/{$no}.html"))){
        return redirect('/');
        // throw new ModelNotFoundException();
        }
    return cache()->remember("posts/{num}",450, fn() =>file_get_contents($path));
    }
}
