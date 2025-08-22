<?php

//the abstract class must be in CamelCase
abstract class ParentClass
{
    //also the method name must be in camelCase
    abstract function sayHello(): string;
}


interface InterfaceExample
{
    function mustBeImplemented(): string;
}


// there is no multiple extends in php like java
// there is multiple implements like java
class Child extends ParentClass implements InterfaceExample
{
    //function must be implemented
    function sayHello(): string
    {
        return "this is the implementation from class";
    }

    function mustBeImplemented(): string
    {
        return "this is the implementation from the interface";
    }
}