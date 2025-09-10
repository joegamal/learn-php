<?php

/**
 * this is how to have an input from cli in php
 */
//$name = readline();
//echo $name . PHP_EOL;


//some data structures in php

//lifo
$stack = new SplStack();

$stack->push('Gamal');
$stack->push('yusuf');


foreach($stack as $elem=>$name) {
    echo $name . PHP_EOL;
}
echo "\n";


//fifo
$queue = new SplQueue();

$queue->push('yusuf');
$queue->push('Gamal');

foreach($queue as $q=>$elem) {
    echo $elem . PHP_EOL;
}


//we can declare a variable without assigning it in php
$linked_linst;

$linked_linst = 5;

echo $linked_linst . PHP_EOL;

