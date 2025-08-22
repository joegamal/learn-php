<?php

class Main //class name in php must be on CamelCase
{
    //access modifiers in php are the same as java
    public $pub;
    private $priv;
    protected $prot;


    /**
     * class methods inside class can have types
     * also the parameters can have a type
     */
    public function hello(string $name, int $num = 5):void //type void
    {
        echo "Hello $name! \n";
    }

    //static keyword in php means the method can be accessed without instantiating the class

    public static function staticFun():void
    {
        echo "static fun\n";
    }

    /**
     * destructor in php is called at the end of lifetime of the object
     */

    function __destruct()
    {
        echo "the object is freed from the memory and destructor is applied\n";
        print "Destroying " . __CLASS__ . "\n";
    }


}


$obj = new main();

$obj->hello("yusuf");

//calling the static method from outside
main::staticFun();



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
