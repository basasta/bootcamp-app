<?php 

require __DIR__."/vendor/autoload.php";

use Bootcamp\Demo\Quiz\Option;

$options = [];
$options[] = new Option("1");
$options[] = new Option("2");
$options[] = new Option("3",true);
$options[] = new Option("4");

var_dump($options);