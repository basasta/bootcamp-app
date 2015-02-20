<?php


use Bootcamp\Demo\Quiz\Question;
use \Mockery as m;


class QuestionTest extends PHPUnit_Framework_TestCase
{
    public function testCheckOptions()
    {
        $option = m::mock("\Bootcamp\Demo\Quiz\Option");
        $option->shouldReceive("isCorrect")
               ->andReturn(true);
        
        $q = new Question("WTF?");
        $this->assertFalse($q->isMultiAnswer());

        $q->addOption($option);
        $this->assertFalse($q->isMultiAnswer());
        
        $q->addOption($option);
        $this->assertTrue($q->isMultiAnswer());
     }
}