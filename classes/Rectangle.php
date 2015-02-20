<?php

namespace Bootcamp\Demo;

class Rectangle extends Shape  //Inherits properties from Shape Class!
{
    public $width;
    public $height;

    /**
     * Creates a Rectangle instance
     * @param float $width is a Rectangle width.
     * @param float $height is a Rectangle height.
     * @return void
     */
    public function getArea()
    {
        
    /**
     * Declares a function getArea.
     *
     */
         return $this->width * $this->height;//
    }
    
    public function __construct($Width, $Height)
    {

    /**
     * Declares a function with parameters $Width and $Height and link it to existing in Parent class variables
     */
        $this->width = $Width;
        $this->height = $Height;
    }
}
