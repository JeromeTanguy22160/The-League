<?php

    require_once __DIR__ . '/vendor/autoload.php';
    
    require_once __DIR__. '/config/autoload.php';
    
    $routeur = new Routeur();
    
    $router->handleRequest($_GET);

?>