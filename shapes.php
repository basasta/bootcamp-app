<?php

abstract class Shape //abstractly discribes every below written class
{   
    public $perimeter;    
    public abstract function getArea();
}
class Rectangle extends Shape 
{
    public $width;
    public $height;
    public function getArea() 
    {   
         return $this->width * $this->height;       
    }
     public function __construct($Width, $Height)
    {
         $this->width = $Width;
         $this->height = $Height;         
    }
}
class Circle extends Shape 
{
    public $radius;
     public function getArea() 
    {
         return M_PI*(($this->radius)*2);       
    }
     public function __construct($Radius)
    {
         $this->radius = $Radius;      
    }
}
class Cilinder extends Circle
{
    public $height;    
     public function getArea() 
    {   
         return 2 * M_PI * $this->radius* ($this->height+$this->radius);       
    }
     public function __construct($Height,$Radius)
    {
         $this->height = $Height; 
         $this->radius = $Radius; 
    }
    
}

$rect = new Rectangle(10,10);
var_dump($rect->getArea());


$circle = new Circle(10);
var_dump($circle->getArea());


$cilinder = new Cilinder(12,10);
var_dump($cilinder->getArea());

