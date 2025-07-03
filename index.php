<?php

require_once __DIR__ . '/config/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader,[
            'debug' => true,
]);


?>