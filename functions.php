<?php

/**
 * function types in php 
 *  
 * normal function style
 * 
 * arrow function 
 * 
 * functions in php is are first class cetizens
 * 1- it can be passed as a parameter using callable keyword
 * 2- it can be returned from another functions
 * 3- functions in php can return more than one thing 
 ** functions also can be hold in variables
 *
 * pass by refernece and pass by value
 */

//normal function style
function normal_function(){
    echo "normal function\n";
}
##############################################

//arrow function style
//this function format prints directly
$arrow_function = fn() => "arrow function style\n";

##############################################
//passing functions as parameters
function parameter_functio(){
    echo "this is a paramater function\n";
}

function take_parameter(callable $fun){
    echo $fun();
}

//implemented

//you pass the paremeter function name as a string
take_parameter('parameter_functio');



//You can return a function from another function in PHP by returning an anonymous function or an arrow function
function return_function(){
    //note that the inner function must contain a return statement
    //or it can echo something but it will do it directly
    return function(){ return "hello from double returned\n";};
}


//function that reutrn more than one thing
function multi_return(){
    return ["string here", 50, fn()=>"inner"];
}


//destructing the function the old way
list($str, $num, $func) = multi_return();

//we can destruct by the modern syntax
[$str, $num, $func] = multi_return();

echo $str;      // Outputs: string here
echo $num;      // Outputs: 50
echo $func();   // Outputs: inner




//the variables in php defualt is passed by value
//you can pass by vlaue but this will make another copy of the variable 
//and cost more memory.
//the passing by refrence affects the original variable if the passed one chaned
//inside the function
