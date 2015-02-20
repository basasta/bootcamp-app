<?php

use Bootcamp\Demo\Rectangle;

class RectangleTest extends PHPUnit_Framework_TestCase
{
    public function testGetArea()
    {
        $rec = new Rectangle(1,2);
        
        $this->assertEquals(2, $rec->getArea());
    }
}