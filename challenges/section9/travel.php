<?php

$string = "London, Paris, Amsterdam, New York, Berlin, Brisbane";
$cities = explode(", ", $string);
sort($cities);

echo "<ol>";
foreach($cities as $city) {
    
    echo "<li> $city </li>";
    
}
echo "</ol>";

$newArr = array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");
echo "<ol>";
foreach($cities as $city) {
    
    echo "<li> $city </li>";
    
}
echo "</ol>";