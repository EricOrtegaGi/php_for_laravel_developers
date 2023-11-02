<?php

namespace framework;

class Route
{
    protected  $routes = [];

    public function register($route)
    {
        $this-> routes[]=$route;
    }

    public function define($routes)
    {
        $this-> routes=$routes;
        return $this;
    }

    public function redirect($url)
    {
        if(!array_key_exists($url,$this->routes)){
            require '../resources/views/errors/404.php';
            return $this;
        }
        if (!file_exists($this-> routes[$url])){
            require '../resources/views/errors/404.php';
            return $this;
        }
        require $this-> routes[$url];
        return $this;
    }
}