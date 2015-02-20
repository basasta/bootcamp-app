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
    }
    
    public function isMultiAnswer() {
        $count  = 0;
        foreach ($this->options as $option){
            if($option->isCorrect() === true) {
                $count++;
            }
            if($count>1){
                return true;
            }
        }
        return false;  
    }
}       