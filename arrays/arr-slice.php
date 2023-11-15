<?php

// removes 5 letters from the beginning 
$letters = ["a", "b", "c", "d", "e", "f", "g", "h"];

$results = array_slice($letters, 5);


print_r($results);

// removes the end of 5 items
$results = array_slice($letters, 0, 5);

print_r($results);

$results = array_slice($letters, -5, 5);
print_r($results);