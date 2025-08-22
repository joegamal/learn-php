<?php

class Example
{
    function fun(): string { return "example"; }
}

class MiniExample extends Example
{
    //this is abstraction in php
}

$obj = new MiniExample();

echo $obj->fun() . PHP_EOL;