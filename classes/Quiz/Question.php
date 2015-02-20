<?php

namespace Bootcamp\Demo\Quiz;
    
class Questions
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
     * @param $options 
     * @return array
     */
    public function addOption(Option $options)
    {
    
    }

    /**
     * @param $title is a string
     */
    public function __construct($title)
    {
        this->title = $title;
    }
}