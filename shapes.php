<?php
//require "classes/Shape.php";
//require "classes/Circle.php";
//require "classes/Rectangle.php";
//require "classes/Cilinder.php";



spl_autoload_register(function ($className) {
    var_dump($className);
require 'classes/' .$className . ".php";
});
    
    
$rect = new Rectangle(10,10);
 var_dump($rect->getArea());


$circle = new Circle(10);
 var_dump($circle->getArea());


$cilinder = new Cilinder(12,10);
 var_dump($cilinder->getArea());

