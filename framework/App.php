<?php

namespace Framework;
use Exception;

class App
{
    private static $container = [];
    // API
    // BIND -> Setter -> Afegir un objecte nou a la meva app
    //getters i setters

    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }


        public static function get($key)
        {
            if (!array_key_exists($key, static::$container)) {
                throw new Exception("No {$key} is bound in the container. ");
            }
            return static::$container[$key];
        }

}