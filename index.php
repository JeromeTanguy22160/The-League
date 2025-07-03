<?php

require "/config/autoload.php";

require "/vendor/autoload.php";

$router = new Router();

$router->handleRequest($_GET);

?>