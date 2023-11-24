<?php

return [
    "/" => [
        "url"       => "/",
        "controller" => "app/Http/Controllers/HomeController.php",
        "layout"     => "resources/views/layouts/main/layout.php",
        "view"       => "resources/views/index.view.php",
        "title"      => "Tasques",
        "description"=> "Home page",
    ],
    "/users" => [
        "url"        => "/users",
        "controller" => "app/Http/Controllers/UsersController.php",
        "layout"     => "resources/views/layouts/main/layout.php",
        "view"       => "resources/views/users.view.php",
        "title"      => "Usuaris",
        "description"=> "Users page",
    ],
    "/contact" => [
        "url"        => "/contact",
        "controller" => "",
        "layout"     => "resources/views/layouts/main/layout.php",
        "view"       => "resources/views/contact.view.php",
        "title"      => "Contacte",
        "description"=> "Contact page",
    ],
    "/about" => [
        "url"        => "/about",
        "controller" => "",
        "layout"     => "resources/views/layouts/main/layout.php",
        "view"       => "resources/views/about.view.php",
        "title"      => "Sobre nosaltres",
        "description"=> "About page",
    ],
];