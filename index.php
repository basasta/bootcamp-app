<?php

require "vendor/autoload.php";

use Bootcamp\Demo\Rectangle;

$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    $rect = new Rectangle(10,10);
    return $rect->getArea();    
});
$app->run();