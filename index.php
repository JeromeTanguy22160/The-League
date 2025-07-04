<?php

    require_once __DIR__ . '/vendor/autoload.php';
    
    require_once __DIR__. '/config/autoload.php';
    
    $router = new Router();
    
    $router->handleRequest($_GET);

?>