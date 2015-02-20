<?php


namespace Bootcamp\Demo;

class Circle extends Shape  //Inherits properties from Shape Class!
{
    public $radius;
     /** 
      * Creates a Circle instance
      * @param float $radius is a Circle radius.
      * @return void
      */
    
     public function getArea() 
    {
      /**
       *Declares a function getArea.
       */
         return M_PI*(($this->radius)*2);       
    }
     public function __construct($Radius)
    {
      /**
       * Declares a function with parameter $Radius and link it to existing in Parent class variables
       */
         $this->radius = $Radius;      
    }
}