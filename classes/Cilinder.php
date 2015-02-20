<?php

namespace Bootcamp\Demo;

class Cilinder extends Circle //Inherits properties from Shape Class!
{
    public $height;

    /**
     * Creates a Cilinder instance
     * @param float $height is a Cilinder height.
     * @return void
     */
    public function getArea()
    {

    /**
     * Declares a function getArea
     * @return float
     */
        return 2 * M_PI * $this->radius* ($this->height+$this->radius);
    }
    public function __construct($Height, $Radius)
    {

    /**
     * Declares a function with parameters $Radius and $Height and link it to existing in Parent class variables
     */
         $this->height = $Height;
         $this->radius = $Radius;
    }
}
