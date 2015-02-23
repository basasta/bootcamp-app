<?php

class DB 
{
    private function __construct(){
        
    }
    private static $instance = false;
    
    static public function getInstance(){
       
        if(self::$instance === false){
            self::$instance = new self;
        }
        
        self::$instance = new self;
        self::$instance->x = rand();
        return self::$instance;
        /*$instance = new self; //new self = new DB
        $instance->x = rand(); //random number creation
        return $instance;*/
    }
}
var_dump(DB::getInstance());
var_dump(DB::getInstance());

