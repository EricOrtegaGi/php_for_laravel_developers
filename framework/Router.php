<?php

namespace Framework;

class Router
{

    protected $routes = [];

    public function define($routes)
    {
        $this->routes = $routes;
        return $this;
    }

    public function render($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            if($this->routes[$uri]['controller'] != "") {
                require $this->routes[$uri]['controller'];
            }
            $route = $this->routes[$uri];
            require $this->routes[$uri]['layout'];
        }
        else require 'resources/views/404.view.php';
    }

    public function redirect($uri)
    {
        header("Location: {$uri}");
    }
}