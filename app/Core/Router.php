<?php
class Router
{
    private $controller = 'App\Controllers\HomeController';
    private $method = 'index';
    private $param = array();

    public function __construct()
    {
        $this->route();
    }

    public function abort($code = 404)
    {
        http_response_code($code);
        require "../app/Views/404/{$code}.php";
        die();
    }

    public function route()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = explode('/', trim(strtolower($uri), '/'));
        $a= array_splice($uri,0,1);
        // var_dump($uri);

        if (!empty($uri[0])) {
            $controllerName = ucwords($uri[0]) . 'Controller';
            $controller = 'App\Controllers\\' . $controllerName;

            if (class_exists($controller)) {
                $this->controller = $controller;
            } else {
                $this->abort();
            }
        }

        $class = new $this->controller;

        if (isset($uri[1]) && method_exists($class, $uri[1])) {
            $this->method = $uri[1];
            unset($uri[1]);
        }

        if (isset($uri[2])) {
            $this->param = array_slice($uri, 2);
        }

        call_user_func_array([$class, $this->method], $this->param);
    }
}
