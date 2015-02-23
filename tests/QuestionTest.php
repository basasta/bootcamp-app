<?php


use Bootcamp\Demo\Quiz\Question;
use \Mockery as m;


class QuestionTest extends PHPUnit_Framework_TestCase
{
    public function testCheckOptions()
    {
        $option = m::mock("\Bootcamp\Demo\Quiz\Option");
        $option->shouldReceive("isCorrect") //by doing shouldReceive we are calling function isCorrect 
               ->andReturn(true); //Returns true anyway
        
        $q = new Question("WTF?");//Instantuation - creation an instance of ojbect
        $this->assertFalse($q->isMultiAnswer());

        $q->addOption($option);
        $this->assertFalse($q->isMultiAnswer());
        
        $q->addOption($option);
        $this->assertTrue($q->isMultiAnswer());
     }
    
    public function getAnswerCount(){
        
        
    }
}