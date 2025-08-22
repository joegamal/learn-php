<?php


class ParentClasss
{
    function exapmle(): string
    {
        return "example from parent";
    }

    //php doesnot support overloading
}

class ChildClass extends ParentClasss
{
    //this is overriding the runtime polymorphism
    function exapmle(): string
    {
        return "example from child";
    }
}