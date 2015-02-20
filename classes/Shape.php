<?php

namespace Bootcamp\Demo;

abstract class Shape //abstractly discribes every below written class
{   
     /** 
     * Returns an area of a shape
     * @return float value of Shape area
     */
    public $perimeter;    
    public abstract function getArea();//Abstract because of the different area calculation ways
}