<?php 
function urlIs($value){ 
    return $_SERVER['REQUEST_URI']===$value;   
}
function dd($v){
    echo"<pre>";
    var_dump( $v );
    echo "</pre>";

    die();
}


