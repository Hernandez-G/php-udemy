<?php

// remove items from the end of an arr
$cities = ["london", "paris", "Brisbane", "Berlin"];

$lastCity = array_pop($cities);

echo "<br>";

echo $lastCity;


print_r($cities);


// remove items from the beginning of arr
$firstCity = array_shift($cities);

echo $firstCity;
echo "<br>";

print_r($cities);
