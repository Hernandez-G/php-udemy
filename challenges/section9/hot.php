<?php
// create an array to store values

$temp = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6];
$sumTemp = array_sum($temp);
$tempCount = count($temp);



// average daily temperature
echo "<h5> Pt1</h5>";

echo "the sum of the temp is $sumTemp";
echo "<br>";
echo "the total temp count is $tempCount";

$avr = round($sumTemp / $tempCount, 2);

echo "<br>";
echo "the average temperature is $avr&deg C";


echo "<br>";
echo "<h5> Pt2</h5>";

sort($temp);
$lowestTemp = array_slice($temp, 0, 5);
$lowestTemp = implode(", ", $lowestTemp);


echo "<br>";
echo $lowestTemp;

$highestTemp = array_slice($temp, 0, -5);
$highestTemp = implode(", ", $highestTemp);

echo "<br>";
echo $highestTemp;

