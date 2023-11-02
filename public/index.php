<?php

use framework\App;

require '../vendor/autoload.php';
require '../framework/bootstrap.php';

$tasks = App::get('router')->redirect($_SERVER['REQUEST_URI']);

$greeting = greet();

//URL
//router -> api redirect quina url me ha demanat l'usuari -> he de obtenir el controlador que toca i executarlo

//$routes = new Route();
//$routes->define($routes);
//$routes->redirect($_SERVER['REQUEST_URI']);

