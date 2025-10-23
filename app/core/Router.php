<?php
class Router {
    private $routes = [];

    public function add($method, $path, $controller) {
        $this->routes[] = [
            "method" => $method,
            "path" => $path,
            "controller" => $controller
        ];
    }

    public function dispatch() {
        $requestMethod = $_SERVER['REQUEST_METHOD'];
        $requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($route["method"] === $requestMethod && $this->matchPath($route["path"], $requestUri)) {
                $this->callController($route["controller"]);
                return;
            }
        }

        // 404 Not Found
        http_response_code(404);
        require_once "../app/views/404.php";
    }

    private function matchPath($routePath, $requestUri) {
        $routePath = preg_replace('/\{[^}]+\}/', '([^/+])', $routePath);
        return preg_match("#^$routePath$#", $requestUri);
    }

    private function callController($controller) {
        list($controllerName, $method) = explode("@", $controller);

        require_once "../app/controllers/$controllerName.php";
        $controllerInstance = new $controllerName();
        $controllerInstance->$method();
    }
}
?>