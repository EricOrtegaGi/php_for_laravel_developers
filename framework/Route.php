<?php

namespace framework;


//NO -> $routes->routes -> Getter Setters
//Si -> SET $routes->routes->define($rotues)
use http\Exception\RuntimeException;
class Router
{
    protected $rotues = [];

    public function register($route)
    {
        $this->rotues[] = $route;
    }

    //CHAINING METHODS

    public function define($routes)
    {
        $this->rotues = $routes;
        return $this;
    }


    public function redirect($uri)
    {
        if (!array_key_exists($uri,$this->rotues)) {
            require 'resources/views/errors/404.php';
            return $this;
        }
        include $this->rotues[$uri];
        return $this;
    }
}