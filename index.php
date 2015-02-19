<?php

require "vendor/autoload.php";

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    $rect = new Bootcamp\Demo\Rectangle(10,10);
    return $rect->getArea();    
});
$app->run();