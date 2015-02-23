<?php 

require __DIR__."/vendor/autoload.php";

use Bootcamp\Demo\Quiz\Option;
use Bootcamp\Demo\Quiz\Question;
use Bootcamp\Demo\Quiz\Quiz;


$options = [];
$options[] = new Option("1");
$options[] = new Option("2");
$options[] = new Option("3",true);
$options[] = new Option("4");

$question1 = new Question("What is ur name");
foreach ($options as $option){
   $question1->addOption($option);
}

$options = [];
$options[] = new Option("1");
$options[] = new Option("2");
$options[] = new Option("3",true);
$options[] = new Option("4");

$question2 = new Question("What is ur surname");
foreach ($options as $option){
   $question2->addOption($option);
}


$quiz = new Quiz ("Bootcamp");
$quiz->addQuestion($question1);
$quiz->addQuestion($question2);

var_dump($quiz);