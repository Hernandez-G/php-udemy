<?php 

$radius = 5;

$result = pi() * pow($radius, 2);

echo "<p> Area of circle</p>";
echo $result;
echo "<br>";

$result = round($result, 2);

echo "<p> Area with decimal with two decimal places</p>";
echo "<br>" . $result;