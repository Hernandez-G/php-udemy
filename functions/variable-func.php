<?php


function addTwoNumbers() {
    global $d; // calling global allows variables to be used inside function
    $a = 5;
    $b = 10;
    $c = $a + $b + $d;

    echo $c;
}

$d = 20;
addTwoNumbers();
// echo $a; -- cannot be read, outside of function