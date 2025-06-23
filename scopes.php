<?php

$a = 5;
$b = 7;

function sum() {
    global $a, $b; //fetch from global
    return $a + $b;
}



