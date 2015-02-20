<?php

namespace Bootcamp\Demo;

class Circle extends Shape  //Inherits properties from Shape Class!
{
    public $radius;

    /**
     * Declares a function getArea.
     * @return float.
     */
    public function getArea()
    {
        return M_PI*(($this->radius)**2);
    }

    /**
     * Creates a Circle instance
     * @param float $radius is a Circle radius.
     * @return void
     */
    public function __construct($Radius)
    {
        $this->radius = $Radius;
    }
}
