<?php

class User 
{
    public $a = 5;

    function test(): string
    {
        return "hello from parent";
    }

    function forParent(): string 
    {
        return "from parent";
    }

}

class Child extends User 
{
    public $a = 10;

    function test(): string
    {
        return "hello from child";
    }
}


/**
 * takes both the same mehtods and probrties between 
 * parent ans child from the child.
 */


$obj = new Child();  //takes the properties from the class of the constructor


echo $obj->a . PHP_EOL;

echo $obj->test() . PHP_EOL;

echo $obj->forParent() . PHP_EOL; //call the inherited method from the child 


