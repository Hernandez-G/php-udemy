<?php 

$cities = ["London", "Paris"];

print_r($cities);
// ads to the end of arr
array_push($cities, "Brisbane", "Sydney");

print_r($cities);

// ads to the beginning of arr
array_unshift($cities, "Dublin", "Amsterdam");

print_r($cities);