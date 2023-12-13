<? 
$uri=parse_url($_SERVER['REQUEST_URI'])['path'];
// Display paged based on the requested URI

// requesting home page 
function abort($h=404) {
    http_response_code($h);
    require ("ctrl/{$h}.php");
    die();
}
$routes=[
    '/'=>"ctrl/index.php",
    '/contact'=>"ctrl/contact.php",
    '/about'=>"ctrl/about.php",
    '/index.php'=>"ctrl/index.php",
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
}else{
    abort();
}