<?php

class main
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
