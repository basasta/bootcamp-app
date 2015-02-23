<?php

namespace Bootcamp\Demo\Quiz;
    
class Quiz
{
        
    /**
     * @var $questions gonna be an array
     */
    protected $questions;

    /**
     * @var $name gonna be a string
     */
    protected $name;

    /**
     * @var $id gonna be an integer
     */
    protected $id;

    /**
     * @param question is linked just to Question class 
     * @return string
     */
    public function addQuestion(Question $question)
    {
        $this->questions[] = $question;
    }

    /**
     * @param $name 
     */
    public function __construct($name)
    {
        $this->name = $name;
    }
    
}