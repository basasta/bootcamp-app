<?php

namespace Bootcamp\Demo\Quiz;
    
class Question
{       

    /**
     * @var $options gonna be an array
     */
    protected $options;

    /**
     * @var $title gonna be a string
     */
    protected $title;

    /**
     * @var $id gonna be an integer
     */
    protected $id;

    /**
     * @var $type gonna be an integer
     */
    protected $type;

    /**
     * @var $correctAnswerCount gonna be an integer
     */    
    protected $correctAnswerCount = 0;
    /**
     * @param $title is a string
     */
    public function __construct($title)
    {
        $this->title = $title;
        $this->options = [];
    } 
    
    /**
     * @param $options 
     * @return array
     */
    public function addOption(Option $option)
    {
        $this->options[] = $option;
    
        if (true === $option->isCorrect()){
        $this->$correctAnswerCount++;
        }
            return correctAnswerCount > 1;
    }
    
    public function isMultiAnswer() {
        return $this->isMultiAnswer > 1;
    }
      
}       