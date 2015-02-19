<?php

class Comment
{
    private $author;//Can be also protected : 
    private $text;
    
    public function __construct($name, $comment) 
    {
         $this->author = $name;
         $this->text = $comment;
    }
    public function getProperty()
    {
        return $this->author;
    }
}
$obj = new Comment("Peter","Bla");//Constructor method will be called while you are creating new Object;
$obj1 = new Comment("Sarah","Blabla");
$result = $obj->getProperty();
var_dump($result);
/*$obj->author = "Peter";
$obj->text = "I am Peter And who are you";
$obj1->author = "Sarah";
$obj1->text = "I am Sarah And who are you";*/

var_dump($obj,$obj1);   