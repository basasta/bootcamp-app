<?php

require __DIR__."/../../vendor/autoload.php";
use Bootcamp\Demo\Storage\FileStorage;
use Bootcamp\Demo\Storage\Controller;

$s = new FileStorage();
$contr = new Controller($s);
$contr->doSmth();
var_dump($contr);