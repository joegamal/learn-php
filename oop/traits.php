<?php

namespace Examples;

trait manyFunctions 
{
    function fun(): string
    {
        return "hello from fun";
    }

    function fn(): string
    {
        return "hello from fn";
    }
}


class Message
{
    use manyFunctions;
}

$obj = new Message();

echo $obj->fun() . PHP_EOL;