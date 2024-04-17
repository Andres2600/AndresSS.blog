<?php
// autoload 
require '../vendor/autoload.php';

// Active debug mode
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//start altoRouter
$router = new AltoRouter();

//Map routes
$router -> map('GET','/','index','index');
$router -> map('GET','/','contact','contact');
$router -> map('GET','/','404','404');

// Match routes
$match = $router->match();

if(is_array($match)){

    if(is_callable( $match['target'] ) ) {
        call_user_func_array( $match['target'], $match['params'] );
    } else {
    
    $params = $match ['params'];
    // match target with view
    include "../model/views/{$match['target']}.view.php";
    }

} else {
    include "../model/views/404.view.php";
}



?>