<?php

namespace Bootcamp\Demo\Quiz;
    
class Option
{

    /**
     * @var $name gonna be a string
     */
    protected $name;

    /**
     * @var $id gonna be an integer
     */
    protected $id;

    /**
     * @var $isCorrect gonna be an boolean
     */
    protected $isCorrect;
    
    /**
     * @param $name is string
     * @param $isCorrect is boolean, will check the truth
     */
    public function __construct($name,$isCorrect = false)
    {
        $this->name = $name;
        $this->isCorrect = $isCorrect;
    }

}