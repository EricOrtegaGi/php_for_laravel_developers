<?php

namespace framework;
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
        if (!file_exists($this->rotues[$uri])){
//            throw new RuntimeException("NO s'ha trobat el controllador:" . $this->rotues[$uri] );
            dd("No s'ha trobat el controller:" . $this->routes[$uri]);
        }
        include $this->rotues[$uri];
        return $this;
    }
}