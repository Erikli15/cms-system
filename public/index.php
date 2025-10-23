<?php
require_once "../app/core/Config.php";
require_once "../app/core/Router.php";
require_once "../app/core/Database.php";
require_once "../app/core/Auth.php";
require_once "../app/core/Helper.php";

// Ladda routs
$routes = require "../app/config/routes.php";

$router = new Router();

// Registrera routs
foreach ($routes as $route) {
    $router->add($route["method"], $route["path"], $route["controller"]);
}

// Dispatcha request
$router->dispatch();
?>
